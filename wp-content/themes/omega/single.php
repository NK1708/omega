<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-12">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>

			<h1 class="news__title gb"><?php the_title(); ?></h1>
				<div class="news__box">
					<div class="news__date gb"><?php the_date(); ?></div>
					<?php the_content(); ?>
				</div>

		<?// End the loop.
		endwhile;
		?>

			</div>
		</div>
	</div>
</section>

<section class="title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title__value gb">Похожие новости</h2>
            </div>
        </div>
    </div>
</section>

<section class="news-list news-list__dop">
    <div class="container">
        <div class="row">
            <?php $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args=array(
                    'category__in' => $category_ids, // Сортировка производится по категориям
                    'post__not_in' => array($post->ID),
                    'showposts'=>5, //Количество выводимых записей
                    'caller_get_posts'=>1); // Запрещаем повторение ссылок
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <div class="news-list__item col-12 col-md-6 col-lg-4">
                            <div class="news-list__inner">
                                <div class="news-list__title gb"><?php the_title(); ?></div>
                                <div class="news-list__img" style="background-image: url('<?php
                                the_post_thumbnail_url( 'full' );
                                ?>'"></div>
                                <div class="news-list__text"><?php the_content(); ?></div>
                                <div class="news-list__bottom">
                                    <div class="news-list__date gb">26.10.2018</div>
                                    <a href="<?php the_permalink() ?>" class="btn news-list__btn">Читать</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_query();
            }
            ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
