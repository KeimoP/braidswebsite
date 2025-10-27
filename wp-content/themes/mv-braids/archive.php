<?php
/**
 * The template for displaying archive pages
 * Redirects to homepage - no blog archives
 *
 * @package MV_Braids
 */

// Redirect all archive pages to homepage
wp_redirect(home_url('/'));
exit;
