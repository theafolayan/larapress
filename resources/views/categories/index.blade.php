@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">
<a href="{{route('categories.create')}}" class="btn btn-success mb-3 float-right"> Create Category</a>
</div>
<div class="card card-default">
    <div class="card-header"> Categories</div>
</div>
@endsection
