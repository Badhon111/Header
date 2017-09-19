<!doctype html>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta charset="utf-8">
		
		<title> " php pactice " </title>

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

<?php /*?>3d array using of php variable output system's<?php */?>


<?php
/* 3d array using of php variable output system's */
	
	
	$arr = array( 
		array(1, 2, 3),
		array(4, 5, 6),
		array(7, 8, 9)
	);
	/* 3d array using of php variable output system's */
	echo $arr[0][0];
?>