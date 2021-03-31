<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

  </head>
  <body>
    @inertia
    @if( config('app.env') == 'development')
    <script defer src="{{ mix('/js/app.js') }}" defer></script>
    @else
    <script defer src="{{ mix('/js/manifest.js') }}"></script>
    <script defer src="{{ mix('/js/vendor.js') }}" defer></script>
    <script defer src="{{ mix('/js/app.js') }}" defer></script>
    @endif

  </body>
</html>
