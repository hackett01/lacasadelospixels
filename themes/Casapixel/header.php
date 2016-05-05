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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                            <?php if (empty($generator_options['logo'])) { ?>
                                <h1 class="generator-site-name"><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                            <?php } else { ?>
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url($generator_options['logo']); ?>" alt="" class="logo-center" /></a>
                            <?php } ?> 
                        </figure>
                    </div>
                    <div class="pull-right navigation">
                        <nav class="hidden-sm hidden-xs">
                            <?php
                            $generator_defaults = array(
                                'container_class' => 'navbar-collapse  pull-right',
                                'items_wrap' => '<ul class="nav navbar-nav generator-menu">%3$s</ul>',
                            );
                            wp_nav_menu($generator_defaults);
                            ?>
                        </nav> 
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
