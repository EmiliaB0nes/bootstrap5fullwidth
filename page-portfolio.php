<?php get_header(); ?>

<main class="flex-fill">

    <div class="container-xxl contentcolor1 titlearea">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

 
    <?php
    // Préparation de la requete 
     query_posts('cat=5'); ?>

    <?php
    //Vérification si contenu et boucle
     if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container-fluid titleseparationarea">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center"><?php echo the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="container-xxl contentcolor1 textarea1 portfolioArea">
                <div class="row">
                    <div class="col-12">
                    <?php if(has_post_thumbnail($mypost->ID)){ ?>
                        <img class="portfolioImg" src="<?php echo the_post_thumbnail_url($mypost->ID); ?>">
                        <?php } ?>
                        
                            <?php echo the_content(); ?>
                        
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>