<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/js/app.tsx', 'resources/css/app.css'])
    <link href="./output.css" rel="stylesheet">
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
