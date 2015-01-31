<?php get_header(); ?>
<body id="top">

    <!-- Header -->
    <header id="header">
        <a href="#" class="image avatar"><img src="<?php echo get_template_directory_uri() ?>/images/avatar.jpg" alt="" /></a>
        <h1><strong>I am Strata</strong>, a super simple<br />
            responsive site template freebie<br />
            crafted by <a href="http://localhost/wp_class/">HTML5 UP</a>.</h1>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <?php echo get_the_date(); ?>
                <header class="major">
                    <?php the_title('<h2>', '</h2>'); ?>
                </header>
                <?php the_excerpt(); ?>
                <?php if (has_post_thumbnail()) the_post_thumbnail("newsize"); ?>
                <?php the_content(); ?>
             

                <?php
            }
            ?>
        </section>



    </div>

    <?php get_footer(); ?>