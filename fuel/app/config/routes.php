<?php
return array(
	'_root_'  => 'front/index',  // The default route
	'_404_'   => '404',    // The main 404 route
	'contact' => 'front/contact',
        'articles' => 'front/articles',
        'article/(:any)/(:any)' => 'front/article/$1/$2',
        'cvtheque' => 'front/cvtheque',
        'loginRecruteur' => 'front/loginRecruteur',
        'loginCandidat' => 'front/loginCandidat',
        'admin' => 'admin/admin/index',
        'admin/index' => 'admin/admin/index',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);