<?php
/**
 * Template for displaying search forms
 * 
 * @package MV_Braids
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php _e('Buscar:', 'mv-braids'); ?></span>
        <input type="search" 
               class="search-field form-input" 
               placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder', 'mv-braids'); ?>" 
               value="<?php echo get_search_query(); ?>" 
               name="s">
    </label>
    <button type="submit" class="search-submit btn btn-primary">
        <i class="fas fa-search"></i>
        <span class="screen-reader-text"><?php _e('Buscar', 'mv-braids'); ?></span>
    </button>
</form>

<style>
.search-form {
    display: flex;
    gap: var(--spacing-xs);
    max-width: 100%;
}

.search-form label {
    flex: 1;
    margin: 0;
}

.search-form .search-field {
    width: 100%;
}

.search-form .search-submit {
    padding: 0.75rem 1.5rem;
    white-space: nowrap;
}
</style>
