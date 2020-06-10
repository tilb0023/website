@extends('layout')
@section('content')
    <title>Marlena van Tilburg | 500</title>

@section('dropdown')
    <li class="dropdown">
        @endsection

        <br><br><br><br>

        <div class="box7">

            <h3>Error: 500</h3>
        </div>
        <div class="box8">
            <img class="errorImg2" src="/images/drawings/TV.png" alt="TV">
            <p>Seems like something went wrong.</p>
            <p>Please attempt to reload the page by pressing this button:</p>
            <br>
            <button class="buttonRefresh" onClick="window.location.reload();">Refresh Page</button>
            <br><br>
            <p><a href="/home">You can also click here to go back to the homepage</a></p>
            <br><br>
            <p>If that didn't work, I do apologize.</p>
            <p>Please come back later, the problem might be fixed by then.</p>
            <br><br>
        </div>


        <br><br><br><br><br><br>

        @endsection

        @section('plaatje')
            <img class="logo" src="images/logo/errorIcon.jpg" alt="home">
            <h2>Error</h2>
            @endsection

            </body>
            </html>
