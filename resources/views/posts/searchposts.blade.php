@extends('layouts.app')
<!-- <style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
</style> -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif

        @if(session('response'))
            <div class="alert alert-success">{{session('response')}}</div>
        @endif
            <div class="card">
                <div class="card-header">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <form method="POST" action='{{ url("/search") }}'>
                        {{ csrf_field() }}
                              <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search"><button type="submit" class="btn btn-default" style="margin-left: 2px;">

                                    <i class="fas fa-search"></i>
                                            
                                        </button>
                                    </span>
                                </div>
                            </form
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-4">
                    @if(!empty($profile))
                        <img src="{{ $profile->profile_pic }}"
                        class="avatar" alt="">
                    @else
                        <img src="{{ url('images/avatar.png') }}" class="avatar" alt="">
                    @endif
                    
                    @if(!empty($profile))
                        <p class="lead">{{ $profile->name }} </p>
                    @else
                        <p></p>
                    @endif

                    @if(!empty($profile))
                        <p class="lead">{{ $profile->designation }} </p>
                    @else
                        <p></p>
                    @endif
                        
                    </div>
                    <div class="col-md-8">
                    @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                            <h4>{{$post->post_title}}</h4>
                            <img src="{{ $post->post_image }}" alt="">
                            <p>{{substr ($post->post_body, 0, 150) }}</p>

                            <cite>Posted on: {{date('M j, Y H:i', strtotime($post->updated_at))}}</cite>


                            <ul class="nav nav-pills">
                                <li role="presentation">
                                    <a href='{{ url("/view/{$post->id}") }}'>
                                        <i class="fas fa-eye" style="margin: 10px;"> View</i>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href='{{ url("/edit/{$post->id}") }}'>
                                        <i class="far fa-edit" style="margin: 10px;"> Edit</i>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href='{{ url("/delete/{$post->id}") }}'>
                                        <i class="far fa-trash-alt" style="margin: 10px;"> Delete</i>
                                </li>
                            </ul>

                            

                            
                            <hr/>
                        @endforeach
                    @else
                        <p>No Post Available!</p>
                    @endif

                     
                    </div>
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
