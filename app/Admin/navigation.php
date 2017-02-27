<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\c8data\Models\Castom_page::class)->setTitle('castom')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Castom Page')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\c8data\User::class);
// });
//
// // or
//
AdminSection::addMenuPage(\c8data\Models\Castom_page::class)->setTitle('Rout')->setUrl(route('admin.dashboard'));


$ids = \c8data\Models\Castom_page::all();

foreach ($ids as $id){
    $name = $id->url;

    $n = [
        'title' => $name,
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ];
};

return [
$n,
//    [
//        'title' => 'Dashboard',
//        'icon'  => 'fa fa-dashboard',
//        'url'   => route('admin.dashboard'),
//    ],
//
//    [
//        'title' => 'Information',
//        'icon'  => 'fa fa-exclamation-circle',
//        'url'   => route('admin.information'),
//    ],

    // Examples
//     [
//        'title' => 'Content',
//        'pages' => [

     //       \c8data\User::class,

    //        // or
    //
//            (new Page(\c8data\User::class))
//                ->setPriority(100)
//                ->setIcon('fa fa-user')
//                ->setUrl('users')
//                ->setAccessLogic(function (Page $page) {
//                    return auth()->user()->isSuperAdmin();
//                }),
//    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \c8data\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \c8data\Blog::class
	//		      ));
    //
	//		      $page->addPage(\c8data\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
//        ]
//     ]
];