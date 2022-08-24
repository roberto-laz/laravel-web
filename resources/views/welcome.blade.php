@extends('layout.main')

@section('content')    

<div class="container">
    <div class="row">
        <div class="col">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Laravel CRUD Application</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">CRUD (Create, Read, Update, Delete) stands as a basic requirement for any Laravel application</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{route('users.index')}}" type="button" class="btn btn-primary btn-lg px-4 gap-3">View Example</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

