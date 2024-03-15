@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding user</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <form action="{{route('admin.user.store')}}" method="post" class="w-25">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter user name">
                                @error('name')
                                <div class="text-danger">
                                    Field must be fullfilled
                                </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary col-4" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
