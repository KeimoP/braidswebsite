<?php
/**
 * The template for displaying all single posts
 * Redirects to homepage - no blog posts
 * 
 * @package MV_Braids
 */

// Redirect all single post pages to homepage
wp_redirect(home_url('/'));
exit;
