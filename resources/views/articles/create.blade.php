@extends('app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article!</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">

                    <input
                        class="input"
                        type="text"
                        name="title"
                        id="title"
                        style="@error('title') border-color: red @enderror"
                        value="{{ old('title') }}">

                        @error('title')
                    <p
                        class="help"
                        style="color:red">{{ $errors->first('Title') }}
                    </p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea
                        class="textarea"
                        name="excerpt"
                        id="excerpt"
                        cols="100"
                        rows="8"
                        style="@error('excerpt') border-color: red @enderror"
                        >{{ old('excerpt') }}
                        </textarea>

                        @error('excerpt')
                    <p
                        class="help"
                        style="color:red">{{ $errors->first('excerpt') }}
                    </p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea
                        class="textarea"
                        name="body"
                        id="body"
                        cols="100"
                        rows="8"
                        style="@error('body') border-color: red @enderror"
                        >{{ old('body') }}</textarea>

                        @error('body')
                        <p
                        class="help"
                        style="color:red">{{ $errors->first('body') }}</p>
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
