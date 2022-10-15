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
    
    <a href="<?php bloginfo('url')?>" class=""><img src="<?php echo get_template_directory_uri();?>/img/屋号ロゴ-01.png" alt="" class="mt-3 mx-4 logo" style="width:30%;"></a>

    <input type="checkbox" id="check">
    <label for="check">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-menu-square-lined-240.png" alt="" class="mt-3 mx-4" id="hambarger" style="width:6%; display: inline-block;">
        <img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-x-mark-square-filled-240.png" alt="" class="mt-3 mx-4" id="cancel" style="width:6%; display: inline-block;">
    </label>

    <div class="sidebar">
        <p class="bg-success">情報</p>
        <ul>
            <li><a href="#title01" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-building-19-240.png" alt="" style="width:10%;">事業概要</a></li>
            <li><a href="#title02" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-school-27-240.png" alt="" style="width:10%;">事業展開</a></li>
            <li><a href="#title03" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-id-card-thin-240.png" alt="" style="width:10%;">代表メッセージ</a></li>
            <li><a href="#title04" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/manabi.png" alt="" style="width:10%;">ちょい見せ講座</a></li>
            <li><a href="#title05" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/kouza.png" alt="" style="width:10%;">ストリートアカデミー</a></li>
            <li><a href="#title06" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-bar-chart-thin-240.png" alt="" style="width:10%;">参考実績</a></li>
            <li><a href="#title07" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-photo-camera-thin-240.png" alt="" style="width:10%;">ギャラリー</a></li>
            <li><a href="#title08" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-caret-right-circle-filled-240.png" alt="" style="width:10%;">Youtubeチャンネル</a></li>
            <li><a href="#title09" onclick="butotnClick()"><img src="<?php echo get_template_directory_uri();?>/img/iconmonstr-gmail-5-240.png" alt="" style="width:10%;">お問い合わせ</a></li>
        </ul>
    </div>
</header>

<script>
    function butotnClick(){
        let element = document.getElementById('check');
        element.checked = false;
    }
</script>