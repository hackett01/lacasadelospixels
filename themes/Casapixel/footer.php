<?php /* Template Name: footer */ ?>
<?php $generator_options = get_option('faster_theme_options'); ?>
<footer class="footer-menu">
    <div class="container">
        <div class="col-md-3 col-sm-5">
            <?php if (empty($generator_options['logo'])) { ?>
                <h1 class="generator-site-name"><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            <?php } else { ?>
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url($generator_options['logo']); ?>" alt="" class="logo-center" /></a>
            <?php } ?> 
            <span class="copy"><?php
                if (!empty($generator_options['copy'])) {
                    echo esc_attr($generator_options['copy']) . ' ';
                }
                ?></span>
            <br>
            <span><a href="<?php echo get_site_url(); ?>/index.php/aviso-de-privacidad/">Politicas de Privacidad</a></span>
        </div><!-- Copyright -->
        <div class="col-md-4 col-md-offset-5 col-sm-6 col-sm-offset-1 contact"
            <span> <?php
                if (!empty($generator_options['footertext'])) {
                    echo esc_attr($generator_options['footertext']) . ' ';
                }
                ?></span>
            <span> <?php
                if (!empty($generator_options['phone'])) {
                    echo esc_attr($generator_options['phone']) . ' ';
                }
                ?></span>
            <span id="mail-me">
                <?php
                if (!empty($generator_options['email'])) {
                    echo esc_attr($generator_options['email']) . ' ';
                }
                ?>
            </span>
            <ul>
                <li><a href="https://www.facebook.com/CasadePixeles" target="_blank"><i class="lcp-icon lcp-fb"></i></a></li>
                <li><a href="https://www.linkedin.com/company/la-casa-de-los-pixeles" target="_blank"><i class="lcp-icon lcp-li"></i></a></li>
                <li><a href="https://twitter.com/lacasadepixeles" target="_blank"><i class="lcp-icon lcp-tw"></i></a></li>
            </ul>

        </div><!-- Contact Info -->
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
