@extends('general_user.layouts.main')
@section('main-section')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="Digital Services​">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>Home</title>
        <link rel="stylesheet" href="css/nicepage.css" media="screen">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="css/Home.css" media="screen">-->
        <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <meta name="generator" content="Padma Portal">
        <!--<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">-->

        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
        <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <!--b
        <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Site2",
        "logo": "images/logo.png"
        }</script>-->
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Home">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
    </head>


    <div class="container">
        <div class="row" style="height: 500px;">
            <div class="col-3" style="padding-top: 50px;">
                <div>
                    {{-- <div><img src="{{url('images/Rashed.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="200" height="200"> </div> --}}

                    <div><img class="u-image u-image-circle u-image-1"
                            src="{{ asset('uploads/employees/' . $user['profile_image']) }}" width="200" height="200">
                    </div>

                    <a href="Home.html"> {{ $user['name'] }} </a>
                    <p class="">{{ $user['email'] }}</p>
                    <p class="">{{ $user['func_destination'] }} <span> |&nbsp; </span>{{ $user['destination'] }}</p>
                    <p class="">{{ $user['mobile'] }}</p>
                    <a href="#" target="_blank"
                        class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2"
                        style="color:#9900ff;font-weight: bold; text-style: none;">Code of conduct</a>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col"><a href="{{ route('general.branch') }}"
                            class="w-100 btn-sm u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-3-base u-radius-50 u-btn-3"
                            style="font-weight: bold">Branches</a></div>
                    <div class="col"><a href="{{ route('general.sub_branch') }}"
                            class="w-100  btn-sm u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-2-dark-1 u-radius-50 u-btn-4"
                            style="font-weight: bold">Subbranches</a></div>
                    <div class="col"><a href="{{ asset('aboutus') }}"
                            class="w-100 btn-sm u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-2-base u-radius-50 u-btn-5"
                            style="font-weight: bold">CHO</a></div>
                    <div class="col"><a href="{{ route('general.division') }}"
                            class="w-100 btn-sm u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-4-light-1 u-radius-50 u-btn-6"
                            style="font-weight: bold">Division</a></div>
                </div>
                <!--------- Slider------------------ -->

                <div id="slider1_container" style="position: relative; width: 600px;height: 300px;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                            src="../svg/loading/static-svg/spin.svg" />
                    </div>

                    <!-- Slides Container -->
                    <div data-u="slides"
                        style="position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                     overflow: hidden;">

                        @foreach ($banners as $item)
                            <div>
                                <img data-u="image" src="{{ asset($item->image) }}" />
                                <div data-u="thumb"> {{ $item->description }}</div>
                            </div>
                        @endforeach

                    </div>

                    <!--#region Thumbnail Navigator Skin Begin -->
                    <!-- Help: https://www.jssor.com/development/thumbnail-navigator.html -->
                    <!-- thumbnail navigator container -->
                    <div data-u="thumbnavigator" class="jssort09"
                        style="position: absolute; bottom: 0px; left: 0px; height:60px; width:600px; background-color: rgba(0,0,0,.4);">
                        <!-- Thumbnail Item Skin Begin -->
                        <div data-u="slides">
                            <div data-u="prototype"
                                style="POSITION: absolute; WIDTH: 600px; HEIGHT: 60px; TOP: 0; LEFT: 0;">
                                <div data-u="thumbnailtemplate"
                                    style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 60px; font-size:20px; padding-left:10px;">
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!--#endregion ThumbnailNavigator Skin End -->

                    <!--#region Bullet Navigator Skin Begin -->
                    <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
                    <style>
                        .jssorb051 .i {
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssorb051 .i .b {
                            fill: #fff;
                            fill-opacity: 0.5;
                            stroke: #000;
                            stroke-width: 400;
                            stroke-miterlimit: 10;
                            stroke-opacity: 0.5;
                        }

                        .jssorb051 .i:hover .b {
                            fill-opacity: .7;
                        }

                        .jssorb051 .iav .b {
                            fill-opacity: 1;
                        }

                        .jssorb051 .i.idn {
                            opacity: .3;
                        }
                    </style>
                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:16px;right:10px;"
                        data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!--#endregion Bullet Navigator Skin End -->

                    <!--#region Arrow Navigator Skin Begin -->
                    <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
                    <style>
                        .jssora051 {
                            display: block;
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssora051 .a {
                            fill: none;
                            stroke: #fff;
                            stroke-width: 360;
                            stroke-miterlimit: 10;
                        }

                        .jssora051:hover {
                            opacity: .8;
                        }

                        .jssora051.jssora051dn {
                            opacity: .5;
                        }

                        .jssora051.jssora051ds {
                            opacity: .3;
                            pointer-events: none;
                        }
                    </style>
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                        data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                        data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                    <!--#endregion Arrow Navigator Skin End -->

                    <!-- Trigger -->
                    <script>
                        jssor_slider1_init();
                    </script>
                </div>


                <!--  -------------Slider End ------------ -->
            </div>
            <div class="col-3">
                <h2 class="u-align-center u-text u-text-default u-text-27"></h2>

                <div style="padding: 20px 0px 0px 10px;">
                    @foreach ($applinks as $item)
                        <div class="form-group" style="margin-bottom: 0px;">
                            <label>

                                <img src="{{ asset('uploads/applinks/'.$item->image) }}" width="30" height="30" alt="" />
                                &nbsp;<a style="color:#9900ff;font-weight: bold;" href={{$item->link}}>{{ $item->name }}</a>
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <style>
        .div-scroll,table{

padding: 12px;

height:250px;

width: 200px;

border-radius: 10px;

box-shadow: 1px 2px 1px 2px rgb(230, 229, 229);

margin: 15px;

border: 1px solid #141313;

background-color: #cbeaf8;

overflow-y: scroll;

overflow-x: scroll;

}
        </style>
    <div class="row" style="padding: 10px 50px 0px 50px; height: 350px;">
        <div class="col-3">

            <div class="div-scroll">

                <table border="1px" align="center">
                
                <tr> <th> Name </th> <th>ID</th> <th> Category</th> </tr>
                
                <tr> <td> Jenny</td> <td>01</td> <td> Docker</td></tr>
                
                <tr> <td> Herry</td> <td>02</td> <td> HTML/CSS</td></tr>
                
                <tr> <td> Marry </td> <td>03</td> <td> Git</td></tr>
                
                <tr> <td> Jazzy </td> <td>04</td> <td> Javascript</td></tr>
                
                <tr> <td> Edward </td> <td>05</td> <td> Windows</td></tr>
                
                <tr> <td> Bella </td> <td>06</td> <td> Discord</td></tr>
                
                <tr> <td> Bunny </td> <td>07</td> <td> Git</td></tr>
                
                <tr> <td> Jack </td> <td>08</td> <td> HTML/CSS</td></tr>
                
                </table>
                
                </div>
            </div>
            <div class="col-3">

                <div class="div-scroll">
    
                    <table border="1px" align="center">
                    
                    <tr> <th> Name </th> <th>ID</th> <th> Category</th> </tr>
                    
                    <tr> <td> Jenny</td> <td>01</td> <td> Docker</td></tr>
                    
                    <tr> <td> Herry</td> <td>02</td> <td> HTML/CSS</td></tr>
                    
                    <tr> <td> Marry </td> <td>03</td> <td> Git</td></tr>
                    
                    <tr> <td> Jazzy </td> <td>04</td> <td> Javascript</td></tr>
                    
                    <tr> <td> Edward </td> <td>05</td> <td> Windows</td></tr>
                    
                    <tr> <td> Bella </td> <td>06</td> <td> Discord</td></tr>
                    
                    <tr> <td> Bunny </td> <td>07</td> <td> Git</td></tr>
                    
                    <tr> <td> Jack </td> <td>08</td> <td> HTML/CSS</td></tr>
                    
                    </table>
                    
                    </div>
                </div>
            <div class="col-3">

                <div class="div-scroll">
    
                    <table border="1px" align="center">
                    
                    <tr> <th> Name </th> <th>ID</th> <th> Category</th> </tr>
                    
                    <tr> <td> Jenny</td> <td>01</td> <td> Docker</td></tr>
                    
                    <tr> <td> Herry</td> <td>02</td> <td> HTML/CSS</td></tr>
                    
                    <tr> <td> Marry </td> <td>03</td> <td> Git</td></tr>
                    
                    <tr> <td> Jazzy </td> <td>04</td> <td> Javascript</td></tr>
                    
                    <tr> <td> Edward </td> <td>05</td> <td> Windows</td></tr>
                    
                    <tr> <td> Bella </td> <td>06</td> <td> Discord</td></tr>
                    
                    <tr> <td> Bunny </td> <td>07</td> <td> Git</td></tr>
                    
                    <tr> <td> Jack </td> <td>08</td> <td> HTML/CSS</td></tr>
                    
                    </table>
                    
                    </div>
                </div>
        <div class="col-3">

            <div class="div-scroll">

                <table border="1px" align="center">
                
                <tr> <th> Name </th> <th>ID</th> <th> Category</th> </tr>
                
                <tr> <td> Jenny</td> <td>01</td> <td> Docker</td></tr>
                
                <tr> <td> Herry</td> <td>02</td> <td> HTML/CSS</td></tr>
                
                <tr> <td> Marry </td> <td>03</td> <td> Git</td></tr>
                
                <tr> <td> Jazzy </td> <td>04</td> <td> Javascript</td></tr>
                
                <tr> <td> Edward </td> <td>05</td> <td> Windows</td></tr>
                
                <tr> <td> Bella </td> <td>06</td> <td> Discord</td></tr>
                
                <tr> <td> Bunny </td> <td>07</td> <td> Git</td></tr>
                
                <tr> <td> Jack </td> <td>08</td> <td> HTML/CSS</td></tr>
                
                </table>
                
                </div>
            </div>
        {{-- <div class="col-3">
            <div class="u-border-3 u-border-grey-75 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-6" style="height: 100%;overflow-y: scroll;">
                <div class="u-container-layout u-container-layout-12">
                    <h3 class="u-align-center u-text  u-text-28" style="color:#9900ff;font-weight: bold; text-style: none;">All Aplication Link</h3>
                    <a href="https://mail.padmabankbd.com/" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-7" target="_blank"> Padma Email&nbsp; &nbsp;</a>
                    <a href="http://192.168.200.72/padma_mis/"  style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-8" target="_blank"> MIS&nbsp; &nbsp;</a>
                    <a href="https://padmaclick.padmabankbd.com/padmaclick/" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-9"> Padma Click&nbsp; &nbsp;</a>
                    <a href="https://padmaclick.padmabankbd.com/padmaclick/" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-10">Task Management System&nbsp; &nbsp;</a>
                    <a href="https://padmaclick.padmabankbd.com/padmaclick/" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-11">Loan Tracking System&nbsp;&nbsp;</a>
                    <a href="https://padmaclick.padmabankbd.com/padmaclick/" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-12">iBanking</a>
                    <a href="http://192.168.200.97/edoc_padma_v2/index.php/home" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-13" target="_blank"> eDoc&nbsp; &nbsp;</a>
                    <a href="https://192.168.249.10/partner-portal/login" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-14" target="_blank">NID Partner Portal</a>
                    <a href="http://192.168.200.104:9191/BrowserWeb/servlet/BrowserServlet" style="padding: 0px 10px !important;margin: 0px  !important" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-15" target="_blank"> CBS T24&nbsp; &nbsp;</a>
                </div>
            </div>
        </div> --}}
    </div>

        <div class="row" style="padding: 10px 50px 0px 50px; height: 50px;margin-top: 10px;">
            <div class="col-1" style="color: #9900ff; font-weight: bold; font-size: 18px;">News:</div>
            <div class="col-11" style="background-color: #ffccff">
                <div id="ticker">
                    <div id="ticker-box">
                        <ul>
                             @foreach ($news as $item)
                                <li> {{ $item->description }} - <strong><i> {{ $item->name }}</i></strong>
                                </li>
                                @endforeach

                                </ul>
                    </div>
                    <script>
                        startTicker('ticker-box', {
                            speed: 5,
                            delay: 500
                        });
                    </script>

                </div>
                <!-- ticker -->
            </div>
        </div>
    @endsection
