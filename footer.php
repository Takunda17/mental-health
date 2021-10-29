 <!-- Footer -->

 <?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
 <section class="footer">
 <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="footer-pic" class="img-fluid first">
        <img src="<?php $path2 = get_sub_field( 'path2' );echo $path2['url']; ?>" alt="footer-pic" class="img-fluid second">
        <img src="<?php $path3 = get_sub_field( 'path3' );echo $path3['url']; ?>" alt="footer-pic" class="img-fluid third">
        <div class="footer-inner">
            <h2><?php the_sub_field('h2'); ?></h2>
            <form action="">
                <input type="email" placeholder="<?php the_sub_field('input'); ?>" required>
                <button><?php the_sub_field('btn'); ?></button>
            </form>
            <div class="footer-text">
                <h3><?php the_sub_field('h3'); ?></h3>
                <p><?php the_sub_field('p'); ?></p>
                <p><?php the_sub_field('p_copy'); ?></p>
            </div>
            <div class="footer-text">
                <h3><?php the_sub_field('h3_copy'); ?></h3>
                <a href="#"><?php the_sub_field('a'); ?></a>
                <a href="#"><?php the_sub_field('a_copy'); ?></a>
                <a href="#"><?php the_sub_field('a_copy2'); ?></a>
            </div>
            <div class="footer-text">
                <h3><?php the_sub_field('h3_copy2'); ?></h3>
                <p><?php the_sub_field('pp'); ?></p>
                <p><?php the_sub_field('pp_copy'); ?></p>
                <p><?php the_sub_field('pp_copy2'); ?></p>
                <p><?php the_sub_field('pp_copy3'); ?></p>
            </div>
        </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>
    <!-- End Footer -->

    <?php wp_footer(); ?>
    <!-- Javascript -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>
