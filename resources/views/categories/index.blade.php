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
                <tr> <th> Id</th>   <th> Name</th> <th> Edit</th>  </tr>

           </thead>
           <tbody>
            @foreach ($categories as $category)
           <tr> <td> {{$category->id}}</td> <td> {{$category->name}}</td> <td> <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm">Edit</a></td>
            <td> <a href="{{route('categories.edit', $category->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>

            {{-- <tr> </tr> --}}
            @endforeach
        </tbody>
        </table>

        <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="flase">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    </div>

</div>
@endsection
