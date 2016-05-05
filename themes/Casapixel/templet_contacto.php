<?php /* Template Name: Contacto */ ?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<style>
 
    #map {
        height: 105%;
    }
</style>
<script>

// When you add a marker using a Place instead of a location, the Maps API will
// automatically add a 'Save to Google Maps' link to any info window associated
// with that marker.

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: {lat: 19.021302, lng: -98.193746}
        });

        var marker = new google.maps.Marker({
            map: map,
// Define the place with a location, and a query string.
            place: {
                location: {lat:  19.021302, lng: -98.193746},
                query: 'Google, Ciudad Puebla, México'

            },
// Attributions help users find your site again.
            attribution: {
                source: 'Google Maps JavaScript API',
                webUrl: 'https://developers.google.com/maps/'
            }
        });

// Construct a new InfoWindow.
        var infoWindow = new google.maps.InfoWindow({
            content: 'La casa de los pixeles Privada 39 Oriente 2018-A, Col. El mirador, Puebla , Puebla '
        });

// Opens the InfoWindow when marker is clicked.
        marker.addListener('click', function () {
            infoWindow.open(map, marker);
        });
    }

</script>
<?php get_header(); ?>
<div class="ych-menu-content">
    <!--Banner Principal -->

    <?php if (have_rows('background')): ?>
        <?php
        while (have_rows('background')): the_row();

            // vars
            $icono = get_sub_field('imagen_icon');
            $image = get_sub_field('background_imagen');
            $title = get_sub_field('title');
            $title_sub = get_sub_field('sub-title');
            ?>
            <?php if ($link): ?>

            <?php endif; ?>

            <section  id="banner02" class="banner background"  background-size="cover" style=" background-image: url('<?php echo $image['url']; ?>');   background-size: cover; ">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="<?php echo $icono['url']; ?>" alt="<?php echo $icono['alt']; ?>" />
                        <h1 class="wow fadeIn" data-wow-duration="2s">  <?php echo $title; ?></h1>
                        <p>  <?php echo $title_sub; ?></p>
                    </div>
                </div>
            </section>
            <?php if ($link): ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <!-- /Banner Principal -->



    <section id="contacto">
        <div class="row nom" >
            <div class="col-lg-7">
                <h1 class="wow fadeIn"  data-wow-duration="2s"><?php the_field('sub_title'); ?></h1>
                <p class="wow fadeIn"  data-wow-duration="2s"><?php the_field('content_text_contact'); ?></p>
                <div class="row">
                   
                    <div class="col-sm-7 ">
                        <?php echo do_shortcode('[contact-form-7 id="657" title="Contact form 1"]'); ?>

                    </div>
                    <div class="col-sm-2 wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.3s">
                        <h3><?php the_field('title_social'); ?></h3>
                        <ul class="social">
                            <li><a target="_blank" href="http://www.facebook.com/CasadePixeles"><i class="lcp-icon lcp-fb"></i></a></li>
                            <li><a target="_blank" href="http://twitter.com/lacasadepixeles"><i class="lcp-icon lcp-tw"></i></a></li>
                        </ul>
                        <h3><?php the_field('contact_medios'); ?></h3>
                        <ul>
                            <li><a href="mailto:hola@lacasadelospixeles.com"><i class="lcp-icon lcp-mail"></i> <?php the_field('contact_medios'); ?></a></li>
                            <li><a href="tel:2225830327"><i class="lcp-icon lcp-phone"></i><?php the_field('contac_tel'); ?></a></li>
                            <li><a target="_blank" href="http://www.google.com.mx/maps/place/La+casa+de+los+pixeles/@18.8013122,-107.2430773,5z/data=!3m1!4b1!4m2!3m1!1s0x85cfc0912b8f5a11:0x7f13fed22929df38?hl=en"><i class="lcp-icon lcp-mark"></i> <?php the_field('contac_adress'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div id="map"></div>
            </div>
        </div>
    </section>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzN9ri7Y-uGhIc11aEd9WfjoCGPxBHFg8&signed_in=true&libraries=places&callback=initMap"></script>
    <?php get_footer(); ?>
