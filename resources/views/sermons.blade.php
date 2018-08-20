
@extends ('layouts.master')

@section('title')
  Catheys Valley Baptist | Sermons

@stop

@section('headscript')

<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:300,400|Source+Code+Pro" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

<link rel="stylesheet" href="css/standard.css">
<link rel="stylesheet" href="css/gridism.css">

<script src="js/vendor/tipuesearch_set.js"></script>
<!--script src="js/vendor/tipuesearch_content.js"></script-->
<!--link rel="stylesheet" href="css/tipuesearch.css"-->


<style>


/*
Tipue Search 7.0
Copyright (c) 2018 Tipue
Tipue Search is released under the MIT License
http://www.tipue.com/search
*/


/* basics */


.tipue_search_group:after
{
     content: "";
     display: table;
     clear: both;
}


/* fonts, colors */


#tipue_search_input
{
     font: 15px/1 'Open Sans', sans-serif;
     color: #333;
     -webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.tipue_search_icon
{
     font: 300 24px/1 'Open Sans', sans-serif;
     color: #777;
}
#tipue_search_results_count, .tipue_search_related, .tipue_search_note
{
     font: 12px/1.3 'Source Code Pro', monospace;
	text-transform: uppercase;
	color: #999;
     -webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
#tipue_search_replace, #tipue_search_error, .tipue_search_content_text
{
     font: 300 16px/1.6 'Open Sans', sans-serif;
	color: #666;
}
#tipue_search_replace a
{
     color: #339e41;
     text-decoration: none;
}
#tipue_search_replace a:hover
{
     color: #666;
}
.tipue_search_related_btn
{
     font: 11px/1 'Source Code Pro', monospace;
	color: #666;
	text-transform: uppercase;
	letter-spacing: 1px;
	background-color: #f7f7f7;
}
.tipue_search_content_title
{
     font: 300 30px/1.2 'Open Sans', sans-serif;
     color: #333;
     -webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.tipue_search_content_title a
{
     color: #333;
     text-decoration: none;
}
.tipue_search_content_url, .tipue_search_content_debug
{
     font: 300 15px/1.7 'Open Sans', sans-serif;
     color: #333;
}
.tipue_search_content_url a
{
     color: #339e41;
     text-decoration: none;
}
.tipue_search_content_url a:hover
{
     color: #666;
}
.tipue_search_content_bold
{
     font-weight: 400;
     color: #333;
}
.tipue_search_note a
{
     color: #999;
     text-decoration: none;
}
.tipue_search_image_close
{
     font: 22px/1 'Source Code Pro', monospace;
	color: #ccc;
}
#tipue_search_zoom_text
{
     font: 11px/1.7 'Source Code Pro', monospace;
	color: #ccc;
	text-transform: uppercase;
	letter-spacing: 1px;
}
#tipue_search_zoom_text a
{
     color: #ccc;
     text-decoration: none;
     border-bottom: 2px solid #f7f7f7;
}
#tipue_search_zoom_text a:hover
{
     border: 0;
}
#tipue_search_foot_boxes
{
     font: 13px/1 'Source Code Pro', sans-serif;
	text-transform: uppercase;
	color: #333;
}
#tipue_search_foot_boxes li a
{
     background-color: #f7f7f7;
	color: #666;
}
#tipue_search_foot_boxes li.current
{
     background: #252525;
	color: #ccc;
}
#tipue_search_foot_boxes li a:hover, .tipue_search_related_btn:hover
{
     background: #252525;
     color: #ccc;
}


/* search box */

/*
#tipue_search_input
{
     float: left;
     width: 200px;
     background-color: #f3f3f3;
     border: none;
     padding: 9px 6px 10px 15px;
     height: 56px;
     border-radius: 3px;
	-moz-appearance: none;
	-webkit-appearance: none;
	box-sizing: border-box;
     box-shadow: none;
	outline: 0;
	margin: 0;
}
.tipue_search_button
{
     position: relative;
     float: left;
     width: 47px;
     height: 56px;
     margin-left: -3px;
     background-color: #f3f3f3;
     border: none;
     border-radius: 3px;
     box-sizing: border-box;
     cursor: pointer;
	outline: 0;
}
.tipue_search_icon
{
     float: left;
     transform: rotate(-45deg);
	-moz-appearance: none;
	-webkit-appearance: none;
	box-sizing: border-box;
     box-shadow: none;
	outline: 0;
	margin: -1px 0 0 8px;
}
*/

/* search results */


#tipue_search_content
{
     max-width: 100%;
	margin: 0;
}
.tipue_search_result
{
     padding-top: 21px;
}
#tipue_search_results_count
{
     padding-top: 9px;
}
.tipue_search_related
{
     padding-top: 13px;
}
.tipue_search_related_block
{
     padding-bottom: 6px;
}
#tipue_search_warning
{
	padding-top: 10px;
}
.tipue_search_related_btn
{
     display: inline-block;
     padding: 9px 10px;
     text-decoration: none;
     text-align: center;
     border-radius: 3px;
     margin: 9px 9px 0 0;
     outline: 0;
     transition: 0.2s;
     cursor: pointer;
}
#tipue_search_replace
{
     padding-top: 13px;
}
#tipue_search_error
{
     padding-top: 13px;
}
.tipue_search_content_url
{
     padding-top: 3px;
     word-wrap: break-word;
     hyphens: auto;
}
.tipue_search_content_text
{
     word-wrap: break-word;
     hyphens: auto;
     margin-top: 1px;
}
.tipue_search_note
{
     padding-top: 5px;
}
.tipue_search_content_debug
{
     margin: 5px 0;
}


/* images */


.tipue_search_image
{
     padding: 9px 0 6px 0;
}
.tipue_search_img
{
     width: 200px;
     max-width: 100%;
     height: auto;
     transition: 0.5s;
     border-radius: 1px;
}
.tipue_search_img:hover
{
     opacity: 0.7;
}
.tipue_search_image_zoom
{
     cursor: pointer;
}
#tipue_search_image_modal
{
     display: none;
     position: fixed;
     z-index: 1000;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color: rgba(0, 0, 0, 0.9);
}
.tipue_search_image_close
{
     position: absolute;
     top: 0;
     right: 0;
     padding: 25px 30px;
     cursor: pointer;
}
.tipue_search_image_block
{
     margin: 0 auto;
     max-width: 900px;
     padding: 73px 30px 30px 30px;
     box-sizing: border-box;
     color: #fff;
}
#tipue_search_zoom_img
{
     max-width: 100%;
     height: auto;
}
#tipue_search_zoom_text, .tipue_search_zoom_options
{
     padding-top: 9px;
}


/* footer */


#tipue_search_foot
{
     margin: 51px 0 21px 0;
}
#tipue_search_foot_boxes
{
	padding: 0;
	margin: 0;
	cursor: pointer;
}
#tipue_search_foot_boxes li
{
     display: inline;
	list-style: none;
	margin: 0;
	padding: 0;
}
#tipue_search_foot_boxes li a
{
	padding: 10px 17px 11px 17px;
     border-radius: 3px;
	margin-right: 7px;
	text-decoration: none;
	text-align: center;
	transition: 0.2s;
}
#tipue_search_foot_boxes li.current
{
	padding: 10px 17px 11px 17px;
     border-radius: 3px;
	margin-right: 7px;
	text-align: center;
}


</style>
@stop


@section('showcase')

<div id="frame">
<iframe id="sermon-howler" src="howler" style="width:100%;height:800px;"></iframe>
</div>
@stop

@section('subshowcase')
<div class="row">
  <div class="large-12 medium-12 columns">
    <form class="domain-form" form method="GET" action="{{ route('sermons') }}" id="searchForm" >
      <div class="input-group">

        <span class="input-group-label">Find A Sermon</span>
        <!--input name="q" class="input-group-field" type="text" placeholder="Search by topic"-->
        <input type="text" placeholder="Search by topic" class="input-group-field" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required>
        <div class="input-group-button">
          <input type="submit" class="button" value="Search">
        </div>
        </div>
    </form>


  </div>
</div>
@stop


@section('section-a')

<div class="cont">


<div class="wrap"><div style="padding: 27px 0 49px 0;">

<div class="grid">
<div class="unit whole">


<div style="padding-top: 33px;">

<div id="tipue_search_content"></div>

</div>

</div></div>

</div></div>

</div>

@stop


@section('footerscript')

<script src="js/vendor/tipuesearch.js"></script>
<!-- HOWLER -->
  <script src="js/vendor/howler.core.min.js"></script>
  <script src="js/vendor/siriwave.js"></script>
  <!--script src="js/vendor/player.js"></script-->

<script>


//var tipuesearch = {"pages": {!! str_replace('\\', '', $searchlist) !!} };
var tipuesearch = {"pages": {!!  $searchlist !!} };
/*
var tipuesearch = {"pages": [
     {"title": "Hebrews", "text": "Open your Bibles to Hebrews chapter three...", "url": "javascript:setupPlaylist('http://localhost:8000/howler-update?title=A Better Salvation');"},
     {"title": "Special Message In Acts", "text": "Father's Day Messages are in the House!", "url": "javascript:setupPlaylist('http://localhost:8000/howler-update?title=Fathers Day Message');"},
     {"title": "Tipue Search, a jQuery Site Search Plugin", "text": "Tipue Search is a site search jQuery plugin. It's free, open source, responsive and fast. Tipue Search only needs a browser that supports jQuery. It doesn't need MySQL or similar. It doesn't even need a web server.", "img": "http://www.tipue.com/img/surface.jpg", "tags": "JavaScript", "url": "http://www.tipue.com/search"},
     {"title": "Tipue Search Help", "text": "Tipue Search help. Tipue Search is a site search jQuery plugin. It's free, open source, responsive and fast. What is Tipue Search? Getting Started. Using Tipue Search. Options.", "img": "http://www.tipue.com/img/elvis.jpg", "url": "http://www.tipue.com/search/help"},
     {"title": "Tipue Search demo", "text": "Tipue Search demo. Try searching for Tipue.", "url": "http://www.tipue.com/search/demo"},
     {"title": "About Tipue", "text": "Tipue is a small web development studio based in North London, founded in 2001. We design innovative and original jQuery plugins and add-in code. We talk to MySQL and similar with heavy-duty Perl. Our work breathes.", "url": "http://www.tipue.com/is"},
     {"title": "Tipr, a Small and Simple jQuery Tooltip Plugin", "text": "Small, simple, flat, cool. Tipr is a jQuery tooltip plugin. It works on almost any element, and it's free and open source. Tipr displays nice tooltips, and it's around 3KB, CSS included. The tooltips can appear on almost any HTML element. Tipr reacts to the size of the viewport.", "img": "http://www.tipue.com/img/glow.jpg", "tags": "JavaScript", "url": "http://www.tipue.com/tipr"},
     {"title": "Tipue Support", "text": "We offer a range of flexible support plans for our jQuery plugins, including free. We hope to continue offering excellent free support. Get it by talking to us on Twitter.", "url": "http://www.tipue.com/support"},
     {"title": "Getting Started with Tipue Search", "text": "Download Tipue Search and copy the tipuesearch folder to your site. You should look at the demo included with Tipue Search. You should first create a search page. The site content is stored in the tipuesearch_content.js file. It contains the search data as a JavaScript object.", "note": "<a href='http://www.tipue.com/search/help/'>From Help</a>", "url": "http://www.tipue.com/search/help/?d=1"},
     {"title": "Content for Tipue Search", "text": "The search data for Tipue Search is contained in the tipuesearch JavaScript object. Usually this is stored in the tipuesearch_content.js file, but it doesn't have to be. You can create a JavaScript object for your website with Beaty.", "note": "<a href='http://www.tipue.com/search/help/'>From Help</a>", "url": "http://www.tipue.com/search/help/?d=2"},
     {"title": "Beaty", "text": "Beaty is a web scraper that grabs content from your website and returns the data as a JavaScript object, JSON or CSV. Beaty is for small to medium websites, and there's a limit of 70 pages. English is the only language supported.", "tags": "Tipue", "url": "http://www.tipue.com/beaty"},
     {"title": "The Complete Guide to Centering a Div", "text": "Every developer inevitably finds that centering a div isn't as obvious as you'd expect. Centering what's inside a div horizontally is easy but then things tend to get a bit sticky. When you get to centering a div vertically, you can end up in a world of CSS hurt.", "tags": "Tipue Features", "url": "http://www.tipue.com/blog/center-a-div"},
     {"title": "Using Vw and Vh", "text": "Viewport width (vw) and viewport height (vh) are viewport-percentage values introduced in CSS3. Given how powerful they are, and with almost complete browser support, they should be everywhere.", "tags": "Tipue Features", "url": "http://www.tipue.com/blog/css3-vw-vh"},
     {"title": "Using CSS Feature Queries", "text": "CSS feature queries are now supported everywhere. They allow you to use cutting edge CSS with subtle and precise feature detection.", "tags": "Tipue Features", "url": "http://www.tipue.com/blog/feature-queries"},
     {"title": "A Very Simple CSS Background Zoom", "text": "A really easy method of creating a CSS background image zoom. Not only is this simple, it comes with wide browser support.", "tags": "Tipue Features", "url": "http://www.tipue.com/blog/css-background-zoom"},
     {"title": "Using Z-index", "text": "The CSS z-index property often trips up both new and experienced developers. The aim of this article is to boil down a somewhat-complex specification to three major points, which should ease most z-index pain.", "tags": "Tipue Features", "url": "http://www.tipue.com/blog/z-index"}
]};
*/
$(document).ready(function() {

     $('#tipue_search_input').tipuesearch(
       {
          'show': 20,
          'showURL': false
     }
     );
});


// Rebuild the iFrame to change the Player audio
function setupPlaylist(url) {

  // Jquery Ajax reloading the frame
  $('#frame').empty();
  $("#frame").append("<iframe id=sermon-howler src=" + encodeURI(url) + " style=width:100%;height:800px;></iframe>");

}

</script>
@stop
