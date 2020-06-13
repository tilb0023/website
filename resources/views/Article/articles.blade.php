@extends('layout')
@section('content')
    <title>Marlena van Tilburg | Blog</title>

@section('dropdown')
    <li class="dropdown">
        @endsection

        <div class="box">

            <h4>Blog</h4>

            <button class="buttonCreate"><a class="a1" href="/article/create">Create a blog post</a></button>

            <br><br><br><br>

        </div>

        @foreach ($articles as $article)

            <a href="{{ route('article.show', $article -> id) }}">
                <div class="box9">
                    <h5>
                        <br>
                        {{--                                                <a href="/blog/{{$article->id}}/edit">edit</a>--}}
                        {{--                                                <button class="buttonCreate"><a class="a1" href="/blog/{{$article->id}}/edit">Edit</a></button>--}}
                        {{$article->title}}
                        <br><br>
                    </h5>


                    <img class="blogPics" src="https://picsum.photos/id/{{$article->id}}/200/200">


                    <br>
                    <br>
                    <br>

                    <p>{{$article->excerpt}}</p>

                    <br>
                    {{--            <button><a href="edit.blade.php"></a>Edit</button>--}}
                    {{--                <hr>--}}
                    <br>
                </div>
            </a>
            @endforeach



            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            @endsection

        @section('plaatje')
            <img class="logo" src="images/logo/blogIcon.jpg" alt="home">
            <h2>Blog</h2>
            @endsection

    </li>

