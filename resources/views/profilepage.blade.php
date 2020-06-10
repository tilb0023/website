@extends('layout')
@section('content')
    <title>Marlena van Tilburg | Profilepage</title>

@section('dropdown')
    <li class="dropdown">
        @endsection

<div class="box">

    <h4>Profile</h4>

</div>


<div class="box2">

    <div class="box3">
        <dl>
            <br>
            <br>
            <br>
            <dd>Name: Marlena van Tilburg<dd>
                <br>
            <dd>Birth date: 18-11-2000</dd>
            <br>
            <dd>City: Somewhere</dd>
            <br>
            <dd>Diploma: HAVO NT</dd>
            <br>
            <dd>Favorite colour: yellow</dd>
            <br>
            <dd>Hobby: drawing</dd>
        </dl>
    </div>

    <div class="box4">
        <img class="photos" src="/images/photos/brommer.jpg" alt="Welkom">
    </div>

</div>





<div class="box">
    <h4>Traits</h4>
</div>




<div class="box5">


    <dl>
        <dt><b>Doorzetter</b></dt>
        <br>
        <dd>-Zelfs met tegenzin geef ik niet snel op </dd>
        <br>
        <dt><b>Spontaan</b></dt>
        <br>
        <dd>-Ik spring snel van het ene onderwerp naar de andere</dd>
        <br>
        <dt><b>Behulpzaam</b></dt>
        <br>
        <dd>-Ik probeer zoveel mogelijk anderen te helpen</dd>
        <br>
        <dt><b>Geen ochtendmens</b></dt>
        <br>
        <dd>-Nope</dd>
        <br>
        <dt><b>Batman fan</b></dt>
        <br>
        <dd>-Deze spreekt voor zichzelf</dd>
    </dl>

</div>


@endsection

@section('plaatje')
    <img class="logo" src="images/logo/profileIcon.jpg" alt="home">
    <h2>Profilepage</h2>
    @endsection

</body>
</html>
