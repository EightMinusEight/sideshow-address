@extends('layouts.app')

@section('content')

    <div class="page-header clearfix">
        <h1>Edit Address</h1>
    </div>

    <form method="post" action="/addresses/{{$address->id}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        @include('layouts.partials.errors')

        <div class="form-group">
            <label for="address1">Address 1</label>
            <input type="text" class="form-control" id="address1" name="address1" value="{{$address->address1}}" required>
        </div>

        <div class="form-group">
            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" name="address2" value="{{$address->address2}}">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$address->city}}" required>
        </div>

        <div class="form-group">
            <label for="state">State</label>
            @include('addresses.partials.states')
        </div>


        <div class="form-group">
            <label for="zip">Zip Code</label>
            <input type="text" class="form-control" id="zip" name="zip" value="{{$address->zip}}" required>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>



    </form>

@endsection