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

        <title>Field-UP Main_site</title>

    </head>

    <body>
        <?php get_header("1");?>
        
        <div class="main-doc">
            <video src="<?php echo get_template_directory_uri();?>/img/25bec058-d27c-41fd-9bb8-4bc7d075ced2.mp4" controls muted autoplay playsinline loop style="width:100%;"></video>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-6">
                        <h2 class="text-center title02">ニュース</h2>
                        <div class="text-center border border-success mx-3 p-3">

                            <div>
                                <?php
                                    $args = array(
                                        'post_type' => 'news', //カスタム投稿タイプ名
                                        'posts_per_page' => 3 //取得する投稿の件数
                                    );
                                    
                                    $my_query = new WP_Query( $args );
                                ?>
                                
                                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                
                                <?php the_time( get_option( 'date_format' ) ); ?>
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                
                                <?php endwhile; ?>
                                
                                <?php wp_reset_postdata(); ?>

                                <a href="<?php bloginfo('url')?>/news">過去の一覧はコチラ</a>

                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <h2 class="text-center title02">ブログ</h2>
                        <div class="text-center border border-success mx-3 p-3">

                            <div>
                                <?php
                                    $args = array(
                                        'post_type' => '', //カスタム投稿タイプ名
                                        'posts_per_page' => 3 //取得する投稿の件数
                                    );
                                    
                                    $my_query = new WP_Query( $args );
                                ?>
                                
                                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                
                                <?php the_time( get_option( 'date_format' ) ); ?>
                                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                
                                <?php endwhile; ?>
                                
                                <?php wp_reset_postdata(); ?>

                                <a href="<?php bloginfo('url')?>/archive">過去の一覧はコチラ</a>
                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title01">事業概要</h1>
                    <div class="text-center border border-success mx-right-5 mx-left-5">
                        <p >test test test test
                            <br>test test test test
                        </p>
                        <img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;">
                    </div>
                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title02">事業展開</h1>

                    <div class="col-6">
                        <h2 class="text-center title02">心理事業</h2>
                        <div class="border border-success mx-right-5 mx-left-5 p-3">
                            <p>全国心理業連合会、日本カウンセリング学会に所属しており、米国認定資格NLPを取得。
                                <br>カウンセリング技術だけでなく、アロマや漢方、健康管理などの方面からもアドバイスを行うことができます。
                            </p>
                            <p>現代では無視できないストレスチェックや、目標達成をするための技術もレクチャーできます。</p>
                            <a href="" class=""><img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;"></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <h2 class="text-center title02">システム事業</h2>
                        <div class="text-center border border-success mx-right-5 mx-left-5">
                            <p >test test test test
                                <br>test test test test
                            </p>
                            <a href="" class=""><img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;"></a>
                        </div>
                    </div>

                    <div class="col-6 mt-4">
                        <h2 class="text-center title02">省エネ事業</h2>
                        <div class="text-center border border-success mx-right-5 mx-left-5">
                            <p >test test test test
                                <br>test test test test
                            </p>
                            <a href="" class=""><img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;"></a>
                        </div>
                    </div>

                    <div class="col-6 mt-4">
                        <h2 class="text-center title02">内装事業</h2>
                        <div class="text-center border border-success mx-right-5 mx-left-5">
                            <p >test test test test
                                <br>test test test test
                            </p>
                            <a href="" class=""><img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;"></a>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01 mb-3" id="title03">代表メッセージ・夢</h1>

                    <div class="col-8"> 
                        <h2 class="text-center title02 mt-3">メッセージ</h2>
                        <div class="border border-success mx-right-5 mx-left-5 p-3 bg-white">
                            <p >いろいろお伝えしたいことはありますが、先ず一番にお伝えしたことは
                                <br><b class="text-primary">私が『人』が大好き</b>
                                <br>ということです。
                                <br>だからこそ誰かのために何かしたいと常日頃思って仕事をしています。
                                <br>日本全体、世界の人を助けたいと大それたことは言えませんが、せめて関わった方皆さんのために自身のできることを精一杯取り組みます。
                            </p>
                            <p><b class="text-primary">より多くの方の悩みを聴いて、寄り添うために</b>心理学を学び心理士になりました。
                                <br><b class="text-primary">技術的に困っている方の助けになるために</b>設計・工事・デザイン・クリエイティブなスキルや資格を分野問わずに身に着けてきました。
                            </p>
                            <p>先ずは友人、その次は友人の隣人、さらにその先の人といった感じで徐々に人の助けになれる範囲を広げていきます!!
                            </p>
                        </div>

                        <h2 class="text-center title02 mt-3">夢</h2>
                        <div class="border border-success mx-right-5 mx-left-5 p-3 bg-white">
                            <p>カウンセラーの仕事をしてきて、悩みを打ち明けられない、迷いを誰かに相談できない人が世の中にはいっぱいいるという事態を目の当たりにしました。</p>
                            <p>子供から大人、職業問わず<b class="text-primary">人の活動を止めてしまっているのはメンタル</b>が大きくかかわっていることは疑いようもない事実です。</p>
                            <p>相談すること自体に抵抗がある人も多々あるので、<b class="text-primary">誰もが安心していろんな相談を持ち掛けてくれる場や仕組みを作ることが私の夢</b>です。</p>
                            <p>相談を受けた内容の中で、自身の技術で助けになることがあれば、丸っと任せてもらえたら尚嬉しいです。</p>
                        </div>

                        <h2 class="text-center title02 mt-3">プロフィール</h2>
                        <div class="border border-success mx-right-5 mx-left-5 p-3 bg-white">
                            <p>岐阜県岐阜市出身</p>
                            <p>大学の理工学部卒業後、某設備機械メーカーに設計士として入社とほぼ同時に心理学の資格学校に入学。
                                <br>内装・通信・家具など様々な設計業に携わりながらコンサル会社へ転職し、心理士としても活動。
                            </p>
                            <p>コロナが普及し、世の中でカウンセリング求められる中で、独立を決意し、事業 Field-UP(屋号)を立ち上げる。
                                <br>過去やってきたことを全て生かしながら手の届く範囲の困っている方に対して、ひたすら真摯なサービス提供を心掛けております。
                            </p>
                        </div>

                    </div>

                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri();?>/img/representative.jpg" alt="" class="d-block mx-auto mt-3" style="width:50%;">
                        <p class="text-center title03">聴くプロ(心理カウンセラー)</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/vtuber.jpg" alt="" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">Vtuber</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/kaitai-5.jpg" alt="" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">工事人</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/create.jpg" alt="" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">エンジニア・設計士<br>クリエイター</p>
                    </div>

                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title04">参考実績</h1>
                    <table class="table border-striped mt-3">
                        <colgroup>
                            <col class="col-md-2">
                            <col class="col-md-4">
                            <col class="col-md-6">
                        </colgroup>
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">事業区分</th>
                            <th scope="col">概要</th>
                            <th scope="col">現場事例</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center"><span class="mini_logo01">省エネ</span></th>
                                <th>設備改善設計・省エネコンサル</th>
                                <th>大型設備を伴う工場(某段ボール工場、スポーツ施設他)</th>
                            </tr>
                            <tr>
                                <th class="text-center"><span class="mini_logo02">システム</span></th>
                                <th>サイト作成・アプリ開発・不具合改善等</th>
                                <th>中小規模企業(某不動産会社、理髪店他)</th>
                            </tr>
                            <tr>
                                <th class="text-center"><span class="mini_logo03">内装</span></th>
                                <th>設計・デザイン・モデリング・工事、移転等</th>
                                <th>企業オフィス、中小規模店舗、一般宅等</th>
                            </tr>
                            <tr>
                                <th class="text-center"><span class="mini_logo04">心理</span></th>
                                <th>カウンセリング・心理テスト等</th>
                                <th>一般社団法人全国心理業連合会、日本カウンセリング学会等</th>
                            </tr>
                            <tr>
                                <th class="text-center"><span class="mini_logo05">その他</span></th>
                                <th>オンライン講師・Youtube配信等</th>
                                <th>ストアカ、Youtube、某クリエイティブ企業非常勤チーフ等</th>
                            </tr>
                        </tbody>
                        
                    </table>
                    <p class="text-end ex-text">※一部お客様名は伏せさせていただきます</p>
                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title05">ギャラリー</h1>

                    <div class="col-6">
                        <p class="text-center title03">オンライン講座</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/brainpower.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/JW_CAD.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/HTML_CSS.png" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/Ecxel_1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">配線整理・ネットワーク改善</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/net-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/net-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">防犯カメラ工事</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/camera-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/camera-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">映像撮影</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/movies.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">チラシ・ポイントカードデザイン/制作  </p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/digin1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/digin2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">タンク工事・省エネコンサル</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/tank-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/tank-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/fow.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">移転業</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/iten.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">エアコン工事</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/air-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/air-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/air-3.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/air-4.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <p class="text-center title03">廃棄・解体</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/kaitai-4.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/kaitai-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/kaitai-3.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/kaitai-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">デマンド機器工事</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/demand-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/demand-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">パーティション工事</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/door1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/apt-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/apt-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/apt-3.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">飲食コンサル</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/nobu.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">防災工事</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/kantiki-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/kantiki-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                    <div class="col-6">
                        <p class="text-center title03">3Dモデリング・デザイン</p>
                        <div class="slider">
                            <img src="<?php echo get_template_directory_uri();?>/img/model-1.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/model-2.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                            <img src="<?php echo get_template_directory_uri();?>/img/model-3.jpg" alt="" class="d-block mx-auto mt-3" style="width:100%;">
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title06">Youtubeチャンネル</h1>
                    <div class="text-center border border-success mx-right-5 mx-left-5 p-5">
                        <p>ありとあらゆる業種に関わるスキルアップに役立つ動画を多数配信中!!
                            <br>是非参考にしてください!!
                        </p>
                        <img src="<?php echo get_template_directory_uri();?>/img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:70%;">
                        <h3 class="text-center">最近投稿された動画</h3>

                        <div class="blogbox"><div class="blog_wrap">

                        <div>
                            <?php
                                $args = array(
                                    'post_type' => 'youtube', //カスタム投稿タイプ名
                                    'posts_per_page' => 3 //取得する投稿の件数
                                );
                                
                                $my_query = new WP_Query( $args );
                            ?>
                            
                            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                            
                            <div class="mt-3 if">
                                <?php the_time( get_option( 'date_format' ) );?>
                                <a href="<?php the_permalink(); ?>"><?php echo the_content(); ?></a>
                            </div>

                            <?php endwhile; ?>
                            
                            <?php wp_reset_postdata(); ?>

                            <a href="<?php bloginfo('url')?>/youtube">過去の一覧はコチラ</a>

                        </div>
                        
                        </div></div>
                    </div>
                </div>

                <div class="row mt-5">
                    <h1 class="text-center title01" id="title07">お問い合わせ</h1>
                    <div class="text-center mx-right-5 mx-left-5">
                        <p>何かお困りごとがあれば、先ずはお問い合わせください
                            <br>解決の糸口を見つけ、お手伝いいたします
                        </p>
                        <!-- <a href="<?php bloginfo('url')?>/contact">コチラからお問い合わせフォームへ</a> -->
                        <?php echo do_shortcode('[contact-form-7 id="9" title="コンタクトフォーム 1"]'); ?>
                    </div>
                </div>

            </div>
        </div>
    </body>

    <?php get_footer();?>