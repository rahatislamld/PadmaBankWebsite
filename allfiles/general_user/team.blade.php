@extends('general_user.layouts.main')
@section('main-section')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="Department / Branch, ​Member">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>Team</title>
        <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/team.css') }}" media="screen">
        <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
        <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
        <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
        <link id="u-theme-google-font" rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


        <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site2",
            "logo": "images/logo.png"
        }
        </script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Team">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
    </head>

    <body class="u-body u-xl-mode">
        <section class="u-clearfix u-custom-color-3 u-section-1" id="sec-cf87">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div
                    class="u-border-2 u-border-grey-75 u-container-style u-custom-color-3 u-expanded-width u-group u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h2 class="u-text u-text-default u-text-1">{{ $office->name }}</h2>
                        <p class="u-text u-text-2"> Address: {{ $office->location }}<br>
                            <br>
                        </p>
                        <p class="u-text u-text-3"> Tel: {{ $office->phone }}<br>Email:
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-group u-shape-rectangle u-group-2">
                    <div class="u-container-layout u-container-layout-2">
                        <h1 class="u-align-center u-text u-text-default u-text-4"> Member</h1>
                        <img class="u-image u-image-default u-image-1" src="{{asset('images/divider1.gif')}}" alt=""
                            data-image-width="640" data-image-height="400">
                    </div>
                </div>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-section-2" id="sec-0d6e">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">


                        @foreach ($employees as $item)
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <div alt="" >

                                    <img class="u-image u-image-circle u-image-1" src="{{ asset('uploads/employees/'.$item['profile_image']) }}" width="500" height="500">
                                </div>
                                <h5 class="u-align-left u-text u-text-1">Name: {{ $item['name']}}</h5>
                                <p class="u-align-left u-text u-text-2">Designation: {{ $item['destination']}}</p>
                                <p class="u-align-left u-text u-text-3">Functional Designation: {{ $item['func_destination']}}</p>
                                <p class="u-align-left u-text u-text-4">E-Mail: {{ $item['email']}}</p>
                                <p class="u-align-left u-text u-text-5">Mobile : {{ $item['mobile']}}</p>
                                <p class="u-align-left u-text u-text-6">IP Phone: {{ $item['ip_phone']}}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
      



    </body>
@endsection
