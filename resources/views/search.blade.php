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
<script src="js/vendor/tipuesearch_content.js"></script>
<link rel="stylesheet" href="css/tipuesearch.css">
<script src="js/vendor/tipuesearch.js"></script>

</head><body>

<div class="cont">

<div id="head"><a href="http://www.tipue.com"><div class="head-icon"><img src="../img/head.png" style="width: 32px; height: 32px;" alt="Tipue"></div></a></div>

<div class="head head-12">
<div class="block" style="padding-top: 70px;">
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
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch();
});
</script>

</body>
</html>
