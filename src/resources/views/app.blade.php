<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link href="{{ asset('assets/fonts/Futura PT/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
       
        window.appConfig = {
            subscribe: {
                to: "info@showyoursport.com",
                subject: "trial.ShowYourSport"
            },
            user: {
                ip: "{{$_SERVER['REMOTE_ADDR']}}",
                ipLaravel: "{{request()->getClientIp()}}"
            },
            allowedSections: {
                hero: !false,
                ecPost: !false,
                ecChess: !false,
                ecSliderProfiles: !false,
                ecVideoPreview: !false,
                ecSecEcSummary: !false,
                ecDiscount: !false,
                topBlogs: !false,
                subscribe: !false
            },
            ambassadorProfiles: JSON.parse( @json($ambassadorProfiles) ),
            products: JSON.parse( @json($products) )
        }
        window.appConfig.allowedSections = {
            hero: false,
            ecPost: false,
            ecChess: false,
            ecSliderProfiles: !false,
            ecVideoPreview: false,
            ecSecEcSummary: false,
            ecDiscount: false,
            topBlogs: false,
            subscribe: !false
        } 
         window.appConfig.allowedSections = {
            hero: !false,
            ecPost: false,
            ecChess: false,
            ecSliderProfiles: false,
            ecVideoPreview: false,
            ecSecEcSummary: false,
            ecDiscount: false,
            topBlogs: false,
            subscribe: false
        }
        window.appConfig.allowedSections = {
         
        }
        window.appConfig.subscribe.to = "honolo@rackabzar.com"
    </script>


    <title>Laravel</title>
</head>

<body class="bg-gray-50 h-screen antialiased leading-none">

    <div id="app">
        <layout-main />
    </div>

    <script src="{{mix('js/app.js')}}"></script>

</body>

</html>