@extends('layout')

    <title>Marlena van Tilburg | Beroepsbeeld</title>

@section('dropdown')
    <li class="dropdown">
        @endsection

        @section('content')

        <div class="box">

            <br>
            <br>

            <h4>Create your blogpost</h4>


            <br>
            <br>
            <br>
            <br>

            <form method="POST" action="/blog">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input @error('title') errorForm @enderror" type="text" name="title" id="title" placeholder="Your title goes here" value="{{ old('title') }}">
                        <p7>Max amount of characters: 50</p7>
                        @error('title')
                        <p class="errorText">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <br><br>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') errorForm @enderror"name="excerpt"id="excerpt" placeholder="Your excerpt goes here">{{ old('excerpt') }}</textarea>
                        <p7>Max amount of characters: 100</p7>
                        @error('excerpt')
                        <p class="errorText">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <br><br>

                <div class="field">
                    <label class="label" for="body">Text</label>

                    <div class="control">
                        <textarea class="textarea @error('body') errorForm @enderror" name="body" id="body" placeholder="Your text goes here">{{ old('body') }}</textarea>
                        <p7>Max amount of characters: 5000</p7>
                        @error('body')
                        <p class="errorText">{{ $errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <br><br>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="buttonSubmit"><a class="a1" type="submit">Submit</a></button>
                    </div>
                </div>
            </form>

            <br>
            <br>
            <br>
            <br>
        </div>


            @endsection

            @section('plaatje')
                <img class="logo" src="/images/logo/blogIcon.jpg" alt="home">
                <h2>Articles</h2>
                @endsection

        <script src="/js/main.js"></script>


                </body>
                </html>
