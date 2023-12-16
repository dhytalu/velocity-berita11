<?php

/**
 * The template for displaying search forms
 *
 * @package justg
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<form method="get" class="rounded px-2 py-1" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="s"><?php esc_html_e('Search', 'justg'); ?></label>
    <div class="input-group">
        <input class="field form-control border-0 bg-transparent rounded-start p-1" id="s" name="s" type="text" placeholder="Cari Produk" value="<?php the_search_query(); ?>" required>
        <span class="input-group-append rounded-end">
            <button type="submit" class="submit btn h-100 p-0 px-2 btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </span>
    </div>
</form>