@extends('layouts')

@section('content')
 <div class="container mt-4">
     <div class="card">
         <div class="card-body">
             <p>Post Name : {{ $post->getTranslation('name', App::getLocale()) }}</p>
             <p>Post Slug : {{$post->getTranslation('slug', App::getLocale()) }}</p>
         </div>
     </div>
 </div>
@endsection
