<?php
// if htaccess is enabled in your local machine. set value of HTACCESS_ENABLED true in config.ing.php
// include new pages in if condition if HTACCESS_ENABLED is enabled else include new pages in else condition

if ($HTACCESS_ENABLED) {

    $pages_array = array(
        'index' => array(
            'slug' => 'index',
            'title' => 'Home',
        ),
        'about' => array(
            'slug' => 'about',
            'title' => 'About',
        ),
        'login' => array(
            'slug' => 'login',
            'title' => 'Login',
        ),
        'register' => array(
            'slug' => 'register',
            'title' => 'Register',
        ),
        'dashboard' => array(
            'slug' => 'dashboard',
            'title' => 'Dashboard',
        ),
    );
} else {

    $pages_array = array(
        'index' => array(
            'slug' => 'index.php',
            'title' => 'Home',
        ),
        'about' => array(
            'slug' => 'about.php',
            'title' => 'About',
        ),
        'login' => array(
            'slug' => 'login.php',
            'title' => 'Login',
        ),
        'register' => array(
            'slug' => 'register.php',
            'title' => 'Register',
        ),
        'dashboard' => array(
            'slug' => 'dashboard.php',
            'title' => 'Dashboard',
        ),
    );
}
