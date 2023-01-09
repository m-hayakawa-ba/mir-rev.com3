<!DOCTYPE html>
<html lang="ja">
<head>

    {{-- googleタグマネージャー --}}
    @if (App::environment('production'))
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KM2BFMP');</script>
    @endif

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/icon.ico" id="favicon">
    <link rel="apple-touch-icon" sizes="256x256" href="/icon.png">
    <link href="{{ mix('/css/app.css') }}?v=2" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}?v=2" defer></script>
    @inertiaHead
    @routes
</head>

<body>

    {{-- googleタグマネージャー --}}
    @if (App::environment('production'))
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM2BFMP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    @inertia
</body>
</html>

