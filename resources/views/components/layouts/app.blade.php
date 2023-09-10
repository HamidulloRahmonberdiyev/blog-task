<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet"/>
    <title>{{ $title }}</title>
  </head>
  <body class="antialiased md:bg-gray-200">

     <x-layouts.navbar></x-layouts.navbar>

    <!-- Base Page -->
    <div class="min-h-screen bg-gray-200 flex justify-center items-center p-10 py-20">
        {{ $slot }}
    </div>
    <!--End Base Page -->

    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>