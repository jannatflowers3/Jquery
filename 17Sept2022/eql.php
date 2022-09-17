<html>
<head>
<title>the title</title>
<script src="jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$("li").eq(2).addClass("selected");
$("li").eq(0).addClass('myclass');
});
</script>
<style>
.selected { color:red; }
.myclass{
	color:blue;
}
</style>
</head>
<body>
<div>
<ul>
<li>list item 1</li>
<li>list item 2</li>
<li>list item 3</li>
<li>list item 4</li>
<li>list item 5</li>
<li>list item 6</li>
</ul>
</div>
</body>
</html>