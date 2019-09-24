@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header"> Create Category</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger"> {{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name"> Category Name</label>
                <input type="text" class = "form-control" name="name" placeholder="Eg Sports">
            </div>

            <button type="submit" class="btn btn-primary d-flex justify-content-center"> Create Category</button>

        </form>
    </div>
</div>
@endsection
