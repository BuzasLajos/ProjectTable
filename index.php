<?PHP

header ('Content-type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>


	<link rel="shortcut icon" href="http://www.jaszfenyszaru.hu/lmnts/jszf_favicon.ico" >
	<link rel="icon" type="image/gif" href="http://www.jaszfenyszaru.hu/lmnts/jszf_favicon.gif" >

    <meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom-css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	
	<?php 
	  include 'functions.php';
	?>
	
	</head>
<body>

<!--
TODO:
Nyomtatási képnél kis méret esetén megjelenne a táblázat scrollbarja 
overflow: hidden

-->


  
<div class="teljes " style="margin-top: 0 !important; padding-top: 0 !important;">  <!-- A teljes oldal -->

<br/>
<!-- Start the header -->


<div class="container-fluid ">
    <div class="collapse navbar-collapse small-print"  style="margin: 0; padding: 0;" >
	<!-- csak teljes nézetben látszódik -->

	<table  class="mytable table-respnsive"    >
	<tr style="border: none !important; "> 
<td >
<div class=" img-responsive"  > <img id="imgdiv" class="CoverImage img-responsive" style="max-height: 290px;" src="img/logo_1_left.png" /> </div>
</td>

<!--  táblázat a táblázatban -->
	 <td  id="titlediv"  > 
<!--
		<table   class="table-responsive"   >
			<tr >
				<td ><a class="h1" class="infoblokk-title" style="float: right !important; ">Jászfényszaru pályázatai</a></td>
			</tr>
		</table>
-->

 <img  class=" img-responsive " style="max-height: 270px; vertical-align: right !important; " src="img/logo_2_center.png" />

 </td>


<td >
 <img  class=" img-responsive " style="max-height: 270px; float: right; " src="img/logo_3_right.png" />
</td>
</tr> </table>
</div> <!-- navbar collapse -->

	
	<!-- Csak mobil nézetben látszódik -->
	<div class="row non-printable"  >
	        <div class="col-xs-12"  style=" padding: 0px;">
			<img  class=" img-responsive navbar-toggle collapsed"  src="img/logo_1_left.png"  
			style="margin: 0px !important; float: right; background-color: transparent; border-width: 0px; padding: 15px; max-height: 20% !important;" />
			</div> <!-- col-xs-12 -->
	</div> <!-- row -->
	
</div> <!-- container-fluid -->



<div class="container-fluid ">
    <!-- NoScript Alert -->
    <noscript>
    	<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<span><strong>Figyelmeztetés: </strong> A JavaScriptek le vannak tiltva. <a href="http://enable-javascript.com/hu" class="alert-link">Teljes funkcionalitás eléréséhez engedélyezze a JavaScripteket</a>.</span>
		</div>
	</noscript>
</div><!-- container-fluid -->


<div class="container-fluid"  >
<div class="jumbotron" style="margin-bottom:0px;  position: relative;">

<center><p >
My smaller projects, scripts and practise tasks.
</p>   
</center>

</div> <!-- jumbotron -->
</div> <!-- container-->

<!-- End of header -->



<?php
table("src/projects.txt", "Projects");
?>


<div id class="footer" style="display: none;">
    <p>footer text</p>
</div>




<!-- ************************************************** -->


</div> <!-- A teljes oldal -->


<script>

var divs = document.getElementsByClassName( 'replacethis' );
[].slice.call( divs ).forEach(function ( div ) {
  //  div.innerHTML = '<button type="button" class="modalbtn btn btn-primary btn-sm" id="'+div.id+'" data-toggle="modal" data-target="#modalProjekt" >InfQQQo</button>';
  //  div.innerHTML = '<button type="button" class="modalbtn btn btn-primary btn-sm" id="'+div.id+'"  >InfQQQo</button>';
	div.innerHTML = '<button type="button" class="modalbtn btn btn-primary btn-sm" id="'+div.id+'"  data="'+div.getAttribute('data')+'"  ><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Info</button>';
	
	//data-toggle="modal" data-target="#modalProjekt" 
	
  });

  
$('.modalbtn').on('click',function(){
	var projid = this.id;	
	var projcim = document.getElementById(this.getAttribute('data')).innerHTML; //this.getAttribute('data');
	
	document.getElementById("hiddendiv").innerHTML = projid;
	document.getElementById("hiddendiv2").innerHTML = projcim;
	$('.modal-body').load('info.php?projekt='+projid+'&js=out');
	
	$('#modalProjekt').modal('show');

});


$('#modalProjekt').on('shown.bs.modal', function (e) {
	var projid = document.getElementById("hiddendiv").innerHTML;
	var projcim = document.getElementById("hiddendiv2").innerHTML;
	document.getElementById("modalProjektLabel").innerHTML = projcim;
//	$('.modal-body').load('info.php?projekt='+projid+'&js=in');
});


	
$('.modalclose').on('click',function(){
	var projid = document.getElementById("hiddendiv").innerHTML
	document.getElementById("modalProjektLabel").innerHTML = projid;
//	$('.modal-body').load('info.php?projekt='+projid+'&js=out');
   $('#modalProjekt').modal('toggle');
      
   window.alert('modalclose btn clicked');
});



</script>










		
		
</body>


</html>
