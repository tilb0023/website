@extends('layout')
@section('content')
    <title>Marlena van Tilburg | Beroepsbeeld</title>

@section('dropdown')
    <li class="dropdown">
        @endsection

        <div class="box">

{{--            <a class="editIcon" href="/blog/{{$article->id}}/edit">Edit</a>--}}
            <h4>{{ $article->title }}</h4>

        </div>

        <br><br><br>

        <div class="box">

            <p style="font-weight: 900">{{ $article->excerpt }}
                </p>

        </div>

        <br><br><br>

        <div class="box">

            <p>{{ $article->body }}</p>

        </div>

        <br><br><br><br>
        <button class="buttonCreate"><a class="a1" href="/blog/{{$article->id}}/edit">Edit this blog post</a></button>
        <br><br><br><br><br><br>


                    @endsection

                    @section('plaatje')
                        <img class="logo" src="/images/logo/blogIcon.jpg" alt="home">
                        <h2>Articles</h2>
                        @endsection

                        </body>
                        </html>

