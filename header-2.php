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

<header>
    <?php wp_head(); ?>
    
    <input type="checkbox" id="check">
    <label for="check">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-menu-square-lined-240.png" alt="" class="mt-3 mx-4" id="hambarger" style="width:4%; display: inline-block;">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-x-mark-square-filled-240.png" alt="" class="mt-3 mx-4" id="cancel" style="width:3%; display: inline-block;">
    </label>

    <div class="sidebar">
        <p class="bg-success">情報</p>  
        <ul>
            <li><a href="<?php bloginfo('url')?>"><img src="<?php echo get_template_directory_uri();?>/img/top.png" alt="" style="width:10%;">TOP</a></li>
            <li><a href="<?php bloginfo('url')?>/#title01"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-building-19-240.png" alt="" style="width:10%;">事業概要</a></li>
            <li><a href="<?php bloginfo('url')?>/#title02"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-school-27-240.png" alt="" style="width:10%;">事業展開</a></li>
            <li><a href="<?php bloginfo('url')?>/#title03"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-id-card-thin-240.png" alt="" style="width:10%;">代表メッセージ</a></li>
            <li><a href="<?php bloginfo('url')?>/#title04"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-bar-chart-thin-240.png" alt="" style="width:10%;">参考実績</a></li>
            <li><a href="<?php bloginfo('url')?>/#title05"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-photo-camera-thin-240.png" alt="" style="width:10%;">ギャラリー</a></li>
            <li><a href="<?php bloginfo('url')?>/#title06"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-caret-right-circle-filled-240.png" alt="" style="width:10%;">Youtubeチャンネル</a></li>
            <li><a href="<?php bloginfo('url')?>/#title07"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-gmail-5-240.png" alt="" style="width:10%;">お問い合わせ</a></li>
        </ul>
    </div>
</header>