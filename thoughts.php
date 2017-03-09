<?php
include ("header.php");

date_default_timezone_set("Europe/Dublin");

if ($_POST["addThought"]){

	$myFile = "thoughts.php";
	if (!file_exists($myFile)) touch($myFile);
	$fh = fopen($myFile, "r") or die("Cannot open thoughts.");
	$fcontent = fread($fh, filesize($myFile));
	fclose($fh);

	$towrite = "<p align=\"center\">\n\"".$_POST["thought"]."\" \n<font size=1>".date("M Y")."</font>\n\n".$fcontent;
	$fh2 = fopen($myFile, 'w+') or die("Cannot open thoughts.");
	fwrite($fh2, $towrite);
	fclose($fh2);

}
?>
<table border="0" width="100%" height="100%">
	<tr>
		<td height = "100%" align="center" valign="center">
		<?php
		if ($_SESSION["isBharat"]){
		?>
		<form method="POST" action="?">
			<p><input type="text" name="thought" size="50"><input type="submit" value="Send" name="addThought"></p>
		</form>
		<?	}	?>
		<?include ("thoughts.html")?>
		</td>
	</tr>
	<?include ("footer.php")?>
    Hello
</table>

</body>

</html>