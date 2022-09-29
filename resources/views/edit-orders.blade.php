@extends('layout.main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{route('orders.update', $order->id)}}">
                    @method('PUT')
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="hidden" name="id" value="{{$order->id}}" class="form-control">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="concept" value="{{$order->concept}}" class="form-control" id="floatingInputName" placeholder="lorem ipsum">
                        <label for="floatingInputName">Concept</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="price" value="{{$order->price}}" class="form-control" id="floatingInputPrice" placeholder="125">
                        <label for="floatingInputPrice">Price</label>
                    </div>                  

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{ route('orders.index') }}">Cancel</a>
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