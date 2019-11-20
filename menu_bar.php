<html>
<head>
<title>jQuery Menu Dropdown</title>
<link rel="stylesheet" href="style.menu.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="menu_drop_down.js"></script>
</head>
<body>
<div id="menu">
<div class="mainmenu" id="popular" onMouseOver="showDropDown(this)" onMouseOut="hideDropDown(this)">
<a href="#">Popular Toys</a>
<div class="submenu">
<ul>
<li><a href="#">Video Games</a></li>
<li><a href="#">Barbies</a></li>
<li><a href="#">Teddy Bear</a></li>
<li><a href="#">Golf Set</a></li>
</ul>
</div>
</div>
<div class="mainmenu" id="recent" onMouseOver="showDropDown(this)" onMouseOut="hideDropDown(this)">
<a href="#">Recent Toys</a>
<div class="submenu">
<ul>
<li><a href="#">Yoyo</a></li>
<li><a href="#">Doctor Kit</a></li>
<li><a href="#">Puzzles</a></li>
<li><a href="#">Uno Cards</a></li>
</ul>
</div>
</div>
<div class="mainmenu" id="category" onMouseOver="showDropDown(this)" onMouseOut="hideDropDown(this)">
<a href="#">Toys Category</a>
<div class="submenu">
<ul>
<li><a href="#">Battery Toys</a></li>
<li><a href="#">Remote Toys</a></li>
<li><a href="#">Magnet Toys</a></li>
<li><a href="#">Soft Toys</a></li>
</ul>
</div>
</div>
</div>
</body>
</html>