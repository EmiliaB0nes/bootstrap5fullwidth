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
        <div class="row">
            <h2 class="text-center">Etes-vous perdu ?</h2>
        </div>
    </div>
    <div class="container-xxl contentcolor1 textarea1">
        <div class="row">
            <div class="col-12">
            <p> Vous êtes probablement perdu. </p>
            <p>Vous pouvez revenir à l'accueil <a href="<?php echo home_url(); ?>">en cliquant ici</a>.</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>