<?php
/*
Template Name: news
*/
?>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta description="" content="Field-UPに関わる最新ニュースを掲載していきます。役立つ情報や、コンテンツの紹介など役立つ情報をどんどん掲載。">
		<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="google-site-verification" content="oA5STTqwO6v6TwvhIEKV_CIAyZN8lHGanT9pVhL_3D8" />
    </head>

    <title>Field-UP|ニュース一覧</title>

    <body>
        <?php get_header("2");?>
            
        <div id="wrapper">
            <canvas id="particle"></canvas>
        </div>

        <main class="main-doc">
            <div class="col-8 mx-auto">

                <h1 class="text-center pt-5">ニュース一覧</h1>

                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
                    $thumbnail = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : 'https://placehold.jp/150x150.png';
                ?>

                <article>
                    <a href="<?php the_permalink(); ?>">
                        <div class="mb-3">
                            <img src="<?php print $thumbnail; ?>" alt="">
                            <?php the_title(); ?>
                            <time datetime="the_time( 'Y-m-d' )"><?php the_time( 'Y.m.d' ); ?></time>
                        </div>
                    </a>
                </article>

                <?php endwhile; ?>

                <?php else : ?>
                何も投稿がありません。
                <?php endif; ?>

                <!-- ページネーション -->
                <div class="pagination">
                    <?php
                    set_query_var( 'paging_query', $wp_query );
                    get_template_part( 'paging' );
                    ?>
                </div> 
                
            </div>
            <?php get_footer();?>
    
        </main>

    </body>