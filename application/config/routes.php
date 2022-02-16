<?

return  [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],  
    
    'admin' => [
        'controller' => 'admin',
        'action' => 'stocks',
    ],
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/callback?code={code:\w+}&state={state:\w+}' => [
        'controller' => 'admin',
        'action' => 'callback',
    ],

    'admin/callback?' => [
        'controller' => 'admin',
        'action' => 'callback',
    ],
    'admin/change_status' => [
        'controller' => 'admin',
        'action' => 'change_status',
    ],

    'admin/done' => [
        'controller' => 'admin',
        'action' => 'done',
    ],
    'admin/fetch_image/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'fetch_image',
    ],
    'admin/domain' => [
        'controller' => 'admin',
        'action' => 'domain',
    ],
    'admin/archive/{opinion:\w+}' => [
        'controller' => 'admin',
        'action' => 'archive',
    ],
    'admin/to_archive/{opinion:\w+}/{key:\w+}/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'to_archive',
    ],
    'admin/table/{opinion:\w+}' => [
        'controller' => 'admin',
        'action' => 'table',
    ],
    'admin/step1' => [
        'controller' => 'admin',
        'action' => 'step1',
    ],
    'admin/edit/{opinion:\w+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/step2' => [
        'controller' => 'admin',
        'action' => 'step2',
    ],
    'admin/step3' => [
        'controller' => 'admin',
        'action' => 'step3',
    ],
    'admin/step4' => [
        'controller' => 'admin',
        'action' => 'step4',
    ],
    'admin/step1_langs' => [
        'controller' => 'admin',
        'action' => 'step1_langs',
    ],
    'admin/step2_langs' => [
        'controller' => 'admin',
        'action' => 'step2_langs',
    ],
    
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],  
    'admin/delete?opinion={opinion:\w+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],  
    
    'admin/delete' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],  
    

    //first page
    '{opinion:\w+}' => [
        'controller' => 'main',
        'action' => 'opinion',
    ],
    '{opinion:\w+}-{lang:\w+}' => [
        'controller' => 'main',
        'action' => 'opinion',
    ],

    //form
    '{opinion:\w+}/form' => [
        'controller' => 'main',
        'action' => 'form',
    ],
    '{opinion:\w+}-{lang:\w+}/form' => [
        'controller' => 'main',
        'action' => 'form',
    ],

    //product
    '{opinion:\w+}/product' => [
        'controller' => 'main',
        'action' => 'product',
    ],
    '{opinion:\w+}-{lang:\w+}/product' => [
        'controller' => 'main',
        'action' => 'product',
    ],

    //variate
    '{opinion:\w+}/variate' => [
        'controller' => 'main',
        'action' => 'variate',
    ],
    '{opinion:\w+}-{lang:\w+}/variate' => [
        'controller' => 'main',
        'action' => 'variate',
    ],

    //review
    '{opinion:\w+}/review/{star:\d+}' => [
        'controller' => 'main',
        'action' => 'review',
    ],
    '{opinion:\w+}-{lang:\w+}/review/{star:\d+}' => [
        'controller' => 'main',
        'action' => 'review',
    ],
    //thanks
    '{opinion:\w+}/thanks/{star:\d+}' => [
        'controller' => 'main',
        'action' => 'thanks',
    ],
    '{opinion:\w+}-{lang:\w+}/thanks/{star:\d+}' => [
        'controller' => 'main',
        'action' => 'thanks',
    ],

    
];