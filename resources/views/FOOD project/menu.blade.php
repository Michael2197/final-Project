<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu</title>
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
            <a role="button" href="#" class="btn1">Menu</a>
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
                <div class="menuTitle1a">Our Menu</div>
                <div class="menuTitle1b"><h18>We consider all the drivers of change gives you the components you need to change to create a truly happens.</h18></div>
              </div>
              <div class="menuTitleB">
                <button class="menubtn">All</button>
                <button class="menubtn">Breakfast</button>
                <button class="menubtn">Main Dishes</button>
                <button class="menubtn">Drinks</button>
                <button class="menubtn">Desserts</button>
              </div>
            </div>


            <div class="menuCards">
                @foreach($data as $food )
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/'.$food->food_img) }}" alt="#">
                </div>
                <div class="McardT">
                  <div class="McardT1">{{ $food->food_price }}</div>
                  <div class="McardT2">
                    <h2>{{ $food->food_name }}</h2>
                    <p>{{ $food->food_content }}</p>
                  </div>
              </div>
            </div>
          @endforeach
            </div>
              {{-- <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-maksim-goncharenok-4773769 1.png') }}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 15.99</div>
                  <div class="McardT2">
                    <h2>Hawaiian Pizza</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              </div>

              @endforeach
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-nadin-sh-12956424 1.png') }}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 7.25</div>
                  <div class="McardT2">
                    <h2>Martinez Cocktail</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-ruslan-khmelevsky-7845121 1.png') }}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 20.99</div>
                  <div class="McardT2">
                    <h2>Butterscotch Cake</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{asset('storage/asset/pexels-bam-awey-5335918 1.png')}}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 5.89</div>
                  <div class="McardT2">
                    <h2>Mint Lemonade</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-roman-odintsov-5061254 1.png ')}}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 18.05</div>
                  <div class="McardT2">
                    <h2>Chocolate Icecream</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-pixabay-327158 1.png') }}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 12.55</div>
                  <div class="McardT2">
                    <h2>Cheese Burger</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div>
              <div class="Mcard">
                <div class="McardP">
                  <img class="McardP" src="{{ asset('storage/asset/pexels-nicola-barts-7937386 1.png') }}" alt="">
                </div>
                <div class="McardT">
                  <div class="McardT1">$ 12.99</div>
                  <div class="McardT2">
                    <h2>Classic Waffles</h2>
                    <p>Made with eggs, lettuce, salt, oil and other ingredients.</p>
                  </div>
                </div>
              </div> --}}

        </menuContent>
     </menuHero>

    <brand>
      <div class="brandT">
        <div class="brandT1">
          <h1>You can order through apps</h1>
        </div>
        <div class="brandT2">
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit enim bibendum sed et aliquet aliquet risus tempor semper.</p>
        </div>
      </div>
      <div class="brandL">
        <div class="brandL1">
          <div class="brandLa">

            <img src="{{ asset('storage/asset/1.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/2.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/3.jpg') }}" alt="#">
          </div>
        </div>
        <div class="brandL2">
          <div class="brandLa">
            <img src="{{ asset('storage/asset/Vector.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/Group.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/Vector2.jpg') }}" alt="#">
          </div>
        </div>
        <div class="brandL1">
          <div class="brandLa">
            <img src="{{ asset('storage/asset/5.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/6.jpg') }}" alt="#">
          </div>
          <div class="brandLa">
            <img src="{{ asset('storage/asset/7.jpg') }}" alt="#">
          </div>
        </div>
      </div>
    </brand>

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
