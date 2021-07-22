@extends('layouts.master')
@section('content')
    <nav class="navbar navbar-light bg-light" >
        <form class="form-inline" method="get" action="{{ route('list.search') }}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <a class="btn btn-primary" href="{{ route('list.create') }}">add</a>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Store</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">name</th>
            <th scope="col">status</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($agencies as $key => $agency)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $agency->store }}</td>
            <td>{{ $agency->phone }}</td>
            <td>{{ $agency->email }}</td>
            <td>{{ $agency->address }}</td>
            <td>{{ $agency->name }}</td>
            <td>{{ $agency->status }}</td>
            <td>
                <a class="btn btn-primary" href="{{route('list.edit',$agency->id)}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{route('list.delete',$agency->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
