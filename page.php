<?php get_header(); ?>

<main class="flex-fill bt-page">

    <div class="container-xxl contentcolor1 titlearea">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="container-fluid titleseparationarea">
        <div class="row">
        </div>
    </div>
    <div class="container-xxl contentcolor1 textarea1">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>