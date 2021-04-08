<?php get_header(); ?>

<main class="flex-fill">

    <div class="container-xxl contentcolor1 titlearea">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="container-fluid titleseparationarea">

        <h2 class="text-center align-content-center "><?php if (get_field('titre_groupe_1')) : ?>
                <?php the_field('titre_groupe_1'); ?>
            <?php endif; ?></h2>

    </div>
    <?php
    //Boucle de Contenu flexible pour la version pro d'ACF 
    if (have_rows('liste_groupe_1')) : ?>

        <div class="container-xxl  contentcolor1 bulletarea">

            <div class="row text-center ">
                <?php
                $i = 0;
                while (have_rows('liste_groupe_1')) : the_row(); ?>
                    <?php if ($i % 3 == 0) : ?>
            </div>
            <div class="row text-center ">
            <?php
                    endif;
                    $i++;
            ?>
            <?php if (get_row_layout() == 'competence') : ?>
                <div class="col-lg-4 bulletcomponent">
                    <div class="rounded-circle">
                        <?php $image = get_sub_field('logo'); ?>
                        <img width="210" height="210" src="<?php echo esc_url($image['url']); ?>" data-holder-rendered="true">
                    </div>
                    <p><?php the_sub_field('competence'); ?></p>
                </div>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
            </div>
        </div>
        <div class="container-fluid titleseparationarea">

            <h2 class="text-center align-content-center "><?php if (get_field('titre_groupe_2')) : ?>
                    <?php the_field('titre_groupe_2'); ?>
                <?php endif; ?></h2>

        </div>
        <?php
        //Boucle de Contenu flexible pour la version pro d'ACF 
        if (have_rows('liste_groupe_2')) : ?>

            <div class="container-xxl  contentcolor1 bulletarea">

                <div class="row text-center ">
                    <?php
                    $i = 0;
                    while (have_rows('liste_groupe_2')) : the_row(); ?>
                        <?php if ($i % 3 == 0) : ?>
                </div>
                <div class="row text-center ">
                <?php
                        endif;
                        $i++;
                ?>
                <?php if (get_row_layout() == 'competence') : ?>
                    <div class="col-lg-4 bulletcomponent">
                        <div class="rounded-circle">
                            <?php $image = get_sub_field('logo'); ?>
                            <img width="210" height="210" src="<?php echo esc_url($image['url']); ?>" data-holder-rendered="true">
                        </div>
                        <p><?php the_sub_field('competence'); ?></p>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
                </div>
            </div>
</main>

<?php get_footer(); ?>