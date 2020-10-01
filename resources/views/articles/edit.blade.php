@extends('app')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Edit Article!</h1>

        <form method="POST" action="{{ route('articles.update', $article->id) }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input
                    class="input"
                    type="text"
                    name="title"
                    style="@error('title') border-color:red @enderror"
                    id="title"
                    value="{{ $article->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea
                    class="textarea"
                    name="excerpt"
                    id="excerpt"
                    style="@error('excerpt') border-color:red @enderror"
                    cols="100"
                    rows="8"
                    >{{ $article->excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea
                    class="textarea"
                    name="body"
                    id="body"
                    style="@error('body') border-color:red @enderror"
                    cols="100"
                    rows="8"
                    >{{ $article->body }}</textarea>
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
