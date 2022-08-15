@extends('layout.master')
@section('content')


    <!-- about
    ================================================== -->
    <a href="#about-how" class="home-scroll smoothscroll">
        <span class="home-scroll__text">Scroll</span>
        <span class="home-scroll__icon"></span>
    </a>

 <div class="row process-wrap"  id="about">

    <h2 class="display-2 text-center" data-aos="fade-up">كيفية التسوق من الموقع؟</h2>

    <div class="process" data-aos="fade-up">
        <div class="process__steps block-1-2 block-tab-full group">

            <div class="col-block step">
                <h3 class="item-title">تسجيل دخول</h3>
                <p>إذا أردت التسوق من المتجر والشراء عليك أولا القيام بتسجيل الدخول عبر الضغط على ايقونة تسجيل الدخولفي حال كنت مستخدم جديد عليك إنشاء حساب وإلا فقم بتسجيل الدخول عبر حسابك 
                    </p> 
            </div>

            <div class="col-block step">
            <h3 class="item-title">تصفح المنتجات</h3>
                    <p>يمكنك تصفح الأقسام الموجودة عبر الضغط على أقسام المتجر والتنقل بينها   للبحث عن طلبك و معاينة المنتجات 
                    </p> 
            </div>

            <div class="col-block step">
            <h3 class="item-title">أضافة المشتريات للسلة</h3>
                    <p>بعد قيامك بتصفح المنتجات يمكنك إضافة العناصر التي تريدها للسلة عبر الضغط على ايقونة السلة ومن ثم يمكنك التأكد من محتويات السلة ورؤية الفاتورة  حيث تستطيع إزالة منتجات من السلة أو زيادة عدد المنتجات 
                    </p> 
            </div>

            <div class="col-block step">
            <h3 class="item-title">تأكيد عملية الشراء</h3>
                    <p>بعد التأكد من قائمة مشترياتك يمكنك تأكيد عملية الشراء ةالقيام بعملية الدفع إما نقديا او الكترونيا بإضافة تفاصيل بطاقتك المصرفية
                    </p>
            </div>

        </div> <!-- end process__steps -->
   </div>

   <!-- end process -->

 <section id="about-how" class="s-about-how">

    <div class="row">
       <div class="col-full video-bg" data-aos="fade-up">
        <!-- <img src={{ asset("images/home/video-bg-2400.jpg") }}> -->

            <div class="shadow-overlay"></div>
            <a class="btn-video" href={{asset("video/virtual.mp4")}} data-lity>
                <span class="video-icon"></span>
            </a>

            <div class="stats">
                <div class="item-stats">
                    <span class="item-stats__num">
                        3.1M
                    </span>
                    <span class="item-stats__title">
                        التنزيلات
                    </span>
                </div> <!-- end item-stats -->
                <div class="item-stats">
                    <span class="item-stats__num">
                        24K
                    </span>
                    <span class="item-stats__title">
                        التعليقات الإيجابية
                    </span>
                </div> <!-- end item-stats -->
            </div>
       </div> <!-- end video-bg -->
    </div>
 </section>
 </div>



@endsection

