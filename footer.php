        <footer>
            <div id="footerBanner"></div>
            <div class="contentWrapper">
                <div id="copyright">
                    BellaVita LLC, 2013, All rights reserved
                </div>
                <div id="socialFooter"></div>
            </div>
        </footer>
        <?php
	        /* Always have wp_footer() just before the closing </body>
	         * tag of your theme, or you will break many plugins, which
	         * generally use this hook to reference JavaScript files.
	         */

	        wp_footer();
        ?>        
    </body>
</html>
