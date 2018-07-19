<html>

<head>

    <title>Pályázatok</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom-css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php include 'functions.php';?> </head>


<body >

<?php

$projekt=""; $js="";

if( (isset($_GET['projekt'])) && (isset($_GET['js']))   )
{
	$projekt=$_GET['projekt'];
	$js=$_GET['js'];	
}
?>


    <div class="container-fluid" style="background-color: white;">
        <?php listFiles('src/'.$projekt, $js ); ?>
    </div>  <!-- container-fluid -->

	

</body>

</html>