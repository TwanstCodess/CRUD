<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'پاشەکەوت و دروستکردنی نوێ',
    'save_action_save_and_edit' => 'پاشەکەوت و دەستکاری',
    'save_action_save_and_back' => 'پاشەکەوت و گەڕانەوە',
    'save_action_save_and_preview' => 'پاشەکەوت و پێشبینین',
    'save_action_changed_notification' => 'بەرزبوونی هەڵبژاردنەکانی پاش پاشەکەوت گۆڕا.',

    // Create form
    'add' => 'زیادکردن',
    'back_to_all' => 'بەرواری هەموو',
    'cancel' => 'پاشگەزبوونەوە',
    'add_a_new' => 'زیادکردنی نوێ',

    // Edit form
    'edit' => 'دەستکاری',
    'save' => 'پاشەکەوتکردن',

    // Translatable models
    'edit_translations' => 'دەستکاریکردنی وەرگێڕیەکان',
    'language' => 'زمان',

    // CRUD table view
    'all' => 'هەموو',
    'in_the_database' => 'لە بنکەدراوە',
    'list' => 'لیست',
    'reset' => 'ڕێکخستنی نوێ',
    'actions' => 'کردارەکان',
    'preview' => 'پێشبینین',
    'delete' => 'سڕینەوە',
    'admin' => 'بەڕێوەبەر',
    'details_row' => 'ڕیزبەندەی وردەکاری. دەستکاریکردن.',
    'details_row_loading_error' => 'هەڵەیەک ڕوویدا لە کاتی بارکردنی وردەکاریەکان. تکایە دووبارە هەوڵبدەوە!',
    'clone' => 'پەیکەرکردن',
    'clone_success' => '<strong>پەیکەرکرا</strong><br>پەیکەری نوێ درووست کرا.',
    'clone_failure' => '<strong>شکاوتی پەیکەرکردن</strong><br>پەیکەرکراو درووست نەبوو.',

    // Confirmation messages and bubbles
    'delete_confirm' => 'دڵنیایت کە دەتەوێت ئەم بەشە بسڕیتەوە؟',
    'delete_confirmation_title' => 'سڕاوەتەوە',
    'delete_confirmation_message' => 'بەشەکە بەسەرکەوتووی سڕاوەتەوە.',
    'delete_confirmation_not_title' => 'هەڵەی سڕینەوە',
    'delete_confirmation_not_message' => 'بەشەکە نەسڕاوەتەوە.',
    'delete_confirmation_not_deleted_title' => 'نەسڕاوەتەوە',
    'delete_confirmation_not_deleted_message' => 'هیچ کارەکەی کردووە.',

    // Bulk actions
    'bulk_no_entries_selected_title' => 'هیچ بەشێک نەهەڵبژێراوە.',
    'bulk_no_entries_selected_message' => 'تکایە بەشەکان هەڵبژێرە!',

    // Bulk delete
    'bulk_delete_are_you_sure' => 'دڵنیایت کە دەتەوێت ئەمە بسڕیتەوە :number ؟',
    'bulk_delete_sucess_title' => 'بەشەکان سڕاونەتەوە',
    'bulk_delete_sucess_message' => ' بەشەکان سڕاونەتەوە.',
    'bulk_delete_error_title' => 'شکاوتی سڕینەوە',
    'bulk_delete_error_message' => 'بەشێک یان زیاتر نەسڕاونەتەوە.',

    // Bulk clone
    'bulk_clone_are_you_sure' => 'دڵنیایت کە دەتەوێت ئەمە بکەیتەوە :number ؟',
    'bulk_clone_sucess_title' => 'پەیکەرکردن سەرکەوتوو بوو',
    'bulk_clone_sucess_message' => ' پەیکەرکراوەکان.',
    'bulk_clone_error_title' => 'شکاوتی پەیکەرکردن',
    'bulk_clone_error_message' => 'نەتوانرا ئەم بەشەکە پەیکەر بکرێت.',

    // Ajax errors
    'ajax_error_title' => 'هەڵە',
    'ajax_error_text' => 'بارکردنی پەڕەکە شکاوەتەوە. تکایە نوێبکەرەوە!',

    // DataTables translation
    'emptyTable' => 'هیچ داتایەک نییە.',
    'info' => 'گۆڕانکاری لە _START_ بۆ _END_ لەسەر _TOTAL_ بەش.',
    'infoEmpty' => 'بەش نییە',
    'infoFiltered' => '(سەرفەکراوە لە _MAX_ بەشەکان)',
    'infoPostFix' => '.',
    'thousands' => ',',
    'lengthMenu' => '_MENU_ بەش هەردوو پەڕە',
    'loadingRecords' => 'بارکردن...',
    'processing' => 'پڕۆسەی کاری...',
    'search' => 'گەڕان',
    'zeroRecords' => 'بەش نییە',
    'paginate' => [
        'first' => 'یەکەم',
        'last' => 'دوایین',
        'next' => 'دواتر',
        'previous' => 'پێشتر',
    ],
    'aria' => [
        'sortAscending' => ': ڕیزکردنی بەرزکردنەوە',
        'sortDescending' => ': ڕیزکردنی کەمکردنەوە',
    ],
    'export' => [
        'export' => 'ھەرایەتی',
        'copy' => 'کۆپی',
        'excel' => 'ئێکسل',
        'csv' => 'CSV',
        'pdf' => 'PDF',
        'print' => 'پرینت',
        'column_visibility' => 'دیاریکردنی ستوونەکان',
    ],

    // global crud - errors
    'unauthorized_access' => 'دەسەڵاتە نەکراوە. ناتوانیت بەشەکان ببینیت.',
    'please_fix' => 'تکایە هەڵەکانی خوارەوە چاک بکە:',

    // global crud - success / error notification bubbles
    'insert_success' => 'بە سەرکەوتوویی زیادکرا.',
    'update_success' => 'دەستکاری بە سەرکەوتوویی بۆکردنەوە.',

    // CRUD reorder view
    'reorder' => 'سەرنووسینی نوێ',
    'reorder_text' => 'استفاده جۆر بۆ نووسین بۆ ڕیزکردن',
    'reorder_success_title' => 'تاقیکردنەوە',
    'reorder_success_message' => 'ڕیزکردن پاشەکەوتکرا.',
    'reorder_error_title' => 'هەڵە',
    'reorder_error_message' => 'پاشەکەوت نەکرا.',

    // CRUD yes/no
    'yes' => 'بەڵێ',
    'no' => 'نەخێر',

    // CRUD filters navbar view
    'filters' => 'فلتەرانەکان',
    'toggle_filters' => 'فلتەرانەکان چالاکبکە',
    'remove_filters' => 'سڕینەوەی فلتەرانەکان',

    // Fields
    'browse_uploads' => 'سەردانی بارکراوەکان',
    'select_all' => 'دیاریکردنی هەموو',
    'select_files' => 'هەڵبژاردنی فایلەکان',
    'select_file' => 'هەڵبژاردنی فایل',
    'clear' => 'پاککردنەوە',
    'page_link' => 'بەستەری پەڕە',
    'page_link_placeholder' => 'http://example.com/sajat-oldal',
    'internal_link' => 'بەستەری ناوخۆیی',
    'internal_link_placeholder' => 'بەستەری ناوخۆیی. نمونە: "admin/oldal"',
    'external_link' => 'بەستەری دەرەکی',
    'choose_file' => 'فایل هەڵبژێرە',
    'new_item' => 'بەشی نوێ',
    'select_entry' => 'بەش هەڵبژێرە',
    'select_entries' => 'بەشەکان هەڵبژێرە',

    //Table field
    'table_cant_add' => 'بەشی نوێ زیاد ناکرێت :entity.',
    'table_max_reached' => 'گەیشتووی بەرزترین ژمارە :max بەش.',

    // File manager
    'file_manager' => 'بەڕێوبەری فایلەکان',

    // InlineCreateOperation
    'related_entry_created_success' => 'بەشەکە درووست کراوە و هەڵبژێرکرا.',
    'related_entry_created_error' => 'نەتوانرا بەشەکە درووست بکرێت.',

    /*
    |--------------------------------------------------------------------------
    | Add Language Kurdish Sorani By Twanst Codes
    | gitHub: https://github.com/TwanstCodess
    |--------------------------------------------------------------------------
    */
];
