        </div> <!-- Contenido -->

        <footer class="site-footer" role="contentinfo">

                <div class="container">
                        <nav id="footer-navigation" class="footer-navigation">
                                <?php wp_nav_menu( array(
                                        'theme_location' => 'menu_principal'
                                ))?>
                        </nav>
                </div>  <!-- .container  -->
                <div class="clear"></div>
                <div class="copyright">
                        <p>Visita Toronto <?php echo date('Y'); ?></p>
                </div>
        </footer>
   </div> <!-- #page  -->
   <?php wp_footer(); ?>
</body>
</html>