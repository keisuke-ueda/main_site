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

        <!-- 横スクロール -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

    </head>

    <title>Field-UP|総合サービス</title>
    <body>
        <?php get_header("1");?>
        <div id="wrapper">
            <canvas id="particle"></canvas>
        </div>
        <div class="main-doc">
            <!-- スクロール -->
            <div class="top-space"></div>
            <!-- <video src="<?php echo get_template_directory_uri();?>/img/main_site.mp4" muted autoplay playsinline loop style="width:100%;"></video> -->
            <div class="container">

                <h1 class="text-center text-primary title02 scroll_up">内装・システム・心理学・省エネが<br>異様で最高のコラボ</h1>

                <div class="row flexbox">

                    <div class="col-6 mt-5 box1 scroll_up">
                        <h2 class="text-center title02 Larger shadow">ニュース</h2>
                        <div class="text-center  mx-3 p-3 tec-bg">

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
                        <div class="text-center  mx-3 p-3 tec-bg">

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
                    <div class="text-center mx-right-5 mx-left-5 p-3 tec-bg">
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
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/mental_site.png" alt="Field-UP心理事業" class="d-block mx-auto mt-3" style="width:100%;">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.field-up.work/mental_field-up/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front3">心理サイトへ</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back3">悩みから学びへ</span>
                                    </span>
                                </a>
                            </div>
                            <!-- <a href="https://www.field-up.work/mental_field-up/" target=_blank class="text-center mt-4"><p class="text-center">心理事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/mental_site.png" alt="Field-UP心理事業" class="d-block mx-auto mt-3" style="width:100%;"></a> -->
                            <p class="mt-3">全国心理業連合会、日本カウンセリング学会に所属しており、米国認定資格NLPを取得。
                                <br>カウンセリング技術だけでなく、アロマや漢方、健康管理などの方面からもアドバイスを行うことができます。
                            </p>
                            <p>現代では無視できないストレスチェックや、目標達成をするための技術もレクチャーもできます。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box2 scroll_up">
                        <h2 class="text-center title02 Larger shadow">システム事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/system_site.png" alt="Field-UPシステム事業" class="d-block mx-auto mt-3" style="width:100%;">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.field-up.work/field-up.system/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front">システムサイトへ</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back">確かな技術力</span>
                                    </span>
                                </a>
                            </div>
                            <!-- <a href="https://www.field-up.work/field-up.system/" target=_blank class="text-center mt-4"><p class="text-center">システム事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/system_site.png" alt="Field-UPシステム事業" class="d-block mx-auto mt-3" style="width:100%;"></a> -->
                            <p class="mt-3">業務委託や、請負でWEBサイト制作からアプリ開発、サーバー周辺業務も丸っと行います。
                                <br>費用不足の場合でも、何らかの方法で目的を実現させるための手段を考案します。
                            </p>
                            <p>まずは気軽にお問い合わせください。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box1 scroll_up">
                        <h2 class="text-center title02 Larger shadow">省エネ事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/ene_site.png" alt="Field-UP`省エネ事業" class="d-block mx-auto mt-3" style="width:100%;">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.field-up.work/energy/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front2">省エネサイトへ</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back2">設備はお任せ</span>
                                    </span>
                                </a>
                            </div>
                            <!-- <a href="https://www.field-up.work/energy/" target=_blank class="text-center mt-4"><p class="text-center">省エネ事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/ene_site.png" alt="Field-UP`省エネ事業" class="d-block mx-auto mt-3" style="width:100%;"></a> -->
                            <p class="mt-3">エネルギー管理士として多くの現場に携わった知識、技術を生かして
                                <br>昨今問題になっているエネルギー原価の低減のお手伝いをいたします。
                            </p>
                            <p>現場診断・設計段階で関わりますが、業者の紹介まで実施できます。</p>
                        </div>
                    </div>

                    <div class="col-6 mt-3 box2 scroll_up">
                        <h2 class="text-center title02 Larger shadow">内装事業</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/naisou_site.png" alt="Field-UP内装事業" class="d-block mx-auto mt-3" style="width:100%;">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.field-up.work/officeinterior/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front4">内装サイトへ</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back4">機能的に美しく</span>
                                    </span>
                                </a>
                            </div>
                            <!-- <a href="https://www.field-up.work/officeinterior/" target=_blank class="text-center mt-4"><p class="text-center">内装事業サイトはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/naisou_site.png" alt="Field-UP内装事業" class="d-block mx-auto mt-3" style="width:100%;"></a> -->
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
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg scroll_up">
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
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg scroll_up">
                            <p>カウンセラーの仕事をしてきて、悩みを打ち明ける場所がない、迷いを誰かに相談できない人が世の中にはいっぱいいるという事態を目の当たりにしました。</p>
                            <p>子供から大人まで、年齢や職業問わず<b class="text-primary">人の活動を止めてしまっているのはメンタル</b>が大きくかかわっていることは疑いようもない事実です。</p>
                            <p>相談すること自体に抵抗がある人も多くいるため、<b class="text-primary">誰もが安心していろんな相談を持ち掛けてくれる場や仕組みを作ることが私の夢</b>です。</p>
                            <p>相談を受けた内容の中で、自身の技術で助けになることがあれば、丸っと任せてもらえたら尚嬉しいです。</p>
                        </div>

                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">プロフィール</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg scroll_up">
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

                <!-- 技術アピール -->
                <div class="row mt-5 pb-4 scroll_up tec-bg">
                    <h2 class="text-center title01 Larger shadow" id="title10">技術進化への挑戦</h2>
                    <div class="col-9 d-block mx-auto">
                        <p>今やデジタル技術を取り入れることが当たり前になり、自身の業界とどのように技術やノウハウを組合わせていくかという<b class="text-primary">インテリジェンスな部分に大きな価値</b>が見いだせる時代になってきました。<br>
                        弊社の強みは心理、内装、省エネという異なる分野の技術に精通しているだけでなく、それらの技術本質をとらえる思考力にあります。</P>
                        <p>その中で<b class="text-primary h1">Virtual Blend Thinking</b>を弊社は得意としています。Virtual(仮想)技術を各業界、各技術に混ぜ合わせて今ある価値以上の価値を生み出すことを実現させます。</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mt-1 mb-1">
                            <img src="<?php echo get_template_directory_uri();?>/img/Ecxel_1.jpg" alt="カウンセリング、学習との融合" class="d-block mx-auto" style="width:100%">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://field-up.work/VR_Library_new/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front">内装&nbsp;x&nbsp;Virtual</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back">仮想空間を体感</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <img src="<?php echo get_template_directory_uri();?>/img/Ecxel_1.jpg" alt="カウンセリング、学習との融合" class="d-block mx-auto" style="width:100%">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://field-up.work/VR_Library_new/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front2">学習&nbsp;x&nbsp;Virtual</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back2">Vtuberシステム</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <img src="<?php echo get_template_directory_uri();?>/img/Ecxel_1.jpg" alt="カウンセリング、学習との融合" class="d-block mx-auto" style="width:100%">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://field-up.work/VR_Library_new/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front3">設備&nbsp;x&nbsp;Virtual</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back3">不可視を可視化</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-9 d-block mx-auto">
                        <p>既にいくつかの分野で、Virtual技術の融合を実現できており、これからもさらに新しい方を求めて技術力の向上を図り続けます。<br>
                        自社技術に活用したいということがあれば、お気軽にお問い合わせください。</P>
                        <div class="text-center">
                            <a href="#title09" class="btn btn-flat" onclick="butotnClick()"><span>お問い合わせ</span></a>
                        </div>
                        
                    </div>
                    
                </div>



                <section class="side-scroll section row mt-4">
                    <div class="side-scroll-container container">
                        <h2 class="heading text-center title01 Larger shadow" id="title07">
                            ギャラリー
                        </h2>
                        <div class="side-scroll-list-wrapper">
                            <ul class="side-scroll-list">
                                <li class="side-scroll-item">
                                    <!-- <p class="text-center title03">オンライン講座</p> -->
                                    <!-- <img src="<?php echo get_template_directory_uri();?>/img/brainpower.jpg" alt="脳力向上講座" class="d-block mx-auto mt-3" style="width:100%;"> -->
                                </li>
                                <li class="side-scroll-item">Card</li>
                                <li class="side-scroll-item">Card</li>
                                <li class="side-scroll-item">Card</li>
                                <li class="side-scroll-item">Card</li>
                                <li class="side-scroll-item">Card</li>
                            </ul>
                        </div>
                    </div>
                </section>









                <!-- 実績 -->
                <div class="row mt-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title07">ギャラリー</h2>

                    <div class="col-9 d-block mx-auto">
                        <div class="slider">
                            <!-- オンライン講座 -->
                            <div>
                                
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

                <!-- 実績テーブル -->
                <div class="row flexbox mt-5">
                    <h2 class="text-center title01 scroll_up Larger shadow" id="title06">参考実績</h2>
                    <table class="table border-striped mx-3 tec-bg d-block mx-auto scroll_up">
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
                    <div class="text-center">
                        <a href="#title09" class="btn btn-flat" onclick="butotnClick()"><span>お問い合わせ</span></a>
                    </div>
                </div>

                <!-- YouTubeチャンネル -->
                <div class="scroll_up mt-4">
                    <h2 class="text-center title01" id="title08">Youtubeチャンネル</h2>
                    <div class="text-center  mx-right-5 mx-left-5 p-5 tec-bg">
                        <p>ありとあらゆる業種に関わるスキルアップに役立つ動画を多数配信中!!
                            <br>是非参考にしてください!!
                        </p>
                        <a href="https://www.youtube.com/channel/UCGZ9tx2keMqtCSL_UW1vyRw" target=_blank><p>Youtubeチャンネルはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/youtube_home.jpg" alt="Youtubeチャンネル" class="d-block mx-auto mt-3" style="width:100%;"></a>
                        
                        <!-- <h3 class="text-center mt-5">最近投稿された動画</h3> -->
                        <!-- <div class="blogbox">
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
                        </div> -->
                    </div>
                </div>

                <!-- ちょい見せ講座-->
                <div class="row mt-3 mb-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title04">ちょい見せ講座</h2>
                    <p class="text-center tec-bg">思考問題や、講座の資料をちょっとだけお見せします</p>
                    <video src="<?php echo get_template_directory_uri();?>/img/rest.mp4"muted autoplay playsinline loop style="width:100%;"></video>
                </div>

                <!-- SNS ボタンver-->
                <!-- PC -->
                <div class="row mt-3 mb-5 scroll_up pc-view" style="overflow: hidden;">
                    <h2 class="text-center title01 Larger shadow" id="title11">公式SNS</h2>
                    <p class="text-center tec-bg">スキルアップのためのコンテンツや、ためになるカン、コツのノウハウを定期大好評公開中!!</p>
                    <div class="row d-block mx-auto " style="width:30%;">
                        <div class="col">
                            <a href="https://www.youtube.com/@byfield-up7929" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="YouTubeチャンネル" class="mt-3 Larger shadow" style="width:100%;">
                            </a>
                        </div>
                    </div>
                    <div class="row d-flex">
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
                    <h2 class="text-center title01 Larger shadow" id="title11">公式SNS</h2>
                    <p class="text-center mt-5 tec-bg">スキルアップのためのコンテンツや、ためになるカン、コツのノウハウを定期大好評公開中!!</p>
                    
                    <div class="col mb-3">
                        <div class="">
                            <a href="https://www.youtube.com/@byfield-up7929" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="YouTubeチャンネル" class="d-block mx-auto mt-3 Larger shadow" style="width:100%;">
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
                    <div class="tec-bg">
                        <p class="text-center">オンラインでいろいろなことを学べるプラットフォーム
                            <br>ここで<b class="text-primary">オンライン講師</b>をしています
                        </p>
                        <p class="text-center">講座だけでなく、<b class="text-primary">気軽にいろんなことを相談できる窓口</b>もあります</p> 
                    </div>
                    <div class="col-9 d-block mx-auto">
                        <a href="https://www.street-academy.com/steachers/465170" target=_blank class="text-center"><p class="text-center">先生ページはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/sutoaka.jpg" alt="ストアカ先生ページ" class="d-block mx-auto mt-3" style="width:100%;"></a>
                    </div>
                    <div class="col-9 d-block mx-auto">
                    <a href="https://www.street-academy.com/onetime/services/2949" target=_blank class="text-center mt-4"><p class="text-center">相談コーナーはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/mental.jpg" alt="ストアカ相談コーナー" class="d-block mx-auto mt-3" style="width:100%;"></a>
                    </div>
                </div>
                
                <!-- お問合せ -->
                <div class="mt-5 pb-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title09">お問い合わせ</h2>
                    <div class="text-center mx-right-5 mx-left-5 d-block mx-auto tec-bg">
                        <p>何かお困りごとがあれば、先ずはお問い合わせください
                            <br>解決の糸口を見つけ、お手伝いいたします
                        </p>
                        <!-- <a href="<?php bloginfo('url')?>/contact">コチラからお問い合わせフォームへ</a> -->
                        <?php echo do_shortcode('[contact-form-7 id="9" title="コンタクトフォーム 1"]'); ?>
                    </div>
                </div>

            </div>
            <?php get_footer();?>
        </div>

        <div id="page_top"><a href="#">TOP</a></div>

        
    </body>

   

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

    <!-- パーティクルアニメ -->
    <script>
        // デフォルト
        $(function(){
            let particle = ()=> {
            $("#particle").particleText({
                text: "Innovation<br>思考力で切り開く", // 表示させたいテキスト。改行の場合は<br>追加
                colors:["#091","#07f","#034"], // パーティクルの色を複数指定可能
                speed: "high",  // slow, middle, high の3つから粒子が集まる速さを選択
            });
            };
            // var intervalId = setInterval(particle, 5000);
            particle();

            $(window).scroll(function() {
                var y = window.scrollY;
                console.log(y);
                if (y > 100 && y < 180) {
                    console.log("OK");
                    particle();
                }
            });

        });

    </script>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/js/particleText.js"></script>

    <!-- 横スクロール -->
    <script>
        const listWrapperEl = document.querySelector('.side-scroll-list-wrapper');
        const listEl = document.querySelector('.side-scroll-list');

        gsap.to(listEl, {
        x: () => -(listEl.clientWidth - listWrapperEl.clientWidth),
        ease: 'none',
        scrollTrigger: {
            trigger: '.side-scroll',
            start: 'top top', // 要素の上端（top）が、ビューポートの上端（top）にきた時
            end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
            scrub: true,
            pin: true,
            anticipatePin: 1,
            invalidateOnRefresh: true,
        },
        });
    </script>