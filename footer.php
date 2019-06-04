        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="copyright">&copy; <?php echo date("Y"); ?> - Piratenpartei</p>
                    </div>
                    <div class="col-lg-8">
                        <nav class="footer-nav">
                            <ul>
                                <?php 
                                    wp_nav_menu(array( 
                                        'theme_location' => 'footer-menu', 
                                        'container'  => '',
                                        'items_wrap' => '%3$s'
                                        ) 
                                    );
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>