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

            input[type=range] {
                -webkit-appearance: none;
                background: #EFEEEF;
                padding: 0px;
                border: 0px !important;
                height: 30px;
                width: inherit;
            }
            input[type=radio] {
                height: 24px;
                width: 24px;
            }
            input[type=radio]::-webkit {
                background: #000;
            }
            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 7px;
                background: #aaa;
                border: #EFEEEF;
                border-radius: 3px;
                color: red;
            }
            input[type=range]::-webkit-slider-thumb {
                -webkit-appearance: none;
                border: 40px;
                border-color: #EFEEEF;
                height: 25px;
                width: 25px;
                border-radius: 50%;
                background: black;
                margin-top: -9px;
            }
            input[type=range]:focus {
                outline: none;
            }
            input[type=range]:focus::-webkit-slider-runnable-track {
                background: #ccc;
            }
            input[type=range]::-moz-range-track {
                height: 10px;
                border: none;
                border-radius: 3px;
            }
            input[type=range]::-moz-range-thumb {
                height: 25px;
                width: 25px;
                border-radius: 50%;
                background: black;
                margin-top: -9px;
            }

            input[type=range]:-moz-focusring {
                outline-offset: -1px;
            }
            input[type=range]:focus::-moz-range-track {
                background: #ccc;
            }
            input[type=range]::-ms-track {
                width: 100%;
                height: 7px;
                background: transparent;
                border-color: transparent;
                border-width: 6px 0;
                color: transparent;
            }
            input[type=range]::-ms-fill-lower {
                background: #777;
                border-radius: 10px;
            }
            input[type=range]::-ms-fill-upper {
                background: #ddd;
                border-radius: 10px;
            }
            input[type=range]::-ms-thumb {
                height: 25px;
                width: 25px;
                border-radius: 50%;
                background: black;
                margin-top: -3px;
            }
            input[type=range]:focus::-ms-fill-lower {
                background: #888;
            }
            input[type=range]:focus::-ms-fill-upper {
                background: #ccc;
            }
            input[type=range]::-ms-tooltip {
                display: none;
            }
            .lc-page1,
            .lc-page2,
            .lc-page3 {
                font-family: "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans- serif;
                font-size: 14px;
                color: #000;
                padding: 20px;
                background: #EFEEEF;
            }
            .lc-intro {
                font-size: 24px;
            }
            .lc-loan-repayment-col {
                width: 1%;
                text-align: center;
                vertical-align: top;
            }
            .lc-loan-repayment-text {
                padding: 2px;
            }
            .lc-loan-tbl {
                width: 100%;
            }
            .lc-loan-tbl-row {} .lc-loan-tbl-title {
                width: 33%;
            }
            .lc-loan-tbl-value {
                width: 100%;
            }
            .lc-loan-tbl-rate {
                white-space: nowrap;
                padding-right: 20px;
            }
            .lc-repayment-intro {} .lc-button {
                padding: 5px 15px;
                background: #8E8E8E;
                color: #000;
                border: 0;
                font-size: 18px;
                border-radius: 4px;
            }
            .lc-details {} .lc-loan-details-tbl {} .lc-loan-details-title {} .lc-loan-details-value {} .lc-button-link {
                background: none !important;
                border: none;
                padding: 0 !important;
                font: inherit;
                cursor: pointer;
                color: darkblue;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
