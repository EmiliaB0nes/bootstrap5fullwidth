<?php get_header(); ?>

<main class="flex-fill">

    <div class="container-xxl contentcolor1 titlearea">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center"><?php if (get_field('nom')) : ?>
                        <?php the_field('nom'); ?>
                    <?php endif; ?></h1>
            </div>
            <div class="col-12">
                <p class="text-center"><?php if (get_field('sous-titre')) : ?>
                        <?php the_field('sous-titre'); ?>
                    <?php endif; ?></p>
            </div>
        </div>
    </div>
    <?php if (get_field('afficher_competences')) : ?>
        <div class="container-fluid titleseparationarea">

            <h2 class="text-center align-content-center "><?php if (get_field('titre_competences')) : ?>
                    <?php the_field('titre_competences'); ?>
                <?php endif; ?></h2>

        </div>

        <?php
        //Boucle de Contenu flexible pour la version pro d'ACF 
        if (have_rows('liste_competences')) : ?>

            <div class="container-xxl  contentcolor1 bulletarea">

                <div class="row text-center ">
                    <?php
                    $i = 0;
                    while (have_rows('liste_competences')) : the_row(); ?>
                        <?php if ($i % 3 == 0) : ?>
                </div>
                <div class="row text-center ">
                <?php
                        endif;
                        $i++;
                ?>
                <?php if (get_row_layout() == 'competences') : ?>
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
        <?php endif; ?>
        <div class="container-fluid titleseparationarea">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        <div class="container-xxl contentcolor1 textarea1 text-justify">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
</main>

<?php get_footer(); ?>