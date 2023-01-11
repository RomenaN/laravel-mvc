@extends('layout')
@section('content')
<section class="image-grid animate__animated animate__fadeIn animate__faster" >
    @foreach ($catsPhotosData as $row)
    <div class="image-card__photo-wrapper"> 
        <div class="image-card__photo-details">
         <span><i class="fa-solid fa-cat"></i> {{$row->cat_name}} <i class="fa-solid fa-paw" style="margin-left: 5px;"></i>  {{$row->photo_author}} </span><span><i class="fa-solid fa-user"></i> {{$row->clicks}}</span>
         </div>
         <a href="{{ url('/vote-photo/'.$row->id) }}" class="image-card__photo-likes">
            <i class="fa-solid fa-paw"></i>
         </a>
         <a href="{{ url('/view-photo/'.$row->id) }}" >
         <img src="{{ url('/images/'.$row->photo_url) }}" class="img-thumbnail">
         </a>
    </div>
    @endforeach
    </section>
@stop