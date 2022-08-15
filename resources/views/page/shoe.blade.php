هاجر, [١٥/٠٨/٢٠٢٢ ٠٥:٤٧ م]
@include('layout.header')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/shoe.css')}}">

    <link  rel="shortcut icon" type="image/jpg" href="images/shoes/sh.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>men</title>
</head>
<body>
@foreach ($shoes as $key =>$shoe)


<div class="d1">
    <img src={{ asset('images'.$shoe->image) }} data-modal-target="#modal"  onclick="openModal(modal{{$key+1}})" alt=""id="getImage{{$key+1}}">
</div>

<div class="modal" id="modal{{$key+1}}">
    <button id="close" data-close-button class="close-button">&times;</button>
    <div class="modal-body">
      <div class="shop-item">
          <div class="shop-item-details">
            <img src={{ asset('images'.$shoe->image) }}  alt="" class="modal_item">
            <span class="shop-item-title" >shoe {{$key+1}}</span>
            <span class="shop-item-price" id="pr{{$shoe->id}}">{{$shoe->price ."SP"}}</span>
              <img src="images/shoes/pp3-removebg-preview.png"  onclick="add.play()"  class="shop-item-button"/>
          </div>
      </div>
    </div>
    </div>
  </div>

@endforeach


</body>
</html>