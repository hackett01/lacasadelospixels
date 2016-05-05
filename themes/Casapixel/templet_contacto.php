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
                location: {lat: 19.021302, lng: -98.193746},
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
                    <div class="col-sm-5 wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 2s;">
                        <h3 style="font-size: 23px;color: black;margin-top: 28px;"><?php the_field('title_social'); ?></h3>
                        <ul class="social">
                            <li><a target="_blank" href="http://www.facebook.com/CasadePixeles"><i class="lcp-icon lcp-fb"></i></a></li>
                            <li><a target="_blank" href="http://twitter.com/lacasadepixeles"><i class="lcp-icon lcp-tw"></i></a></li>
                        </ul>
                        <h3 style="font-size: 23px;color: black;margin-top: 28px;"><?php the_field('contact_medios'); ?></h3>
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
              <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
    </section>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzN9ri7Y-uGhIc11aEd9WfjoCGPxBHFg8&signed_in=true&libraries=places&callback=initMap"></script>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/jquery.knob.min.js?ver=4.4.2"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/font_color.js"></script>


<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/jquery.knob.min.js"></script>
<!-- WOW JS -->
<script  src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/wow.min.js"></script>

<!-- Parallax JS -->
<!-- <script  src="//lacasadelospixeles.com/js/parallax.js"></script> -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/match-height.js" type="text/javascript"></script>


<script>
    WebFontConfig = {
        google: {families: ['Open+Sans:400,300,700:latin']}
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-60639905-1', 'auto');
    ga('send', 'pageview');
    $('#applyform  button[type="submit"]').click(function (event) {
        event.preventDefault();
        var error = 0;

        $('#applyform input').each(function () {
            var value = $(this).val();

            if ($(this).attr('name') == 'email') {
                if (!isMail(value)) {
                    $(this).addClass('error');
                    error++;
                }
            } else if ($(this).attr('name') == 'name') {
                if (!validate(value)) {
                    $(this).addClass('error');
                    error++;
                }
            } else if ($(this).attr('name') == 'upload-cv') {
                if (value == "") {
                    $(this).addClass('error');
                    error++;
                }
            } else if ($(this).attr('name') == 'website') {
                if (!validate(value)) {
                    $(this).addClass('error');
                    error++;
                }
            }
        });
        if (error > 0) {
            $('#success-msg div').html('Llena correctamente los campos marcados');
            $('#success-msg').addClass('error');
            $('#success-msg').addClass('shows');
            return false;
        }
        if (!validate($('#recaptcha-status').val())) {
            $('#success-msg div').html('¿Acaso eres un robot?');
            $('#g-recaptcha').addClass('error');
            $('#success-msg').addClass('error');
            $('#success-msg').addClass('shows');
            return false;
        }
        $('#loader').removeClass('hide');
        var formData = new FormData();
        formData.append('email', document.getElementsByName('email')[0].value);
        formData.append('vacant', document.getElementsByName('vacant')[0].value);
        formData.append('name', document.getElementsByName('name')[0].value);
        formData.append('site1', document.getElementsByName('site1')[0].value);
        formData.append('site2', document.getElementsByName('site2')[0].value);
        formData.append('site3', document.getElementsByName('site3')[0].value);
        formData.append('website', document.getElementsByName('website')[0].value);
        formData.append('linkedin', document.getElementsByName('linkedin')[0].value);
        formData.append('behance', document.getElementsByName('behance')[0].value);
        formData.append('others', document.getElementsByName('others')[0].value);
        formData.append('recaptcha', document.querySelector('.g-recaptcha-response').value);
        var file = document.getElementById('upload-cv').files[0];
        formData.append('upload-cv', file);

        $.ajax({type: 'POST', url: "./sendmail.php", data: formData, contentType: false, processData: false})
                .done(function (response) {
                    $('#loader').addClass('hide');
                    response = $.parseJSON(response);
                    if (response.response == 'success') { //the mail was send
                        $('input').removeClass('error');
                        $('#success-msg').removeClass('error');
                        $('#success-msg div').html('¡Tu mensaje ha sido enviado!');
                        $('#success-msg').addClass('shows');
                        flag = false;
                        setTimeout(function () {
                            $('#success-msg').removeClass('shows');
                            $('.apply-form').toggleClass('showed-form');
                            setTimeout(function () {
                                $('.apply-form-content').toggleClass('active-form');
                            }, 100);
                        }, 4000);
                        $('#applyform input').each(function () {
                            $(this).val('');
                        });
                        $('.upload-value').empty();
                        grecaptcha.reset();
                        $('#applyform textarea').val('');
                        $('#recaptcha-status').val('');
                        $('#recaptcha').removeAttr('checked');
                    } else if (response.response == 'wrong format') { // the Cv was wrong format
                        $('#success-msg div').html('Solo se adminten .PDF .DOC o DOCX');
                        $('#success-msg').addClass('error');
                        $('#success-msg').addClass('shows');
                        flag = false;
                        setTimeout(function () {
                            $('#success-msg').removeClass('shows');
                        }, 4000);
                        $('.upload-value').empty();
                        grecaptcha.reset();
                        $('#recaptcha-status').val('');
                        $('#recaptcha').removeAttr('checked');

                    } else if (response.response == 'wrong size') { //The Cv weight > 2MB
                        $('#success-msg div').html('El Cv no puede pesar más de 2MB');
                        $('#success-msg').addClass('error');
                        $('#success-msg').addClass('shows');
                        flag = false;
                        setTimeout(function () {
                            $('#success-msg').removeClass('shows');
                        }, 4000);
                        $('.upload-value').empty();
                        grecaptcha.reset();
                        $('#recaptcha-status').val('');
                        $('#recaptcha').removeAttr('checked');
                    } else if (response.response == 'problems copying') { // Cant upload the file to the server
                        $('#success-msg div').html('Ocurrió un problema en el servidor. Por favor reinténtalo más tarde');
                        $('#success-msg').addClass('error');
                        $('#success-msg').addClass('shows');
                        flag = false;
                        setTimeout(function () {
                            $('#success-msg').removeClass('shows');
                        }, 4000);
                        $('#applyform input').each(function () {
                            $(this).val('');
                        });
                        $('.upload-value').empty();
                        grecaptcha.reset();
                        $('#applyform textarea').val('');
                        $('#recaptcha-status').val('');
                        $('#recaptcha').removeAttr('checked');
                    } else { // Server error
                        $('#success-msg div').html('Ocurrió un problema en el servidor');
                        $('#success-msg').addClass('error');
                        $('#success-msg').addClass('shows');
                        flag = false;
                        setTimeout(function () {
                            $('#success-msg').removeClass('shows');
                        }, 4000);
                        $('#applyform input').each(function () {
                            $(this).val('');
                        });
                        $('.upload-value').empty();
                        grecaptcha.reset();
                        $('#applyform textarea').val('');
                        $('#recaptcha-status').val('');
                        $('#recaptcha').removeAttr('checked');
                    }
                })
                .fail(function () {
                    $('#success-msg div').html('¡Ups! Esto no deberia pasar. Inténtalo una vez más');
                    $('#success-msg').addClass('wrong');
                    $('#success-msg').addClass('shows');
                    $('.upload-value').empty();
                    grecaptcha.reset();
                    $('#applyform textarea').val('');
                    $('#recaptcha-status').val('');
                    $('#recaptcha').removeAttr('checked');
                });
    });

    function buttonfx() {
        var view = $(window), button = $('.go-up'), position = 20;
        var bottom = view.scrollTop() + view.height();
        var documentHeight = $(document).height();
        var mid = documentHeight / 2;
        if (bottom >= mid) {
            button.addClass('visible');
        } else {
            button.removeClass('visible');
        }
    }
    function showButton() {
        buttonfx();
        $(document).on('scroll', function () {
            buttonfx();
        });
    }
    showButton();
    $('.go-up').on('click', function () {
        $('html, body').stop().animate({
            scrollTop: 0
        }, 600, 'linear');
        return false;
    });

    //rotate expand-collapse icon
    $('.read-more-btn').click(function () {
        $(this).children('img').toggleClass('icon-expand');
    });
    $('#upload-cv').on('change', function () {
        var fileName = $(this).val().replace("C:\\fakepath\\", "");
        $('.upload-value').html(fileName);
    });

    $('.apply').click(function () {

        $('.apply-form-content').toggleClass('active-form');
        setTimeout(function () {
            $('.apply-form').toggleClass('showed-form');
        }, 400);
    });
    $('.close-form').click(function () {
        $('#applyform input').each(function () {
            $(this).val('');
        });
        $('.upload-value').empty();
        grecaptcha.reset();
        $('#applyform textarea').val('');
        $('#recaptcha-status').val('');
        $('#recaptcha').removeAttr('checked');
        $('.apply-form').toggleClass('showed-form');
        setTimeout(function () {
            $('.apply-form-content').toggleClass('active-form');
        }, 400);
    });


//validate mail input
    function isMail(_email)
    {

        var emailReg = /^[a-z][a-z-_0-9\.]+@[a-z-_=>0-9\.]+\.[a-z]{2,3}$/i

        return emailReg.test(_email);
    }
    function isNumber(_number)
    {

        var numReg = /^\s*\d+\s*$/

        return numReg.test(_number);
    }
//validate inputs
    function validate(_value)
    {
        var check = /^([A-Za-z,\.\-\'\sñÑáéíóú0-9]+ ?)*$/
        _size = _value.lenght;
        _empty = '';

        for (i = 0; i < _size; i++)
        {
            _empty = _empty + ' ';
        }
        if (_value != _empty)
        {
            return check.test(_value);
        } else
        {
            return false;
        }
    }

    function apply(vac) {
        document.getElementById('vacant').value = vac;
    }
</script>

    <?php get_footer(); ?>
