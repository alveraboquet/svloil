</div>
<div class="footer row">
    <?php
    $post_type_name = post_type_archive_title('', false);

    if ($post_type_name !== 'Sponsoren') {
        require 'template-parts/footer/slider.php';
    }
    wp_footer();
    ?>
    <div class="footer-row">
        <div class="col-6 footer-col footer-col__left">
            <div class="row">
                <b><a href="http://svloil.nl/projecten/svloil/privacybeleid">Privacy</a></b>
            </div>
            <div class="row">
                <p>Copyright &copy; 2022 | <a href="https://barrt.nl/" target="_blank">BARRT</a></p>
            </div>
        </div>
        <div class="col-6 footer-col footer-col__right">
            <div class="buildings">
                <img alt="Loilse kerk" src="http://svloil.nl/wp-content/uploads/2022/03/gebouwen.png">
            </div>
        </div>
    </div>
</div>
</body>
