<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <title>Marlena van Tilburg | Home</title>--}}
    <link rel="icon" href="/images/logo/favicon.png">
    {{--    <link rel="stylesheet" href= "/css/style.css">--}}
    <link rel="stylesheet" href="/css/main.css">
</head>

<header>

    <div class="banner">
        <p1>Marlena van Tilburg</p1>
    </div>

</header>

<div class="body">

    <div>

        <div class="navigation">

            <div id="navigation">
                <ul>
                    @yield('plaatje')
                    @yield('dropdown')

                    <a href="javascript:void(0)" class="dropbtn">Dashboard ⮟</a>
                    <div class="dropdown-content">
                        <a href="/tabel">Table</a>
                        <a href="/link">Relevant Links</a>
                        <li class="{{ Request::path() === 'articles' ? 'active' : '' }}"><a href="/articles" title=>Blog⠀</a>
                        </li>
                        <li class="{{ Request::path() === 'beroepsbeeld' ? 'active' : '' }}"><a href="/beroepsbeeld"
                                                                                                title=>Professional
                                image⠀</a></li>
                        <li class="{{ Request::path() === 'motivatie' ? 'active' : '' }}"><a href="/motivatie" title=>Motivation⠀</a>
                        </li>
                        <li class="{{ Request::path() === 'profilepage' ? 'active' : '' }}"><a href="/profilepage"
                                                                                               title=>Profile⠀</a></li>
                        <li class="{{ Request::path() === 'home' ? 'active' : '' }}"><a href="/home" title=>Home⠀</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>


    <header>
    </header>


    @yield('content')

    <div class="container6">
        <div align="left">
            <br>
            <br>
            <p2><b>Info</b></p2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p2>Marlena van Tilburg</p2>
            <br>
            <p2><a href="https://hz.nl/" style="color:rgb(206, 206, 206);">HZ University of Applied Sciences</a></p2>
            <p2>tilb0023@hz.nl</p2>
            <br>
            <p2>Propedeuse</p2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>

<script src="/app.js"></script>

</html>

