<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- // hide function korle only hide hobe 
		// show korle hidden ta show koreb
		// toggle dilye hide show  hobe -->
	<script>
		
		$(document).ready(function () {
			$(".btn1").click(function(){
				$(".para1").hide();
			})

			$(".btn2").click(function(){
				$(".para1").show();
			})

			$(".btn3").click(function(){
				$(".para3").toggle();
			})
		});
	
		
	</script>

	<button class ="btn1">hide Paragraph 1</button>
	<button class ="btn2">showvParagraph 1 </button>
	<button class ="btn3">hide/show toggle Paragraph</button>
<p class="para1 "> 1 ...Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam et labore consequatur? Reiciendis enim consequatur eos mollitia est laborum voluptatem veritatis, alias corporis distinctio similique nisi ad neque temporibus. Atque quod labore eaque sapiente dolor modi asperiores consequuntur aliquam repudiandae, necessitatibus ipsum excepturi saepe distinctio, incidunt facere suscipit numquam harum officia officiis pariatur porro nam. Veritatis sit quaerat culpa nihil ea libero id dignissimos iure provident, dolores enim, quos error amet ratione eos iste. Cumque, sequi! Recusandae minima at, reprehenderit molestiae modi, tempora voluptatum quasi ullam, cum beatae quam veritatis debitis qui vero quo mollitia pariatur expedita voluptas! Beatae.</p>

	<p class ="para2 para3">  2 ...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum corrupti facilis dolor maxime quo consequuntur, deserunt, rerum tenetur explicabo exercitationem reprehenderit autem mollitia, accusantium nisi molestias voluptates similique consequatur itaque incidunt rem inventore aliquid. Consequatur nihil dolorum, amet quam molestiae suscipit quasi dolores ea assumenda sint quos delectus voluptates itaque debitis sapiente vero maiores? Omnis facere voluptas laboriosam necessitatibus sint itaque quae asperiores. Alias atque suscipit facilis omnis explicabo, vitae quam esse. Aspernatur molestias fugit reprehenderit dolorem iure veritatis nulla quod sequi optio! Nihil, molestiae repudiandae. Commodi similique enim quod minus eaque laudantium doloribus minima! Odit, quae! Quasi, delectus voluptate!</p>

	<p class ="para3">3 ....Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolores dolor dolore fuga commodi error accusantium inventore aliquid molestias, ipsum corrupti quisquam deleniti? Explicabo aliquid minima consequatur laboriosam id est quis! Qui blanditiis deserunt officia atque quam nobis! Hic sapiente corrupti ea cumque doloribus ex maxime, impedit facilis quas repellendus accusamus, nesciunt saepe quaerat, aperiam rem aliquid laborum eveniet quasi labore harum commodi fugit perferendis! Dolore ullam vitae ratione, dolores at a fuga itaque quibusdam in delectus id error dolorum perspiciatis quisquam repellat labore ab magni rerum. Tenetur voluptatibus voluptates porro quibusdam sit omnis consectetur nostrum, similique, voluptatem deserunt soluta!</p>

</body>
</html>