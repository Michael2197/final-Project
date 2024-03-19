<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>contact</title>
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
            <a role="button" href="{{ route('home') }}" class="btn1">Home</a>
            <a role="button" href="#" class="btn1">About</a>
            <a role="button" href="{{ route('menu') }}" class="btn1">Menu</a>
            <a role="button" href="#" class="btn1">Pages</a>
            <a role="button" href="{{ route('contact') }}" class="btn1">Contact</a>
          </menu>
          <button class="button" href="{{ route('booking') }}">
            <a role="button" href="{{ route('booking') }}" class="btn2">Book A Table</a>
          </button>
        </header>
    </Header>

    <menuHero>
        <menuContent>
            <div class="menuTitle">
              <div class="menuTitle1">
                <div class="menuTitle1a">Contact Us</div>
                <div class="menuTitle1b"><h18>We consider all the drivers of change gives you the components you need to change to create a truly happens.</h18></div>
              </div>
            </div>
        </menuContent>

        <form>
          <div class="line">
           <div class="lineA">
            <label for="lineA">Name</label>
            <br>
            <input class="name" type="text" placeholder=" Enter your name"/>
           </div>
           <div class="lineA">
            <label for="lineA">Email</label>
            <br>
            <input class="name" type="text" placeholder=" Enter email address"/>
           </div>
          </div>
          <div class="line1">
            <div class="subject">
              <label for="subject">Subject</label>
              <br>
              <input class="subjects" type="text" placeholder=" write a subject"/>
            </div>
          </div>
          <div class="line1">
            <div class="Messages">
              <label for="Messages">Message</label>
              <br>
              <input class="Message" type="text" placeholder=" write your message"/>
            </div>
          </div>
          <div class="line1">
            <button class="btnLine">Send</button>
          </div>
        </form>
     </menuHero>

     <conactINFO>
      <div class="info">
        <div class="information">
          <h1> Call Us:</h1>
          <h2>+1-234-567-8900</h2>
        </div>
        <div class="information">
          <h1> Hours:</h1>
          <h3>Mon-Fri: 11am-8pm</h3>
          <h3>Sat, Sun: 9am-10pm</h3>
        </div>
        <div class="information">
          <h1> Our Location:</h1>
          <h3>123 Bridge Street Nowhere Land,</h3>
          <h3>LA12345 United States</h3>
        </div>
      </div>
     </conactINFO>

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
