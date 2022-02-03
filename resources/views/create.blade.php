@extends('layouts')

@section('content')
 <div class="container mt-4">
     <a  class="btn btn-info" href="{{route('posts.create')}}">Create</a>
     <form action="{{route('posts.store')}}" method="post">
         @csrf
         <input class="form-control" type="text" name="name[ar]">
         <input class="form-control" type="text" name="name[en]">

         <input class="btn btn-info" type="submit" value="Save">
     </form>

 </div>
@endsection
