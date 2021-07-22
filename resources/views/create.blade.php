@extends('layouts.master')
@section('content')
    <h2>Thêm mới đại lý phân phối</h2>
    <form action="{{ route('list.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Store</label>
            <input type="text" name="store"  class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
