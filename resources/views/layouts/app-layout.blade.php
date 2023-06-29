<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="--vh: 1vh">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if ($title)
            <title>{{$title}} - {{__("sat.site.title")}}</title>
        @else
            <title>{{__("sat.site.title")}}</title>
        @endif

        <x-OG />

        @vite("resources/css/app.scss")
    </head>

    <body class="antialiased">
        <div id="sat-main-content" class="pt-4 md:pt-8 pb-24">
            {{$slot}}
        </div>
        @vite("resources/js/app.js")
        <!-- Matomo -->
        <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.kpunkt.ch/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '4']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <!-- End Matomo Code -->

    </body>
</html>
