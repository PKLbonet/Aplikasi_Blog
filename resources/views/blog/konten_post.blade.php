@extends('template_blog.content')

@section('konten')
    @foreach ($data as $konten_post)

        <!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url( '{{ asset($konten_post->gambar) }}' );" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html"> {{ $konten_post->category->name }} </a>
						</div>
						<h1> {{ $konten_post->Judul }} </h1>
						<ul class="post-meta">
							<li><a href="author.html"> {{ $konten_post->users->name }} </a></li>
							<li> {{ $konten_post->created_at }} </li>
							{{-- <li><i class="fa fa-eye"></i> 807</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        <div class="col-md-8 hot-post-left">
            <br>
            <div class="section-row">
                {!! $konten_post->content !!}
            </div>    
    @endforeach
        </div>
@endsection