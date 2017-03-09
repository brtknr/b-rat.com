<html lang="en">
<head>
	<title>Photography</title>

	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>

	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	</style>
</head>
<body>

<?php
$s = $_GET["s"];

$photoDir = "images/".($s?($s."/"):"");

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
<a href="<?=$photoDir.$fileArray[$i]?>" rel="lightbox<?=$s?("[".$s."]"):""?>"><img src="<?=$photoDir."thumbs/".$fileArray[$i]?>" border="0"/></a>
<?php
		}
	}
}
?>
</body>
</html>