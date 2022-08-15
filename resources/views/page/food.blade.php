@extends('layout.header')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href={{ asset('css/food.css') }}>
    <link rel="stylesheet" href= {{ asset('css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('css/store.css') }}>

    <script src="jquery-3.4.1.min.js"></script>

</head>
<body>
@foreach ($food as $key => $f)
<div class="d" data-modal-target="#modal">
    <img src="{{ asset('images'.$f->image) }}" alt="" id="getImage{{$key+1}}" onclick="openModal(modal{{$key+1}})">
</div>


    <div class="modal" id="modal{{$key+1}}">
        <button id="close" data-close-button class="close-button">&times;</button>
        <div class="modal-body">
          <div class="shop-item">
              <div class="shop-item-details">
                <img src={{ asset('images'.$f->image) }}  alt="" class="modal_item">
                <span class="shop-item-title" >{{$f->descr}}</span>
                <span class="shop-item-price" id="pr{{$f->id}}">{{$f->price . "SP"}}</span>
                  <img src="images/food_img/pp3-removebg-preview.png"  onclick="add.play()" class="shop-item-button"/>
              </div>
          </div>
        </div>
        </div>
      </div>

      @endforeach


      
</body>
