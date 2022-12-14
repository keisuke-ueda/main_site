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
                        <h2 class="text-center title02">ニュース</h2>
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
                        <h2 class="text-center title02">ブログ</h2>
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

                <div class="scroll_up">
                    <h2 class="text-center title01 m-3" id="title01">事業概要</h2>
                    <div class="text-center mx-right-5 mx-left-5 p-3 bg-white">
                        <p >主に4つの事業を軸としており、それぞれの事業単体だけでなく、相乗効果をもたらす今までにない全く新しい事業形態を目指しております。
                            <br>今この瞬間にも常に異常で特殊な成長を続けております。各事業の詳しい内容は事業展開をご覧ください。
                        </p>
                        <img src="<?php echo get_template_directory_uri();?>/img/jigyou.jpg" alt="Field-UP事業概要" class="d-block mx-auto mt-3 mb-3" style="width:70%;">
                    </div>
                </div>

                <div class="row mt-5 flexbox">
                    <h2 class="text-center title01 scroll_up" id="title02">事業展開</h2>

                    <div class="col-6 mt-3 box1 scroll_up">
                        <h2 class="text-center title02">心理事業</h2>
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
                        <h2 class="text-center title02">システム事業</h2>
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
                        <h2 class="text-center title02">省エネ事業</h2>
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
                        <h2 class="text-center title02">内装事業</h2>
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
                    <h2 class="text-center title01 mb-3 scroll_up" id="title03">代表メッセージ・夢</h2>

                    <div class="col-8 box1"> 
                        <h2 class="text-center title02 mt-3 scroll_up">メッセージ</h2>
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

                        <h2 class="text-center title02 mt-3 scroll_up">夢</h2>
                        <div class=" mx-right-5 mx-left-5 p-3 bg-white scroll_up">
                            <p>カウンセラーの仕事をしてきて、悩みを打ち明ける場所がない、迷いを誰かに相談できない人が世の中にはいっぱいいるという事態を目の当たりにしました。</p>
                            <p>子供から大人まで、年齢や職業問わず<b class="text-primary">人の活動を止めてしまっているのはメンタル</b>が大きくかかわっていることは疑いようもない事実です。</p>
                            <p>相談すること自体に抵抗がある人も多くいるため、<b class="text-primary">誰もが安心していろんな相談を持ち掛けてくれる場や仕組みを作ることが私の夢</b>です。</p>
                            <p>相談を受けた内容の中で、自身の技術で助けになることがあれば、丸っと任せてもらえたら尚嬉しいです。</p>
                        </div>

                        <h2 class="text-center title02 mt-3 scroll_up">プロフィール</h2>
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
                    <h2 class="text-center title01" id="title04">ちょい見せ講座</h2>
                    <p class="text-center">思考問題や、講座の資料をちょっとだけお見せします</p>
                    <video src="<?php echo get_template_directory_uri();?>/img/rest.mp4"muted autoplay playsinline loop style="width:100%;"></video>
                </div>

                <div class="row scroll_up">
                    <h2 class="text-center title01" id="title05">ストリートアカデミー</h2>
                    <p class="text-center">オンラインでいろいろなことを学べるプラットフォーム
                        <br>ここで<b class="text-primary">オンライン講師</b>をしています
                    </p>
                    <p class="text-center">講座だけでなく、<b class="text-primary">気軽にいろんなことを相談できる窓口</b>もあります</p>
                    <a href="https://www.street-academy.com/steachers/465170" target=_blank class="text-center"><p class="text-center">先生ページはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/sutoaka.jpg" alt="ストアカ先生ページ" class="d-block mx-auto mt-3" style="width:60%;"></a>
                    <a href="https://www.street-academy.com/onetime/services/2949" target=_blank class="text-center mt-4"><p class="text-center">相談コーナーはコチラ</p><img src="<?php echo get_template_directory_uri();?>/img/mental.jpg" alt="ストアカ相談コーナー" class="d-block mx-auto mt-3" style="width:60%;"></a>
                </div>

                <div class="row flexbox mt-5">
                    <h2 class="text-center title01 scroll_up" id="title06">参考実績</h2>
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
                    <h2 class="text-center title01" id="title07">ギャラリー</h2>

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

                <div class="scroll_up">
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
                </div>
                
                <div class="mt-5 pb-5 scroll_up">
                    <h2 class="text-center title01" id="title09">お問い合わせ</h2>
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