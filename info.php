<html>

<head>

    <title>Pályázatok</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
    <?php 
	include 'functions.php';
	?> 
</head>


<body >

<?php

$projekt=""; $js="";

if( (isset($_GET['projekt'])) && (isset($_GET['js']))   )
{
	$projekt=$_GET['projekt'];
	$js=$_GET['js'];	
}
?>

	
		
<?php

if($js=="in"){ 
//echo "<br/>js is in<br/>";
    print '<div id="infoDiv" class="container-fluid" style="background-color: white;">';
}

//`<div id='infoDiv' class='container-fluid' style='background-color: white;'>`;
?>
        <?php listFiles('src/'.$projekt, $js ); ?>


<?php
if($js=="in"){
    echo `</div>  <!-- container-fluid -->`;
}
?>
	

</body>

</html>