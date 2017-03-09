<?php
include ("header.php");

$s = $_GET["s"];
$photoDir = "gallery/".($s?($s."/"):"");
?>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

<table border="0" width="100%" height="100%">
	<tr>
		<td valign="top">


<?php
include $photoDir."blurb.txt";
?>
<p>&nbsp;</p>
	
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" height="100%">
<?php
if(!is_dir($photoDir)) die("Cuckoo! No $photoDir!");

if ($handle = opendir($photoDir)) {
	while (false !== ($file = readdir($handle))) {
		$fileArray[] = $file;
	}
	closedir($handle);

	for ($i=0; $i<count($fileArray); $i++){
		if (file_exists ($photoDir."thumbs/".$fileArray[$i]) && !($fileArray[$i] == "." || $fileArray[$i] == "..")){
			$photoArray[] = $fileArray[$i];
?>
<a href="<?=$photoDir.$fileArray[$i]?>" rel="lightbox<?=$s?("[".$s."]"):""?>" title="<?=preg_replace('/\..*$/','',$fileArray[$i])?>"><img src="<?=$photoDir."thumbs/".$fileArray[$i]?>" border="0"/></a>
<?php
		}
	}
}
?>
		</td>
	</tr>
	<?include ("footer.php")?>
</table>

</body>

</html>

