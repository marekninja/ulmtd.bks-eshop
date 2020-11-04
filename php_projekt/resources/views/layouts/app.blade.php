<!DOCTYPE html>
<html>

@include('inc.script')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <title>Unlmtd.Bks - Nájdi svoj vysnený bajk!</title>
    <link rel="icon" href="\pics\Capture.png" sizes="any" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
</head>

<body>

    {{-- ak nie je prihlaseny- prihlasenie --}}
    @if (1)
        @include('inc.login')
    @else
        @include('inc.logoff')
    @endif

    @include('inc.header')
    @include('inc.menu')

    <main>
        @yield('content')
    </main>

    @include('inc.footer')
</body>

</html>
