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
        <link rel="stylesheet" href="./style.css">

        <title>Field-UP Main_site</title>

    </head>

    <body>
        <header>
            <a href="" class=""><img src="./img/屋号ロゴ-01.png" alt="" class="mt-3 mx-4 logo" style="width:30%;"></a>

            <input type="checkbox" id="check">
            <label for="check">
                <img src="./img/iconmonstr-menu-square-lined-240.png" alt="" class="mt-3 mx-4" id="hambarger" style="width:4%; display: inline-block;">
                <img src="./img/iconmonstr-x-mark-square-filled-240.png" alt="" class="mt-3 mx-4" id="cancel" style="width:3%; display: inline-block;">
            </label>
    
            
            <div class="sidebar">
                <p class="bg-success">情報</p>  
                <ul>
                    <li><a href=""><img src="./img/iconmonstr-building-19-240.png" alt="" style="width:10%;">事業概要</a></li>
                    <li><a href=""><img src="./img/iconmonstr-school-27-240.png" alt="" style="width:10%;">事業展開</a></li>
                    <li><a href=""><img src="./img/iconmonstr-id-card-thin-240.png" alt="" style="width:10%;">代表メッセージ</a></li>
                    <li><a href=""><img src="./img/iconmonstr-bar-chart-thin-240.png" alt="" style="width:10%;">参考実績</a></li>
                    <li><a href=""><img src="./img/iconmonstr-photo-camera-thin-240.png" alt="" style="width:10%;">ギャラリー</a></li>
                    <li><a href=""><img src="./img/iconmonstr-caret-right-circle-filled-240.png" alt="" style="width:10%;">Youtubeチャンネル</a></li>
                    <li><a href=""><img src="./img/iconmonstr-gmail-5-240.png" alt="" style="width:10%;">お問い合わせ</a></li>
                </ul>
            </div>
        </header>
        
        <div class="main-doc">
            



            

        </div>
    </body>

    <footer class="bg-light">

        <div class="row">
            <div class="col-4">
                <img src="./img/屋号ロゴ-01.png" alt="" class="d-block mx-auto mt-3 mb-3" style="width:100%;">
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
                <p>所在地：〒114-0011 東京都北区昭和町1-4-7
                    <br>email:keisuke.ueda@field-up.work
                    <br>TEL:080-4955-4941
                </p>
            </div>
            <div class="col-4">
                <img src="./img/131616.jpg" alt="" class="d-block mx-auto mt-3 mb-3" style="width:20%;">
            </div>
            
        </div>

    </footer>

</html>

