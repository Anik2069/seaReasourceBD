<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title></title>
    @include ("customerview.csslink")
</head>
<body itemscope>
    <main>


@include("customerview.header")

      @yield ("content")

    @include("customerview.footer")
</body>

</html>
