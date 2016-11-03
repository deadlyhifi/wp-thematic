<?php
add_filter('acf/settings/save_json', function() {
    return get_stylesheet_directory() . '/functions/acf-json';
});

// Load ACF JSON from new location set above to enable JSON syncing
add_filter('acf/settings/load_json', function($paths) {
    // remove original path (optional)
    // unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/functions/acf-json';

    // return
    return $paths;
});

// Hide menu if production
//if (ENV == 'production') {
//    add_filter('acf/settings/show_admin', '__return_false');
//}
