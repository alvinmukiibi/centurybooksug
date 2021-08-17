<template>
    <div>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="top-left d-flex">
                            <div class="lang-box">
                               <a  style="color:green;" :href="whatsapp_link" target="_blank"><span><i class="fab fa-whatsapp"></i> {{ phone_number }} </span></a>
                            </div>
                            <div class="mny-box">
                                 <a style="color:skyblue;" :href="twitter_handle" target="_blank"><span><i  class="fab fa-twitter"></i> Twitter</span></a>
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
                            <a href=""><img src="images/century_logo-8.png" alt="" ></a>
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
                                    <p> {{ phone_number }} </p>
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
        <section class="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="sticky-logo">
                            <a href="index.html"><img src="images/century_logo-2.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9">
                      <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>Bookshop <i style="color:green" class="fa fa-home"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Top Reads  <i style="color:orange" class="fa fa-star"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Request A Book  <i style="color:blue" class="fa fa-paper-plane "></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Blog  <i style="color:magenta" class="fa fa-blog"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">About Us  <i style="color:yellow" class="fa fa-user"></i></a><ul class="dropdown"></ul></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- End Sticky Menu -->
        <section class="menu-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-0">
                        <div class="sidemenu">
                            <p>All Categories <i class="fa fa-bars"></i></p>
                            <ul class="list-unstyled gt-menu">
                                <li><a href=""><img src="images/book.png" alt=""> - Hard Copy</a></li>
                                <li><a href=""><img src="images/book.png" alt="">African Affairs</a></li>
                                <li><a href=""><img src="images/book.png" alt="">African Literature</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Best Sellers</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Children</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Classics</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Contemporary</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Controversial</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Literary Fiction</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Religion</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Self Help</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Series & Chronicles</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Poetry</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Politics & History</a></li>
                                <li><a href=""><img src="images/book.png" alt="">Ugandan Authors</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>Bookshop <i style="color:green" class="fa fa-home"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Top Reads  <i style="color:orange" class="fa fa-star"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Request A Book  <i style="color:blue" class="fa fa-paper-plane "></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">Blog  <i style="color:magenta" class="fa fa-blog"></i></a><ul class="dropdown"></ul></li>
                                <li class="list-inline-item"><a href="#">About Us  <i style="color:yellow" class="fa fa-user"></i></a><ul class="dropdown"></ul></li>
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
  name: 'MainHeader',
  components: {},
  data() {
      return {
          whatsapp_link: "https://wa.me/c/256784783583",
          twitter_handle: "https://twitter.com/centurybooksug",
          phone_number: "+256 784 783583",
      }
  },
};
</script>

<style scoped></style>
