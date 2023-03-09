@extends('layout')
@section('title', 'Blog-Details')


@section('content')

    <div class="container my-5">
        <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
            <div>
                <small>
                    @foreach(explode(',',$blog->tags) as $row)
                    @if ($loop->last)
                    <a href="#" class="text-primary">{{$row}}</a>
                    @else
                    <a href="#" class="text-primary">{{$row}},</a>
                    @endif

                    
                   @endforeach
                </small>
            </div>
            <h1 class="font-weight-bold text-dark">{{$blog->title}}
            </h1>
            <p class="my-2" style="line-height: 2;"></p>

            <div class="my-3 d-flex align-items-center justify-content-between">
                {{-- <div class="d-flex align-items-center"> --}}
                    {{-- <img src="https://avatars0.githubusercontent.com/u/39916324?s=460&u=602ca47fcce463981a2511a21148236f304ec934&v=4"
                        style="width: 50px; border-radius:50%" /> --}}
                    <small class="">
                        <a href="#" class="text-primary d-block"></a>
                        <span>{{ date('d F Y', strtotime($blog->created_at)) }}</span>
                    </small>
                {{-- </div> --}}
               
            </div>
        </div>
        <img class="w-100 my-3" src="{{ asset('storage'.$blog->image) }}" />

        <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
            
           {!!$blog->description!!}

            <br>

         

        </div>
    </div>

@endsection
