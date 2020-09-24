@extends('app')

@section('content')



<div id="wrapper">
	<div id="page" class="container">
        @foreach ($articles as $article)
		    <div id="content">
			    <div class="title">
				    <h2>
                        <a href="{{ route('articles.show', $article->Id) }}">
                            <br>
                            {{ $article->Title }}
                        </a>
                    </h2>
                </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

                {{!! $article->Excerpt !!}}

                </div>

        @endforeach
    </div>
</div>
@endsection
