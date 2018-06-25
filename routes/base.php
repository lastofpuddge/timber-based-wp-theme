<?php

/* is homepage */
if (is_front_page()) :
    makeView('homeController@index', 'index');
endif;

/* custom post type category */
if (is_post_type_archive('test')) :
    makeView('categoryController@index', 'categories/category');
endif;

/* is single post type-page */
if (is_singular('zayavki')) :
    wp_redirect('/', 301);
endif;

/* is category */
if (is_category()) :
    makeView('categoryController@index', 'categories/category');
endif;

/* is single post type-page */
if (is_singular('test')) :
    makeView('postController@index', 'posts/post');
endif;

/* is single page */
if (is_single()) :
    makeView('postController@index', 'posts/post');
endif;

/* is page */
if (is_page()) :
    makeView('pageController@index', 'pages/page');
endif;

/* is 404 */
if (is_404()) :
    makeView('errorController@index', 'pages/404');
endif;
