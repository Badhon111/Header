<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		
		<title> " php pactice " </title>
		
		
		<style>
			.body {
				
				background-color: #4D3C3D;
				width: auto;
				text-align: center;
				font-size: 30px;
				color: white;
			}
			.php-style {
				width: auto;
				height: 200px;
				font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
				background-color: black;
				font-size: 40px;
				padding: inherit;
				color: white;
				text-align: center;
				
				
			}
		
		</style>
	</head>
	
	<body class="body">
	<header>
	<div class="php-style">
		
		<?php
		$bad = array("welcome to Badhon php tutorial");
		
		echo $bad[0];

?>
		</header>
	<div class="">

		<?php
		
		$badhon = array(0=>2,
					   1=> 18,
						
						);
		
		echo ($badhon["0"] . "<br/>");
		
		?>
	</div>
		
		<div>
			<?php
			echo $badhon[1];
			
			?>
		</div>	
	</body>
	
	
	
	
	
</html>


<?php
/* 3d array using of php variable output system's */
	
	
	$arr = array( 
		array(1, 2, 3),
		array(4, 5, 6),
		array(7, 8, 9)
	);
	/* 3d array using of php variable output system's */
	echo $arr[2][0];
?>