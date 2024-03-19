<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/booking.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Book A Table</title>
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
          <button class="button">
            <a role="button" href="#" class="btn2">Book A Table</a>
          </button>
        </header>
    </Header>

    <menuHero>
        <menuContent>
            <div class="menuTitle">
              <div class="menuTitle1">
                <div class="menuTitle1a">Book A Table</div>
                <div class="menuTitle1b"><h18>We consider all the drivers of change gives you the components you need to change to create a truly happens.</h18></div>
              </div>
            </div>
        </menuContent>

        <form action="{{ route('book.action') }}" method="POST">
            @csrf
          <div class="line">
           <div class="lineA">
            <label for="lineA">Date</label>
            <br>
            <input class="date"type="date" name="date"/>
           </div>
           <div class="lineA">
            <label for="lineA">Time</label>
            <br>
            <select name="time" class="time">
              <option value="1">06:30 PM</option>
              <option value="2">07:00 PM</option>
              <option value="3">07:30 PM</option>
              <option value="4">08:00 PM</option>
              <option value="5">08:30 PM</option>
              <option value="6">09:00 PM</option>
              <option value="7">09:30 PM</option>
              <option value="8">10:00 PM</option>
            </select>
           </div>
          </div>
          <div class="line">
            <div class="lineA">
              <label for="lineA">Name</label>
            <br>
            <input class="name" type="text" placeholder=" Enter your name" name="name"></input>
            </div>
            <div class="lineA">
              <label for="lineA">Phone</label>
            <br>
            <input class="phone" type="tel" name="phone" placeholder=" x-xxx-xxx-xxxx"></input>
            </div>
          </div>
          <div class="line1">
            <div class="persons">
              <label for="persons">Total person</label>
              <br>
              <select name="person" class="person">
                <option value="1"> 1 person</option>
                <option value="2"> 2 person</option>
                <option value="3"> 3 person</option>
                <option value="6"> 6 person</option>
              </select>
            </div>
          </div>
          <div class="line1">
            <button class="btnLine">Book A Table</button>
          </div>
        </form>
     </menuHero>

     <map>
        <img class="mapp" src="{{ asset('storage/asset/112.png') }}" alt="">
     </map>

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
