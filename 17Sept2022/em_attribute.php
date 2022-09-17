<html>
<head>
<title>the title</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
var title = $("em").attr("title");
$("#divid").text(title);
});
</script>

</head>
<body>
<div>
<em title="Bold and Brave">This is first paragraph.</em>
<p id="myid">This is second paragraph.</p>
<div id="divid"></div>
<!-- tag ar attribute dorar jonno .attr likhte hobe -->

<script>
$(document).ready(function() {
var title = $("p").attr("title");
$("#divid2").html(title);
});
</script>
<p title="title something paragraph">say something</p>
<p id="myid">This is first  paragraph.</p>
<p>this is second paragraphp</p>
<div id="divid2"></div>


</div>
</body>
</html>