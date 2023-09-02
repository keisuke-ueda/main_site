<!DOCTYPE html>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta description="" content="フィールドアップ。東京都で、WEBサイト作成、内装設計・工事、デザイン、メンタルサービス、省エネなど関連のないような異業種が合わさった総合サービス事業。各サービスの概要やコンテンツを詰め合わせたサイトになっています。楽しいコンテンツをどんどん追加していく予定です。">
		
		<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="google-site-verification" content="oA5STTqwO6v6TwvhIEKV_CIAyZN8lHGanT9pVhL_3D8" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    </head>

    <title>Field-UP|総合サービス</title>
    <body>
        <?php get_header("1");?>
        
        <div class="main-doc">
            <!-- スクロール -->
            

            <video src="<?php echo get_template_directory_uri();?>/img/main_site.mp4" muted autoplay playsinline loop style="width:100%;"></video>

            <div class="container">

            <h1 class="text-center text-primary title02">内装・システム・心理学・省エネが<br>異様で最高のコラボ</h1>

                <div class="row flexbox">

                    <div class="col-6 mt-5 box1 scroll_up">
                        <h2 class="text-center title02 Larger shadow">ニュース</h2>
                        <div class="text-center  mx-3 p-3 bg-white">

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

                    <div class="col-6 mt-5 box2 scroll_up">
                        <h2 class="text-center title02 Larger shadow">ブログ</h2>
                        <div class="text-center  mx-3 p-3 bg-white">

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
                
                <!-- バナー -->
                <div class="scroll_up mt-3">
                    <a title="Qualitas Plus Field-UP 上田敬介" href="https://www.qualitas-web.com/book1vgdb.html" target="_blank">
                        <img src="https://www.qualitas-web.com/banner/new-1-202309-m02zb.png" alt="Qualitas Plus Field-UP 上田敬介" width="350" height="240" border="0" class="d-block mx-auto"/>
                    </a>
                    <p class="text-center">この度、Qualitasに取り上げられました。</p>
                </div>

                <div class="scroll_up mt-3 ">
                    <a title="THE INNOVATOR Field-UP 上田敬介" href="https://the-innovator.jp/interviewees/ueda_keisuke/" target="_blank">
                        <img src="https://the-innovator.jp/img/banner/TI_banner01.jpg" alt="ザ・イノベーター" class="d-block mx-auto" width="50%"  border="0"/>
                    </a>
                </div>

                <div class="scroll_up mt-3 ">
                    <a title="CMPANY TNAK Field-UP 上田敬介" href="http://www.companytank.jp/interview/202309/16764/" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/img/16764_b.jpg" alt="CMPANY TNAK" class="d-block mx-auto" width="50%"  border="0"/>
                    </a>
                </div>

                <div class="scroll_up">
                    <h2 class="text-center title01 m-3 Larger shadow" id="title01">事業概要</h2>
                    <div class="text-center mx-right-5 mx-left-5 p-3 bg-white">
                        <p >主に4つの事業を軸としており、それぞれの事業単体だけでなく、相乗効果をもたらす今までにない全く新しい事業形態を目指しております。
                            <br>今この瞬間にも常に異常で特殊な成長を続けております。各事業の詳しい内容は事業展開をご覧ください。
                        </p>
                        <img src="<?php echo get_template_directory_uri();?>/img/jigyou.jpg" alt="Field-UP事業概要" class="d-block mx-auto mt-3 mb-3" style="width:70%;">
                    </div>
                </div>

                <div class="row mt-5 flexbox">
                    <h2 class="text-center title01 scroll_up Larger shadow" id="title02">事業展開</h2>

                    <div class="col-6 mt-3 box1 scroll_up">
                        <h2 class="text-center title02 Larger shadow">心理事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white">
                            <h3 class="text-center title03">サービス紹介</h3>
                            <table class="table border-striped mt-3">
                                <colgroup>
                                    <col class="col-md-4">
                                    <col class="col-md-8">
                                </colgroup>
                                <thead>
                                    <tr>
                                    <th scope="col" class="text-center">サービス名</th>
                                    <th scope="col" class="text-center">内容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center">メンタルヘルス</th>
                                        <th>カウンセリング、心理テストの実施</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">健康予防</th>
                                        <th>食事や健康にかかわるアドバイス、アロマ調合など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">ビジネスメンタル</th>
                                        <th>仕事に関わる相談</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">学習強化</th>
                                        <th>心理学を応用した学習方法や、メンタルの保ち方</th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://www.field-up.work/mental_field-up/" target=_blank class="text-center mt-4"><p class="text-center">心理事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/mental_site.png" alt="Field-UP心理事業" class="d-block mx-auto mt-3" style="width:100%;"></a>
                            <p class="mt-3">全国心理業連合会、日本カウンセリング学会に所属しており、米国認定資格NLPを取得。
                                <br>カウンセリング技術だけでなく、アロマや漢方、健康管理などの方面からもアドバイスを行うことができます。
                            </p>
                            <p>現代では無視できないストレスチェックや、目標達成をするための技術もレクチャーもできます。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box2 scroll_up">
                        <h2 class="text-center title02 Larger shadow">システム事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white">
                            <h3 class="text-center title03">サービス紹介</h3>
                            <table class="table border-striped mt-3">
                                <colgroup>
                                    <col class="col-md-4">
                                    <col class="col-md-8">
                                </colgroup>
                                <thead>
                                    <tr>
                                    <th scope="col" class="text-center">サービス名</th>
                                    <th scope="col" class="text-center">内容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center">WEBサイト制作</th>
                                        <th>フレームワークやCMSを利用したサイトの制作</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">アプリ開発</th>
                                        <th>独自のWEBアプリや、スマホアプリを開発</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">業務効率化</th>
                                        <th>RPAやVBA等を活用した業務の効率化</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">システムコンサル</th>
                                        <th>中小規模のシステムの構築や、サーバー等の不具合などの対応</th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://www.field-up.work/field-up.system/" target=_blank class="text-center mt-4"><p class="text-center">システム事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/system_site.png" alt="Field-UPシステム事業" class="d-block mx-auto mt-3" style="width:100%;"></a>
                            <p class="mt-3">業務委託や、請負でWEBサイト制作からアプリ開発、サーバー周辺業務も丸っと行います。
                                <br>費用不足の場合でも、何らかの方法で目的を実現させるための手段を考案します。
                            </p>
                            <p>まずは気軽にお問い合わせください。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box1 scroll_up">
                        <h2 class="text-center title02 Larger shadow">省エネ事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white">
                            <h3 class="text-center title03">サービス紹介</h3>
                            <table class="table border-striped mt-3">
                                <colgroup>
                                    <col class="col-md-4">
                                    <col class="col-md-8">
                                </colgroup>
                                <thead>
                                    <tr>
                                    <th scope="col" class="text-center">サービス名</th>
                                    <th scope="col" class="text-center">内容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center">省エネコンサル</th>
                                        <th>現場診断からフローシートの作成、改善提案</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">タンク・圧力容器設計制作</th>
                                        <th>タンクや、圧力容器、配管、電気工事など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">省エネシステム導入</th>
                                        <th>デマンド機器工事、比熱低減工事、モーター省エネ工事など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">場内図面作図</th>
                                        <th>業務効率化に必要な工場な図面を作図し、動線の整理など</th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://www.field-up.work/energy/" target=_blank class="text-center mt-4"><p class="text-center">省エネ事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/ene_site.png" alt="Field-UP`省エネ事業" class="d-block mx-auto mt-3" style="width:100%;"></a>
                            <p class="mt-3">エネルギー管理士として多くの現場に携わった知識、技術を生かして
                                <br>昨今問題になっているエネルギー原価の低減のお手伝いをいたします。
                            </p>
                            <p>現場診断・設計段階で関わりますが、業者の紹介まで実施できます。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box2 scroll_up">
                        <h2 class="text-center title02 Larger shadow">内装事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white">
                            <h3 class="text-center title03">サービス紹介</h3>
                            <table class="table border-striped mt-3">
                                <colgroup>
                                    <col class="col-md-4">
                                    <col class="col-md-8">
                                </colgroup>
                                <thead>
                                    <tr>
                                    <th scope="col" class="text-center">サービス名</th>
                                    <th scope="col" class="text-center">内容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center">内装設計・デザイン</th>
                                        <th>工事をするために必要な図面や、デザイン制作など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">各種什器・家具販売</th>
                                        <th>デスクや、書庫、倉庫用品など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">工事</th>
                                        <th>内装、パーティション、電気、ネットワークや通信など</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">移転</th>
                                        <th>店舗やオフィスの移転など</th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://www.field-up.work/officeinterior/" target=_blank class="text-center mt-4"><p class="text-center">内装事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/naisou_site.png" alt="Field-UP内装事業" class="d-block mx-auto mt-3" style="width:100%;"></a>
                            <p class="mt-3">入居から移転、退去まで丸っと一貫して、プランニングいたします。
                                <br>2次元の図面だけでなく、3Dモデルによる工事イメージのご提案から知り合わせ、VRを使った工事前に仮想空間での体験もできます。
                            </p>
                            <p>VR空間を体感したい、作ってほしいというという方も是非お声がけください。</p>
                        </div>
                    </div>

                </div>

                <div class="row mt-5 mb-3 flexbox">
                    <h2 class="text-center title01 mb-3 scroll_up Larger shadow" id="title03">代表メッセージ・夢</h2>

                    <div class="col-8 box1"> 
                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">メッセージ</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white scroll_up">
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

                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">夢</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white scroll_up">
                            <p>カウンセラーの仕事をしてきて、悩みを打ち明ける場所がない、迷いを誰かに相談できない人が世の中にはいっぱいいるという事態を目の当たりにしました。</p>
                            <p>子供から大人まで、年齢や職業問わず<b class="text-primary">人の活動を止めてしまっているのはメンタル</b>が大きくかかわっていることは疑いようもない事実です。</p>
                            <p>相談すること自体に抵抗がある人も多くいるため、<b class="text-primary">誰もが安心していろんな相談を持ち掛けてくれる場や仕組みを作ることが私の夢</b>です。</p>
                            <p>相談を受けた内容の中で、自身の技術で助けになることがあれば、丸っと任せてもらえたら尚嬉しいです。</p>
                        </div>

                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">プロフィール</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white scroll_up">
                            <p>岐阜県岐阜市出身</p>
                            <p>大学の理工学部卒業後、某設備機械メーカーに設計士として入社とほぼ同時に心理学の資格学校に入学。
                                <br>内装・通信・家具など様々な設計業に携わりながらコンサル会社へ転職し、心理士としても活動。
                            </p>
                            <p>コロナが普及し、世の中でカウンセリング求められる中で、独立を決意し、事業 Field-UP(屋号)を立ち上げる。
                                <br>過去やってきたことを全て生かしながら手の届く範囲の困っている方に対して、ひたすら真摯なサービス提供を心掛けております。
                            </p>
                        </div>

                    </div>

                    <div class="col-4 box2 scroll_up">
                        <img src="<?php echo get_template_directory_uri();?>/img/representative.jpg" alt="聴くプロ上田敬介" class="d-block mx-auto mt-3" style="width:50%;">
                        <p class="text-center title03">聴くプロ(心理カウンセラー)</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/vtuber.jpg" alt="Vtuber上田敬介" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">Vtuber</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/kaitai-5.jpg" alt="工事人上田敬介" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">工事人</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/create.jpg" alt="エンジニア・クリエーター・設計士上田敬介" class="d-block mx-auto mt-3" style="width:90%;">
                        <p class="text-center title03">エンジニア・設計士<br>クリエイター</p>
                    </div>

                </div>

                <div class="row mt-3 mb-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title04">ちょい見せ講座</h2>
                    <p class="text-center">思考問題や、講座の資料をちょっとだけお見せします</p>
                    <video src="<?php echo get_template_directory_uri();?>/img/rest.mp4"muted autoplay playsinline loop style="width:100%;"></video>
                </div>

                <!-- SNS コンテver -->
                <!-- <div class="row mt-3 mb-5 scroll_up">
                    <h2 class="text-center title01" id="title05">公式SNS</h2>
                    <div class="col-md-3">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100068565794040&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="col-md-3">
                        <blockquote class="twitter-tweet"><p lang="ja" dir="ltr">夢分析シリーズ <a href="https://twitter.com/hashtag/%E3%83%A1%E3%83%B3%E3%82%BF%E3%83%AB?src=hash&amp;ref_src=twsrc%5Etfw">#メンタル</a> <a href="https://twitter.com/hashtag/%E5%A4%A2%E5%88%86%E6%9E%90?src=hash&amp;ref_src=twsrc%5Etfw">#夢分析</a> <a href="https://twitter.com/hashtag/%E5%BF%83%E7%90%86%E3%83%86%E3%82%B9%E3%83%88?src=hash&amp;ref_src=twsrc%5Etfw">#心理テスト</a>==公式チャンネル== <a href="https://t.co/FUX3KgmRjV">https://t.co/FUX3KgmRjV</a> ～総合サービスサイト～ <a href="https://t.co/vxEseKIfcw">https://t.co/vxEseKIfcw</a> ～心理事業サイト～ <a href="https://t.co/x3v8ACXK7c">https://t.co/x3v8ACXK7c</a> <a href="https://t.co/4fTrDO8qRg">pic.twitter.com/4fTrDO8qRg</a></p>&mdash; Field-UP (@FieldUP_X) <a href="https://twitter.com/FieldUP_X/status/1689569778736803840?ref_src=twsrc%5Etfw">August 10, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="col-md-3">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/CvheyjXPocv/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CvheyjXPocv/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">この投稿をInstagramで見る</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CvheyjXPocv/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Field Up(@fieldupx)がシェアした投稿</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                    <div class="col-md-3">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@field_up_x/video/7266834287549320456" data-video-id="7266834287549320456" style="max-width: 605px;min-width: 325px;" >
                            <section>
                                <a target="_blank" title="@field_up_x" href="https://www.tiktok.com/@field_up_x?refer=embed">@field_up_x</a> ちょこっとプログラミング <a title="プログラミング" target="_blank" href="https://www.tiktok.com/tag/%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0?refer=embed">#プログラミング</a>  <a title="システム" target="_blank" href="https://www.tiktok.com/tag/%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0?refer=embed">#システム</a>  <a title="豆知識" target="_blank" href="https://www.tiktok.com/tag/%E8%B1%86%E7%9F%A5%E8%AD%98?refer=embed">#豆知識</a> <a target="_blank" title="♬ Overdose - なとり" href="https://www.tiktok.com/music/Overdose-7133106503921174530?refer=embed">♬ Overdose - なとり</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div> -->

                <!-- SNS ボタンver-->
                <!-- PC -->
                <div class="row mt-3 mb-5 scroll_up pc-view">
                    <h2 class="text-center title01 Larger shadow" id="title05">公式SNS</h2>
                    <p class="text-center">スキルアップのためのコンテンツや、ためになるカン、コツのノウハウを定期大好評公開中!!</p>
                    <div class="row d-block mx-auto " style="width:30%;">
                            <div class="col">
                                <a href="https://www.youtube.com/@byfield-up7929" target=_blank>
                                    <img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="YouTubeチャンネル" class="mt-3 Larger shadow">
                                </a>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="https://www.facebook.com/profile.php?id=100068565794040&sk=reels_tab" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Facebook.png" alt="facebook" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.instagram.com/fieldupx/" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Instagram.png" alt="instagram" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.tiktok.com/@field_up_x?lang=ja-JP" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/TikTok.png" alt="TikTok" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://twitter.com/FieldUP_X" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Twitter.png" alt="teitter" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SP -->
                <div class="row mt-3 mb-5 scroll_up sp-view">
                    <h2 class="text-center title01 Larger shadow" id="title05">公式SNS</h2>
                    <p class="text-center mt-5">スキルアップのためのコンテンツや、ためになるカン、コツのノウハウを定期大好評公開中!!</p>
                    
                    <div class="ms-5 me-5 mb-3">
                        <div class="">
                            <a href="https://www.youtube.com/@byfield-up7929" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="YouTubeチャンネル" class="mt-3 Larger shadow">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.facebook.com/profile.php?id=100068565794040&sk=reels_tab" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Facebook.png" alt="facebook" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.instagram.com/fieldupx/" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Instagram.png" alt="instagram" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.tiktok.com/@field_up_x?lang=ja-JP" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/TikTok.png" alt="TikTok" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://twitter.com/FieldUP_X" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Twitter.png" alt="teitter" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                    </div>
                </div>




                
                <!-- ストアカ -->
                <div class="row scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title05">ストリートアカデミー</h2>
                    <p class="text-center">オンラインでいろいろなことを学べるプラットフォーム
                        <br>ここで<b class="text-primary">オンライン講師</b>をしています
                    </p>
                    <p class="text-center">講座だけでなく、<b class="text-primary">気軽にいろんなことを相談できる窓口</b>もあります</p>
                    <a href="https://www.street-academy.com/steachers/465170" target=_blank class="text-center"><p class="text-center">先生ページはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/sutoaka.jpg" alt="ストアカ先生ページ" class="d-block mx-auto mt-3" style="width:60%;"></a>
                    <a href="https://www.street-academy.com/onetime/services/2949" target=_blank class="text-center mt-4"><p class="text-center">相談コーナーはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/mental.jpg" alt="ストアカ相談コーナー" class="d-block mx-auto mt-3" style="width:60%;"></a>
                </div>

                <div class="row flexbox mt-5">
                    <h2 class="text-center title01 scroll_up Larger shadow" id="title06">参考実績</h2>
                    <table class="table border-striped mx-3 bg-white d-block mx-auto scroll_up">
                        <colgroup>
                            <col class="col-md-2 sp-table1">
                            <col class="col-md-4 sp-table2">
                            <col class="col-md-6 sp-table3">
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

                <div class="row mt-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title07">ギャラリー</h2>

                    <div class="col-9 d-block mx-auto">
                        <div class="slider">
                            <!-- オンライン講座 -->
                            <div>
                                <p class="text-center title03">オンライン講座</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/brainpower.jpg" alt="脳力向上講座" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">オンライン講座</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/JW_CAD.jpg" alt="JW_CAD講座" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">オンライン講座</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/HTML_CSS.png" alt="HTML・CSS講座" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">オンライン講座</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/Ecxel_1.jpg" alt="初級Excel講座" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- 配線整理・ネットワーク改善 -->
                            <div>
                                <p class="text-center title03">配線整理</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/net-1.jpg" alt="配線現場" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">ネットワーク構成図</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/net-2.jpg" alt="配線構成図" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- 防犯カメラ工事 -->
                            <div>
                                <p class="text-center title03">防犯カメラ設定画面</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/camera-1.jpg" alt="防犯カメラ設定画面" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">配線工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/camera-2.jpg" alt="防犯カメラ" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- 映像撮影 -->
                            <div>
                                <p class="text-center title03">映像撮影現場</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/movies.jpg" alt="撮影現場" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- チラシ・ポイントカードデザイン/制作 -->
                            <div>
                                <p class="text-center title03">飲食店ポイントカード制作</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/digin1.jpg" alt="飲食店ポイントカード" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">飲食店チラシ制作</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/digin2.jpg" alt="飲食店チラシ" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- タンク工事・省エネコンサル -->
                            <div>
                                <p class="text-center title03">軟水タンク製作図</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/tank-2.jpg" alt="軟水タンク製作図" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">現地軟水タンク撤去</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/tank-1.jpg" alt="現場軟水タンク" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">エネルギーフローシート作図</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/fow.jpg" alt="エネルギーフローシート" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- 移転業 -->
                            <div>
                                <p class="text-center title03">オフィス移転作業</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/iten.jpg" alt="オフィス移転" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- エアコン工事 -->
                            <div>
                                <p class="text-center title03">冷媒管接続工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/air-1.jpg" alt="冷媒管接続工事" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">室外機設置</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/air-2.jpg" alt="室外機設置" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">室外機配線工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/air-3.jpg" alt="室外機配線工事" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">冷媒管切り離し</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/air-4.jpg" alt="冷媒管切り離し" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- 廃棄・解体 -->
                            <div>
                                <p class="text-center title03">鉄骨切断</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kaitai-4.jpg" alt="鉄骨切断" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">書庫解体 1</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kaitai-2.jpg" alt="書庫解体1" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">廃棄鉄骨材など</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kaitai-3.jpg" alt="廃棄鉄骨材など" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">書庫解体 2</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kaitai-1.jpg" alt="書庫解体2" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- デマンド機器工事 -->
                            <div>
                                <p class="text-center title03">デマンド機器設置位確認</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/demand-1.jpg" alt="デマンド機器設置位" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">デマンド機器配線</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/demand-2.jpg" alt="デマンド機器配線" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <!-- パーティション工事 -->
                            <div>
                                <p class="text-center title03">木目調パーティション工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/door1.jpg" alt="木目調パーティション工事" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">アルミパーティション工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/apt-1.jpg" alt="アルミパーティション工事" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">地レール工事</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/apt-2.jpg" alt="地レール工事" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>
                            <div>
                                <p class="text-center title03">金物加工</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/apt-3.jpg" alt="金物加工" class="d-block mx-auto mt-3" style="width:100%;">
                            </div>    
                            <!-- 飲食コンサル -->
                            <div>
                                <p class="text-center title03">飲食コンサル</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/nobu.jpg" alt="のぶちゃん大塚店" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
                            <!-- 防災工事 -->
                            <div>
                                <p class="text-center title03">廃棄感知器</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kantiki-1.jpg" alt="既存感知器" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
                            <div>
                                <p class="text-center title03">既存感知器交換</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/kantiki-2.jpg" alt="感知器交換" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
                            <!-- 3Dモデリング -->
                            <div>
                                <p class="text-center title03">休憩バースペースモデル</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/model-1.jpg" alt="休憩バースペース3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
                            <div>
                                <p class="text-center title03">会議室モデル</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/model-2.jpg" alt="会議室3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
                                <div>
                                <p class="text-center title03">エントランスモデル</p>
                                <img src="<?php echo get_template_directory_uri();?>/img/model-3.jpg" alt="エントランス3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                            </div> 
 
                        </div>
                    </div>
                </div>

                <!-- YouTubeチャンネル -->
                <!-- <div class="scroll_up">
                    <h2 class="text-center title01" id="title08">Youtubeチャンネル</h2>
                    <div class="text-center  mx-right-5 mx-left-5 p-5">
                        <p>ありとあらゆる業種に関わるスキルアップに役立つ動画を多数配信中!!
                            <br>是非参考にしてください!!
                        </p>
                        <a href="https://www.youtube.com/channel/UCGZ9tx2keMqtCSL_UW1vyRw" target=_blank><p>Youtubeチャンネルはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/youtube_home.jpg" alt="Youtubeチャンネル" class="d-block mx-auto mt-3" style="width:100%;"></a>
                        <h3 class="text-center mt-5">最近投稿された動画</h3>

                        <div class="blogbox">
                            <div class="blog_wrap">

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
                            
                            </div>
                        </div>
                    </div>
                </div> -->
                
                <div class="mt-5 pb-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title09">お問い合わせ</h2>
                    <div class="text-center mx-right-5 mx-left-5 d-block mx-auto">
                        <p>何かお困りごとがあれば、先ずはお問い合わせください
                            <br>解決の糸口を見つけ、お手伝いいたします
                        </p>
                        <!-- <a href="<?php bloginfo('url')?>/contact">コチラからお問い合わせフォームへ</a> -->
                        <?php echo do_shortcode('[contact-form-7 id="9" title="コンタクトフォーム 1"]'); ?>
                    </div>
                </div>

            </div>
        </div>
        <div id="page_top"><a href="#">TOP</a></div>
    </body>

    <?php get_footer();?>

    <script>
        jQuery(function() {
  var appear = false;
  var pagetop = $('#page_top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {  //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate({
          'bottom': '30px' //下から50pxの位置に
        }, 300); //0.3秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate({
          'bottom': '-80px' //下から-50pxの位置に
        }, 300); //0.3秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 300); //0.3秒かけてトップへ戻る
    return false;
  });
});

    </script>