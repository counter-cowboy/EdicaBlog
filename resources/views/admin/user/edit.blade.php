@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editing user</h1>
                        {{--Delete user button--}}
                        <form action="{{ route('admin.user.delete', $user->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i role="button" onclick="return confirm('Sure?')"
                                   class="fa fa-trash text-danger"></i>
                            </button>
                        </form>
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
                        <form action="{{ route('admin.user.update', $user->id) }}" method="post" class="w-25">
                            @csrf
                            @method('patch')
                            {{--Name--}}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control"
                                       value="{{$user->name}}" placeholder="Enter username">
                                @error('name')
                                <div class="text-danger">{{$message}} </div>
                                @enderror
                            </div>

                            {{--EMAIL User email--}}
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Enter email"
                                       value="{{$user->email}}">
                                @error('email')
                                <div class="text-danger">{{$message}} </div>
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
