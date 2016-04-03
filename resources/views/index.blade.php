@extends('template')

@section('title')

Clean Blog

@stop

@section('header')
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
    <!-- Main Content -->
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                @foreach ($inicio as $artigo )
                <div class="post-preview">
                    
                    <a href="post">
                        <h2 class="post-title">
                            {{ $artigo['title'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $artigo['subtitle'] }}
                        </h3>                        
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{ $artigo['posted'] }}</a> {{ $artigo['data'] }}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
@stop