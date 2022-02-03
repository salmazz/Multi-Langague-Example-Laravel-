@extends('layouts')

@section('content')
   <div class="container mt-4">
       <table class="table">
           <tr>
               <th>Name   </th>
               <th>slug </th>
               <th>Action</th>
           </tr>
           @foreach($posts as $post)
               <tr>
                   <td>{{$post->getTranslation('name', App::getLocale())}}</td>
                   <td>
                       <a href="{{route('posts.show',$post->getTranslation('slug',App::getLocale()))}}">  {{ $post->getTranslation('slug',App::getLocale()) }} </a>
                   </td>
                   <td>
                       <a href="{{route('posts.show',$post->getTranslation('slug',App::getLocale()))}}">  Show </a>
                   </td>
               </tr>
           @endforeach
       </table>
   </div>
@endsection
