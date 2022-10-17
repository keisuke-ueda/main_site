<?php
/*
Template Name: お問い合わせ
*/
?>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <title><?php the_title(); ?>|Field-UP</title>

    <body>
        <?php get_header();?>
        
            <div class="main-doc">
                <h1 class="text-center"><?php the_title(); ?></h1>

                <div class="contact_box">
                <?php echo do_shortcode('[contact-form-7 id="9" title="コンタクトフォーム 1"]'); ?>

            </div>
    </body>

    <?php get_footer();?>