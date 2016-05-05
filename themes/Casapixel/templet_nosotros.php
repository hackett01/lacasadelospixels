<?php /* Template Name: Nosotros */ ?>
<?php get_header(); ?>
<div class="ych-menu-content">
    <section id="banner1" class="banner" background="<?php echo esc_url(get_template_directory_uri()) ?>/img/banner-diseno-web.jpg" background-size="cover">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1><?php the_field('top_title'); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Nosotros -->
    <!-- /Banner Principal -->
    <div class="container-fluid">
        <div class="row" style="background-color: white;">
            <div class="first-section">
                <div class="col-md-6 col-lg-4 clearfix" >
                    <div class="nosotros-content wow fadeIn" data-wow-duration="2s">
                        <h2><?php the_field('content_title'); ?></h2>
                        <?php if (have_rows('content_text')): ?>
                            <?php
                            while (have_rows('content_text')): the_row();

                                // vars
                                $text = get_sub_field('text_content');
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
                </div><!-- Contenido 1 -->
                <?php if (have_rows('content_text')): ?>
                    <?php
                    while (have_rows('content_text')): the_row();

                        // vars 
                        $image = get_sub_field('imagen');
                        ?>
                        <?php if ($link): ?> 
                        <?php endif; ?>
                        <div class="col-md-6 col-lg-8" data-type="background" data-speed="4" style="min-height: 527px; background: url('<?php echo $image['url']; ?>') right top no-repeat;background-size: cover;">
                        </div>
                        <?php if ($link): ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- First section -->
        </div>
        <div class="row" style="background-color: white;" id="1" >
            <div class="second-section clearfix blue-bg">
                <?php
                $image = get_field('nosotros-pic-2');
                if (!empty($image)):
                    ?>
                    <div class="col-lg-4 hidden-md visible-lg nosotros-pic-3" style="background: url('<?php echo $image['url']; ?>') left top no-repeat;
                         background-size: cover;" data-parallax="scroll"  data-z-index="10">
                    </div><!-- Imagen 3 -->
                <?php endif; ?>
                <div class="col-md-6 col-lg-4">
                    <div class="nosotros-content middle wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                        <h2><?php the_field('content_title_top'); ?></h2>
                        <?php if (have_rows('content_text_top')): ?>
                            <?php
                            while (have_rows('content_text_top')): the_row();
                                $text = get_sub_field('text');
                                ?>
                                <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                    <?php endif; ?>

                                    <span><?php echo $text; ?></span>
                                    <br>
                                    <br>
                                    <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- Contenido 2 -->
                <?php
                $image = get_field('nosotros-pic-3');
                if (!empty($image)):
                    ?>
                    <div class="col-lg-4 hidden-md visible-lg nosotros-pic-3" style="background: url('<?php echo $image['url']; ?>') left top no-repeat;
                         background-size: cover;" data-parallax="scroll"  data-z-index="10">
                    </div><!-- Imagen 3 -->
                <?php endif; ?>
            </div><!-- Second Section -->
        </div>
    </div>
    <!-- /Nosotros -->


    <!-- Datos -->
    <div class="datos" data-parallax="scroll" data-image-src="img/bg-datos.jpg" data-z-index="0">
        <div class="container">
            <div class="row">
                <h2 id="datos" class="wow fadeIn">Más información de nosotros</h2>
            </div>
            <div class="row">
                <div class="col-md-2 number wow fadeIn">
                    <p>Tazas de <br>Café</p>
                    <div class="circle">
                        <input type="text" value="0" rel="3000" data-max="3000" class="knob">
                        <span><small>+</small>3K</span>
                    </div>
                </div><!-- Dato 1 -->
                <div class="col-md-2 number wow fadeIn">
                    <p>Diseños <br>Realizados</p>
                    <div class="circle">
                        <input type="text" value="0" rel="1000" data-max="1000" class="knob">
                        <span><small>+</small>1K</span>
                    </div>
                </div><!-- Dato 2 -->
                <div class="col-md-2 number wow fadeIn">
                    <p>Pizzas <br>Ordenadas</p>
                    <div class="circle">
                        <input type="text" value="0" rel="190" data-max="190" class="knob">
                        <span>190</span>
                    </div>
                </div><!-- Dato 3 -->
                <div class="col-md-2 number wow fadeIn">
                    <p>Libros <br>Leídos</p>
                    <div class="circle">
                        <input type="text" value="0" rel="64" data-max="64" class="knob">
                        <span>64</span>
                    </div>
                </div><!-- Dato 4 -->
                <div class="col-md-2 number wow fadeIn">
                    <p>Conferencias <br>Asistidas</p>
                    <div class="circle">
                        <input type="text" value="0" rel="16" data-max="16" class="knob">
                        <span>16</span>
                    </div>

                </div><!-- Dato 5 -->                
                <div class="col-md-2 number wow fadeIn">
                    <p>Horas de <br>Trabajo</p>
                    <div class="circle">
                        <input type="text" value="0" rel="5000" data-max="5000" class="knob">
                        <span>5K</span>
                    </div>
                </div><!-- Dato 6 -->                   
            </div>
        </div><!-- Container -->
    </div>
    <!-- Datos -->

    <!-- Portafolio -->

    <div id="portafolio" class="container-fluid">
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
        </div>
    </div>
    <!-- /Portafolio -->
    <!-- Contactanos -->
    <div id="contactanos">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <h1 class="wow fadeIn"><?php the_field('main_title_project'); ?></h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                    <?php if (have_rows('content_text_proyect')): ?>
                        <?php
                        while (have_rows('content_text_proyect')): the_row();

                            // vars
                            $text = get_sub_field('text');
                            ?>
                            <?php if ($link): ?> <a href="<?php echo $link; ?>">
                                <?php endif; ?>

                                <p class="wow fadeIn"><?php echo $text; ?></p>
                                <?php if ($link): ?>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
        </div>
    </div>

    <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
</div>
<!-- Menu Content -->

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/jquery.knob.min.js?ver=4.4.2"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/funtion_Color.js"></script>
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








