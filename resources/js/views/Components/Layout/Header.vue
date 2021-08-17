<template>
    <div>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="top-left d-flex">
                            <div class="lang-box">
                               <a  style="color:green;" href="https://wa.me/c/256784783583" target="_blank"><span><i class="fab fa-whatsapp"></i> +256 784 783583</span></a>
                            </div>
                            <div class="mny-box">
                                 <a style="color:skyblue;" href="https://twitter.com/centurybooksug" target="_blank"><span><i  class="fab fa-twitter"></i> Twitter</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="top-right text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href=""
                                        ><img src="images/user.png" alt="" />My
                                        Account</a
                                    >
                                </li>
                                <li class="list-inline-item">
                                    <a href=""
                                        ><img
                                            src="images/wishlist.png"
                                            alt=""
                                        />Wishlist</a
                                    >
                                </li>
                                <li class="list-inline-item">
                                    <a href=""
                                        ><img
                                            src="images/checkout.png"
                                            alt=""
                                        />Checkout</a
                                    >
                                </li>
                                <li class="list-inline-item">
                                    <a href=""
                                        ><img
                                            src="images/login.png"
                                            alt=""
                                        />Login</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href=""><img  src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-5 padding-fix">
                        <form action="#" class="search-bar">
                            <input type="text" name="search-bar" placeholder="I'm looking for...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="images/call.png" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Call Us</span>
                                    <p>+256 784 783583</p>
                                </div>
                            </div>
                            <div class="cart-box ml-auto text-center">
                                <a href="" class="cart-btn">
                                    <img src="images/cart.png" alt="cart">
                                    <span>2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>Bookshop <i class="fa fa-home"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Top Reads  <i class="fa fa-star"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Request A Book  <i class="fa fa-paper-plane "></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Blog  <i class="fa fa-blog"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">About Us  <i class="fa fa-user"></i></a><ul class="dropdown"></ul></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</template>

<script>
export default {
  name: 'Header',
  components: {}
};
</script>

<style scoped></style>
