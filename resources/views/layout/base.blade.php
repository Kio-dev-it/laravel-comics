<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- /Fontawesome --}}
        
        <title>@yield("title", "Laravel Comics") | DC Official Site</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('pageContent')
        </main>

        @include('partials.footer')


    </body>
</html>