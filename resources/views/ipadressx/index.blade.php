@extends('ipadress.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ipadressx.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Ipadress</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ipadressx as $ipadress)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ipadress->name }}</td>
            <td>{{ $ipadress->ipadress }}</td>
            <td>
                <form action="{{ route('ipadress.destroy',$ipadress->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ipadress.show',$ipadress->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ipadress.edit',$ipadress->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ipadressx->links() !!}
      
@endsection