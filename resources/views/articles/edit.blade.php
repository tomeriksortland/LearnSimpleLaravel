@extends('app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Edit Article!</h1>

        <form method="POST" action="/articles/{{ $article->Id }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="Title">Title</label>

                <div class="control">
                    <input
                    class="input"
                    type="text"
                    name="Title"
                    style="@error('Title') border-color:red @enderror"
                    id="Title"
                    value="{{ $article->Title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="Excerpt">Excerpt</label>

                <div class="control">
                    <textarea
                    class="textarea"
                    name="Excerpt"
                    id="Excerpt"
                    style="@error('Excerpt') border-color:red @enderror"
                    cols="100"
                    rows="8"
                    >{{ $article->Excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="Body">Body</label>

                <div class="control">
                    <textarea
                    class="textarea"
                    name="Body"
                    id="Body"
                    style="@error('Body') border-color:red @enderror"
                    cols="100"
                    rows="8"
                    >{{ $article->Body }}</textarea>
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
