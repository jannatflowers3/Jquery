

<html>
<head>
<title>the title</title>
<script src="jquery.min.js"></script>

<script>
$(document).ready(function() {
$("em").addClass("selected");
$("#myid").addClass("highlight myclass");
});
</script>

<style>
.selected { color:red; }
.highlight { background:yellow; }
.myclass {
	font-size: 30px;
	padding:30px 0px;
	background-color: gray;

}
#myid{
	font-family:"Arial",sans-serif;
}
</style>

</head>
<body>
<em title="Bold and Brave">This is first paragraph.</em>
<p id="myid">This is second paragraph.</p>
</body>
</html>