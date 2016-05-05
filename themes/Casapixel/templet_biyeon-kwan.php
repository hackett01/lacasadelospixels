<?php /* Template Name: biyeon-kwan */ ?>
<?php get_header(); ?>
<div class="ych-menu-content">        
    <div id="portafolio-biyeon">
        <?php if (have_rows('background')): ?>
            <?php
            while (have_rows('background')): the_row();
                $image = get_sub_field('imagen_fondo');
                $titulo = get_sub_field('titulo');
                $texto_contenido = get_sub_field('texto_de_contenido');
                $logo = get_sub_field('logo_principal');
                $link = get_sub_field('link');
                ?>
                <?php if ($link): ?>
                <?php endif; ?>
                <div class="header-portafolio cover-bg text-center" style="background-image: url('<?php echo $image['url']; ?>')">
                    <div class="cover"></div>
                    <div class="middle-content"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php echo $logo['url']; ?>" alt="Mascarillas Schaebens" class="img-responsive center-block wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">  
                                    <h1 class="title-header wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"><?php echo $titulo; ?></h1> 
                                    <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s"><?php echo $texto_contenido; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><!-- Bread Portafolio -->
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="colores">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"> 
                        <h2 class="title">Colores</h2>
                    </div>
                </div>
            </div>
            <div class="position-macbook wow bounceInRight" data-wow-duration="1s" data-wow-delay=".3s">  
                <div class="macbook-container">
                    <div class="screen">
                        <?php
                        $image = get_field('imagen_macbook');
                        if (!empty($image)):
                            ?>
                            <img class="wow fadeIn"  data-wow-duration="3s" data-wow-delay=".6s" src="<?php echo $image['url']; ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <ul class="pieID legend">
                        <li>
                            <span>75</span>
                        </li>
                        <li>
                            <span>12.5</span>
                        </li>
                        <li>
                            <span>12.5</span>
                        </li>
                    </ul>
                    <div class="col-sm-3 text-center">
                        <div class="pieID pie first"></div>
                    </div>
                    <div class="col-sm-8">
                        <h5>Pantone 7408 C</h5>
                        <p>CMYK:	<span>3, 24, 100, 0</span><br>
                            RGB:	<span>247, 193, 6</span><br>
                            HEX:	<span>#f8bf00</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-3 text-center">
                        <div class="pieID pie second"></div>
                    </div>
                    <div class=" col-sm-8">
                        <h5>Pantone 467 C</h5>
                        <p>CMYK:	<span>21, 28, 50, 0</span><br>
                            RGB:	<span>204, 177, 137</span><br>
                            HEX:	<span>#ccb189</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-3 text-center">
                        <div class="pieID pie third"></div>
                    </div>
                    <div class="col-sm-8">
                        <h5>Pantone 7505 C</h5>
                        <p>CMYK:	<span>40, 56, 78, 25</span><br>
                            RGB:	<span>130, 97, 64</span><br>
                            HEX:	<span>#826140</span></p>
                    </div>
                </div>
            </div>
        </div><!-- Colores-->
        <?php if (have_rows('titulo_tipografia')): ?>
            <?php
            while (have_rows('titulo_tipografia')): the_row();
                $image = get_sub_field('imagen_fondo');
                $content = get_sub_field('titulo_tipografia');
                ?>
                <?php if ($link): ?>
                <?php endif; ?>
                <div class="tipografia cover-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="wow fadeIn title"><?php echo $content; ?></h2>
                            </div> 
                            <div class="col-md-6 col-sm-12">
                                <div class="item-tipografia roboto wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                                    <h4><?php the_field('titulo_tipografia_bold'); ?></h4>
                                    <?php if (have_rows('lista_de_tipografias')): ?>
                                        <?php
                                        while (have_rows('lista_de_tipografias')): the_row();
                                            $content = get_sub_field('texto');
                                            ?>
                                            <?php if ($link): ?>
                                            <?php endif; ?>
                                            <?php if ($link): ?>
                                                </a>
                                            <?php endif; ?>
                                            <span ><?php echo $content; ?></span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div> 
                            </div>
                            <div class="col-sm-12 col-md-6"> 
                                <div class="item-tipografia ptsans wow fadeIn" data-wow-duration="1s" data-wow-delay=".8s">
                                    <h4><?php the_field('titulo_tipografia_salt'); ?></h4>
                                    <?php if (have_rows('lista_de_tipografias_salt')): ?>
                                        <?php
                                        while (have_rows('lista_de_tipografias_salt')): the_row();
                                            $content = get_sub_field('texto');
                                            ?>
                                            <?php if ($link): ?>
                                            <?php endif; ?>
                                            <?php if ($link): ?>
                                                </a>
                                            <?php endif; ?>
                                            <span ><?php echo $content; ?></span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Tipografia-->
                <?php if ($link): ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="vista-movil">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php the_field('titulp_movil_imagen'); ?></h2>
                    </div>
                    <div class="position-iphone wow fadeIn">  
                        <?php if (have_rows('imagenes_veticales')): ?>
                            <?php
                            while (have_rows('imagenes_veticales')): the_row();
                                $image = get_sub_field('imagen');
                                $content = get_sub_field('id_imagen');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <div class="iphone-container   <?php echo $content; ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                </div>
                                <?php if ($link): ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div><!-- Vista Movil-->
        <div class="vista-desktop">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s"> 
                    <h3 class="text-center"><?php the_field('titulo_version'); ?></h3>  
                </div>
                <div class="col-sm-6 col-sm-offset-6  wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s"> 
                    <p><?php the_field('texto_de_contenido_version'); ?></p>
                </div>
                <div class="position-imac wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s">  
                    <div class="imac-container">
                        <div class="screen">
                            <?php
                            $image = get_field('screenshot');
                            if (!empty($image)):
                                ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="tecnologias">
                        <?php if (have_rows('imagenes_tecnologias')): ?>
                            <?php
                            while (have_rows('imagenes_tecnologias')): the_row();
                                $image = get_sub_field('imagen');
                                $content = get_sub_field('content');
                                $link = get_sub_field('link');
                                ?>
                                <?php if ($link): ?>
                                <?php endif; ?>
                                <img class="img-responsive wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <?php if ($link): ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <a href="<?php the_field('link_page'); ?>" class="emerald-btn wow fadeIn" target="_blank" data-wow-duration="1s" data-wow-delay="1s">Visitar su sitio</a>
                </div>
            </div>

        </div><!-- Desktop -->
        <div class="nuestro-trabajo">
            <div class="container">
                <div class="things-we-did">
                    <?php if (have_rows('nuestro_trabajo_galeria')): ?>
                        <?php
                        while (have_rows('nuestro_trabajo_galeria')): the_row();
                            $image = get_sub_field('imagen');
                            $content = get_sub_field('texto');
                            $link = get_sub_field('link');
                            ?>
                            <?php if ($link): ?>
                            <?php endif; ?>
                            <div class="wow fadeIn">
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <h5> <?php echo $content; ?></h5>
                            </div>
                            <?php if ($link): ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- Nuestro Trabajo -->
    </div>
    <div id="portafolio" class="container-fluid only-two">
        <div class="portafolio-titulo wow fadeIn">
            <h2><?php the_field('titulo_portafolio'); ?></h2>
        </div>
        <div class="row">
            <?php if (have_rows('portafolio')): ?>
                <?php
                while (have_rows('portafolio')): the_row();
                    $image = get_sub_field('imagen_fondo');
                    $imagen_frontal = get_sub_field('imagen_frontal');
                    $texto = get_sub_field('texto');
                    $link = get_sub_field('link');
                    ?>
                    <?php if ($link): ?>
                    <?php endif; ?>
                    <div class="col-sm-6 no-padd wow fadeIn" data-wow-delay="0.5s">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <div class="overlay">
                                <div class="o-content">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="<?php echo $imagen_frontal['url']; ?>" alt="<?php echo $imagen_frontal['alt'] ?>" />
                                            <span>   <?php echo $content; ?></span>  
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
    <div id="contactanos">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <h1 class="wow fadeIn" data-wow-duration="2s"><?php the_field('titulo_proyecto'); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <p class="wow fadeIn" data-wow-duration="2s"><?php the_field('texto_contenido_proyecto'); ?></p>
                </div>
            </div>
            <a href="<?php the_field('link_contacto'); ?>" class="emerald-btn wow fadeIn" data-wow-duration="2s" >iniciar proyecto</a>
        </div>
        <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
    </div>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/Casapixel/js/biyeon-kwan.js"></script>

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
