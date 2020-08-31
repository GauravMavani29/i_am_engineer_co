<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
<link rel="stylesheet" type="text/css" href="../assets/css/pro-style.css">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="../assets/images/nav-shopping.png"/>

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
					<h1 id="heading" class="head"> </h2> 
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
				
					<p>
						<b>Shipping Info:</b>

						<font>The product ships within 2 working days, excluding Sundays and public holidays.</font>
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
			price:"&nbsp;&nbsp;&nbsp;12.50$",
		},
		{
			src:"../assets/images/tshirts/2.png",
			header:"Python Tshirt",
			price:"&nbsp;&nbsp;&nbsp;19.99$",
		},
		{
			src:"../assets/images/tshirts/3.png",
			header:"Electronics Engineer T-shirt",
			price:"&nbsp;&nbsp;&nbsp;15.00$",
		},
		{
			src:"../assets/images/tshirts/4.png",
			header:"Python Daddy T-Shirt",
			price:"&nbsp;&nbsp;&nbsp;18.00$",
		},
		{
			src:"../assets/images/tshirts/5.png",
			header:"NodeJs Tshirt",
			price:"&nbsp;&nbsp;&nbsp;14.50$",
		},
		{
			src:"../assets/images/tshirts/6.png",
			header:"I NEED A BREAK.",
			price:"&nbsp;&nbsp;&nbsp;20$",
		},
		{
			src:"../assets/images/tshirts/7.png",
			header:"Dark Mode On T-Shirt",
			price:"&nbsp;&nbsp;&nbsp;20.00$",
		},
		{
			src:"../assets/images/tshirts/8.png",
			header:"It Works on my machine",
			price:"&nbsp;&nbsp;&nbsp;13.00$",
		},
		{
			src:"../assets/images/tshirts/9.png",
			header:"I'm a Programmer Funny T-shirt",
			price:"&nbsp;&nbsp;&nbsp;16.50$",
		},
		{
			src:"../assets/images/tshirts/10.png",
			header:"Energy formula T-Shirt",
			price:"&nbsp;&nbsp;&nbsp;19.00$",
		},
		{
			src:"../assets/images/tshirts/11.png",
			header:"Keep Calm and Make Great Stuff T-shirt",
			price:"&nbsp;&nbsp;&nbsp;15.00$",
		},
		{
			src:"../assets/images/tshirts/12.png",
			header:"Year 2020 Sucks T-shirt",
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



