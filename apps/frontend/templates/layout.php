<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <script src="/js/frontend/modernizr-2.6.2.min.js"></script>
    
  </head>
  <body>
    <div id="topline">
      <div></div>
    </div>
    <header>
      <div class="container">
        <a href="index.php" id="brand">Delivery<span>club!</span></a>
        <form action="" method="post" class="search visible-phone">
          <input type="text" name="search" value="">
          <input type="submit" value="">
        </form>
        <nav>
          <ul>
            <li><a href="index.html" class="active"><img src="/images/frontend/icon/home.png" alt=""></a></li>
            <li><a href="about-us.html">About us</a></li>
            <li><a href="offer-and-menu.html">Offer & menu</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle">Gallery</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="gallery.html">Gallery one</a></li>
                <li><a tabindex="-1" href="gallery.html">Gallery two</a></li>
                <li><a tabindex="-1" href="gallery.html">Gallery three</a></li>
                <li><a tabindex="-1" href="gallery.html">Gallery four</a></li>
              </ul>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <form action="" method="post" class="search hidden-phone">
            <input type="text" name="search" value="">
            <input type="submit" value="">
          </form>
        </nav>
      </div>
    </header>
    <div id="carousel" class="carousel slide">
      <div class="container">
        <div class="carousel-inner">
          <div class="active item">
            <img src="/images/frontend/carousel1.jpg">
            <div class="hidden-phone">
              Really delicious pizza
              <span></span>
            </div>
          </div>
          <div class="item">
            <img src="/images/frontend/carousel2.jpg">
            <div class="hidden-phone">
              Just try it!
              <span></span>
            </div>
          </div>
        </div>
        <a class="carousel-control left" href="#carousel" data-slide="prev"><img src="/images/frontend/carousel-arrow-left.png" alt=""></a>
        <a class="carousel-control right" href="#carousel" data-slide="next"><img src="/images/frontend/carousel-arrow-right.png" alt=""></a>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span3 box center-responsive">
          <h2>Lorem ipsum</h2>
          <img src="/images/frontend/box1.jpg" alt="">
          <p>Praesent auctor nunc ut tellus tincidunt vel pretium lacus dignissim. In nunc est, semper ornare malesuada sit amet, condimentum sed nisl.</p>
          <a href="#" class="button-color">
            <span class="button-icon"><img src="/images/frontend/icon/mail.png" alt=""></span>
            <span class="button-text">Contact Us</span>
          </a>
        </div>
        <div class="span3 box center-responsive">
          <h2>Sit amet dolor</h2>
          <img src="/images/frontend/box2.jpg" alt="">
          <p><strong>Quisque ullamcorper at sit ornare pellentesque. Integer.</strong><br>Praesent auctor nunc ut. Praesent auctor nunc ut tellus tincidunt vel.</p>
          <a href="#" class="button">
            <span class="button-icon"><img src="/images/frontend/icon/truck.png" alt=""></span>
            <span class="button-text">Free delivery!</span>
          </a>
        </div>
        <div class="span6">
          <div class="board hidden-phone">
            <div class="board-inner">
              <div class="item active">
                <p><strong>Today special offers</strong></p>
                <ul>
                  <li>
                    <span class="left">- margerita</span>
                    <span class="right">$12</span>
                  </li>
                  <li>
                    <span class="left">- quatro cheese</span>
                    <span class="right">$10,40</span>
                  </li>
                  <li>
                    <span class="left">- other pizza</span>
                    <span class="right">$8</span>
                  </li>
                  <li>
                    <span class="left">- pizza mexicana</span>
                    <span class="right">$19,99</span>
                  </li>
                  <li>
                    <span class="left">- vegetarian</span>
                    <span class="right">$20</span>
                  </li>
                  <li>
                    <span class="left">- with sweet fruits</span>
                    <span class="right">$31,50</span>
                  </li>
                </ul>
                <p style="text-align: center;">lorem ipsum dolor $2</p>
              </div>
              <div class="item">
                <p><strong>This week special offers</strong></p>
                <ul>
                  <li>
                    <span class="left">- salami</span>
                    <span class="right">$36</span>
                  </li>
                  <li>
                    <span class="left">- frutti di mare</span>
                    <span class="right">$99,99</span>
                  </li>
                  <li>
                    <span class="left">- hot pepperoni</span>
                    <span class="right">$12</span>
                  </li>
                  <li>
                    <span class="left">- vegetarian</span>
                    <span class="right">$20</span>
                  </li>
                  <li>
                    <span class="left">- pizza mexicana</span>
                    <span class="right">$19,99</span>
                  </li>
                  <li>
                    <span class="left">- ice creams</span>
                    <span class="right">$4,50</span>
                  </li>
                </ul>
                <p style="text-align: center;">lorem ipsum dolor $9</p>
              </div>
              <div class="item">
                <p><strong>This month special offers</strong></p>
                <ul>
                  <li>
                    <span class="left">- Margheritta</span>
                    <span class="right">$9,99</span>
                  </li>
                  <li>
                    <span class="left">- Funghi</span>
                    <span class="right">$12,50</span>
                  </li>
                  <li>
                    <span class="left">- Vesuvio</span>
                    <span class="right">$8,99</span>
                  </li>
                  <li>
                    <span class="left">- Cacciatore</span>
                    <span class="right">$35</span>
                  </li>
                  <li>
                    <span class="left">- Toscana</span>
                    <span class="right">$20</span>
                  </li>
                  <li>
                    <span class="left">- Bolonia</span>
                    <span class="right">$2,50</span>
                  </li>
                </ul>
                <p style="text-align: center;">sit amet $1,99</p>
              </div>
            </div>
            <ul class="board-nav">
              <li class="active"><span></span></li>
              <li><span></span></li>
              <li><span></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <img src="/images/frontend/bg-main-gallery-line.png" alt="">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="home-gallery" style="display: block;">
            <li class="first">
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
            <li class="last">
              <a href="#"><img src="/images/frontend/home-gallery1.jpg" alt=""></a>
            </li>
          </ul>
          <ul class="home-gallery">
            <li class="first">
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
            <li class="last">
              <a href="#"><img src="/images/frontend/home-gallery2.jpg" alt=""></a>
            </li>
          </ul>
          <ul class="home-gallery">
            <li class="first">
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li>
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
            <li class="last">
              <a href="#"><img src="/images/frontend/home-gallery3.jpg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span7">
            <h2 class="center-responsive">What's new in our restaurant?</h2>
            <div class="tweet">
              <p><span>@Olipizza</span> Sed eget dui enim, sit amet venenatis purus. Phasellus vel libero nunc, in blandit nunc. Sed eget dui enim, sit amet venenatis purus.</p>
            </div>
            <p>Nulla fermentum enim a turpis auctor at mollis nunc ullamcorper. In sed nisi odio. Ut ut purus diam. Nam venenatis, est eget faucibus posuere, arcu turpis blandit velit, sed pretium ante libero ut erat.</p>
            <p style="text-align: right; margin-top: 0;">
              <a href="#" class="button button-small">
                <span class="button-text">Read more</span>
              </a>
            </p>
          </div>
          <div class="span5">
            <h2 class="center-responsive">People about us</h2>
            <div class="comment-author">
              <img src="/images/frontend/women1.png" alt="">
              <p class="date">19 July 2012</p>
              <p class="author">Joanne Samir</p>
            </div>
            <div class="comment-content">
              <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna diam, pretium ullamcorper ornare at.</strong></p>
              <p>Nam eget nulla vel risus venenatis eleifend. Aliquam sed neque sapien. Quisque viverra congue velit id porta.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12 copyrights">
            <div class="brand">Olipizza!</div>
            <p class="hidden-phone">&copy; Copyrights 2012-<?=date('Y')?> RKlub s.r.o Czech republic, Teplice st. Tolstého 451 ICO 015 32 022 .</p>
            <a class="fb" href="#"><img src="/images/frontend/fb.png" alt=""></a>
          </div>
          <p class="visible-phone" style="text-align: center;">&copy; Copyrights 2012-<?=date('Y')?> RKlub s.r.o Czech republic, Teplice st. Tolstého 451 ICO 015 32 022.</p>
        </div>
      </div>
    </footer>
    <?php echo $sf_content ?>
    <?php include_javascripts() ?>
  </body>
</html>
