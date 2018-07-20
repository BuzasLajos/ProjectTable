<html>
<head>
	

	<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    -->
		
	</head>	

<body>

</body>
	

<?php
		
function proba($string){
// outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

if (file_exists($string)) {
	$str=date("F d Y H:i:s.", filemtime($string));
}else{$str="none";}

return $str;
}

function listExif($string){

echo $string.":<br />\n";
$exif = exif_read_data($string, 'IFD0');
$str=$exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data($string, 0, true);
echo $string.":<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
return $str;
}


function simplify($string){
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'', 'Ó'=>'', 'Ô'=>'', 'Õ'=>'', 'Ö'=>'', 'Ø'=>'', 'Ù'=>'',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'', 'ø'=>'', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y',
							'ő'=>'', 'Ő', '', ' '=>'', '/'=>'', '.'=>'', '-'=>'', '#'=>'sharp', '+'=>'plus',
							'Ű'=>'U', 'ű'=>'u', 'ü'=>'u', 'Ü'=>'U', 'Ő'=>'_');
$str = strtr( $string, $unwanted_array );
return $str;
}







function listFiles($dir, $js){

	$szinek=array("#ffffff", "#fdfdfd", "#f7f7f7", "#e8e8e8", "#dcdada", "#c8c8c8", "#bdb8b8");
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    // prevent empty ordered elements
    if (count($ffs) < 1) {return;}
 echo '<div class="panel-group ">';
    foreach($ffs as $ff){
		$header=substr_count($dir,"/")+2;
		$simp=simplify($dir.'/'.$ff);
		 if(is_dir($dir.'/'.$ff)){
			 echo '<a  href="#" data-target="#'.$simp.'" data-toggle="collapse" > <h'.$header.' class="list-group-item list-group-item-info active " >';
	   echo $ff;
	echo '</h'.$header.'></a>';
		 }

if(is_file($dir.'/'.$ff)){
	echo '<br/>';
	if(substr($ff, -3)=='jpg'||substr($ff, -3)=='svg'||substr($ff, -3)=='JPG' ){
		
		/*
		if compressed version of the image is exists,
		than add the $pre tag to the path when show the image
		otherwise, the $pre tag will be empty, and show the original file from the src folder
		*/
		$pre='';
		$filename = $pre.$dir.'/'.$ff; //path of the original image, not thecompressed
		
		if (file_exists('img_compressed_20/'.$filename)){
			$pre='img_compressed_20/';  //directory for compressed images 20% size and 20% quality of the original pics
		} 
/*
Get the image orientation, and rotate it, if neccessary
add class, and rotate with css
TODO: Test with other browsers
*/		

$orientation='';
$exif = @exif_read_data($filename); //@ hide the errors of that function
// print_r($exif['Orientation']);
if($exif['Orientation']==1){$orientation='';}
if($exif['Orientation']==8){$orientation='rotateleft';}
if($exif['Orientation']==6){$orientation='rotateright';}

		
	echo '<a target="_blank" href="'.$dir.'/'.$ff.'">
	<img  class="img-responsive '.$orientation.'" src="'.$pre.$dir.'/'.$ff.'" style="width: 100% !important; height: auto !important;" />
	</a>';
	
	//get exif infoscriptless

	}else if(substr($ff, -3)=='txt'||substr($ff, -3)=='TXT'){
	$myfile = fopen($dir.'/'.$ff, "r") or die("Unable to open file!");
$szoveg = ' '.fread($myfile,filesize($dir.'/'.$ff));
fclose($myfile);
	echo '<p class="h4">
	'.nl2br($szoveg).'
	</p>';
	}else if(substr($ff, -2)=='cs'||substr($ff, -3)=='cpp'||substr($ff, -2)=='hs'||substr($ff, -2)=='js'){
	$myfile = fopen($dir.'/'.$ff, "r") or die("Unable to open file!");
$szoveg = fread($myfile,filesize($dir.'/'.$ff));
fclose($myfile);
	echo '<code><pre style="border: 2px solid lightblue; ">'.$szoveg.'
	</pre></code>';
	}else{
	echo '<a class="list-group-item "  target="_blank" href="'.$dir.'/'.$ff.'">
	'.$ff.'
	</a>';
	}//else if not picture
}//if file

	if(is_dir($dir.'/'.$ff)){
		
		//if javascript is disabled, open all accordion div by default
		$szin="";
		// if(array_key_exists($header, $szinek)){ $szin = $szinek[$header]; }
		echo'<div id="'.$simp.'" class="collapse '.$js.' "  style="background-color:'.$szin.';">';
		listFiles($dir.'/'.$ff, $js);
		echo '</div>';
	}//if directory
		
    } //foreach vége
echo '</div>';
}//function vége


?>




<?php
function table($src, $title){
$file= $src;  // "src/table.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

/*
TODO:
#-el jelölt tageket kiemelni változókba
Pl.: #_success_warning legyen tr class
Üres sorok törlése
*/
$table=[];
$line_split=[];
$line='';
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
$line_split = explode('	', $line);
// $table = array_push($table, $line_split);

array_push($table, $line_split);
}

fclose($handle);

$sor=count($table);
$oszlop=count($table[0]);


/*
replace the INFO string in the $table 2D array to a button with a link to the project's folder
That folder will load in a modal with  info.php
OR open in a new tab/window if javascript is disabled
*/

	$tag = ""; $tags =[];
	$modaltitle = "modaltitlebeforefor"; $modaltitles = [];
	for ($row=0; $row <= $sor-1; $row++) {
				
		echo "<tr> \n";
		for ($col=1; $col <= count($table[$row])-1; $col++) { 
		
			$sub2 = substr($table[$row][$col], 0, 6);
			$sub3 = substr($table[$row][$col], 0, 8);
			$sub = substr($table[$row][$col], 0, 6);
			
			if($sub2=="#_TAG_"){
				$tag = str_replace($sub2,"",$table[$row][$col]);
				
				$tags[$row]=$tag;
				}

				if($sub3=="#_TITLE_"){
				$modaltitle = str_replace($sub3,"",$table[$row][$col]);
				$modaltitles[$row]=$modaltitle;			
				}

			if($sub=="#INFO_")
			{
				// $link = str_replace("#INFO_",$btn_script,$table[$row][$col]);
				$link = str_replace("#INFO_", "" ,$table[$row][$col]);

/*
Create the button with the link
*/				


$btn_noscript = '
<noscript>
	<a type="button" class="btn btn-primary btn-sm" href="infoscriptless.php?projekt='.$link.'&js=in"  target="_blank"> 
		<span class="glyphicon glyphicon-info-sign"></span> Info
	</a>
</noscript>
';

$btn='<div class="replacethis" id="'.$link.'" data="modaltitle_'.simplify($file).'_'.$row.'" ></div>';

/*change the INFO to the button */
$table[$row][$col] = $btn;
$table[$row][$col] = $btn.' '.$btn_noscript;

			} //if
		} //for
	} //for

	
echo '
<div class="container-fluid">
  <h1>'.$title.'</h1>
  <div class="table table-responsive">   <!-- táblázatot tartalmazo div -->
';
echo "<table class='table project-table' >";

if(count($table)>1){
echo '
	<thead>  
		<tr class="info">';
		for ($col=0; $col <= count($table[0])-1; $col++) {
			echo '<th class="col-md-1" >'.$table[0][$col].'</th>';
		}	
echo '</tr>
	</thead>
';
}else{
	echo '_<br/>';
}

$tag="danger";
//TOD: Test with table only one line
$tag="";
	for ($row=1; $row <= $sor-1; $row++) { 
			if(array_key_exists($row, $tags))
			{
				$tag=$tags[$row];
			}
			

		echo '<div id="modaltitle_'.simplify($file).'_'.$row.'" style="display: none;">'.$modaltitles[$row].'</div>';
		
		/*
		
		A gomb data property-je "4"
		A táblázat előtt keresse meg az id=4 divet,
		és annak az innerHTML-je lesz a modal címe
		(ez a div tartalmazzon egy display: none; style-t)
		
		TODO: később ne csak "4" legyen a property, hanem modaltitle4
		
		*/
		
		
		
		echo "<tr class='".$tag."'>";
		for ($col=0; $col <= count($table[0])-1; $col++) { 
		   $p = $table[$row][$col];
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";


echo '  
</div> <!-- táblázatot tartalmazo div lezárása  -->
</div> <!-- container -->
';

/*
Create the Modal for the content
*/
echo '
<!-- Modal modalKOFOP121 -->
<div id="hiddendiv" style="display: none;">hiddendiv</div>
<div id="hiddendiv2" style="display: none;">hiddendiv2</div>
<div class="modal fade" id="modalProjekt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div id="modalProjektContent" class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalProjektLabel">
Label of the modal
		</h4>
      </div>
      <div class="modal-body" id="modalProjektBody" >
<!-- Here we will load the php page with a javascript variable -->        
<?php listFiles("src/kofop121"); ?>

      </div> <!-- modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
	 </div> <!-- modal-footer -->
    </div>  <!-- modal content -->
  </div> <!-- div class="modal-dialog" -->
</div> <!-- div class="modal fade" -->

';
}		
?>



</html>