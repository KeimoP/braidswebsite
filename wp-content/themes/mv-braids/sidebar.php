<?php
/**
 * The sidebar containing the main widget area
 * 
 * @package MV_Braids
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area" style="padding: var(--spacing-lg); background: var(--cream); border-radius: var(--radius-lg); margin-top: var(--spacing-lg);">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
