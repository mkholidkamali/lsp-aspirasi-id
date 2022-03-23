
@extends('layouts.main')

@section('container')


<div class="col-md-4 mx-auto" style="margin-top:6rem">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center mb-4">Login Admin</h1>
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary text-center">Login</button>
                <a href="/admin/index" class="btn btn-primary">Login</a>
            </form>
        </div>
    </div>
    <div class="alert alert-danger mx-auto mt-4" role="alert">
        A simple danger alert—check it out!
    </div>
</div>
    

@endsection