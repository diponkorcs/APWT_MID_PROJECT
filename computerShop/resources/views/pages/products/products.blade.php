@extends('Layouts.app')
@section('products')

  @foreach($products as $product)

  <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{asset($product->pPicture)}}" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">{{$product->pName}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    @foreach($product->miniSpecifications as $model)
      <li class="list-group-item">{{$model}}</li>
    @endforeach
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
  
  @endforeach

@endsection