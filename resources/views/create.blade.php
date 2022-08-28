@extends('layout.main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="floatingInputName" placeholder="John Doe">
                        <label for="floatingInputName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                        <label for="floatingInputEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password"  class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection