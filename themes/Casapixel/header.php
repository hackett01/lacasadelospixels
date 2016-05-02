<?php
/**
 * The Header template for our theme
 */
$generator_options = get_option('faster_theme_options');
# print_r($generator_options);
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="La Casa de los Pixeles" >
        <meta name="description" content="Creamos soluciones digitales, desde sitios web hasta aplicaciones móviles y campañas de marketing digital. Cónocenos y convéncete.">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <!-- Twitter Card -->
        <meta name="twitter:site" content="@lacasadepixeles" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="La Casa de los Pixeles - Soluciones digitales, sitios web, apps y marketing digital" />
        <meta name="twitter:creator" content="@lacasadepixeles" />
        <meta name="twitter:description" content="Creamos soluciones digitales, desde sitios web hasta aplicaciones móviles y campañas de marketing digital. Cónocenos y comprueba por que somos tu mejor ocpión para servicios digitales.">
        <meta name="twitter:image" content="http://lacasadelospixeles.com/img/sm-logo.jpg" />
        <!-- Meta OG -->
        <meta property="og:title" content="La Casa de los Pixeles - Soluciones digitales, sitios web, apps y marketing digital" />
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="http://lacasadelospixeles.com" />
        <meta property="og:image" content="http://lacasadelospixeles.com/img/sm-logo.jpg" />
        <meta property="og:description" content="Creamos soluciones digitales, desde sitios web hasta aplicaciones móviles y campañas de marketing digital. Cónocenos y comprueba por que somos tu mejor ocpión para servicios digitales." />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php if (!empty($generator_options['favicon'])) { ?>
            <link rel="shortcut icon" href="<?php echo esc_url($generator_options['favicon']); ?>">
        <?php } ?>

        <?php wp_head(); ?>
    </head>
    <body >
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-8">
                        <figure>
                            <img src="<?php echo bloginfo('template_url'); ?>/img/logo-white.svg" alt="La Casa de los Pixeles">
                        </figure>
                    </div>
                    <?php
                    $generator_defaults = array(
                        'theme_location' => 'primary',
                        'container' => 'div',
                        'container_class' => 'navbar-collapse collapse no-padding pull-right',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'navbar-collapse no-padding pull-right collapse',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul class="nav navbar-nav generator-menu">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    );
                    wp_nav_menu($generator_defaults);
                    ?>
                </div>
            </div>
        </div>
    </header>
          <!--****************************************************************
    ********************************************************************
    Es bueno verte por aquí. Si te interesa trabajar con nosotros
    puedes enviar tu C.V. a jobs@lacasadelospixeles.com
    Siempre estamos en busqueda de nuevo talento.
    ********************************************************************
    *****************************************************************-->
