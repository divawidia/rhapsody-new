@extends('layouts.admin.master')

@section('title')
    Edit User Admin
@endsection
@section('page-title')
    Edit User Admin
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User {{ $user->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="status" class="col-md-2 col-form-label">Status Akun</label>
                                <div class="col-md-10 d-flex align-items-center">
                                    @if($user->status == 1)
                                        <input type="checkbox" name="status" id="status" switch="success" value="1" checked/>
                                    @else
                                        <input type="checkbox" name="status" id="status" switch="success" value="1" >
                                    @endif
                                    <label for="status" data-on-label="On" data-off-label="Off"></label>
                                </div>
                                @error('status')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection
