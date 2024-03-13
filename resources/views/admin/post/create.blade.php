@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding POST</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.post.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            {{--  Title--}}
                            <div class="form-group w-25">
                                <input type="text" name="title" class="form-control"
                                       value="{{old('title')}}" placeholder="Enter post name">
                                @error('title')
                                <div class="text-danger">
                                    Field must be fullfilled
                                </div>
                                @enderror
                            </div>
                            {{--Content--}}
                            <div class="form-group ">
                                <textarea id="summernote" name="content">
                                    {{ old('content') }}
                                </textarea>
                                @error('title')
                                <div class="text-danger">
                                    Field must be fulfilled
                                </div>
                                @enderror
                            </div>
                            {{--Preview image--}}
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Add preview</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image"
                                               id="exampleInputFile">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            {{--Main image--}}
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Add image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image"
                                               id="exampleInputFile">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            {{-- Select category--}}
                            <div class="form-group w-25">
                                <label>Select category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}"
                                                {{$cat->id == old('category_id')? ' selected' : ''}}>
                                            {{$cat->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Select tag multiple--}}
                            <div class="form-group">
                                <label>Select tags</label>
                                <select multiple="" class="form-control">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--  Submit button--}}
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary col-1" value="Add">
                            </div>
                        </form>
                        {{--End form--}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection