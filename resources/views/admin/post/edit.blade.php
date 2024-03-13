@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editing category</h1>
                        <form action="{{ route('admin.post.delete', $post->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i role="button" onclick="return confirm('Sure?')"
                                   class="fa fa-trash text-danger"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
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
                        <form action="{{ route('admin.category.update', $post->id) }}" method="post" class="w-25">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" name="title" class="form-control"
                                       value="{{$post->title}}" placeholder="Enter post name">
                                @error('title')
                                <div class="text-danger">
                                    Field must be fulfilled
                                </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary col-4" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
