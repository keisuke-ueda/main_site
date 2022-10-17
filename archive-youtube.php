<?php
/*
Template Name: youtube
*/
?>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta description="" content="Youtubeチャンネルに上がった動画をピックアップしてけいさいしていきます。チャンネルへのリンクもあるので、是非チェンネル登録と高評価をお願いします。">
		<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>

    <title>Field-UP|Youtube一覧</title>

    <body class="body">
        <?php get_header("2");?>
        
        <main class="main-doc">
 
            <div class="col-8 mx-auto">

                <h1 class="text-center pt-5">Youtube一覧</h1>

                <div>
                    <p>ありとあらゆる業種に関わるスキルアップに役立つ動画を多数配信中!!
                    <br>是非参考にしてください!!
                    </p>
                    <a href="https://www.youtube.com/channel/UCGZ9tx2keMqtCSL_UW1vyRw" target=_blank><p>Youtubeチャンネルはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/youtube_home.jpg" alt="Youtubeチャンネル" class="d-block mx-auto mt-3" style="width:100%;"></a>
                </div>

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

        </main>

    </body>

    <?php get_footer();?>