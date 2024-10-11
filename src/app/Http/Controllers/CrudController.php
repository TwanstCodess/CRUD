<?php

namespace Backpack\CRUD\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\Contracts\CrudControllerContract;
use Backpack\CRUD\app\Library\Attributes\DeprecatedIgnoreOnRuntime;
use Backpack\CRUD\Backpack;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

/**
 * Class CrudController.
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 * @property array $data
 */
class CrudController extends Controller implements CrudControllerContract
{
    use DispatchesJobs, ValidatesRequests;

    //public $crud;

    public $data = [];

    public function __construct()
    {
        // ---------------------------
        // Create the CrudPanel object
        // ---------------------------
        // Used by developers inside their ProductCrudControllers as
        // $this->crud or using the CRUD facade.
        //
        // It's done inside a middleware closure in order to have
        // the complete request inside the CrudPanel object.
        $this->middleware(function ($request, $next) {
            if (! Backpack::hasCrudController(get_class($this))) {
                $this->initializeCrud($request);
            }

            return $next($request);
        });
    }

    public function initializeCrud($request, $operation = null)
    {
        Backpack::crud($this)->setRequest($request);
        $this->setupDefaults();
        $this->setup();
        $this->setupConfigurationForCurrentOperation($operation);
    }

    /**
     * Allow developers to set their configuration options for a CrudPanel.
     */
    public function setup()
    {
    }

    /**
     * Load routes for all operations.
     * Allow developers to load extra routes by creating a method that looks like setupOperationNameRoutes.
     *
     * @param  string  $segment  Name of the current entity (singular).
     * @param  string  $routeName  Route name prefix (ends with .).
     * @param  string  $controller  Name of the current controller.
     */
    #[DeprecatedIgnoreOnRuntime('we dont call this method anymore unless you had it overwritten in your CrudController')]
    public function setupRoutes($segment, $routeName, $controller)
    {
        preg_match_all('/(?<=^|;)setup([^;]+?)Routes(;|$)/', implode(';', get_class_methods($this)), $matches);

        if (count($matches[1])) {
            foreach ($matches[1] as $methodName) {
                $this->{'setup'.$methodName.'Routes'}($segment, $routeName, $controller);
            }
        }
    }

    /**
     * Load defaults for all operations.
     * Allow developers to insert default settings by creating a method
     * that looks like setupOperationNameDefaults.
     */
    protected function setupDefaults()
    {
        preg_match_all('/(?<=^|;)setup([^;]+?)Defaults(;|$)/', implode(';', get_class_methods($this)), $matches);

        if (count($matches[1])) {
            foreach ($matches[1] as $methodName) {
                $this->{'setup'.$methodName.'Defaults'}();
            }
        }
    }

    /**
     * Load configurations for the current operation.
     *
     * Allow developers to insert default settings by creating a method
     * that looks like setupOperationNameOperation (aka setupXxxOperation).
     */
    protected function setupConfigurationForCurrentOperation(?string $operation = null)
    {
        $operationName = $operation ?? $this->crud->getCurrentOperation();
        if (! $operationName) {
            return;
        }

        $setupClassName = 'setup'.Str::studly($operationName).'Operation';

        /*
         * FIRST, run all Operation Closures for this operation.
         *
         * It's preferred for this to closures first, because
         * (1) setup() is usually higher in a controller than any other method, so it's more intuitive,
         * since the first thing you write is the first thing that is being run;
         * (2) operations use operation closures themselves, inside their setupXxxDefaults(), and
         * you'd like the defaults to be applied before anything you write. That way, anything you
         * write is done after the default, so you can remove default settings, etc;
         */
        $this->crud->applyConfigurationFromSettings($operationName);

        /*
         * THEN, run the corresponding setupXxxOperation if it exists.
         */
        if (method_exists($this, $setupClassName)) {
            $this->{$setupClassName}();
        }
    }

    public function __get($name)
    {
        if ($name == 'crud') {
            return Backpack::getControllerCrud(get_class($this));
        }

        return $this->{$name};
    }

}
