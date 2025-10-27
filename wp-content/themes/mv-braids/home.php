<?php
/**
 * Template for blog posts page
 * Redirects to homepage - no blog
 *
 * @package MV_Braids
 */

// Redirect blog page to homepage
wp_redirect(home_url('/'));
exit;
