<?php

return array(

    'site_config' => array(
        'site_name'   => 'ECDO',
        'title'       => 'Backend for Laravel 4',
        'description' => 'Laravel 4 Admin Panel'
    ),

    //menu 2 type are available single or dropdown and it must be a route
    'menu' => array(
        'Dashboard' => array('type' => 'single', 'route' => 'admin.home'),
        'Users'     => array('type' => 'dropdown', 'links' => array(
            'Manage Users' => array('route' => 'admin.users.index'),
            'Groups'       => array('route' => 'admin.groups.index'),
            'Permissions'  => array('route' => 'admin.permissions.index')
        )),
    ),

    'views' => array(

        'layout' => 'backend::layouts',

        'dashboard' => 'backend::dashboard.index',
        'login'     => 'backend::dashboard.login',
        'register'  => 'backend::dashboard.register',

        // Users views
        'users_index'      => 'backend::users.index',
        'users_show'       => 'backend::users.show',
        'users_edit'       => 'backend::users.edit',
        'users_create'     => 'backend::users.create',
        'users_permission' => 'backend::users.permission',

        //Groups Views
        'groups_index'      => 'backend::groups.index',
        'groups_create'     => 'backend::groups.create',
        'groups_edit'       => 'backend::groups.edit',
        'groups_permission' => 'backend::groups.permission',

        //Permissions Views
        'permissions_index'  => 'backend::permissions.index',
        'permissions_edit'   => 'backend::permissions.edit',
        'permissions_create' => 'backend::permissions.create',

        //Throttling Views
        'throttle_status' => 'backend::throttle.index',
    ),

    'validation' => array(
        'user'       => 'Ecdo\Backend\Services\Validators\Users\Validator',
        'permission' => 'Ecdo\Backend\Services\Validators\Permissions\Validator',
    ),
);
