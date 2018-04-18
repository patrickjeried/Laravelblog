@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card">
                <!-- <div class="card-header">Profile</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/addPost') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row{{ $errors->has('post_title') ? ' has-error' : '' }} ">
                            <label for="post_title" class="col-md-4 control-label text-md-right">Title</label>
                            
                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" required autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('post_body')? ' has-error' : '' }} ">
                            <label for="post_body" class="col-sm-4 col-label text-md-right">{{ __('Post Body') }}</label>

                            <div class="col-md-6">
                                <textarea id="email" rows="7" class="form-control" name="post_body" value="{{ old('email') }}" required autofocus></textarea>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select id="category_id" type="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" required>
                                    <option value="">Select</option>
                                    @if(count($categories) > 0)
                                        @foreach($categories->all() as $category)
                                            <option value="{{ $category->id }}">{{$category->category}}</option>
                                        @endforeach
                                    @endif
                                    
                                    
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="post_image" class="col-md-4 col-form-label text-md-right">{{ __('Featured Image') }}</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control{{ $errors->has('post_image') ? ' is-invalid' : '' }}" name="post_image" required>

                                @if ($errors->has('post_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Publish Post') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection