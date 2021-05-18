</div>

    <footer class="footer">
        <div class="footer__navigation-box">
        <nav class="footer-menu">
            <!-- <ul class="footer-menu__list">
                <li class="footer-menu__item"><a class="footer-menu__link" href="#">Kontakt</a></li>
                <li class="footer-menu__item"><a class="footer-menu__link" href="#">Polityka prywatności</a></li>
            </ul> -->
            <?php wp_nav_menu(array(
                'theme_location' => 'secondary_menu',
                'container'      => 'ul',
                'menu_class'     => 'footer-menu__list'
                )); 
            ?>
        </nav>
        <nav class="footer-social-menu">
            <ul class="footer-social-menu__list">
                <li class="footer-social-menu__item"><a href="https://www.facebook.com/poruszeni/" aria-label="Facebook"><i class="fab fa-facebook-square footer-social-menu__icon"></i></a></li>
                <li class="footer-social-menu__item"><a href="https://www.youtube.com/user/kulabwo/" aria-label="Youtube"><i class="fab fa-youtube-square footer-social-menu__icon"></i></a></li>
                <li class="footer-social-menu__item"><a href="https://www.strava.com/athletes/5099827" aria-label="Strava"><i class="fab fa-strava footer-social-menu__icon""></i></a></li>
            </ul>
        </nav>
        </div>
        
        <p class="footer__text">&copy; Arkadiusz Kulewicz, poruszeni.pl</p>
    </footer>
    <script id="dsq-count-scr" src="//poruszeni-pl.disqus.com/count.js" async></script>
    <?php wp_footer(); ?>
</body>

</html>