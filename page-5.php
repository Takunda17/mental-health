<?php get_header();?>

    <!-- Banner -->
    <?php if ( have_rows( 'banner' ) ) : ?>
        <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
            <section class="banner">
                <div class="banner-text">
                    <h1><?php the_sub_field('h1');?></h1>
                    <p><?php the_sub_field('p');?></p>
                    <div class="button">
                        <button><?php the_sub_field('btn');?> </button>
                    </div>
                </div>
                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="banner-img" class="img-fluid">
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Banner -->

    <!-- About Us -->
    <?php if ( have_rows( 'about' ) ) : ?>
        <?php while ( have_rows( 'about' ) ) : the_row(); ?>
            <section class="about">
                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="path2" class="img-fluid path2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="about-img" class="img-fluid ellip">  
                            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="about-img" class="img-fluid img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <h2><?php the_sub_field('h2'); ?></h2>
                            <p><?php the_sub_field('p'); ?> </p>
                            <div class="button">
                                <button><?php the_sub_field('btn'); ?> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- End About Us -->

    <!-- Education -->
    <?php if ( have_rows( 'education' ) ) : ?>
	<?php while ( have_rows( 'education' ) ) : the_row(); ?>
    <section class="education">
        <h2><?php the_sub_field('h2'); ?></h2>
        <div class="tab-header"> 
            
         <?php if (have_rows('tab_') ) : ?>
            <?php while(have_rows('tab_') ) : the_row(); ?>
                <div class="active">
                    <h3>
                        <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="trophy" class="img-fluid icon">
                        <?php the_sub_field('h3'); ?>
                        <img src="<?php $imgs = get_sub_field( 'imgs' );echo $imgs['url']; ?> " alt="trophy" class="img-fluid icon">
                    </h3>
                </div>
            
                <div>
                    <h3>
                        <img src="<?php $img_copy = get_sub_field( 'img_copy' );echo $img_copy['url']; ?>" alt="trophy" class="img-fluid icon">
                        <?php the_sub_field('h3_copy'); ?>
                        <img src="<?php $imgs_copy = get_sub_field( 'imgs_copy' );echo $imgs_copy['url']; ?>" alt="trophy" class="img-fluid icon">
                    </h3>
                </div>

            <div>
                <h3>
                    <img src="<?php $img_copy2 = get_sub_field( 'img_copy2' );echo $img_copy2['url']; ?>" alt="trophy" class="img-fluid icon">
                    <?php the_sub_field('h3_copy2'); ?>
                    <img src="<?php $imgs_copy2 = get_sub_field( 'imgs_copy2' );echo $imgs_copy2['url']; ?>" alt="trophy" class="img-fluid icon">
                </h3>
            </div>
            <?php endwhile; ?>
         <?php endif; ?>
        </div>
        

        <?php if(have_rows('body') ) : ?>
        <?php while(have_rows('body') ) : the_row(); ?>
        <div class="tab-body">
            <div class="active">
                <p><?php the_sub_field('p'); ?></p>
                <button><?php the_sub_field('btn'); ?></button>
            </div>

            <div>
                <p><?php the_sub_field('p_copy'); ?></p>
                <button><?php the_sub_field('btn'); ?></button>
            </div>
            <div>
                <p><?php the_sub_field('p_copy2'); ?></p>
                <button><?php the_sub_field('btn'); ?></button>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Education -->

    <!-- Warm Line -->
<?php if(have_rows('warm') ) : ?>
    <?php while(have_rows('warm') ) : the_row(); ?>
    <section class="warm">
        <div class="row">
            <div class="col-md-6">
                <div class="warm-text">
                    <h2><?php the_sub_field('h2'); ?></h2>
                    <p><?php the_sub_field('p'); ?></p>
                    <div class="button">
                        <button><?php the_sub_field('btn'); ?></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="warm-img">
                    <img src="<?php $path = get_sub_field('path');echo $path['url']; ?>" alt="warm-img" class="img-fluid ellip">  
                    <img src="<?php $path1 = get_sub_field('path1');echo $path1['url']; ?>" alt="warm-img" class="img-fluid img">
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- End Warm Line -->

    <!-- Support -->
<?php if(have_rows('support') ) : ?>
    <?php while(have_rows('support') ) : the_row(); ?>
    <section class="support">
        <img src="<?php $path = get_sub_field('path');echo $path['url']; ?>" alt="ellipse" class="img-fluid ellipse">
        <div class="support-img">
            <img src="<?php $path1 = get_sub_field('path1');echo $path1['url']; ?>" alt="support-img" class="img-fluid earth">
        </div>
        <div class="support-text">
            <h2><?php the_sub_field('h2'); ?></h2>
            <h3><?php the_sub_field('h3'); ?></h3>
            <p><?php the_sub_field('p'); ?></p>
            <div class="button">
                <button><?php the_sub_field('btn'); ?></button>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- End Support -->

    <!-- Gallery -->
<?php if(have_rows('gallery') ) : ?>
    <?php while(have_rows('gallery') ) : the_row(); ?>
    <section class="gallery">
        <div class="gallery-items1">
            <img src="<?php $path = get_sub_field('path');echo $path['url']; ?>" alt="gallery-pics" class="img-fluid kids">
            <img src="<?php $path1 = get_sub_field('path1');echo $path1['url']; ?>" alt="gallery-pics" class="img-fluid lincon">
        </div>
        <div class="gallery-items2">
            <img src="<?php $path2 = get_sub_field('path2');echo $path2['url']; ?>" alt="gallery-pics" class="img-fluid">
            <div class="gallery-text">
                <h2><?php the_sub_field('h2'); ?></h2>
                <p><?php the_sub_field('p'); ?></p>
                <div class="button">
                    <button> <?php the_sub_field('btn'); ?> </button>
                </div>
            </div>
        </div>
        <div class="gallery-items3">
            <img src="<?php $path3 = get_sub_field('path3');echo $path3['url']; ?> " alt="gallery-pics" class="img-fluid">
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>
    <!-- End Gallery -->

    <!-- Team -->
    <?php if ( have_rows( 'team' ) ) : ?>
        <?php while ( have_rows( 'team' ) ) : the_row(); ?>
            <section class="team">
                <?php if ( have_rows( 'team1' ) ) : ?>
                    <?php while ( have_rows( 'team1' ) ) : the_row(); ?>
                        <div class="team-text">
                            <h2><?php the_sub_field( 'h2' ); ?></h2>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <div class="button">
                                <button><?php the_sub_field('btn'); ?></button>
                            </div>
                            <img src="<?php $img = get_sub_field('img');echo $img['url']; ?>" alt="team-img" class="img-fluid smile">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if ( have_rows( 'team1_copy' ) ) : ?>
                    <?php while ( have_rows( 'team1_copy' ) ) : the_row(); ?>
                        <div class="team-inner">
                            <h2><?php the_sub_field('h2'); ?></h2>
                            <p><?php the_sub_field('p'); ?></p>
                            <div class="button">
                                <button><?php the_sub_field('btn'); ?></button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Team -->

    <!-- Volunteer -->
    <?php if ( have_rows( 'volu' ) ) : ?>
        <?php while ( have_rows( 'volu' ) ) : the_row(); ?>
            <section class="volunteer">
                <?php if ( have_rows( 'text' ) ) : ?>
                    <?php while ( have_rows( 'text' ) ) : the_row(); ?>
                        <div class="volunteer-text">
                            <h2><?php the_sub_field( 'h2' ); ?></h2>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <div class="button">
                                <button> <?php the_sub_field( 'btn' ); ?></button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="volunteer-pic" class="img-fluid">

                <?php if ( have_rows( 'text_copy' ) ) : ?>
                    <?php while ( have_rows( 'text_copy' ) ) : the_row(); ?>
                        <div class="volunteer-text second">
                            <h2><?php the_sub_field( 'h2' ); ?></h2>
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <div class="button">
                                <button> <?php the_sub_field( 'btn' ); ?></button>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Volunteer -->
      
   <?php get_footer();?>