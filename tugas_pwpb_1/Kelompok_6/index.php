<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible">
	<title>WEB KU</title>
	<style type="text/css">
		html,body {
			width: 100%;
			height: 100%;
		}
		body{
			padding: 0;
			margin: 0;
			background-size: cover;
			background-position: center;

1
		}
		nav{
			background-color: black;
			display: block;
			padding: 5px;
		}
		nav ul{
			margin-right: 900px;
			display: flex;
		}
		nav ul li{
			list-style: none;
		}
		nav ul li a{
			font-size: 2em;
			color: white;
			text-decoration: none;
			margin: 5px;
		}
		nav ul li a:hover{
			background: #232323;
		}
		header{
			text-align: center;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			line-height: 2px;
			color: black; 
		}
		header h1{
			color: black;
			padding: 10px;
			font-size: 50px;
		}
		header h2{
			font-size: 50px;
			color: black;
			text-decoration: underline;
		}
		header a{
			color:aqua;
			background: green;
		}
		.contanier{
			position: relative;
			top: 100%;
		}
		.row{
			width: 100%;
			color: aqua;
		}
		.col1, .col2{
			width: 100%;
		}
		.col1 img{
			width: 200px;
			height: 200px;
		}
		.galeri{
			display: flex;
			flex-flow: wrap;
			justify-content: center;
		}
		img{
			width: 200px;
			height: 200px;
			margin: 5px;
			border: 1px solid black;
			transition: 0.3s;
		}
		img :hover{
			transform: scale(1.1);
		}
	</style>
</head>
<body style="background-color: #808080">
	<nav>
		<ul>
			<li><a href="#">first</a></li>
			<li><a href="#">second</a></li>
			<li><a href="#">third</a></li>
		</ul>
	</nav>
	<header>
		<h1>SELAMAT DATANG</h1>
		<hr>
		<p style="font-family: kristen itc">di web kami</p>
		<p style="font-family: kristen itc">rindu,nabila,zidan</p>
		<br>
		<p><a href="second.php" font background="#33cccc">Selengkapnya</a>
	</header>

</body>

</html> 