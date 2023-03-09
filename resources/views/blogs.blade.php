@extends('layout')
@section('title', 'Blogs')

@section('content')
    <!-- ======= Blogs Section ======= -->
    <section id="allblog_blogs" class="allblog_blogs">

        <div class="container">
            <div class="py-4 d-flex justify-content-between">
                <h3 class="fw-regular">Blogs</h3>
                <a href="{{route('add-blog')}}" class="btn btn-dark">Add Blogs</a>
            </div>
            <div class="row">
                @forelse ($data as $blog)
                    <article class="col-md-6">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="blog_image">
                                    <img decoding="async" width="1280" height="854"
                                        src="{{ asset('storage' . $blog->image) }}"
                                        class="attachment-full size-full img-fluid" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="blog_text">
                                    <h3 class="blog_title">
                                        <a>
                                            {{ $blog->title }}</a>
                                    </h3>
                                    <div class="blog_meta_data">
                                        <span class="blog_date">
                                            {{ date('d F Y', strtotime($blog->created_at)) }}</span>
                                    </div>
                                    <div class="blog_meta_data">
                                        <span class="blog_date">
                                            Author : {{$blog->author}}</span>
                                    </div>
                                    
                                    <div class="blog_data">
                                        <p>

                                            {!! $blog->description !!}

                                        </p>
                                    </div>
                                    <div class="blog_read-more-wrapper">

                                        <a class="blog_read_more" href="{{route('view-blog',$blog)}}">
                                            Read More » </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                @endforelse

            </div>

        </div>

    </section><!-- End blogs Section -->

@endsection
