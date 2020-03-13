<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Thu Feb 06 2020 08:15:21 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="gourmetburger.webflow.io" data-wf-page="5daad02151ef3a11677eebb4" data-wf-site="5daad02151ef3a85c37eebb3">

<head>
    <meta charset="utf-8" />
    <title>Tanager</title>
    <meta content="Restaurant template with Ecommerce, CMS and interactions." name="description" />
    <meta content="Gourmet Burger - Webflow Ecommerce website template" property="og:title" />
    <meta content="Restaurant template with Ecommerce, CMS and interactions." property="og:description" />
    <meta content="summary" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('tanager/css/style.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('tanager/js/webfont.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["PT Serif:400,400italic,700,700italic", "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Great Vibes:400", "Merriweather:300,300italic,400,400italic,700,700italic,900,900italic"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="Webclip.png" rel="apple-touch-icon" />

    @toastr_css

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{asset('css/trix.css')}}"></link>

    <style>
        .modal {
            position: relative;
            overflow-y: scroll;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 100px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #02001B;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>


<body class="body">
    <div data-w-id="d93c577b-eacd-0a62-04dc-7ed928edbac1" class="page_wrap">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
            <div class="wrapper navbar_wrapper">
                <a href="/" class="brand w-nav-brand w--current">
                    <h1 class="h3">TANAGER</h1>
                </a>

                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="/" class="nav_link w-nav-link">Home</a>
                    <a href="{{route('pagez.menu')}}" class="nav_link w-nav-link">Menu</a>
                    <a href="{{route('pagez.about')}}" class="nav_link w-nav-link">About Us</a>

                    <a href="{{route('pagez.contact')}}" class="nav_link w-nav-link">Contact</a>

                    <a href="#" target="_blank" class="button nav_button w-button" data-toggle="modal" data-target="#reservationModal" >Reserve Table</a>
                    <a href="{{route('login')}}" target="_blank" class="nav_link w-nav-link">Admin</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="hamburger_contain">
                        <div class="hamburger_line"></div>
                        <div class="hamburger_line shorter_line"></div>
                        <div class="hamburger_line"></div>
                    </div>
                </div>
            </div>
        </div>
