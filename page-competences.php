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

        <h2 class="text-center align-content-center "><?php if (carbon_get_the_post_meta('crb_competence_slider1_title')) : ?>
                <?php echo carbon_get_the_post_meta('crb_competence_slider1_title'); ?>
            <?php endif; ?></h2>

    </div>
    <?php
    //Boucle de Contenu flexible 

    $sections = carbon_get_the_post_meta('crb_competence_slider1');
    if ($sections) : ?>

        <div class="container-xxl  contentcolor1 bulletarea">
            <div class="row text-center ">
                <?php
                $i = 0;
                foreach ($sections as $section) { ?>
                    <?php if ($i % 3 == 0) : ?>
            </div>
            <div class="row text-center ">
            <?php
                    endif;
                    $i++;
            ?>

            <div class="col-lg-4 bulletcomponent">
                <div class="rounded-circle">
                    <img width="210" height="210" alt="<?php echo wpautop($section['skill_title']); ?>" src="<?php echo wp_get_attachment_image_url($section['skill_logo'], 'full'); ?>" data-holder-rendered="true">
                </div>
                <p><?php echo wpautop($section['skill_title']); ?></p>
            </div>


        <?php } ?>
    <?php endif; ?>
            </div>
        </div>
        <div class="container-fluid titleseparationarea">

            <h2 class="text-center align-content-center "><?php if (carbon_get_the_post_meta('crb_competence_slider2_title')) : ?>
                    <?php echo carbon_get_the_post_meta('crb_competence_slider2_title') ?>
                <?php endif; ?></h2>

        </div>
        <?php
        //Boucle de Contenu flexible
        $sections = carbon_get_the_post_meta('crb_competence_slider2');
        if ($sections) : ?>

            <div class="container-xxl  contentcolor1 bulletarea">

                <div class="row text-center ">
                    <?php
                    $i = 0;
                    foreach ($sections as $section) { ?>
                        <?php if ($i % 3 == 0) : ?>
                </div>
                <div class="row text-center ">
                <?php
                        endif;
                        $i++;
                ?>

                <div class="col-lg-4 bulletcomponent">
                    <div class="rounded-circle">
                        <img width="210" height="210" alt="<?php echo wpautop($section['skill_title']); ?>" src="<?php echo wp_get_attachment_image_url($section['skill_logo'], 'full'); ?>" data-holder-rendered="true">
                    </div>
                    <p><?php echo wpautop($section['skill_title']); ?></p>
                </div>


            <?php } ?>
        <?php endif; ?>
                </div>
            </div>
</main>

<?php get_footer(); ?>