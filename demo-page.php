<?php 
/*************************************************************
    * Template Name : Demo Page Template
    * The Template for displaying demo pages
***************************************************************/

get_header();

if( have_posts() ) {
    while( have_posts() ) {
        the_post();
        ?>

        <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article>

    <?php
    }
}
else {
    // what happens if there are no posts
}


function foo() {
    ?>
    <div>
        <?php
        echo esc_html(
            bar(
                $baz,
                $bat
            )
        );
        ?>
    </div>
    <?php
}


get_sidebar();
get_footer();
