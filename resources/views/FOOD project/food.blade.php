<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('CSS/food.css') }}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Home Page</title>
  <style>
     header{font-family:Figtree, sans-serif;}
     a{text-decoration:inherit;color:black;padding-bottom:13px;}
     a:hover{border-bottom: 2px #474747 solid;}.p-6{padding:2.2rem}
     .text-right{text-align:right;margin-left:1700px;width:185px;display:flex;gap:35px;}
     .font-semibold{font-weight:bolder;font-size: 16px;}
</style>
</head>
<body>
  <Header>
    <top-bar class="top-bar">
      <social class="social">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-youtube"></i>
      </social>
      <info class="info">
        <i class="fa-solid fa-phone">\(414) 857-0107</i>
        <i class="fa-regular fa-envelope">\yummy@bistrobliss</i>
      </info>
    </top-bar>
    <header class="header">
        <logo class="logo"><img class="logo1" src="{{ asset('storage/asset/Screenshot 2023-11-03 214128.png')}}" alt=""></logo>
        <menu class="menu">
        <a role="button" href="#" class="btn1">Home</a>
        <a role="button" href="#" class="btn1">About</a>
        <a role="button" href="{{ route('menu') }}" class="btn1">Menu</a>
        <a role="button" href="#" class="btn1">Pages</a>
        <a role="button" href="{{ route('contact') }}" class="btn1">Contact</a>
      </menu>
      <button class="button" href="{{ route('booking') }}">
        <a role="button" href="{{ route('booking') }}" class="btn2">Book A Table</s>
      </button>
      <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ auth()->user()->name }}</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </header>
  </Header>

  <hero>
    <img class="img" src="{{ asset('storage/asset/46242c265ee4fe6a7935e17a54331b22.png') }}" alt="">
    <div class="title">
      <div class="title1">Best food for your test</div>
      <div class="title2">Discover delectable cuisine and un forgettable moments in our welcoming, culinary haven</div>
      <div class="title3">
        <button class="button1">
          <a role="button" href="#" class="btn3">Book A Table</a>
        </button>
        <button class="button1">
          <a role="button" href="#" class="btn3">Explore Menu</a>
        </button>
      </div>
    </div>
  </hero>

  <menu>
    <div class="con1TEXT">
      <h1>Browse Our Menu</h1>
    </div>
    <div class="con1boxs">
      <div class="box">
        <div class="boxlogo">
          <i class="fa-solid fa-mug-hot fa-2xl"></i>
        </div>
        <div class="boxtext">
          <h1>Breakfast</h1>
          <p>In the new era of technology we look in the future with certainty and pride for our life </p>
        </div>
        <div class="boxbutton">
          <a role="button" href="#" class="btn4">Explore Menu</a>
        </div>
      </div>
      <div class="box">
        <div class="boxlogo">
          <i class="fa-solid fa-bowl-food fa-2xl"></i>
        </div>
        <div class="boxtext">
          <h1>Main Dishes</h1>
          <p>In the new era of technology we look in the future with certainty and pride for our life </p>
        </div>
        <div class="boxbutton">
          <a role="button" href="#" class="btn4">Explore Menu</a>
        </div>
      </div>
      <div class="box">
        <div class="boxlogo">
          <i class="fa-solid fa-wine-glass-empty fa-2xl"></i></div>
        <div class="boxtext">
          <h1>Drinks</h1>
          <p>In the new era of technology we look in the future with certainty and pride for our life </p>
        </div>
        <div class="boxbutton">
          <a role="button" href="#" class="btn4">Explore Menu</a>
        </div>
      </div>
      <div class="box">
        <div class="boxlogo">
          <i class="fa-solid fa-cake-candles fa-2xl"></i>
        </div>
        <div class="boxtext">
          <h1>Desserts</h1>
          <p>In the new era of technology we look in the future with certainty and pride for our life </p>
        </div>
        <div class="boxbutton">
          <a role="button" href="#" class="btn4">Explore Menu</a>
        </div>
      </div>
    </div>
  </menu>

  <about>
    <aboutCON class="aboutCON">
      <div class="aboutCON1">
        <img src="{{ asset('storage/asset/Image.png') }}" alt="">
      </div>
      <div class="aboutCON2">
        <h1>We provide healthy food for your family.</h1>
        <h5>Our story began with a vision to create a unique dining
          experience that merges fine dining, exceptional service, and a
          vibrant ambiance. Rooted in city's rich culinary culture, we aim to
          honor our local roots while infusing a 2obal palate.</h5>
        <p>At place, we believe that dining is not just about food, Dut also about the
          overall experience. Our staff, renowned for their warmth and ded cation
          enves to make every visit an untorgettable event</p>
          <button class="but">
            <a role="button" href="#" class="btn5">More About Us</a>
          </button>
      </div>
      <div class="aboutCON3">
        <div class="con3a">
          <h1>Come and visit us</h1>
          <br>
          <h3>
            <is class="fa-solid fa-phone fa-l"></is>     (414) 857-0107
          </h3>
          <h3>
            <is class="fa-regular fa-envelope fa-l"></is>      happytummy@restaurant.com
          </h3>
          <h3>
            <is class="fa-sharp fa-solid fa-location-dot fa-l"></is>837 W.Marshall Lane Marshaltwon, IA50158, Los Angeles
          </h3>
        </div>
      </div>
    </aboutCON>
  </about>

  <services>
    <div class="cardtext">
      <h1>We also offer unique services for your events</h1>
    </div>
    <div class="allcards">
      <div class="all1">
        <div class="pic">
          <img src="{{ asset('storage/asset/kebab-set-table 1.png') }}" alt="">
        </div>
        <div class="text">
          <h4>Caterings</h4>
          <p>In the new era of technology we look in the future with certianty for life.</p>
        </div>
      </div>
      <div class="all1">
        <div class="pic">
         <img src="{{ asset('storage/asset/Mask group.png') }}" alt="">
        </div>
        <div class="text">
          <h4>Birthdays</h4>
          <p>In the new era of technology we look in the future with certianty for life.</p>
        </div>
      </div>
      <div class="all1">
        <div class="pic">
          <img src="{{ asset('storage/asset/Mask group (1).png') }}" alt="">
        </div>
        <div class="text">
          <h4>Weddings</h4>
          <p>In the new era of technology we look in the future with certianty for life.</p>
        </div>
      </div>
      <div class="all1">
        <div class="pic">
           <img src="{{ asset('storage/asset/Mask group (2).png') }}" alt="">
        </div>
        <div class="text">
          <h4>Events</h4>
          <p>In the new era of technology we look in the future with certianty for life.</p>
        </div>
      </div>
    </div>
  </services>

  <content>
    <div class="content1">
      <div>


        <img  class="content1a" src="{{ asset('storage/asset/mid-shot-chef-holding-plate-with-pasta-making-ok-sign 1.png') }}"alt="">
      </div>
      <div>
        <img class="content1b" src="{{ asset('storage/asset/sour-curry-with-snakehead-fish-spicy-garden-hot-pot-thai-food 1.png') }}"alt="">
      </div>
      <div>
        <img class="content1c" src="{{ asset('storage/asset/sadj-iron-pot-with-various-salads 1.png') }}"alt="">
      </div>
    </div>
    <div class="content2">
      <div class="content2a">
        <h1>Fastest Food Delivery in City</h1>
        <p>Our visual designer lets you quickly and of drag a down your way to customapps for both keep desktop.</p>
      </div>
      <div class="content2b">
        <div class="content2b1">
            <div class="content2b1a"><img src="{{ asset('storage/asset/clock.png') }}"alt=""></div>
            <h2>Delivery within 30 minutes</h2>
        </div>
        <div class="content2b2">
          <div class="content2b1a"><img src="{{ asset('storage/asset/receipt-tax.png') }}"alt=""></div>
          <h2>Best Offer & Prices</h2>
        </div>
        <div class="content2b3">
          <div class="content2b1a"><img src="{{ asset('storage/asset/shopping-cart.png') }}"alt=""></div>
          <h2>Online Services Available</h2>
        </div>
      </div>
    </div>
  </content>

  <Footer>
    <div class="FooterC">
      <div class="top">
        <div class="top1">
          <h1>Follow Us On Intsagram</h1>
          <div  class="topimge">
            <img class="topimge1"src="{{ asset('storage/asset/pexels-steve-3789885 1.png') }}" alt="">
            <img class="topimge1"src="{{ asset('storage/asset/eiliv-aceron-d5PbKQJ0Lu8-unsplash 1.png') }}" alt="">
            <img class="topimge1"src="{{ asset('storage/asset/pexels-ella-olsson-1640772 1.png') }}" alt="">
            <img class="topimge1"src="{{ asset('storage/asset/pexels-ash-376464 1.png') }}" alt="">
          </div>
        </div>
        <div class="top2">
          <div class="top2a">
            <ul><h2>pages</h2>
              <li>Home</li>
              <li>About</li>
              <li>Menu</li>
              <li>Pricing</li>
              <li>Blog</li>
              <li>Contact</li>
              <li>Delivery</li>
            </ul>
          </div>
          <div class="top2b">
            <ul><h2>Utility pages</h2>
              <li>Start Here</li>
              <li>Styleguide</li>
              <li>Password Protected</li>
              <li>404 Not Found</li>
              <li>Licenses</li>
              <li>Changelog</li>
              <li>View More</li>
            </ul>
          </div>
        </div>
        <div class="top3">
          <div class="top3a">
            <img src="{{ asset('storage/asset/japanese-food.png') }}" alt="">
            <h1>Bistro Bliss</h1>
          </div>
          <div class="top3b">
            In the new era of technology we look a in the future with certainty and pride to for our company and.
          </div>
          <div class="top3c">
              <a href="#"><img src="{{ asset('storage/asset/1.png') }}" alt=""></a>
              <a href="#"><img src="{{ asset('storage/asset/2.png') }}" alt=""></a>
              <a href="#"><img src="{{ asset('storage/asset/3.png') }}" alt=""></a>
              <a href="#"><img src="{{ asset('storage/asset/4.png') }}" alt=""></a>

          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="textF">Copyright © 2023 Hashtag Developer. All Rights Reserved</div>
      </div>
    </div>
  </Footer>

</body>
</html>
