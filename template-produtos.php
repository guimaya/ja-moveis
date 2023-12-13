<?php /* Template Name: [Template] Produtos */ get_header(); ?>

<main>
    <section>
        <?php the_title();
        the_content()
        ?>
        <div>
            <?php
            $get_arguments = ['post_type' => 'dormitorio'];
            $wp_query = new WP_Query($get_arguments);
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
            ?>
                <div>
                    <h1><?php the_title() ?></h1>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
