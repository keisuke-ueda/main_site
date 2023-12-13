<!-- スライドショー -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
            });
        });
</script>

<!-- マウスストーカー -->
<!-- <script type="text/javascript">
    $(function() {
        var body = $("body");
        var flag = true;
    
        $(document).on("mousemove", function(e) {
        if (flag) {
            var x = e.clientX;
            var y = e.clientY;
            
            var star = $("<span>").attr("class", "star");
            star.css({
            "top": y + "px",
            "left": x + "px"
            });
            body.prepend(star);
            setTimeout(function() {
            star.remove();
            }, 2000);
    
            flag = false;
            setTimeout(function() {
            flag = true;
            }, 100);
        }
        });
    });
</script> -->

<!-- 表示アニメーション -->
<script>
    //scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});
</script>

<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">


<!-- オリジナルスタイルシート -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" media="screen">

<header>
    <?php wp_head(); ?>
    <a href="<?php bloginfo('url')?>" class=""><img src="<?php echo get_template_directory_uri();?>/img/屋号ロゴ-01.png" alt="屋号ロゴ" class="mt-3 mx-4 logo" style="width:20%;"></a>
    <input type="checkbox" id="check">
    <label for="check">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-menu-square-lined-240.png" alt="ハンバーガーメニュー" class="mt-3 mx-4" id="hambarger" style="width:6%; display: inline-block;">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-x-mark-square-filled-240.png" alt="キャンセルボタン" class="mt-3 mx-4" id="cancel" style="width:6%; display: inline-block;">
    </label>

    <div class="sidebar">
        <p class="bg-success">情報</p>
        <ul>
            <li><a href="#title01" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-building-19-240.png" alt="事業概要アイコン" style="width:10%;">事業概要</a></li>
            <li><a href="#title02" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-school-27-240.png" alt="事業展開アイコン" style="width:10%;">事業展開</a></li>
            <li><a href="#title03" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-id-card-thin-240.png" alt="代表者alt" style="width:10%;">代表メッセージ</a></li>
            <li><a href="#title10" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/サングラスのアイコン素材 その2.png" alt="仮想思考" style="width:10%;">革新技術</a></li>
            <li><a href="#title07" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-photo-camera-thin-240.png" alt="ギャラリーアイコン" style="width:10%;">ギャラリー</a></li>
            <li><a href="#title06" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-bar-chart-thin-240.png" alt="参考実績アイコン" style="width:10%;">参考実績</a></li>
            <li><a href="#title04" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/manabi.png" alt="ちょい見せ講座アイコン" style="width:10%;">ちょい見せ講座</a></li>
            <li><a href="#title11" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/FACEBOOK風のアイコン素材 その3.png" alt="各種SNS" style="width:10%;">SNS</a></li>
            <li><a href="#title05" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/kouza.png" alt="ストリートアカデミーアイコン" style="width:10%;">ストリートアカデミー</a></li>
            <!-- <li><a href="#title08" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-caret-right-circle-filled-240.png" alt="Youtubeチャンネルアイコン" style="width:10%;">Youtubeチャンネル</a></li> -->
            <li><a href="#title09" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-gmail-5-240.png" alt="お問い合わせアイコン" style="width:10%;">お問い合わせ</a></li>
        </ul>
    </div>
</header>

<script>
    function butotnClick(){
        let element = document.getElementById('check');
        element.checked = false;
    }
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v17.0" nonce="LoI5oUmc"></script>