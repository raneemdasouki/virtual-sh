
    <!-- header
    ================================================== -->
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/store.css')}}">

    <header class="s-header">

        <div class="row">
        <div id="overlay"></div>
<div data-modal-target="#mod">
<img src={{ asset("images/home/pp3-removebg-preview.png" ) }} alt="" class="car"  onclick="openModal(mod)"/>
</div>
<div class="modal" id="mod"  >
    <button id="close" data-close-button class="close-button">&times;</button>
  <div class="modal-body">
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
      </section>
  </div>


</div>


        

            <div class="header-logo">
                <a class="site-logo" href="">
                    <img src={{ asset("images/home/logo.png") }} alt="Homepage">

                </a>
            </div>

            <nav class="header-nav-wrap">
                <ul class="header-main-nav">

                    <li class="current"><a  class="smoothscroll" href="#footer" title="contact us">اتصل بنا</a></li>
                    <li><a  href="dept" title="dept">   أقسام المتجر</a></li>
                    <li><a  href="about" title="about">معلومات عنا</a></li>
                    <li><a  href="home" title="home">  الصفحة الرئيسية</a></li>
                    <!-- <li><a class="smoothscroll" href="#download" title="download">Download</a></li>	 -->

                </ul>


                    <div class="login">
                        <div class="dropdown  ">
                        <a href="login"><img  class="addacount dropbtn"  src={{ asset("images/home/images.png") }} alt="" > </a>

                    </div>

                    </div>

                </div>

            </nav> <!-- end header-nav-wrap -->

            <a class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>
        </div>
    
<script>
        var add=new Audio();
            add.src="music/add.mp3";
        var remove=new Audio();
            remove.src="music/remove.mp3";

        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
        })
        })

        overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.modal.active')
        modals.forEach(modal => {
            closeModal(modal)
        })
        })

        closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal')
            closeModal(modal)
        })
        })

        function openModal(modal) {
        if (modal == null) return
        modal.classList.add('active')
        overlay.classList.add('active')
        }


function closeModal(modal) {
        if (modal == null) return
        modal.classList.remove('active')
        overlay.classList.remove('active')
        }
        if (document.readyState == 'loading') {
        document.addEventListener('DOMContentLoaded', ready)
        } else {
        ready()
        }

        function ready() {
        var removeCartItemButtons = document.getElementsByClassName('btn-danger')
        for (var i = 0; i < removeCartItemButtons.length; i++) {
            var button = removeCartItemButtons[i]
            button.addEventListener('click', removeCartItem)
        }

        var quantityInputs = document.getElementsByClassName('cart-quantity-input')
        for (var i = 0; i < quantityInputs.length; i++) {
            var input = quantityInputs[i]
            input.addEventListener('change', quantityChanged)
        }
        }


        document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)


        function purchaseClicked() {
        alert('Thank you for your purchase')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        updateCartTotal()
        }

        function removeCartItem(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateCartTotal()
        }

        function quantityChanged(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1
        }
        updateCartTotal()
        }
        var addToCartButtons = document.getElementsByClassName('shop-item-button')
        for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
        }
        function addToCartClicked(event) {
        var button = event.target
        var shopItem = button.parentElement.parentElement
        var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
        var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
        addItemToCart(title, price)
        updateCartTotal()
        }

        function addItemToCart(title, price) {
        var cartRow = document.createElement('div')
        cartRow.classList.add('cart-row')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title) {
                alert('This item is already added to the cart')
                return
            }
        }
        var cartRowContents = `
            <div class="cart-item cart-column">
                <span class="cart-item-title">${title}</span>
            </div>
            <span class="cart-price cart-column">${price}</span>
            <div class="cart-quantity cart-column">
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button" onclick="add.play()">REMOVE</button>
            </div>`
        cartRow.innerHTML = cartRowContents
        cartItems.append(cartRow)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
        }

function updateCartTotal() {
        var cartItemContainer = document.getElementsByClassName('cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
        var total = 0
        for (var i = 0; i < cartRows.length; i++) {
            var cartRow = cartRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
            var price = parseFloat(priceElement.innerText.replace('ل .س', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }
        total = Math.round(total * 100) / 100
        document.getElementsByClassName('cart-total-price')[0].innerText = 'ل.س' + total
        }
</script>

    </header> <!-- end header -->
