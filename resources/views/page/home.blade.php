@extends('layout.master')
@section('content')

    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src={{ asset("images/home/k.jpg") }} data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>
        <div class="home-content">
            <div class="row home-content__main">
              <div class="home-content__left">
                    <h1> المتجر الافتراضي <br> </h1>

                    <div  class="s" >
                        <a href="#download" class="smoothscroll">
                             التخفيضات
                        </a>
                    </div>
                    <div class="s">
                        <a href="#trend" class="smoothscroll">
                             الأكثر شراء
                        </a>
                    </div>
                    <div class="home-content__btn-wrap">
                        <a href="#" class="btn btn--primary home-content__btn smoothscroll">
                            لنتسوق الآن
                        </a>
                    </div>
                </div>
                <!-- end home-content__left-->

                <div class="home-content__right">
                    <img src={{ asset("images/home/hero-app-screens-800.png") }} srcset="images/home/hero-app-screens-800.png 1x, images/home/hero-app-screens-1600.png 2x">
                </div>
                 <!-- end home-content__right -->

            </div>
             <!-- end home-content__main -->

            <ul class="home-content__social">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fab fa-pinterest"></i></a></li>
            </ul>

        </div>

         <!-- end home-content -->

        <a href="#trend" class="home-scroll smoothscroll" >
            <span class="home-scroll__text">Scroll</span>
            <span class="home-scroll__icon"></span>
        </a>

    </section>

    <!-- end s-home -->

    <section class="card-box" >

        <div class="row process-wrap" id="download" class="home-scroll smoothscroll">

            <h2 class="display-2 text-center" data-aos="fade-up">التنزيلات</h2>
        </div>
        <div class="container-card">

      <div class="card">


          <img src={{ asset("images/home/a.png") }} alt="Denim Jeans" style="width:100%" >
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/z.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/s3.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
            <img src={{ asset("images/home/aa.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/f10.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/s4.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
        </div>
    </section>
    <section class="card-box2" id="trend">
        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">الأكثر شراء</h2>
        </div>
        <div class="container-card">

      <div class="card">

          <img src={{ asset("images/home/s20.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/f13.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/7.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
            <img src={{ asset("images/home/s46.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/a14.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/oo.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
        </div>
    </section>
    <section class="card-box">
        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">أحدث المنتجات</h2>
        </div>
        <div class="container-card">

      <div class="card">

          <img src={{ asset("images/home/f16.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/x.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
          <img src={{ asset("images/home/a7.png") }} alt="Denim Jeans" style="width:100%">
          <!-- <h1>Tailored Jeans</h1> -->
          <p class="price">$19.99</p>
          <div class="cart-like">
              <a href="#"><i class="fas fa-shopping-cart"> </i></a>
              <a href="#"><i class="fas fa-heart"> </i></a>
          </div>
          <!-- <p><button>Add to Cart</button></p> -->
        </div>
        <div class="card">
            <img src={{ asset("images/home/s16.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/s8.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
          <div class="card">
            <img src={{ asset("images/home/38.png") }} alt="Denim Jeans" style="width:100%">
            <!-- <h1>Tailored Jeans</h1> -->
            <p class="price">$19.99</p>
            <div class="cart-like">
                <a href="#"><i class="fas fa-shopping-cart"> </i></a>
                <a href="#"><i class="fas fa-heart"> </i></a>
            </div>
            <!-- <p><button>Add to Cart</button></p> -->
          </div>
        </div>
    </section>

@endsection
