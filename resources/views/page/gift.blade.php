@extends('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/jpg" href="images/gift/giftg.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/gift.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/store.css')}}">

    <title>gift</title>
    <script src="jquery-3.4.1.min.js"></script>

</head>
<body>
    @foreach ($gifts as $key => $gift)

    <div class="d1">
        <img src={{ asset('images'.$gift->image) }}  data-modal-target="#modal"  onclick="openModal(modal{{$key+1}})" alt=""id="getImage{{$key+1}}">
    </div>

    <div class="modal" id="modal{{$key+1}}">
        <button id="close" data-close-button class="close-button">&times;</button>
        <div class="modal-body">
          <div class="shop-item">
              <div class="shop-item-details">
                <img src={{ asset('images'.$gift->image) }}  alt="" class="modal_item">
                <span class="shop-item-title" >{{$gift->descr}}</span>
                <span class="shop-item-price" id="pr{{$gift->id}}">{{$gift->price . "SP"}}</span>
                  <img src="images/gift/pp3-removebg-preview.png"  onclick="add.play()"  class="shop-item-button"/>
              </div>
          </div>
        </div>
        </div>
      </div>

    @endforeach


</body>
</html>
