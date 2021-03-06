<?php get_header(); ?>

	<main role="main">
	<!-- section -->
		<section class="hero card">
			<div class="container centered flex-row">
				<div class="flex-col col-md-7">
					<h1><?php the_title(); ?></h1>
					<div class="large mb-3">
						<?php the_field('card_description'); ?>
					</div>
					<div class="flex-row mb-3">
						<div class="flex-col">
							<h2>Serving suggestion</h2>
							<?php the_field('serving_suggestions'); ?>
						</div>
						<div class="flex-col">
							<h2>Pairs well with</h2>
							<?php the_field('pairs_with'); ?>
						</div>
					</div>
					<h2>Recipes</h2>
					<div class="unstyled-list">
					<?php 
						$args = array('child_of' => 1359);
						$post_categories = wp_get_post_categories( get_the_ID($args) );
						foreach($post_categories as $c){
						    $cat = get_category( $c );
						    if ($cat->name == 'Look In' || $cat->name == 'Look Out' || $cat->name == 'Look Forward' || $cat->name == 'Expand' || $cat->name == 'Focus' || $cat->name== 'Cards') {
						    	//nada
						    } else {
						    	$cat_name = ucfirst($cat->name);
							    echo "<p>" . $cat_name . "</p>";
							}
					}?>	
					</div>
					<a class="recipe-cta" href="/recipes">View recipes</a>
				</div>
				<div class="styled-card">
					<p class="tag" data-category="<?php 
			    	$args = array('child_of' => 1358);
					$post_categories = wp_get_post_categories( get_the_ID($args) );
					foreach($post_categories as $c){
					    $cat = get_category( $c );
					    if ($cat->name == 'Look In' || $cat->name == 'Look Out' || $cat->name == 'Look Forward' || $cat->name == 'Expand' || $cat->name == 'Focus') {
					    	$cat_name = ucfirst($cat->name);
						    echo $cat_name;
					    } else {
					    	//do nothing
						}
					}?>" >
					<?php 
						$args = array('child_of' => 1358);
						$post_categories = wp_get_post_categories( get_the_ID($args) );
						foreach($post_categories as $c){
						    $cat = get_category( $c );
						    if ($cat->name == 'Look In' || $cat->name == 'Look Out' || $cat->name == 'Look Forward' || $cat->name == 'Expand' || $cat->name == 'Focus') {
						    	$cat_name = ucfirst($cat->name);
							    echo $cat_name;
						    } else {
						    	//do nothing
							}
					}?>	
					</p>
					<h2>How to do it:</h2>
					<?php the_field('how_to_do_it'); ?>
					<div class="footer">
						<h3>Success looks like:</h3>
						<?php the_field('success'); ?>
					</div>
				</div>
			</div>
		</section>

		<section class="container centered spacer">
			<h2 class="underline text-center">Additional resources</h2>
			<div class="flex-row resources">
				<div class="resource">
					<?php the_field('resource_1'); ?>
				</div>
				<div class="resource">
					<?php the_field('resource_2'); ?>
				</div>
				<div class="resource">
					<?php the_field('resource_3'); ?>
				</div>
				<div class="resource">
					<?php the_field('resource_4'); ?>
				</div>
				<div class="resource">
					<?php the_field('resource_5'); ?>
				</div>
			</div>
		</section>
	<!-- /section -->
	</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.resource a').attr('target','_blank');
</script>
<?php get_footer(); ?>
