<html>
<head>
<title>the title</title>
<script type="text/javascript"
src="/jquery/jquery-1.3.2.min.js">
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
var pars = $("p");
for( i=0; i<pars.length; i++ ){
alert("Found paragraph: " + pars[i].innerHTML);
}
});
</script>
</head>
<body>
<div>
<p class="myclass">This is a paragraph.</p>
<p id="myid">This is second paragraph.</p>
<p>This is third paragraph.</p>
</div>
</body>
</html>