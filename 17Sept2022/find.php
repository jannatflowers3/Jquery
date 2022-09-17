
<html>
<head>
<title>the title</title>
<script src="jquery.min.js"></script>

<script>
$(document).ready(function() {
$("li").filter(".middle").addClass("selected");
$("li").filter(".top").addClass('newcolor');
});
</script>
<style>
.selected { color:blue; }
.newcolor{
	color: red;
}
</style>
</head>
<body>
<div>
<ul>
<li class="top">list item 1</li>
<li class="top">list item 2</li>
<li class="middle">list item 3</li>
<li class="middle">list item 4</li>
<li class="bottom">list item 5</li>
<li class="bottom">list item 6</li>
</ul>
</div>
</body>
</html>