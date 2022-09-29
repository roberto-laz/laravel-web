@extends('layout.main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="concept" value="{{ old('concept') }}" class="form-control" id="floatingInputConcept" placeholder="enter concept">
                        <label for="floatingInputConcept">Concept</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="discount" value="{{ old('discount') }}" class="form-control" id="floatingInputDiscount" placeholder="enter discount">
                        <label for="floatingInputDiscount">Discount</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="floatingInputPrice" placeholder="125">
                        <label for="floatingInputPrice">price </label>
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