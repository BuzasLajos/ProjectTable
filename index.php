<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <meta charset="UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom-css.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<?php include 'functions.php';?>
	</head>
<body>

<!--
TODO:
Nyomtatási képnél kis méret esetén megjelenne a táblázat scrollbarja 
overflow: hidden

-->

  
<div class="teljes " style="margin-top: 0 !important; padding-top: 0 !important;">  <!-- A teljes oldal -->
        
<br/>

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
Programming projects</p>   </center>

</div> <!-- jumbotron -->
</div> <!-- container-->

<div class="container-fluid">
  <h1>Projects</h1>
<!-- .active, .success, .info, .warning, and .danger. -->
<div class="table table-responsive">   <!-- táblázatot tartalmazo div -->
<table class="table project-table">
  <thead>  
	<tr class="info">
        <th class="col-md-1" >ID</th>
        <th class="col-xs-1" id="projektcim"  >Description</th>
        <th class="col-md-1" >INFO</th>
		</tr>
		</thead>

    <tbody >
      <tr class="success">
        <td>1</td>
        <td>Project Euler problems</td>
        <td>
<!-- Button trigger modal -->
<noscript>
<a type="button" class="btn btn-primary btn-sm" href="info.php?projekt=projecteuler&js=in"  target="_blank"> 
          <span class="glyphicon glyphicon-info-sign"></span> Info
		  </a>
</noscript>

<script>
var html = '<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalprojecteuler" > <span class="glyphicon glyphicon-info-sign"></span>  Info</a>';

document.write(html);
</script>
		</td>
      </tr>
	  
	  
      <tr class="success">
        <td>2</td>
        <td>CodinGame Puzzles (Easy)</td>
        <td>

<!-- Button trigger modal -->
<noscript>
<a type="button" class="btn btn-primary btn-sm" href="info.php?projekt=codingame&js=in"  target="_blank"> 
	<span class="glyphicon glyphicon-info-sign"></span> Info
</a>
</noscript>

<script>
var html = '<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalcodingame" > <span class="glyphicon glyphicon-info-sign"></span>  Info</a>';

document.write(html);
</script>
		</td>
      </tr>
	  
	  
      <tr class="success">
        <td>3</td>
        <td>Excercising</td>
        <td>
<!-- Button trigger modal -->
<noscript>
<a type="button" class="btn btn-primary btn-sm" href="info.php?projekt=excercising&js=in"  target="_blank"> 
	<span class="glyphicon glyphicon-info-sign"></span> Info
</a>
</noscript>

<script>
var html = '<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalexcercising" > <span class="glyphicon glyphicon-info-sign"></span>  Info</a>';

document.write(html);
</script>
		</td>
      </tr>
	  
	  
	  
      <tr class="success">
        <td>4</td>
        <td>Érettségi feladatok</td>
        <td>
<!-- Button trigger modal -->
<noscript>
<a type="button" class="btn btn-primary btn-sm" href="info.php?projekt=erettsegi&js=in"  target="_blank"> 
	<span class="glyphicon glyphicon-info-sign"></span> Info
</a>
</noscript>

<script>
var html = '<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalerettsegi" > <span class="glyphicon glyphicon-info-sign"></span>  Info</a>';

document.write(html);
</script>
		</td>
      </tr>
	  

	  
    </tbody>
  </table>
  </div> <!-- táblázatot tartalmazo div lezárása  -->
</div> <!-- container -->

<br/>

<div id class="footer" style="display: none;">
    <p>footer text</p>
</div>


<!-- TODO:
Javascript töltse fel a Modal-tabindex
lenyomott gomb id-ja alapján
(táblázat celláinak is kell id, pl. a top212-palyazatcim cella tartalma kerül a modal-header-be)

Esetleg a táblázat feltöltése történhet php-val xls-ből
-->

<!-- Modal modalprojecteuler -->
<div class="modal fade" id="modalprojecteuler" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		
		Project Euler problems	
		
		
		</h4>
      </div>
      <div class="modal-body">

<?php listFiles('src/projecteuler', 'out'); ?>

      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
     
	 </div> <!-- modal-footer -->
    </div>  <!-- modal content -->
  </div> <!-- div class="modal-dialog" -->
</div> <!-- div class="modal fade" -->



<!-- Modal modalcodingame -->
<div class="modal fade" id="modalcodingame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		
		CodinGame puzzles (Easy)	
		
		
		</h4>
      </div>
      <div class="modal-body">

<?php listFiles('src/codingame', 'out'); ?>

      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
     
	 </div> <!-- modal-footer -->
    </div>  <!-- modal content -->
  </div> <!-- div class="modal-dialog" -->
</div> <!-- div class="modal fade" -->

<!-- Modal modalexcercising -->
<div class="modal fade" id="modalexcercising" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		
		Excercising	
		
		
		</h4>
      </div>
      <div class="modal-body">

<?php listFiles('src/excercising', 'out'); ?>

      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
     
	 </div> <!-- modal-footer -->
    </div>  <!-- modal content -->
  </div> <!-- div class="modal-dialog" -->
</div> <!-- div class="modal fade" -->


<!-- Modal modalerettsegi -->
<div class="modal fade" id="modalerettsegi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		
		Érettségi	
		
		
		</h4>
      </div>
      <div class="modal-body">

<?php listFiles('src/erettsegi', 'out'); ?>

      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
     
	 </div> <!-- modal-footer -->
    </div>  <!-- modal content -->
  </div> <!-- div class="modal-dialog" -->
</div> <!-- div class="modal fade" -->





</div> <!-- A teljes oldal -->


















</body>

</html>
