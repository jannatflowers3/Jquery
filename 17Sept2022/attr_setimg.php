<html>
<head>
<title>the title</title>
<script src="jquery.min.js"></script>
<script>
// $(document).ready(function() {
// $("#btn").click(function(){
// 	$("img").attr("src","sun.jpg");
// })
// });
</script>


<script>
$(document).ready(function() {
$("#img1").hover(function(){
	$("img").attr("src","sun.jpg");

})
$("#img1").mouseout(function(event) {
	$("img").attr("src","mon.jpg");
})
});
</script>
</head>
<body>
<div>
<!-- <img src="mon.jpg" alt=""> -->
<img id = "img1" src="mon.jpg" alt="">

<!-- tag ar attribute dorar jonno .attr likhte hobe -->

<button id="btn">click here</button>

</div>
</body>
</html>