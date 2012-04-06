<?php
/**
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * @Author Touka Tachibana (original by the WordPress team)
 */

/**
 * remove "<meta name="generator" content="WordPress X.X.X" />"
 */
remove_action('wp_head', 'wp_generator');

/**
 * if you do not wish to deliver "wlwmanifest", you leave this uncommented.(remove // )
 */
//remove_action('wp_head', 'wlwmanifest_link');

/**
 * if you do not wish to deliver feeds, you leave　these uncommented.
 */

//remove_action('wp_head', 'rsd_link');
//remove_action('wp_head', 'feed_links', 2);
//remove_action('wp_head', 'feed_links_extra', 3);

/** RDF/RSS 1.0 ( http://example.com/feed/rdf/ ) */
//remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);

/** RSS 0.92 ( http://example.com/feed/rss/ ) */
//remove_action('do_feed_rss', 'do_feed_rss', 10, 1);

/** RSS 2.0 ( http://example.com/feed/ ) */
//remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);

/** Atom ( http://example.com/feed/atom/ ) */
//remove_action('do_feed_atom', 'do_feed_atom', 10, 1);

//automatic_feed_links(false);






