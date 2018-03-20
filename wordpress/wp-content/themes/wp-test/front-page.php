<?php /* Template Name: Home Page */ get_header(); ?>

	  <section role="main" class="main__block">

	    <div class="main__form--wrap">
	      <div class="form__title-wrap">
	        <p class="title__first"><?php the_field('form_title'); ?></p>
	        <p class="title__second"><?php the_field('form_undertitle'); ?></p>
	      </div>

	      <?php echo do_shortcode('[contact-form-7 id="72" title="Form"]'); ?>

	      <p class="main__location--wrap"><?php the_field('form_location'); ?></p>
	    </div><!-- /main__form--wrap -->

	    <div class="main__block--bottom">
	      <div class="container">
	        <div class="row">

	          <div class="col-md-4 col-sm-4 bottom__block--left">
	          	<?php if( have_rows('grey_square') ): while ( have_rows('grey_square') ) : the_row(); ?>
		            <div class="block__left">
		              <div class="grey__square"></div>
		              <div class="text__wrap">
		                <h4><?php the_sub_field('grey_square_text'); ?></h4>
		                <p><?php the_sub_field('grey_square_text_second'); ?></p>
		              </div>
		            </div>
	            <?php endwhile; endif; ?>
	          </div>

	          <div class="col-md-8 col-sm-8 bottom__block--right">
	            <div class="right__text--wrap">
	              <h4><?php the_field('right_field_title'); ?></h4>
	              <p><?php the_field('right_field_description'); ?>י</p>
	            </div>
	          </div>

	        </div><!-- /.row -->
	      </div><!-- /.container -->
	    </div><!-- /.main__block--bottom -->
	    
	  </section><!-- /section -->
	</div><!-- /wrapper -->

<?php get_footer(); ?>
