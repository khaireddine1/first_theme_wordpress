    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav>
                        <?php
                        footer_menu();
                        ?>
                    </nav>
                </div>
                <div class="col-sm-12">
                    <h5 class="font-weight-light text-center">
                        <span class="mdi mdi-copyright"></span>
                        All right reserved to <?php bloginfo("name") ?> 2021
                    </h5>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>