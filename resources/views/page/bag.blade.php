@extends('layout.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('images/bag/dd.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{asset('css/bags.css')}}">
     <link rel="stylesheet" href="{{asset('css/styles.css')}}">
     <link rel="stylesheet" href="{{asset('css/store.css')}}">
    <title>bags</title>
    <script src="jquery-3.4.1.min.js"></script>

</head>
<body>
 @foreach($bags as $key => $bag)
 <div class="d1" data-modal-target="#modal">
    <img src={{asset('images'.$bag->image)}} alt="" id="getImage{{$key+1}}" onclick="openModal(modal{{$key+1}})">
 </div>


 <div class="modal" id="modal{{$key+1}}">
    {{-- @php
        dump($product);
    @endphp --}}
    <button id="close" data-close-button class="close-button">&times;</button>
    <div class="modal-body">
      <div class="shop-item">
          <div class="shop-item-details">
            <img src={{ asset('images'.$bag->image) }}  alt="" class="modal_item">
            <span class="shop-item-title" >Bag {{$key+1}}</span>
            <span class="shop-item-price" id="pr{{$bag->id}}">{{$bag->price . "SP"}}</span>
              <img src="images/bag/pp3-removebg-preview.png"   onclick="add.play()"  class="shop-item-button"/>
          </div>
      </div>
    </div>
  </div>
</div>
 @endforeach


</body>
</html>
