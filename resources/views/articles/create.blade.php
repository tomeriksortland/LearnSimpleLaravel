@extends('app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article!</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="Title">Title</label>

                    <div class="control">

                    <input
                        class="input"
                        type="text"
                        name="Title"
                        id="Title"
                        style="@error('Title') border-color: red @enderror"
                        value="{{ old('Title') }}">

                        @error('Title')
                    <p
                        class="help"
                        style="color:red">{{ $errors->first('Title') }}
                    </p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Excerpt">Excerpt</label>

                    <div class="control">
                        <textarea
                        class="textarea"
                        name="Excerpt"
                        id="Excerpt"
                        cols="100"
                        rows="8"
                        style="@error('Excerpt') border-color: red @enderror"
                        >{{ old('Excerpt') }}
                        </textarea>

                        @error('Excerpt')
                    <p
                        class="help"
                        style="color:red">{{ $errors->first('Excerpt') }}
                    </p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Body">Body</label>

                    <div class="control">
                        <textarea
                        class="textarea"
                        name="Body"
                        id="Body"
                        cols="100"
                        rows="8"
                        style="@error('Body') border-color: red @enderror"
                        >{{ old('Body') }}</textarea>

                        @error('Body')
                        <p
                        class="help"
                        style="color:red">{{ $errors->first('Body') }}</p>
                        @enderror

                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit!</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
