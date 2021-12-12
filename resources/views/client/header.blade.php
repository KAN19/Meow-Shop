<nav class="navbar__container">
    <div class="navbar__topnav navbar__topnav-main">
        <div class="topnav__item topnav__item__logo">
            <a href="{{route('home-page')}}">
                <img class="imageradius" src=" {{url('/Image/logo.png')}}" style="max-width: 130px; padding-top: 10px" alt="product1">
            </a>
        </div>

        <div class="topnav__item topnav__item-fullscreen">
            <a href="{{route('home-page')}}" class="topnav__item__button">
                HOME
            </a>
            <div id="topnav__item-product">
                <a href="{{route('product-page')}}" class="topnav__item__button">
                    PRODUCT
                </a>
                <div class="product__dropdown__content">
                    <a href="#">Cat Food</a>
                    <a href="#">Dog Food</a>
                    <a href="#">Toys</a>
                </div>
            </div>
            <a href="{{route('contact-page')}}" class="topnav__item__button">
                CONTACT
            </a>

        </div>

        <div class="topnav__item topnav__item-fullscreen">
            <input type="text" id="topnav__search__input" />
            <a href="#" id="topnav__search__icon" class="topnav__item__button topnav__item-icon">

                <i class="fas fa-search"></i>
            </a>
            <div id="topnav__item__cart">
                <a class="topnav__item__button topnav__item-icon">
                    <i class="fas fa-shopping-cart"></i>
                </a>

                <?php 
                    $myCart = $cart->items; 
                ?>
           
                <div class="cart__dropdown">
                    @forelse ($myCart as $item)
                        <a href="#" class="cart__dropdown__item">
                            <img src="https://picsum.photos/200/500" class="cart__dropdown__image" alt="" srcset="">
                            <div class="cart__dropdown__content">
                                <div class="cart__dropdown__content-name">
                                    Ten san phams ne
                                </div>
                                <div class="cart__dropdown__content-price">
                                    100.000VND
                                </div>
                            </div>
                            <div href="#" class="cart__dropdown__delete">
                                <i class="far fa-times-circle"></i>
                            </div>
                        </a>
                        <hr>
                    @empty
                        <div>Your cart is empty!</div>
                    @endforelse
                   
                    <div class="cart__dropdown__selection">
                        <a href={{route('show-cart')}} class="cart__dropdown__button">View Cart</a>
                        <a class="cart__dropdown__button">Checkout</a>
                    </div>
            </div>
            </div>

        </div>

        <!-- Burger -->
        <div class="topnav__item topnav__item-burger d-flex d-sm-none">
            <i class="fas fa-bars" id="burger-top"></i>
            <i class="far fa-times-circle" id="close-top" style="display: none;"></i>
        </div>
    </div>
    <div class="panel d-sm-none">
        <a href="#" class="panel__item">
            <span class="panel__item__icon"><i class="fas fa-home"></i></span>
            <span>Home</span>
        </a>
        <a href="#" class="panel__item">
            <span class="panel__item__icon"><i class="fas fa-paw"></i></span>
            <span>Products</span>
        </a>
        <a href="#" class="panel__item">
            <span class="panel__item__icon"><i class="fas fa-phone-square-alt"></i></span>
            <span>Contact</span>
        </a>
       
        <a href="#" class="panel__item">
            <span class="panel__item__icon"><i class="fas fa-shopping-cart"></i></span>
            <span>Cart</span>
        </a>
    </div>
</nav>
<div class="modal-overlay " id="modal-overlay"></div>