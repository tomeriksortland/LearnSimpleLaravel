@extends('app')

@section('content')



<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->Title }}</h2>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

            {{ $article->Body }}

		</div>
</div>
@endsection
