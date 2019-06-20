<div class="hero">
	<div class="hero-text">
		<?php the_field('hero-text'); ?>
	</div>
	<?php if( get_field('hero-img') ): ?>
		<img src="<?php the_field('hero-img'); ?>" width="258" height="327" style="
    position: absolute;
    margin-top: 10px;
    "/>
	<?php endif; ?>
</div>



<?php get_header(); ?>




<?php if( get_field('new-album_') ): ?>

	<img src="<?php the_field('new-album_'); ?>" class="homepage-album" />

<?php endif; ?>



<div class="container">
	<div class="row">
		
	<?php if( get_field('music_gallery') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
	<?php if( get_field('music_gallery_copy') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy2') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy2'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy2'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy3') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy3'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy3'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
			<?php if( get_field('music_gallery_copy4') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy4'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy4'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy5') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy5'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy5'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy6') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy6'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy6'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy7') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy7'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy7'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy8') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy8'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy8'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
		
		<?php if( get_field('music_gallery_copy9') ): ?>
    	<div class="col-md-4 col-sm-4 padcol ">
        	<div class="col-3">
				<a href="#">
            		<img src="<?php the_field('music_gallery_copy9'); ?>" class="img-responsive" />
					<div class="col-pic">
						<h5><?php the_field('music_gallery_text_copy9'); ?></h5>
					</div>
				</a>
        	</div>
    	</div>
	<?php endif; ?>
	
	
		
	</div>	
</div>



<main role="main">
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<br class="clear">
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
	</section>
</main>


<?php get_sidebar(); ?>


<?php get_footer(); ?>
