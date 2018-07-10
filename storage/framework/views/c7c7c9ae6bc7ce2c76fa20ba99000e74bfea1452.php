<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"/>
        <!-- Styles -->
        <!--style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style-->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md" id="app">
                    <example-component></example-component>
                </div>

                
            </div>
        </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2l3xGesW1Cx_Sj_UobTcs0iZrB_djoe8&callback=initMap" type="text/javascript"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>