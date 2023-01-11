@extends('layout')
@section('content')

<section class="col-12" >


<div class="row mt-2" >
    <div class="col-2 bg-light rounded border ">
        <div class="row col d-flex justify-content-center text-center p-1 ">
            <a href="{{ url('/get-all-photos') }}" class="btn btn-info " style="font-weight: bold">Grįžti</a>
        </div>
    
        <div class="row col d-flex justify-content-center text-center pt-4">
            <i class="fa-solid fa-cat h1"></i>
            <div class="h3">{{$catsPhoto->cat_name}}</div>
        </div>
        <div class="row col d-flex justify-content-center text-center pt-4">
            <i class="fa-solid fa-user h1"></i> 
            <div  class="h3">{{$catsPhoto->photo_author}}</div>
        </div>
    
        <div class="row col d-flex justify-content-center text-center pt-4">
            <i class="fa-solid fa-paw h1"></i> 
            <div  class="h3">{{$catsPhoto->clicks}}</div>
        </div>
    </div>
       <div class="col d-flex justify-content-center" >
             <img src="{{ url('/images/'.$catsPhoto->photo_url) }}" class="img-thumbnail col">
       </div>

</div>
</section>
@stop