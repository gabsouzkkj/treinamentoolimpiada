<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Social</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style>
        body {
            background-color: #e9e7e7
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 300px 0
        }

        .social-buttons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 75px;
            height: 75px;
            margin: 0 10px;
            box-shadow: 0px 0px 6px -4px gray;
            border-radius: 30%;
            color: #fff;
            background-color: #fff;
            transition: all .3s ease;
            text-decoration: none
        }

        .social-buttons a i {
            font-size: 25px;
            transition: .2s linear
        }

        .social-buttons a .fa-facebook-f {
            color: #3d5998
        }

        .social-buttons a .fa-pinterest {
            color: #e50122
        }

        .social-buttons a .fa-twitter {
            color: #54acec
        }

        .social-buttons a .fa-tumblr {
            color: #314258
        }

        .social-buttons .facebook:hover .fa-facebook-f,
        .social-buttons .pinterest:hover .fa-pinterest,
        .social-buttons .twitter:hover .fa-twitter,
        .social-buttons .tumblr:hover .fa-tumblr {
            color: white;
        }

        .btn:hover i {
            transform: scale(1.2)
        }

        .social-buttons .twitter:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 190%;
            background: #3498db;
            transform: rotate(-45deg);
            left: -110%;
            top: 90%;
        }

        .social-buttons .facebook:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 190%;
            background: #3d5998;
            transform: rotate(-45deg);
            left: -110%;
            top: 90%;
        }

        .social-buttons .pinterest:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 190%;
            background: #e50122;
            transform: rotate(-45deg);
            left: -110%;
            top: 90%;
        }

        .social-buttons .tumblr:before {
            content: "";
            position: absolute;
            width: 150%;
            height: 190%;
            background: #314258;
            transform: rotate(-45deg);
            left: -110%;
            top: 90%;
        }

        .btn {
            display: inline-block;
            width: 90px;
            height: 90px;
            background: #ffffff;
            margin: 10px;
            border-radius: 30%;
            overflow: hidden;
            position: relative;
        }

        .btn:hover::before {
            animation: rev 0.7s 1;
            top: -10%;
            left: -10%;
        }

        @keyframes rev {
            0% {
                top: 50%;
                left: -90%;
            }

            100% {
                top: -10%;
                left: -10%;
            }
        }
    </style>
</head>

<body>
    <div class="social-buttons">
        <a href="#" class="btn facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="btn pinterest"><i class="fab fa-pinterest"></i></a>
        <a href="#" class="btn twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="btn tumblr"><i class="fab fa-tumblr"></i></a>
    </div>
</body>

</html>