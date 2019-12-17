<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odysseus IT</title>

    @include('component.style')
</head>
<body>
    @include('component.header')

    @include('component.main-section')

    @include('component.about')

    {{-- @include('component.features') --}}

    @include('component.service')

    @include('component.works')

    @include('component.testimonial')

    @include('component.stats')

    @include('component.team')

    {{-- @include('component.pricing') --}}

    {{-- @include('component.blog') --}}

    @include('component.contact')
    @include('component.footer')
    @include('component.js')
</body>
</html>
