<?php /* Template Name: Diseno web */ ?>
<?php get_header(); ?>
<div class="ych-menu-content">
    <div id="servicios-diseno-web" class="servicio">
        <!-- Banner Principal -->
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
        <!-- Contenido -->
        <div class="container-fluid">
            <div class="row">

                <?php
                $image = get_field('pic-1');

                if (!empty($image)):
                    ?>
                    <div style="    background-image: url('<?php echo $image['url']; ?>'); height: 450px;" class="col-md-4 col-sm-6 servicio-pic item-match pic-1" data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->
                <?php endif; ?>

                <div class="col-md-4 col-sm-6 servicio-content item-match">
                    <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <?php
                        $image = get_field('imagen_responsive');

                        if (!empty($image)):
                            ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <h2><?php the_field('title_device'); ?></h2>

                        <?php if (have_rows('content_text_device')): ?>
                            <?php
                            while (have_rows('content_text_device')): the_row();

                                // vars
                                $text = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>

                                    <span><?php echo $text; ?></span>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $image_s = get_field('pic-2');
                if (!empty($image_s)):
                    ?>
                    <div style="    background-image: url('<?php echo $image_s['url']; ?>'); height: 450px;" class="col-md-4 col-sm-6 servicio-pic item-match pic-1" data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->


                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-md-4  col-sm-6 col-sm-pull-6 col-md-pull-0 servicio-content item-match">
                    <div class="inner wow  fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <?php
                        $image = get_field('imagen_refresh');

                        if (!empty($image)):
                            ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        <h2><?php the_field('title_update'); ?></h2>

                        <?php if (have_rows('content_update')): ?>
                            <?php
                            while (have_rows('content_update')): the_row();

                                // vars
                                $text = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>

                                    <span><?php echo $text; ?></span>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $image = get_field('pic-3');
                if (!empty($image)):
                    ?>
                    <div style="    background-image: url('<?php echo $image['url']; ?>'); height: 450px;" class="col-md-4 col-sm-6 servicio-pic item-match pic-1" data-parallax="scroll"  data-z-index="10"></div><!-- Imagen 1 -->
                <?php endif; ?>
                <div class="col-md-4  col-sm-6 servicio-content item-match">
                    <div class="inner wow   fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s">
                        <?php
                        $image = get_field('imagen_design');

                        if (!empty($image)):
                            ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        <h2><?php the_field('title_objectives'); ?></h2>

                        <?php if (have_rows('content_objectives')): ?>
                            <?php
                            while (have_rows('content_objectives')): the_row();

                                // vars
                                $text = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>

                                    <span><?php echo $text; ?></span>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div><!-- Content -->


        <!-- Estadisticas -->
        <div class="estadisticas bg-cover">
            <div class="container">
                <div class="row text-center">
                    <h3 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"><?php the_field('title_stadics'); ?></h3>
                    <?php if (have_rows('content_stadis')): ?>
                        <?php
                        while (have_rows('content_stadis')): the_row();

                            // vars
                            $text = get_sub_field('percent');
                            $text2 = get_sub_field('text');
                            ?>
                            <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                <?php endif; ?>
                                <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                                    <div class="item-match">
                                        <span class="percentweb1 count" ><?php echo $text; ?></span>
                                    </div>
                                    <p><?php echo $text2; ?></p>
                                </div>
                                <?php if ($link): ?>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <!-- Estadisticas -->
        <!-- Tecnologias -->
        <div class="tecnologias-empleadas text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <h2><?php the_field('title_tecnologies'); ?></h2>

                        <div class="col-sm-1" data-wow-delay="0.5s">
                        </div>
                        <?php if (have_rows('images_technologies')): ?>
                            <?php
                            while (have_rows('images_technologies')): the_row();
                                // vars
                                $image = get_sub_field('imagen');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <div class="col-sm-2" data-wow-delay="0.5s">
                                    <a href="#">
                                        <img src="<?php echo $image['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                                    </a>
                                </div>

                                <?php if ($link): ?>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Portafolio -->
    <div id="portafolio" class="container-fluid">
        <div class="portafolio-titulo wow fadeIn">
            <h2 > <?php the_field('stadictis-title'); ?></h2>
        </div>
        <div class="row">

            <?php if (have_rows('portafolio')): ?>
                <?php
                while (have_rows('portafolio')): the_row();
                    // vars
                    $image = get_sub_field('imagen');
                    $text = get_sub_field('text');
                    $imagensub = get_sub_field('imagensub');
                    $link = get_sub_field('link');
                    ?>
                    <?php if ($link): ?>
                    <?php endif; ?>
                    <div class="col-sm-4 no-padd wow fadeIn" data-wow-delay="0.5s">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                            <div class="overlay">
                                <div class="o-content">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="<?php echo $imagensub['url']; ?>" alt="La Casa de los Pixeles - New Fashion" />
                                            <span><?php echo $text; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php if ($link): ?>
                    <?php endif; ?>
                <?php endwhile; ?>

            <?php endif; ?>


        </div>        </div>
    <!-- /Portafolio -->
    <!-- Contactanos -->
    <div id="contactanos">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <h1> <?php the_field('title_proyect'); ?></h1>
                </div>
                <br>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <p ><?php the_field('text_proyect'); ?></p>
                </div>
            </div>
            <a  class="emerald-btn" href="<?php the_field('link_contact'); ?>">Iniciar proyecto</a>
        </div>
        <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
    </div>
    <!-- Contatanos -->
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
