@extends('layout.master')
@section('content')

<link rel="stylesheet" href={{ asset("css/dept.css") }}>
<div class="card-box-dept"   id="dept">
        <!-- <h2 class="display-2 text-center" data-aos="fade-up" style="text-align:center">أقسامنا</h2> -->

        <div class="card-dept">
            <img src={{ asset("images/dept/shoes.png") }} alt="Denim Jeans" style="width:100%">
            <h1>قسم الأحذية</h1>
          
            <p><button> <a id="q" href="shoe">اذهب للتسوق</a></button></p>
          </div>
          <div class="card-dept">
            <img src={{ asset("images/dept/food.png") }} alt="Denim Jeans" style="width:100%">
            <h1>قسم الأغذية</h1>
        
            <p><button> <a id="q" href="food">اذهب للتسوق</a></button></p>
          </div>
          <div class="card-dept">
            <img src={{ asset("images/dept/gi.png") }} alt="Denim Jeans" style="width:100%">
            <h1>قسم الهدايا</h1>
          
            <p><button> <a id="q" href="gift">اذهب للتسوق</a></button></p>
          </div>
          <div class="card-dept">
            <img src={{ asset("images/dept/bags.png") }} alt="Denim Jeans" style="width:100%">
            <h1>قسم الحقائب</h1>
           
            <p><button> <a id="q" href="bag">اذهب للتسوق</a></button></p>
          </div>
          
          <!-- <div class="card-dept" style=" height: 20%; width: 20%; margin-top: 10%;margin-bottom: 8%;   " > -->
            <img src={{ asset("images/dept/add.jpg") }} alt="Denim Jeans" class="adding" style="width:28%; height:28%; margin-top: 10%;  border: 2px solid rgb(227, 215, 227,0.5);
            border-radius: 50%;  box-shadow: 2px 4px 8px 2px rgba(209, 88, 209, 0.2); opacity: 0.7;">
            <!-- <h2 style="color: darkviolet;"> استمتع بالتسوق معنا</h2> -->
        
            <!-- <p><button></button></p> -->
          <!-- </div> -->
          <div class="card-dept">
            <img src={{ asset("images/dept/flower.png") }} alt="Denim Jeans" style="width:100%">
            <h1>قسم الورود</h1>
        
            <p><button> <a id="q" href="flower">اذهب للتسوق</a></button></p>
          </div>
        </div>


@endsection