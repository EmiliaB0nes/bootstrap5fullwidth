<footer class="container-fluid  titleseparationarea">
    <?php if (get_theme_mod('footer_enable')) : ?>
        <p class="text-center"><?php echo get_theme_mod('footer_copyright'); ?></p>
    <?php else : ?>
        <p class="text-center">&copy; <?php echo date("Y"); ?> - <?php bloginfo('name'); ?> &#40;<?php bloginfo('description'); ?>&#41;</p>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/sidebar.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/modalForm.min.js"></script>
</body>

</html>