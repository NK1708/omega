<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title__value big gb">Новости</h2>
            </div>
        </div>
    </div>
</section>

<section class="news-list">
    <div class="container">
        <div class="row">
            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
            <div class="news-list__item col-12 col-md-6 col-lg-4">
                <div class="news-list__inner">
                    <div class="news-list__title gb"><?php the_title(); ?></div>
                    <div class="news-list__img" style="background-image: url('<?php
                    the_post_thumbnail_url( 'full' );
                    ?>'"></div>
                    <div class="news-list__text"><?php the_content(); ?></div>
                    <div class="news-list__bottom">
                        <div class="news-list__date gb"><?php the_date(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="btn news-list__btn">Читать</a>
                    </div>
                </div>
            </div>
            <?php } /* конец while */ ?>
                <?php
            } // конец if
            else
                echo "<h2>Записей нет.</h2>"; ?>
            <div class="col-12">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
