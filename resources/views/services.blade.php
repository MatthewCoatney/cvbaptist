@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Services
@stop

@section('isservices')
class="current"
@stop

@section('showcase')
<img src="img/services-hero.jpg">
@stop


@section('headscript')

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>


    .rale{
      font-family: 'Raleway', sans-serif;
      font-weight: 600;
      font-size: 18px;
    }





/*
https://www.formget.com/css-lists/
Form Get list stylesheet
*/
    .list-type5{
    width:410px;
    margin:0 auto;
    }
    .list-type5 ol {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
    margin: 0;
    margin-left: 1em;
    padding: 0;
    counter-reset: li-counter;
    }
    .list-type5 ol li{
    position: relative;
    margin-bottom: 1.5em;
    padding: 0.5em;
    background-color: #177e89; /*#F0D756;*/
    padding-left: 58px;
    }

    .list-type5 a{
    text-decoration:none;
    color:white;
    font-size:15px;
    font-family: 'Raleway', sans-serif;
    }

    .list-type5 li:hover{
    box-shadow:inset -1em 0 #6CD6CC;
    -webkit-transition: box-shadow 0.5s; /* For Safari 3.1 to 6.0 */
    transition: box-shadow 0.5s;
    }

    .list-type5 ol li:before {
    position: absolute;
    top: -0.3em;
    left: -0.5em;
    width: 1.8em;
    height: 1.2em;
    font-size: 2em;
    line-height: 1.2;
    font-weight: bold;
    text-align: center;
    color: white;
    background-color: #6CD6CC;
    transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
    z-index: 99;
    overflow: hidden;
    content: counter(li-counter);
    counter-increment: li-counter;
    }


</style>

@stop

@section('section-a')

<div class="row">
  <div class="columns large-6 medium-6">
<h3>WORSHIP & COMMUNITY</h3>
 <p >
We meet regularly each week to worship and fellowship.
There are a  variety of opportunities for all ages each week.
<br />
Come and see CVBC for yourself.
We welcome your visit!

</p>



<div class="list-type5">
  <h5>Sunday Services</h5><br />
<ol>
<li><a href="#"><strong><time>9:00 am</time>&mdash; Sunday School</strong> <br />Adult Bible Classes & Nursery ( under 4 )</a></li>
<li><a href="#"><strong><time>10:00 am</time>&mdash; Morning Service</strong><br /> Children's Church & Nursery ( under 4 )</a></li>
<li><a href="#"><strong><time>6:00 pm</time>&mdash;  Evening Service</strong><br /> Youth Group & Nursery ( under 4 )</a></li>
</ol>
</div>

<div class="list-type5">
  <h5>Tuesdays</h5><br />
<ol>
<li><a href="#"><strong><time>6:00 pm</time>&mdash; Vistitation</strong> <br /></a></li>
<li><a href="#"><strong><time>6:30 pm</time>&mdash; Financial Peace UNIVERSITY</strong><br /> Youth Group & Nursery ( under 4 )</a></li>
</ol>
</div>


</div>
<div class="columns large-6 medium-6">


  <div class="list-type5">
    <h5>Wednesday Services</h5><br />
  <ol>
  <li><a href="#"><strong><time>8:00 am</time>&mdash; Men's Breakfast</strong> <br />Breakfast & Bible Study at Miner's Inn</a></li>
  <li><a href="#"><strong><time>6:00 pm</time>&mdash; Discipleship Program</strong><br /> Children's Church & Nursery ( under 4 )</a></li>
  <li><a href="#"><strong><time>7:00 pm</time>&mdash; Midweek Bible Study</strong><br /> Bible Study w/ Prayer Meeting & Nursery ( under 4 )</a></li>
  </ol>
  </div>


<img src="img/praying.jpeg">

</div>
<br /><br /><hr>

<h5>Questions?</h5>
For details regarding these or any other activities at CVBC please message us via our <a href="contact">contact page</a>.

</div>
@stop
