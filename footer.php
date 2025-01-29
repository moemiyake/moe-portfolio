    <footer>
        <!-- <ul class="gnav-list">
            <li class="gnav-item"><a href="<?php echo home_url(); ?>">Top</a></li>
            <li class="gnav-item"><a href="#works">Works</a></li>
            <li class="gnav-item"><a href="about.html">About</a></li>
        </ul> -->
        <?php 
            $args = [
                'menu' => 'global-navigation',
                'menu_class' => 'gnav-list',
                'container' => false,
            ];
            wp_nav_menu($args);
            ?>
        <small>&copy; 2025 MOE MIYAKE</small>
    </footer>

    <?php wp_footer(); ?>
</body>


<!-- jQuery -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.js"></script>

<!-- JS -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>


</html>