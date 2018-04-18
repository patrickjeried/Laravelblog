@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
                            <p>{{ $post->post_body }}</p>
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
