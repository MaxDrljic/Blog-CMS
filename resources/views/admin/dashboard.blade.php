@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center"><h6 class="text-center text-info">POSTED</h6></div>
    
            <div class="card-body">
                <h1 class="text-center">{{ $posts_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center"><h6 class="text-center text-danger">TRASHED POSTS</h6></div>
    
            <div class="card-body">
                <h1 class="text-center">{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center"><h6 class="text-center text-success">USERS</h6></div>
    
            <div class="card-body">
                <h1 class="text-center">{{ $users_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center"><h6 class="text-center text-success">CATEGORIES</h6></div>
    
            <div class="card-body">
                <h1 class="text-center">{{ $categories_count }}</h1>
            </div>
        </div>
    </div>
</div>    

@endsection
