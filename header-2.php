<!-- マウスストーカー -->
<script type="text/javascript">
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
</script>

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
    
    <input type="checkbox" id="check">
    <label for="check">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-menu-square-lined-240.png" alt="ハンバーガーメニュー" class="mt-3 mx-4" id="hambarger" style="width:6%; display: inline-block;">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-x-mark-square-filled-240.png" alt="キャンセルボタン" class="mt-3 mx-4" id="cancel" style="width:6%; display: inline-block;">
    </label>

    <div class="sidebar">
        <p class="bg-success">情報</p>  
        <ul>
            <li><a href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri();?>/img/top.png" alt="" style="width:10%;">TOP</a></li>
            <li><a href="<?php bloginfo('url')?>/#title01"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-building-19-240.png" alt="事業概要アイコン" style="width:10%;">事業概要</a></li>
            <li><a href="<?php bloginfo('url')?>/#title02"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-school-27-240.png" alt="事業展開アイコン" style="width:10%;">事業展開</a></li>
            <li><a href="<?php bloginfo('url')?>/#title03"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-id-card-thin-240.png" alt="代表メッセージアイコン" style="width:10%;">代表メッセージ</a></li>
            <li><a href="<?php bloginfo('url')?>/#title04"><img src="<?php echo get_template_directory_uri();?>/img/manabi.png" alt="ちょい見せ講座アイコン" style="width:10%;">ちょい見せ講座</a></li>
            <li><a href="<?php bloginfo('url')?>/#title05"><img src="<?php echo get_template_directory_uri();?>/img/kouza.png" alt="ストリートアカデミーアイコン" style="width:10%;">ストリートアカデミー</a></li>
            <li><a href="<?php bloginfo('url')?>/#title06"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-bar-chart-thin-240.png" alt="参考実績アイコン" style="width:10%;">参考実績</a></li>
            <li><a href="<?php bloginfo('url')?>/#title07"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-photo-camera-thin-240.png" alt="ギャラリーアイコン" style="width:10%;">ギャラリー</a></li>
            <!-- <li><a href="<?php bloginfo('url')?>/#title08"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-caret-right-circle-filled-240.png" alt="Youtubeアイコン" style="width:10%;">Youtubeチャンネル</a></li> -->
            <li><a href="<?php bloginfo('url')?>/#title09"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-gmail-5-240.png" alt="お問い合わせアイコン" style="width:10%;">お問い合わせ</a></li>
        </ul>
    </div>
</header>