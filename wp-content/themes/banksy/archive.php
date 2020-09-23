<?php get_header(); 

	if(is_category()){
		$title = "Catégorie : " . single_tag_title('', false);
	}elseif(is_tag()){
		$title = "Étiquette : " . single_tag_title('', false);
	}elseif(is_search()){
		$title = "Vous avez recherché : " . get_search_query();
	}else{
		$title = 'Liste des articles';
	}

	$i = 1;

?>
	<h1 class="text-center"><?php echo $title; ?></h1>

	<section class="grid-container">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
		<article class="post tiers-<? echo $i; ?> m-auto">
			<a href="<?php the_permalink(); ?>">
				<div><?php the_post_thumbnail(); ?></div>
				<p class="text-center"><?php the_title(); ?></p>
			</a>
		</article>
		<? 
			if($i >= 3){
				$i = 1;
			}else{
				$i++;
			}
		?>
		<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>

<?
$query = new WP_Query(array(
	'post_type'     => 'post',
	'orderby'       => 'date',
	'order'         => 'DESC',
	'post_per_page' => 6,
	'category_name' => 'tableaux'
))

if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// content the_post()

endwhile; endif;