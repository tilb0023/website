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

                <form method="POST" action="{{ Route('article.store') }}">
                    @csrf
                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <textarea class="textarea @error('title') errorForm @enderror" name="title" style="resize: none" rows="1"
                                      id="input3" placeholder="Your title goes here"value="{{ old('title') }}"></textarea>
                            <br>
                            @error('title')
                            <p class="errorText">{{ $errors->first('title') }}</p>
                            @enderror
                            <p7>Max amount of characters: <span id="count3">0</span>/50</p7>
                        </div>
                    </div>

                    <br><br>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt
                            @error('excerpt')
                            @enderror </label>

                        <div class="control">
                            <textarea class="textarea @error('excerpt') errorForm @enderror" name="excerpt" style="resize: none" rows="1"
                                      id="input2" placeholder="Your excerpt goes here"value="{{ old('excerpt') }}"></textarea>
                            @error('excerpt')
                            <p class="errorText">{{ $errors->first('excerpt') }}</p>
                            @enderror
                            <p7>Max amount of characters: <span id="count2">0</span>/100</p7>
                        </div>

                    <br><br>

                        <div class="field">
                            <label class="label" for="body">Text</label>

                            <div class="control">
                                <textarea class="textarea @error('text') errorForm @enderror" name="text" style="resize: none" rows="30"
                                          id="input" placeholder="Your text goes here"value="{{ old('text') }}"></textarea>
                                @error('text')
                                <p class="errorText">{{ $errors->first('text') }}</p>
                                @enderror
                                <p7>Max amount of characters: <span id="count">0</span>/5000</p7>
                            </div>
                        </div>

                    <br><br>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="buttonSubmit"><a class="a1" type="submit">Submit</a></button>
                            <button class="buttonCancel"><a class="a2" href="/articles" type="cancel">Cancel</button>
                        </div>
                    </div>
                </form>

                <br>
                <br>
                <br>
                <br>
                <script src="/js/main.js"></script>
            </div>
    </li>

@endsection
@section('plaatje')
    <img class="logo" src="/images/logo/blogIcon.jpg" alt="home">
    <h2>Articles</h2>
    @endsection




