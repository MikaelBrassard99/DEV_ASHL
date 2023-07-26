<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Example</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css" />
    <style>
        .menu {
            text-align: center;
        }

        .container {
            width: 95%;
            margin: 1em auto;
        }

        .slick-prev:before,
        .slick-next:before {
            color: gray ! important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="slideshow" style="text-align: center;">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
            <div>7</div>
            <div>8</div>
            <div>9</div>
        </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js" />
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".slideshow").slick({
                dots: false,
                slidesToShow: 4,
                slidesToScroll: 1

            });
            $(".menu a").click(function(e) {
                e.preventDefault();
                slideIndex = $(this).index();
                $('.slideshow').slickGoTo(parseInt(slideIndex));
            });
        });
    </script>
</body>

</html>