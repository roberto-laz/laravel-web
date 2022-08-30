@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>User <b>Details</b></h2></div>
                        <div class="col-sm-4 text-end">
                            <a class="btn btn-success" href="{{ route('users.create') }}">Create</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
              
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-end">
                                <a class="btn-danger view" href="{{route('users.show', $user->id)}}" title="View" data-toggle="tooltip"><i class="material-icons">remove_red_eye</i></a>
                                <a class="btn-danger edit" href="{{route('users.edit', $user->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                {{-- delete btn requires a form --}}
                                <form action="{{ route('users.destroy' , $user->id)}}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-danger delete"  title="Delete" data-toggle="tooltip">
                                        <i class="material-icons">&#xE872;</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <p>
                    @if(Session::has('successful_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ Session::get('successful_message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if(Session::has('error_message'))
                        <div class="alert alert-danger">
                        {{ Session::get('error_message') }}
                        </div>
                    @endif
                    
                </p>
              
            </div>
        </div>
    </div>
    
@endsection

    
