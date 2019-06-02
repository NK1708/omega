<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 footer__col1">
                <a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="" class="footer__logo"></a>
                <div class="footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <div class="footer__copyright">2018 - 2019 Copyright</div>
            </div>
            <div class="col-12 col-lg-4 footer__col2">
                <ul class="footer__menu">
                    <li class="footer__first">Полезное</li>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'=>'bottom',
                        'container' => ''
                    ) );
                    ?>
                </ul>

            </div>
            <div class="col-12 col-lg-4 footer__col3">
                <div class="footer__phone">8 (495) 162-20-02</div>
                <div class="footer__socicons">
                    <span>Мы в социальных сетях</span>
                    <div class="footer__soclinks">
                        <a href="#" class="footer__soclink"><img src="<?php echo get_template_directory_uri() ?>/img/fb.png" alt=""></a>
                        <a href="#" class="footer__soclink"><img src="<?php echo get_template_directory_uri() ?>/img/vk.png" alt=""></a>
                        <a href="#" class="footer__soclink"><img src="<?php echo get_template_directory_uri() ?>/img/yt.png" alt=""></a>
                        <a href="#" class="footer__soclink"><img src="<?php echo get_template_directory_uri() ?>/img/ig.png" alt=""></a>
                    </div>
                </div>
                <div class="footer__info">При перепечатке текстовой информации и фотографий ссылка на сайт обязательна</div>
                <div class="footer__studio">
                    <a href="https://mehed.pro/">
                        <div class="footer__studio-line1">Сделано в</div>
                        <div class="footer__studio-line2">Mstudio</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="display: none;">
    <div class="box-modal popup__container" id="formModal">
        <div class="box-modal_close arcticmodal-close popup__close">X</div>
        <div class="popup__title">Заказать обратный звонок</div>
        <?php echo do_shortcode( '[contact-form-7 id="125" title="Callback Form"]' ); ?>

    </div>
</div>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/scripts/libs/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/scripts/libs/jquery.arcticmodal-0.3.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/scripts/libs/jquery.maskedinput.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/scripts/libs/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/scripts/libs/scrolloverflow.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/scripts/common.js"></script>

<!--<script src="assets/js/scripts.min.js"></script>-->

<?php wp_footer(); ?>

</body>
</html>