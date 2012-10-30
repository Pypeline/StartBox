<?php
/**
 * StartBox Deprecated Functions
 *
 * These are functions that have either been replaced or removed.
 *
 * @package StartBox
 * @subpackage Functions
 */

// Located in header.php
function sb_title() { _deprecated_function( __FUNCTION__, '2.6', 'wp_title' ); wp_title(); } // The site title
function sb_before() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before\' )' ); do_action('before'); } // the very first thing inside <body>
function sb_before_header() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_header\' )' ); do_action('before_header'); } // inside div#wrap, before div#header
function sb_header() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'header\' )' ); do_action('header'); } // inside div#header, before any content
function sb_after_header() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_header\' )' ); do_action('after_header'); } // inside div#wrap, after div#header
function sb_before_container() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_container\' )' ); do_action('before_container'); } // inside div#container_wrap, before div#container

// Located in front-page.php
function sb_before_featured() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_featured\' )' ); do_action('before_featured'); } // Located just after before_content
function sb_featured() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'featured\' )' ); do_action('featured'); } // Located just after sb_before_featured
function sb_after_featured() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_featured\' )' ); do_action('after_featured'); } // Located just after sb_featured
function sb_home() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'home\' )' ); do_action('home'); } // Located just after sb_after_featured

// Located in 404.php, archive.php, attachment.php, author.php, category.php, index.php, page.php and all other page templates, search.php, single.php, tag.php
function sb_before_content() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_content\' )' ); do_action('before_content'); } // Just before the content
function sb_page_title() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'page_title\' )' ); do_action('page_title'); } // The Page Title, appears immediately after before_content
function sb_after_content() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_content\' )' ); do_action('after_content');} // Just after the content

// Located in 404.php
function sb_404() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'404\' )' ); do_action('404'); } // Inside div.post, only on 404 page

// Located in loop.php and single.php
function sb_before_post() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_post\' )' ); do_action('before_post'); } // Before div.post
function sb_before_post_content() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_post_content\' )' ); do_action('before_post_content'); } // Inside div.post, after .entry-header, before .entry-content
function sb_post_header() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'post_header\' )' ); do_action('post_header' ); } // Inside div.entry-meta
function sb_post_footer() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'post_footer\' )' ); do_action('post_footer' ); } // Inside div.entry-footer
function sb_after_post_content() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_post_content\' )' ); do_action('after_post_content'); } // Inside div.post, after .entry-content, before .entry-footer
function sb_after_post() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_post\' )' ); do_action('after_post'); } // Inside div.post, after .entry-content, before .entry-footer

// Located in sidebar.php
function sb_between_primary_and_secondary_widgets() { _deprecated_function( __FUNCTION__, '2.5', 'do_action( \'after_primary_aside_widgets\' )' ); do_action('between_primary_and_secondary_widgets');}
function sb_no_widgets() { _deprecated_function( __FUNCTION__, '2.6', 'specific widget location hooks' ); }

// Located in sidebar-footer.php
function sb_before_footer_widgets() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_footer_widgets\' )' ); do_action('before_footer_widgets'); } // inside div#footer, before div#footer_sidebar
function sb_after_footer_widgets() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_footer_widgets\' )' ); do_action('after_footer_widgets'); } // inside div#footer, after div#footer_sidebar
function sb_between_footer_widgets() { _deprecated_function( __FUNCTION__, '2.6', 'other footer widget hooks' ); }

// Located in footer.php
function sb_after_container() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_container\' )' ); do_action('after_container'); } // inside div#container_wrap, after div#container
function sb_between_content_and_footer() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'between_content_and_footer\' )' ); do_action('between_content_and_footer'); } // after div#wrap, before div#footer_wrap
function sb_before_footer() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'before_footer\' )' ); do_action('before_footer'); } // inside div#footer_wrap, before div#footer
function sb_footer() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'footer\' )' ); do_action('footer'); } // inside div#footer after div#footer_sidebar
function sb_after_footer() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after_footer\' )' ); do_action('after_footer'); } // inside dive#footer_wrap, after div#footer
function sb_after() { _deprecated_function( __FUNCTION__, '2.6', 'do_action( \'after\' )' ); do_action('after'); } // the very last thing before </body>


// Map all of our legacy hooks to our new standard hooks
// map_action( $action_to_map, $to_this_action );
map_action( 'sb_before', 'before' );
map_action( 'sb_before_header', 'before_header' );
map_action( 'sb_header', 'header' );
map_action( 'sb_after_header', 'after_header' );
map_action( 'sb_before_container', 'before_container' );
map_action( 'sb_before_featured', 'before_featured' );
map_action( 'sb_featured', 'featured' );
map_action( 'sb_after_featured', 'after_featured' );
map_action( 'sb_home', 'home' );
map_action( 'sb_before_content', 'before_content' );
map_action( 'sb_page_title', 'page_title' );
map_action( 'sb_after_content', 'after_content' );
map_action( 'sb_404', '404' );
map_action( 'sb_before_post', 'before_post' );
map_action( 'sb_before_post_content', 'before_post_content' );
map_action( 'sb_post_header', 'post_header' );
map_action( 'sb_post_footer', 'post_footer' );
map_action( 'sb_after_post_content', 'after_post_content' );
map_action( 'sb_after_post', 'after_post' );
map_action( 'sb_between_primary_and_secondary_widgets', 'between_primary_and_secondary_widgets' );
map_action( 'sb_no_widgets', 'no_widgets' );
map_action( 'sb_before_footer_widgets', 'before_footer_widgets' );
map_action( 'sb_after_footer_widgets', 'after_footer_widgets' );
map_action( 'sb_between_footer_widgets', 'between_footer_widgets' );
map_action( 'sb_after_container', 'after_container' );
map_action( 'sb_between_content_and_footer', 'between_content_and_footer' );
map_action( 'sb_before_footer', 'before_footer' );
map_action( 'sb_footer', 'footer' );
map_action( 'sb_after_footer', 'after_footer' );
map_action( 'sb_after', 'after' );