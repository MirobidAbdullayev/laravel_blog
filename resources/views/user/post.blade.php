@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))
@section('head')
<link rel="stylesheet" href="{{asset('user/css/prism.css')}}">
@endsection
@section('title', $post->title)
@section('sub-heading', $post->subtitle)

@section('main-content')
    <!-- Post Content-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v12.0&appId=5089100531103050&autoLogAppEvents=1" nonce="F2hkMvcK"></script>
    <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <small>Created at {{$post->created_at->diffForHumans()}}</small>
                         @foreach ($post->categories as $category)
                            <small class="pull-right">
                                <a href="">{{$category->name}}</a>
                            </small>
                         @endforeach
                         <br>
                         <br>
                         {!!htmlspecialchars_decode($post->body)!!}
                         <br>
                         <br>
                         @foreach ($post->tags as $tag)
                         <a href=""><small class="pull-right" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                                {{$tag->name}}
                            </small></a>
                         @endforeach
                    </div>
                </div>
            </div>
        </article>
@endsection
@section('footer')
<script src="{{asset('user/js/prism.js')}}"></script>    
@endsection