@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">

<a href="{{route('categories.create')}}" class="btn btn-success mt-3 mb-3 float-right"> Create Category</a>
</div>
<div class="card card-default">
    <div class="card-header"> Categories</div>
    <div class="card-body">
        <table class="table">
           <thead>
                <tr> <th> Id</th>   <th> Name</th>  </tr>

           </thead>
           <tbody>
            @foreach ($categories as $category)
            <tr> <td> {{$category->id}}</td> <td> {{$category->name}}</td></tr>
            {{-- <tr> </tr> --}}
            @endforeach
        </tbody>
        </table>
    </div>

</div>
@endsection
