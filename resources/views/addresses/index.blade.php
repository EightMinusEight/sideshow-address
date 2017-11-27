@extends('layouts.app')

@section('content')

<div class="page-header clearfix">
    <h1>Addresses<a class="btn btn-primary pull-right" href="{{ url('/addresses/create') }}">Create Address</a></h1>
</div>


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($addresses as $address)
        <tr>
            <td>{{ $address->id }}</td>
            <td>{{ $address->address1 }}</td>
            <td>{{ $address->address2 }}</td>
            <td>{{ $address->city }}</td>
            <td>{{ $address->state }}</td>
            <td>{{ $address->zip }}</td>
            <td>
                <a class="btn btn-xs btn-success" href="{{ URL::to('addresses/' . $address->id) }}">Show</a>
                <a class="btn btn-xs btn-info" href="{{ URL::to('addresses/' . $address->id . '/edit') }}">Edit</a>
                <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $addresses->links() }}

@endsection