@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My Blog</div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <article>
                                <h3>{{ $post->title }}</h3>
                                <div class="body">
                                    {{ $post->body }}
                                </div>
                            </article>
                        @endforeach
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
