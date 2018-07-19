

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
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y',
							'ő'=>'o', 'Ő', 'O', ' '=>'_', '/'=>'-', '.'=>'_',
							'Ű'=>'U', 'ű'=>'u', 'ü'=>'u', 'Ü'=>'U', 'Ő'=>'o');
$str = strtr( $string, $unwanted_array );
return $str;
}







function listFiles($dir, $js){

 //$szinek=array("#ffffff", "#fdfdfd", "#f7f7f7", "#e8e8e8", "#dcdada", "#c8c8c8", "#bdb8b8");
 $szin='';
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
	if(substr($ff, -3)=='jpg'||substr($ff, -3)=='JPG'){
		$pre='img_compressed_20/';  //directory for compressed images 20% size and 20% quality of the original pics
	echo '<a target="_blank" href="'.$dir.'/'.$ff.'">
	<img  class="img-responsive" src="'.$pre.$dir.'/'.$ff.'" style="width: 100% !important; height: auto !important;" />
	</a>';
	}else if(substr($ff, -3)=='txt'||substr($ff, -3)=='TXT'){
	$myfile = fopen($dir.'/'.$ff, "r") or die("Unable to open file!");
$szoveg = ' '.fread($myfile,filesize($dir.'/'.$ff));
fclose($myfile);
	echo '<p class="h4">
	'.nl2br($szoveg).'
	</p>';
	}else{
	echo '<a class="list-group-item "  target="_blank" href="'.$dir.'/'.$ff.'">
	'.$ff.'
	</a>';
	}//else if not picture
}//if file

	if(is_dir($dir.'/'.$ff)){
		
		//if javascript is disabled, open all accordion div by default

		echo'<div id="'.$simp.'" class="collapse '.$js.' "  style="background-color:'.$szin.';">';
		listFiles($dir.'/'.$ff, $js);
		echo '</div>';
	}//if directory
		
    } //foreach vége
echo '</div>';
}//function vége
















?>
