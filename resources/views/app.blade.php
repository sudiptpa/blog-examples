<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://use.fontawesome.com/ca34b832d5.js"></script>
        <title>Pay with PayPal</title>
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .message{
                padding: 13px;
                color: #fff;
                border-radius: 3px;
                background: linear-gradient(90deg,#040432 2.8%,#016bde 90.9%);
            }

            hr {
                border: 1px solid #dfdfdf;
            }

            .gateway--info{
                padding-top: 200px;
                 margin-bottom: 70px;
            }

            .clearfix{
                clear: both;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                width: 90%;
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
            }
            .gateway--desc{
                font-size: 20px;
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

            .btn{
                display: inline-block;
                overflow: visible;
                margin: 0;
                padding: 0 32px;
                height: 48px;
                border: 0;
                border-radius: 3px;
                background: #ececec;
                color: #333;
                vertical-align: middle;
                text-align: center;
                text-decoration: none;
                text-transform: none;
                white-space: nowrap;
                font: inherit;
                font-weight: 600;
                font-size: 16px;
                line-height: 48px;
                cursor: pointer;
                transition: all .25s cubic-bezier(.645,.045,.355,1);
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            .btn-pay{
                background: #0069ff;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            @yield('content')
        </div>
    </body>
</html>
