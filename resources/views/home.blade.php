@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Home
@stop

@section('ishome')
class="current"
@stop

@section('headscript')

@stop

@section('showcase')
<div class="row">
  <div class="columns large-5 medium-5 large-offset-1 medium-offset-1">
    <video id="bgvid" poster="home-bg.jpg" autoplay loop playsinline muted>
              <source src=video\home-bg.mp4 type=video/mp4>
            </video>
    <div class="showcase-box">
      <h3>Teach, Worship, Disciple</h3>
      <p>Glorifying God in all we do.</p>
      <div class="row">
        <div class="columns large-6 medium-6">
          <ul>
            <li><strong>Bible</strong> Teaching</li>
            <li><strong>Discipling</strong> The Church</li>
            <li><strong>Community</strong> Outreach</li>
          </ul>
        </div>
        <div class="columns large-6 medium-6">
          <ul>
            <li><strong>Worshiping</strong> God</li>
            <li><strong>Serving</strong> One Another</li>
            <li><strong>Glorifying</strong> Christ</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="showcase-box-bottom">
      <div class="row">
        <div class="columns large-6 medium-6">
          Sunday Service:
          <div class="pricing"><span>@10:00</span> a.m.</div>
        </div>
        <div class="start-link columns large-6 medium-6">
          <h5><a href="services"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Come Join Us!</a></h5>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('subshowcase')
<div class="row">
  <div class="large-12 medium-12 columns">
    <form class="domain-form" form method="GET" action="{{ route('sermons') }}" id="searchForm" >
      <div class="input-group">

        <span class="input-group-label">Find A Sermon</span>
        <input name="q" class="input-group-field" type="text" placeholder="Search by topic">
        <div class="input-group-button">
          <input type="submit" class="button" value="Search">
        </div>
        </div>
    </form>
  </div>
</div>
@stop

@section('section-a')
<div class="row">
  <div class="columns large-6">
    <img src="img/family.png">
  </div>
  <div class="columns large-6">
    <h2>How Are We Different</h2>
    <p>Catheys Valley Baptist Church is an independent Baptist Church, with a loving country atmosphere and a solid conservative biblical foundation. We exist to share the Word of God with the world, and provide a safe and caring place where others can
      come to know the precious love of Jesus.</p>
    <a class="button large hollow" href="about">Read More</a>
    <img src="img/church.jpg">
  </div>
</div>

@stop

@section('section-b')

@stop

@section('section-c')

@stop




@section('subpage')
<div class="reveal" id="loginModal" data-reveal>
  <h1>Login</h1>
  <form>
    <div class="row">
      <label>
          <input type="text" placeholder="Username">
        </label>
    </div>
    <div class="row">
      <label>
          <input type="password" placeholder="Password">
        </label>
    </div>
    <span class="float-left remember">Remember Me</span>
    <div class="switch">
      <input class="switch-input" id="rememberSwitch" type="checkbox" name="rememberSwitch">
      <label class="switch-paddle" for="rememberSwitch">
          <span class="show-for-sr">Remember Me?  &nbsp;&nbsp;</span>
        </label>
    </div>
    <button class="button" type="submit">Login</button>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
  </form>
</div>
@stop

@section('bodyscript')



@stop
