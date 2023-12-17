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
        <div id="wrapper">
            <canvas id="particle"></canvas>
        </div>
        <div class="amine">
                <div class="load-1 posit-1">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>


                <div class="load-2 posit-2">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

                <div class="load-3 posit-3">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>


                <div class="load-4 posit-4">
                    <div class="ring-1"></div>
                </div>

                <div class="load-5 posit-5">
                    <div class="ring-2">
                    <div class="ball-holder">
                        <div class="ball"></div>
                    </div>
                    </div>
                </div>


            <div class="load-7 posit-6">
                <div class="square-holder">
                <div class="square"></div>
                </div>
            </div>

            <div class="load-8 posit-7">
                <div class="line"></div>
            </div>


            <div class="load-9 posit-8">
                <div class="spinner">
                <div class="bubble-1"></div>
                <div class="bubble-2"></div>
                </div>
            </div>


            <div class="load-10 posit-9">
                <div class="bar"></div>
            </div>
        </div>








        <div class="main-doc">





            <!-- スクロール -->
            <div class="top-space"></div>
            <!-- <video src="<?php echo get_template_directory_uri();?>/img/main_site.mp4" muted autoplay playsinline loop style="width:100%;"></video> -->
            <div class="container">

                <h1 class="text-center text-primary title02 scroll_up">分野が違っても<br>基礎理論は共通</h1>

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
                            <p >いろいろお伝えしたいことはありますが、先ず一番にお伝えしたことは<b class="text-primary h5">私が『人』が大好き</b>ということです。
                                <br>だからこそ誰かのために何かしたいと常日頃思って仕事をしています。
                                <br>日本全体、世界の人を助けたいと大それたことは言えませんが、せめて関わった方、道かな人のために自身のできることを精一杯取り組みます。
                            </p>
                            <p>より多くの方の悩みを聴いて、寄り添うために<b class="text-primary h5">心理学を学び心理士</b>になりました。
                                <br>技術的に困っている方の助けになるために設計・工事・デザイン・クリエイティブなスキルや資格を分野問わずに身に着けてきました。
                            </p>
                            <p>先ずは友人、その次は友人の隣人、さらにその先の人といった感じで徐々に人の助けになれる範囲を広げていきます!!
                            </p>
                            <p>併せてField-UPのもう一つの方針として<b class="text-primary h5">やりたいことを諦めないための思考力</b>を養い、かつ、提供するということがあります。
                            <br><b class="text-primary h5">人は例外なく誰しも弱い</b>です。外観的に強く見えている人でも弱い面は必ず持っているものです。それでもそういった人たちが強く見えているのは何か別の能力やスキルで弱さをカバーしているということになります。</p>
                            <p>やりたいことがあるけど技術的に不可能、自分には到底できない、そんなことがあれば一度Field-UPに相談してください。
                            <br>やりたいことの実現のために、もしくは理想の結果に少しでも違づけるような技術・ノウハウ提供などもさせていただきます。</p>
                        
                        </div>

                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">夢</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg scroll_up">
                            <p>カウンセラーの仕事をしてきて、悩みを打ち明ける場所がない、迷いを誰かに相談できない人が世の中にはいっぱいいるという事態を目の当たりにしました。</p>
                            <p>子供から大人まで、年齢や職業問わず<b class="text-primary h5">人の活動を止めてしまう要因はメンタル</b>が大きく関わっていることは疑いようもない事実です。</p>
                            <p>相談すること自体に抵抗がある人も多くいるため、<b class="text-primary h5">誰もが安心していろんな相談を持ち掛けてくれる場や仕組みを作ることが私の夢</b>です。</p>
                            <p>将来的には<b class="text-primary h5">バーチャル空間で、対面でなく、匿名であっても気軽に相談ができる仕組み</b>を構築するため日々技術研究をしていきます。
                            <br>その過程で生まれたVR技術、内装デザイン技術等の専門技術においてもご提供するような形にしていきます。</p>
                            <p>相談を受けた内容の中で、Field-UPの技術力で助けになることがあれば、丸っと任せてもらえたら尚嬉しいです。</p>
                        </div>

                        <h2 class="text-center title02 mt-3 scroll_up Larger shadow">プロフィール</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 tec-bg scroll_up">
                            <p>岐阜県岐阜市出身</p>
                            <p>大学の理工学部卒業後、某設備機械メーカーに設計士として入社とほぼ同時に心理学の資格学校に入学。
                                <br>内装・通信・ソフトウエア・家具など様々な設計業に携わりながらコンサル会社へ転職し、心理士としても活動。
                            </p>
                            <p>コロナが普及し、世の中でカウンセリング求められる中で、独立を決意し、事業 Field-UP(屋号)を立ち上げる。
                                <br>過去やってきたことを全て生かしながら手の届く範囲の困っている方に対して、ひたすら真摯なサービス提供を心掛けております。
                                <br>趣味は野球をしており、ほぼ投球中毒気味wであり、仕事がない時は所属しているチームで投手をして仕事と趣味をバランスよく謳歌しております。
                            </p>
                        </div>

                    </div>

                    <div class="col-4 box2 scroll_up">
                        <img src="<?php echo get_template_directory_uri();?>/img/representative.jpg" alt="聴くプロ上田敬介" class="d-block mx-auto mt-3 img-zoom" style="width:50%;">
                        <p class="text-center title03">聴くプロ(心理カウンセラー)</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/vtuber.jpg" alt="Vtuber上田敬介" class="d-block mx-auto mt-3 img-zoom" style="width:90%;">
                        <p class="text-center title03">Vtuber</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/kaitai-5.jpg" alt="工事人上田敬介" class="d-block mx-auto mt-3 img-zoom" style="width:90%;">
                        <p class="text-center title03">工事人</p>
                        <img src="<?php echo get_template_directory_uri();?>/img/create.jpg" alt="エンジニア・クリエーター・設計士上田敬介" class="d-block mx-auto mt-3 img-zoom" style="width:90%;">
                        <p class="text-center title03">エンジニア・設計士<br>クリエイター</p>
                    </div>
                </div>

                <!-- 技術アピール -->
                <div class="row mt-5 pb-4 scroll_up tec-bg">
                    <h2 class="text-center title01 Larger shadow" id="title10">技術進化への挑戦</h2>
                    <div class="col-9 d-block mx-auto">
                        <p>今やデジタル技術を取り入れることが当たり前になり、自身の業界とどのように技術やノウハウを組合わせていくかという<b class="text-primary h5">インテリジェンスな部分に大きな価値</b>が見いだせる時代になってきました。<br>
                        弊社の強みは心理、内装、省エネという異なる分野の技術に精通しているだけでなく、それらの技術本質をとらえる思考力にあります。</P>
                        <p>その中で<b class="text-primary h5">Virtual Blend Thinking</b>を弊社は得意としています。Virtual(仮想)技術を各業界、各技術に混ぜ合わせて今ある価値以上の価値を生み出すことを実現させます。</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mt-1 mb-1">
                            <img src="<?php echo get_template_directory_uri();?>/img/vr技術.jpg" alt="VR技術" class="d-block mx-auto img-zoom" style="width:100%">
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
                            <img src="<?php echo get_template_directory_uri();?>/img/Vtuberteacher.jpg" alt="新しい学習の形" class="d-block mx-auto img-zoom" style="width:100%">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.youtube.com/watch?v=NFIskiYb-r4/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front2">学習&nbsp;x&nbsp;Virtual</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back2">Vtuberシステム</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-1 mb-1">
                            <img src="<?php echo get_template_directory_uri();?>/img/設備デジタル.jpg" alt="エネルギーのデジタル化" class="d-block mx-auto img-zoom" style="width:100%">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.youtube.com/watch?v=5HJpKNcW-8U/" target="_blank" class="btn btn-3d-flip" onclick="butotnClick()">
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
                        <div class="text-center scroll_up">
                            <a href="#title09" class="btn btn-flat" onclick="butotnClick()"><span>お問い合わせ</span></a>
                        </div>
                        
                    </div>
                    
                </div>



                <!-- ギャラリー -->
                <div class="row mt-5 scroll_up">
                    <h2 class="text-center title01 Larger shadow" id="title07">ギャラリー</h2>
                    <ul class="slider">
                        <li>
                            <p class="text-center title03">オンライン講座</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/HTML_CSS.png" alt="HTML・CSS講座" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">VR会議室</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/model-2.jpg" alt="会議室3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">ネットワーク図</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/net-2.jpg" alt="配線構成図" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">軟水タンク図</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/tank-2.jpg" alt="軟水タンク製作図" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">VRエントランス</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/model-3.jpg" alt="エントランス3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">エネルギーフローシート</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/fow.jpg" alt="エネルギーフローシート" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">移転作業</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/iten.jpg" alt="移転" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">休憩barスペースVR</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/model-1.jpg" alt="休憩バースペース3Dモデル" class="d-block mx-auto mt-3" style="width:100%;">
                        </li> 
                        <li>
                            <p class="text-center title03">廃棄鉄骨材など</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/kaitai-3.jpg" alt="廃棄鉄骨材など" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">木目調PT工事</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/door1.jpg" alt="木目調パーティション工事" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">APT工事</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/apt-1.jpg" alt="アルミパーティション工事" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                        <li>
                            <p class="text-center title03">金物加工</p>
                            <img src="<?php echo get_template_directory_uri();?>/img/apt-3.jpg" alt="金物加工" class="d-block mx-auto mt-3" style="width:100%;">
                        </li>
                    </ul>
                    
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
                    <div class="text-center scroll_up">
                        <a href="#title09" class="btn btn-flat" onclick="butotnClick()"><span>お問い合わせ</span></a>
                    </div>
                </div>

                <!-- YouTubeチャンネル -->
                <div class="scroll_up mt-4">
                    <h2 class="text-center title01" id="title08">Youtubeチャンネル</h2>
                    <div class="text-center  mx-right-5 mx-left-5 tec-bg">
                        <p>ありとあらゆる業種に関わるスキルアップに役立つ動画を多数配信中!!
                            <br>是非参考にしてください!!
                        </p>
                        <a href="https://www.youtube.com/channel/UCGZ9tx2keMqtCSL_UW1vyRw" target=_blank class="btn_21">Youtubeチャンネルへ</a>
                        <img src="<?php echo get_template_directory_uri();?>/img/youtube_home.jpg" alt="Youtubeチャンネル" class="d-block mx-auto mt-3" style="width:100%;">
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
                                <img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="YouTubeチャンネル" class="mt-3 Larger shadow img-zoom" style="width:100%;">
                            </a>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-3">
                            <a href="https://www.facebook.com/profile.php?id=100068565794040&sk=reels_tab" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Facebook.png" alt="facebook" class="d-block mx-auto mt-3 Larger shadow img-zoom" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.instagram.com/fieldupx/" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Instagram.png" alt="instagram" class="d-block mx-auto mt-3 Larger shadow img-zoom" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://www.tiktok.com/@field_up_x?lang=ja-JP" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/TikTok.png" alt="TikTok" class="d-block mx-auto mt-3 Larger shadow img-zoom" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://twitter.com/FieldUP_X" target=_blank>
                                <img src="<?php echo get_template_directory_uri();?>/img/Twitter.png" alt="teitter" class="d-block mx-auto mt-3 Larger shadow img-zoom" style="width:100%;">
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
                            <br>こちらで<b class="text-primary">オンライン講師</b>をしています
                        </p>
                        <p class="text-center">講座だけでなく、<b class="text-primary">気軽にいろんなことを相談できる窓口</b>もあります</p> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-block mx-auto mt-2">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.street-academy.com/steachers/465170" target=_blank class="btn btn-3d-flip mt-2">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front">先生ページ</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back">スキルアップ!!</span>
                                    </span>
                                </a>
                                <img src="<?php echo get_template_directory_uri();?>/img/sutoaka.jpg" alt="ストアカ先生ページ" class="d-block mx-auto img-zoom mt-4" style="width:100%;">
                            </div>
                        </div>
                        <div class="col-md-6 d-block mx-auto mt-2">
                            <div class="text-center mt-1 mb-1">
                                <a href="https://www.street-academy.com/onetime/services/2949" target=_blank class="btn btn-3d-flip mt-2">
                                    <span class="btn-3d-flip-box">
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--front">相談コーナー</span>
                                        <span class="btn-3d-flip-box-face btn-3d-flip-box-face--back">お気軽にどうぞ</span>
                                    </span>
                                </a>
                                <img src="<?php echo get_template_directory_uri();?>/img/mental.jpg" alt="ストアカ相談コーナー" class="d-block mx-auto img-zoom mt-4" style="width:100%;">
                            </div>
                        </div>

                        



                        
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

   

    <!-- スクロールアップ -->
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

    <!-- canvasレスポンシブ -->
    <script>
        var container = document.getElementById('wrapper');
        var canvas = document.getElementById('particle');
        var ctx = canvas.getContext('2d');

        //親要素のサイズをCanvasに指定
        canvas.width = container.clientWidth;
        canvas.height = container.clientHeight;

        //リサイズ時
        window.onresize = function(){
            var scale = 0;
            //再描画のため必ずCanvasの描画領域をクリアする
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            canvas.width = container.clientWidth;
            canvas.height = container.clientHeight; 
        }


    </script>

    <!-- パーティクルアニメ -->
    <script>
        // デフォルト
        $(function(){
            let particle = ()=> {
                $("#particle").particleText({
                text: "Innovation", // 表示させたいテキスト。改行の場合は<br>追加
                colors:["#091","#07f","#034"], // パーティクルの色を複数指定可能
                speed: "high",  // slow, middle, high の3つから粒子が集まる速さを選択
            });
            };
            // var intervalId = setInterval(particle, 5000);
            particle();

            $(window).scroll(function() {
                var y = window.scrollY;
                // console.log(y);
                if (y > 100 && y < 180) {
                    // console.log("OK");
                    particle();
                }
            });

        });

    </script>
    <!-- <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/js/particleText.js"></script> -->
    <script src="<?php echo get_template_directory_uri();?>/setting.js"></script>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/js/5-17.js"></script>

   <!-- スライドショー -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-8/js/6-1-8.js"></script>
    <script>
        jQuery('.slider').slick({
            arrows: false,//左右の矢印はなし
            autoplay: true,//自動的に動き出すか。初期値はfalse。
            autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
            speed: 8000,//スライドのスピード。初期値は300。
            infinite: true,//スライドをループさせるかどうか。初期値はtrue。
            pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
            pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
            cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
            slidesToShow: 4,//スライドを画面に4枚見せる
            slidesToScroll: 1,//1回のスライドで動かす要素数
            responsive: [
            {
                breakpoint: 769,//モニターの横幅が769px以下の見せ方
                settings: {
                    slidesToShow: 2,//スライドを画面に2枚見せる
                }
            },
            {
                breakpoint: 426,//モニターの横幅が426px以下の見せ方
                settings: {
                    slidesToShow: 1.5,//スライドを画面に1.5枚見せる
                }
            }
        ]
    });
    </script>