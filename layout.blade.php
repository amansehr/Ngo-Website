<!DOCTYPE html>
<html>
<head>
<meta name="google-site-verification" content="q9feO2zCeNbK_EyxLrkvmiNrppq53QeY_8BWXr9yuSw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/cssbottom.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('js/jquery-1.3.2.min.js') }}" type="text/javascript" >

</head>

<body>
    <div >
        @section('Header')
        @show
    </div>
    <div >
        @section('container')
        @show
    </div>
    <div >
        @section('Foot')
        @show
    </div>
</body>
</html>
