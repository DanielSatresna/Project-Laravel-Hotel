
   <!-- Header Section Begin -->
   <header class="header">
       <div class="header__top">
           <div class="container">
               <div class="row">
                   <div class="col-lg-7">
                       <ul class="header__top__widget">
                           <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                           <li><span class="icon_phone"></span> (123) 456-78-910</li>
                       </ul>
                   </div>
                   <div class="col-lg-5">
                       <div class="header__top__right">
                           <div class="header__top__auth">
                               <ul>
                                   <li><a href="/login">Login</a></li>
                                   <li><a href="/register">Register</a></li>
                               </ul>
                           </div>
                           <div class="header__top__language">
                               <img src="/assets/img/lan.png" alt="">
                               <span>Hi..{{auth()->user()->name}} </span>
                               <i class="fa fa-angle-down"></i>
                               <ul>
                                   <li><a href="/profile" class="dropdown-item has-icon">
                                    <i class="fa fa-user"></i> Profile
                                    </a></li>
                                   <li><a href="/logOut" class="dropdown-item has-icon text-danger">
                                    <i class="fa fa-sign-out-alt"></i> Logout
                                    </a></li>
                               </ul>
                            </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="header__nav__option">
           <div class="container">
               <div class="row">
                   <div class="col-lg-2">
                       <div class="header__logo">
                           <a href="/"><img src="/assets/img/logo.png" alt=""></a>
                       </div>
                   </div>
                   <div class="col-lg-10">
                       <div class="header__nav">
                           <nav class="header__menu">
                               <ul class="menu__class">
                                   <li class="active"><a href="/">Home</a></li>
                                   <li><a href="/ruangan">Rooms</a></li>  
                                   <li><a href="/services">Services</a></li>    
                               </ul>  
                           </nav>
                           <div class="header__nav__widget">
                               <a href="#">Book Now <span class="arrow_right"></span></a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="canvas__open">
                   <span class="fa fa-bars"></span>
               </div>
           </div>
       </div>
   </header>
   <!-- Header Section End -->