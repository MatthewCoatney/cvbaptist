<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tipue Search, a jQuery Site Search Plugin</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:300|Source+Code+Pro" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

<link rel="stylesheet" href="css/standard.css">
<link rel="stylesheet" href="css/gridism.css">

<script src="js/vendor/tipuesearch_set.js"></script>
<!--script src="js/tipuesearch_content.js"></script-->
<link rel="stylesheet" href="css/tipuesearch.css">
<script src="js/vendor/tipuesearch.js"></script>

</head><body>

<div class="cont">

<div id="head"><a href="http://www.tipue.com"><div class="head-icon"><img src="../img/head.png" style="width: 32px; height: 32px;" alt="Tipue"></div></a></div>

<div class="head head-12">
<div class="block" style="padding-top: 70px;background-color:black;">
<h1 class="fa-5">Tipue Search, a jQuery Site Search Plugin</h1>
<div class="fo-4 fa-6" style="padding-top: 21px">Version 7.0</div>
</div></div>

<div class="wrap"><div style="padding: 27px 0 49px 0;">

<div class="grid">
<div class="unit whole">
<div class="fo-5">Tipue Search demo. Try searching for Tipue.</div>

<div style="padding-top: 33px;">

<form>
<div class="tipue_search_group">
<input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required><button type="submit" class="tipue_search_button"><div class="tipue_search_icon">&#9906;</div></button>
</div>
</form>

<div id="tipue_search_content"></div>

</div>

</div></div>

</div></div>

</div>

<footer class="foot">
<div class="wrap wider"><div class="grid" style="padding-top: 20px;"><div class="unit whole"><div class="fo-1"><a href="http://www.tipue.com">Tipue</a> is a small web development studio based in North London.<p>&copy; 2018 Tipue. Est London.</div>
</div></div></div>
</div>

<script>

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
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch();
});
</script>

</body>
</html>