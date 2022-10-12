<?php
/*
Template Name: ブログページ
*/
?>

<!DOCTYPE html>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- オリジナルスタイルシート -->
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">

        <title><?php the_title(); ?></title>

    </head>

    <body>
        <?php get_header("2");?>

        <main class="main-doc pt-5">
            <div class="col-8 mx-auto">
                <div class="d-block mx-auto">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <p class="text-center"><?php the_content(); ?></p>
                </div>
            </div>
        </main>
        
    </body>

    <?php get_footer();?>
