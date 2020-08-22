<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
<link rel="stylesheet" type="text/css" href="../assets/css/pro-style.css">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
<?php 
	$id = $_GET["id"];
?>


</head>
<body>
	<div class="bg">
		<div class="outdiv">
			<div class="proimg">
				<img src="" id="pimg" alt="">
			</div>
			<div class="product">
				<div class="proinfo">
					<h1 id="heading"></h2>
					<p>
						<b>DESCRIPTION:</b>	 <br>

						<h3 id="des"></h3>
					</p>
					<p>
						<b>COLOR&nbsp;:</b>&nbsp;&nbsp;&nbsp;<font>RED, GREEN, BLUE, YELLOW, PINK, BLACK, WHITE</font>
					</p>
					<p>
						<b>SIZE&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;S, M, L, XL</font>
					</p>
					<p>
						<b>LENGTH&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;28-30 Inches</font>
					</p>
					<p>
						<b>WASHCARE&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;Hand wash separately in cold water. Do not soak & scrub. Dry in Shade.</font>
					</p>
					<p>
						<b>COMPOSITION&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;Cambric (100% Cotton)</font>
					</p>
					<p>
						<b>PRICE&nbsp;:</b><font id="price"></font>
					</p>	
				</div>
				<div>
					<p>
						<h2>Shipping Info:</b>	 <h2>

						<h3>The product ships within 2 working days, excluding Sundays and public holidays.</h3>
					</p>
					<p>
						<h2>Disclaimer:</b>	 <h2>

						<h3>Natural-dyed colors might bleed on the first few washes or rub on skin & light colored garments. <br>Being block-printed, the textile may have slight irregularities in colors and prints.<br> These irregularities are the hallmark of all natural-dyed and <br>block-printed product and make each exquisite piece one-of-its-kind.</h3>
					</p>
					<div class="purchase">
						<a href="">PURCHASE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	const ITEAMS = [
		{
			src:"../assets/images/tshirts/1.jpg",
			header:"I love Coding Tshirt",
			description:"I love this person because of she codes.Funny and humorous t-shirt to express your love for coding.",
			price:"&nbsp;&nbsp;&nbsp;12.50$",
		},
		{
			src:"../assets/images/tshirts/2.png",
			header:"Python Tshirt",
			description:"I only speak in python. The perfect T-shirt for python programmers. Express your affection for python programming language. Available in multiple colors. Super comfy T-shirt.",
			price:"&nbsp;&nbsp;&nbsp;19.99$",
		},
		{
			src:"../assets/images/tshirts/3.png",
			header:"Electronics Engineer T-shirt",
			description:"Cool T-shirt for Electronics engineers. Share your pride of being an Electronics Engineer by this T-shirt.",
			price:"&nbsp;&nbsp;&nbsp;15.00$",
		},
		{
			src:"../assets/images/tshirts/4.png",
			header:"Python Daddy T-Shirt",
			description:"Python T-shirt for daddy. Pair of daddy-baby T-shirt for python language lovers.<br>Super Comfy,Durable,Available in Multiple Colours,Pair with Baby T-shirt.",
			price:"&nbsp;&nbsp;&nbsp;18.00$",
		},
		{
			src:"../assets/images/tshirts/5.png",
			header:"NodeJs Tshirt",
			description:"I don't REST I make REST API. Funny T-shirt for Node.js developers out there. <br>Express your love for NodeJs with this T-shirt.Available in Multiple Colors,Super Comfy,Highly Durable.",
			price:"&nbsp;&nbsp;&nbsp;14.50$",
		},
		{
			src:"../assets/images/tshirts/6.png",
			header:"I NEED A BREAK.",
			description:"I need a break (T-shirt. Cool T-shirt for Web developers out there. <br>Perfect for front-end developers who work in HTML and related Technologies.<br>Super Comfy,Soft Material,Durable,Available in multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;20$",
		},
		{
			src:"../assets/images/tshirts/7.png",
			header:"Dark Mode On T-Shirt",
			description:"Who don't love Dark Mode?A special T-Shirt for all the Dark Mode lovers, Especially for developer folks out there.<br>Super Comfy,Soft Material,Durable,Available in Multiple Sizes,Available in Multiple Dark Colours.",
			price:"&nbsp;&nbsp;&nbsp;20.00$",
		},
		{
			src:"../assets/images/tshirts/8.png",
			header:"It Works on my machine",
			description:"Perfect Tees for showing your frustration about programs running perfectly on your machine and no working on other's <br>machines.Perfect for humorous programmers.Funny Graphic T-Shirts.Super Comfy,Soft Material,Durable,<br>Available in multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;13.00$",
		},
		{
			src:"../assets/images/tshirts/9.png",
			header:"I'm a Programmer Funny T-shirt",
			description:"Don't ask me to fix your computer, I'm a programmer.Perfect Tees for showing your frustration aboutEveryone <br>asking you to fix their computer because you are a programmer.Perfect for humorous programmers.Funny Graphic T-Shirts.Super Comfy,Soft Material,Durable,Available <br> in multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;16.50$",
		},
		{
			src:"../assets/images/tshirts/10.png",
			header:"Energy formula T-Shirt",
			description:"E equals milk into coffee squared.Funny T-shirt for engineers.Perfect for humorous engineers.<br>Funny Graphic T-Shirts.Super Comfy,Soft Material,Durable,Available in multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;19.00$",
		},
		{
			src:"../assets/images/tshirts/11.png",
			header:"Keep Calm and Make Great Stuff T-shirt",
			description:"The perfect T-shirt for engineers. Engineers are the ones who run the world.<br>Dedicated to all engineers.Funny Graphic T-Shirts.Super Comfy,Soft Material,Durable,Available in multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;15.00$",
		},
		{
			src:"../assets/images/tshirts/12.png",
			header:"Year 2020 Sucks T-shirt",
			description:"The year 2020 sucks , funny T-shirt for computer engineers. Put your folks in wonder what 0b11111100100 means.<br>Perfect for humorous engineers.Funny Graphic T-Shirts.Super Comfy,Soft Material,Durable,Available in <br>multiple sizes,Available in Multiple Colours.",
			price:"&nbsp;&nbsp;&nbsp;20.00$",
		},

	];
	var temp = <?php echo $id; ?>;
	console.log(temp);
	var i = 1;
		for(i=1;i<13;i++)
		{
		  if(parseInt(temp) == i)
	        {
	        	document.getElementById("pimg").src = ITEAMS[i-1].src;
	  			document.getElementById("heading").innerHTML = ITEAMS[i-1].header;
		        document.getElementById("des").innerHTML = ITEAMS[i-1].description;
		        document.getElementById("price").innerHTML = ITEAMS[i-1].price;
	  		}
	  	}

</script>
</body>
</html>
<!-- <script>
	 
        var temp = <?php  $id; ?>  
        console.log(temp)
      
</script> -->