<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="ych-menu-content">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <?php
                $image = get_field('slide-1');
                if (!empty($image)):
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="col-md-12 content-box" id="slider1" style="
                         position: absolute;
                         margin-top: -40%;
                         float:  left;
                         width: 90%;; 
                         ">
                        <div class="container" id="textoContenido" style="   
                             width: 90%;
                             margin: auto;
                             min-width: 800px;
                             max-width: 800px;
                             margin-top: auto; " >
                            <div class=" container ">
                                <h1 style="color: white; float: left;  "><?php the_field('titulo_slider_1'); ?></h1>
                                <p style="color: white; float:  left;  " ><?php the_field('contenido_del_slider_1'); ?></p>        
                            </div>

                            <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?php
                $image = get_field('slide-2');
                if (!empty($image)):
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="col-md-12 content-box" id="slider1" style="
                         position: absolute;
                         margin-top: -40%;
                         float:  left;
                         width: 90%;; 
                         ">
                        <div class="container" id="textoContenido" style="   
                             width: 90%;
                             margin: auto;
                             min-width: 800px;
                             max-width: 800px;
                             margin-top: auto; " >
                            <div class=" container ">
                                <h1 style="color: white; float: left; max-width: 100%; "><?php the_field('titulo_slider_2'); ?></h1>
                                <p style="color: white; float:  left;  " ><?php the_field('contenido_del_slider_2'); ?></p>        
                            </div>

                            <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
                        </div>

                    </div>
                <?php endif; ?>
            </div>
            <div class="item">
                <?php
                $image = get_field('slide-3');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="col-md-12 content-box" id="slider1" style="
                         position: absolute;
                         margin-top: -40%;
                         float:  left;
                         width: 90%;;  
                         ">
                        <div class="container" id="textoContenido" style="
                             width: 90%;
                             margin: auto;
                             min-width: 800px;
                             max-width: 800px;
                             margin-top: auto;" >
                            <h1 style="color: white;"><?php the_field('titulo_slider_3'); ?></h1>
                            <br>
                            <p style="color: white;"><?php the_field('contenido_del_slider_3'); ?> </p>
                            <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<h1><?php the_field('parallaxTitle'); ?></h1>

<div id="nosotros" class="container-fluid zooom" data-background="<?php echo esc_url(get_template_directory_uri()) ?>/img/nosotros-home-bg.jpg" >
    <div class="row">
        <div class="col-lg-5 col-md-6 content">
            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                <h2><?php the_field('titulo-principal'); ?></h2>
                <p><?php the_field('sib-titulo-principal'); ?></p>
                <a  class="emerald-btn" href="<?php the_field('link_nosotros'); ?>">conoce mas de nosotros</a>
            </div>
        </div>
    </div>
</div><!-- Nosotros -->

<div id="servicios" class="container-fluid">
    <div class="container">
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <h2 class="col-lg-10 col-lg-offset-1"><?php the_field('titulo-parallax'); ?></h2>
        </div>
        <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <p class="col-lg-10 col-lg-offset-1"><?php the_field('sub-titulo-parallax'); ?></p>
        </div>
        <div class="what-we-do wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">

            <?php if (have_rows('parallax')): ?>


                <?php
                while (have_rows('parallax')): the_row();

                    // vars
                    $image = get_sub_field('imagen');
                    $text = get_sub_field('text');
                    ?>

                    <div>
                        <?php if ($link): ?> <a href="<?php echo $link; ?>">
                            <?php endif; ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                            <span><?php echo $text; ?></span>
                            <?php if ($link): ?>
                            </a>
                        <?php endif; ?>


                    </div>


                <?php endwhile; ?>



            <?php endif; ?>
        </div>
        <a  class="emerald-btn" href="<?php the_field('link_nosotros'); ?>">conoce mas de nosotros</a>
    </div>
</div><!-- Servicios -->


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



<div id="contactanos" class="home">
    <div class="container ">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h1 class="wow fadeIn" data-wow-duration="2s" ><?php the_field('titulo-proyecto'); ?></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <p class="wow fadeIn" data-wow-duration="2s"><?php the_field('texto-proyecto'); ?></p>

            </div>
        </div>
        <a  class="emerald-btn" href="<?php the_field('link_contac'); ?>">Iniciar proyecto</a>
    </div>
    <button class="go-up"><i class="lcp-icon lcp-up-angle"></i></button>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
