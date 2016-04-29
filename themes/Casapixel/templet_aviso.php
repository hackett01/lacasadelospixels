<?php /* Template Name: aviso */ ?>
<?php get_header(); ?>
<div class="ych-menu-content"><section style="padding-top:150px;background:#1C2229;"></section>
    <section>
        <div class="container" style="padding:50px 0;">
            <h3><?php the_field('title'); ?></h3>
            <?php if (have_rows('list_art')): ?>
                <?php
                while (have_rows('list_art')): the_row();
                    $content = get_sub_field('articulo');
                    $lista = get_sub_field('clausula_list');
                    $ListAviso = get_sub_field('contexto_del_aviso');
                    ?>
                    <?php if ($link): ?>
                    <?php endif; ?>
                    <?php if ($link): ?>
                    <?php endif; ?>
                    <p><strong><?php echo $content; ?></strong></p>
                    <?php
                    $lista;
                    $ListAviso;
                    $longitud = count($lista);
                    $tam = count($ListAviso);
                    for ($i = 0; $i < $longitud; $i++) {
                        echo "<ul>"."<li>" . $lista[$i]['texto_'] . "</li>"."</ul>";
                    }
                    for ($i = 0; $i < $tam; $i++) {
                        echo "<p>" .$ListAviso[$i]['texto']."</p>";
                    }
                    ?> 
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
