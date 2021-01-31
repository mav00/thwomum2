<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'          => esc_html__( 'Sidebar', 'thwomum2' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
?>