<?php
/**
 * Displays footer site info
 *
 * @package Bookstore Library
 * @subpackage bookstore_library
 */

?>
<div class="site-info">
    <div class="container">
        <p><?php bookstore_library_credit();?> <?php echo esc_html(get_theme_mod('author_writer_footer_text',__('By Themespride','bookstore-library'))); ?></p>
    </div>
</div>