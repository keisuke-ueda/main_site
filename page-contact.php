<!DOCTYPE html>
<html lang="jp" class="change">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./style.css">

        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        <!-- オリジナルスタイルシート -->
        <link rel="stylesheet" href="<?php blog_info('template_url');?>/style.css">

        <title>Field-UP Main_site</title>

    </head>

    <body>
        <?php get_header();?>
        
        <div class="main-doc">
            



            

        </div>
    </body>

    <?php get_footer();?>

</html>

