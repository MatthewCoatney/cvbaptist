<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @yield('headscript')

  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/vendor/foundation.css">

  <link rel="stylesheet" href="/css/myapp.css">
</head>

<body>
  <div class="top-nav">
    <div class="row">
      <div class="columns large-6 medium-6">
        <ul class="top-list">
          <li><i class="fa fa-map-marker"></i><a href="contact"> Catheys Valley, CA, USA</a></li>
          <li><i class="fa fa-phone"></i><a href="contact"> 209-742-7770</a></li>
          <li><i class="fa fa-envelope"></i><a href="contact"> cvbc@sti.net</a></li>
        </ul>
      </div>
      <div class="columns large-6 medium-6">
        <ul id="menu-topmenu" class="top-list-right">
          <li><a href="doctrine" >Doctrine</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="contact">Contact</a></li>
          <li><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="MRVZD5GR6US4L">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="top-bar">
    <div class="row">
      <div class="top-bar-left">
        <img src="img/logo.png" style="width:25%;height:25%;">

      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a @yield('ishome') href="home">Home</a></li>
          <li><a @yield('isministries') href="ministries">Ministries</a></li>
          <li><a @yield('isevents') href="events">Events</a></li>
          <li><a @yield('isservices') href="services">Services</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="showcase">
@yield('showcase')
  </section>



  <section class="domain-search">
  @yield('subshowcase')
  </section>

  <section class="section-a">
    @yield('section-a')
  </section>

  <section class="section-b">
    <h1>Building Families On The Word</h1>
    <i class="fa fa-quote-left fa-3x" aria-hidden="true"></i> &nbsp;&nbsp;
    <i>Except the Lord build the house, they labour in vain that build it: <br />except the Lord keep the city, the watchman waketh but in vain. &mdash;Psalm 127:1</i>

  </section>



  <section class="section-c">
    <div class="row">
      <div class="columns large-3">
        <i class="fa fa-3x fa-book" aria-hidden="true"></i>
        <h4>Worship</h4>
        <p>Join us Sundays at @10:00 am. <br /> Worship with us!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-seedling" aria-hidden="true"></i>
        <h4>Discipleship</h4>
        <p>Its our mission to build up the church. <br /> Get involved now!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-dove" aria-hidden="true"></i>
        <h4>Prayer</h4>
        <p>Join us Wednesdays @7:00 pm. <br /> Pray with us!</p>
      </div>
      <div class="columns large-3">
        <i class="fa fa-3x fa-user" aria-hidden="true"></i>
        <h4>Outreach</h4>
        <p>Request a call or visitation. <br /> Contact us now!</p>
      </div>
    </div>
  </section>

  <footer style="background-image:url(img/showcase.png); background-repeat: no-repeat; background-size:100%; background-position: 100% 100%;">
    <div class="row">
      <div class="columns large-3">
        <p>CVBC &copy; copyright <?php
        $copyYear = 2018;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?></p>
        <p>All information, photos and designs are copyright &copy; Catheys Valley Baptist Church (CVBC). All Rights Reserved. </p>
      </div>
      <div class="columns large-3">
        <h5>Church</h5>
        <ul class="menu vertical">
          <li><a href="about">About Us</a></li>
          <li><a href="contact">Contact Us</a></li>
          <li><a href="doctrine">Doctrine</a></li>
          <li><a href="contribute">Contribute</a></li>
        </ul>
      </div>
      <div class="columns large-3">
        <h5>Jump</h5>
        <ul class="menu vertical">
          <li><a href="ministries">Ministries</a></li>
          <li><a href="sermons">Sermons</a></li>
          <li><a href="services">Services</a></li>
          <li><a href="events">Events</a></li>
        </ul>
      </div>
      <div class="columns large-3">

        <a href="http://anewcreationstudios.com"><img src="img/ANewCreationLogo.svg" style="height:100px;"> <br /><br />Design by M. Coatney.</a>

      </div>
    </div>
  </footer>


@yield('subpage')





<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/what-input.js"></script>
<script src="/js/vendor/foundation.js"></script>
<script src="/js/myapp.js"></script>
@yield('footerscript')
</body>

</html>
