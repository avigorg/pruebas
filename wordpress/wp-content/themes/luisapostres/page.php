<?php get_header();?>
<?php get_template_part('menu'); ?>

<?php if ( have_posts()) : while (have_posts()) : the_post(); ?> 

<?php  the_content(); ?>

 <?php endwhile; else: ?>
        <div class="col-md-12">
            <h3>Lo sentimos! </h3>
            <p> Estamos cargando la informacion, intentelo mas tarde.</p>
        </div>
<?php endif;?>



<?php get_footer(); ?>