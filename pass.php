<?php
if ($_SESSION["isBharat"]){
	echo "[<a href=\"?signOff=1\">x</a>]";
} else {
?>
<form method="POST" action>
	<table border="0" style="border: 3px dotted #FFFFFF">
		<tr>
			<td><?php
$primary = "FF";

$variantArray = array ("00","40","80","C0");
$noOfVariants = count ($variantArray);

for ($field = 1; $field <= 3; $field++){
	echo "<div id=\"field$field\" align=\"center\">\n";
	for ($order = 0; $order < 3; $order++){
			for ($j=0; $j<$noOfVariants; $j++){
				if ($order == 0){
					$theColour = $primary.$variantArray[$j].$variantArray[$j];
				} else if ($order == 1){
					$theColour = $variantArray[$j].$primary.$variantArray[$j];
				} else if ($order == 2){
					$theColour = $variantArray[$j].$variantArray[$j].$primary;
				}		
				echo "<span style=\"background-color: #$theColour\"><input onclick=\"toggleVisibility('field".($field+1)."')\" type=\"radio\" name=\"colourKey[".$field."]\" value=\"$theColour\"></span>";
			}
			echo "<br/>\n";
	}
	echo "</div>\n";
	$hideList.= "document.getElementById('field$field').style.display='none';\n";
}
$hideList.= "document.getElementById('field0').style.display='none';\n";
$hideList.= "document.getElementById('field4').style.display='none';\n";
?>
				<div id="field4" align="center">
					<input type="submit" value=">>>" name="unlock">
				</div>
				<div id="field0" align="center">
					<input onclick="toggleVisibility('field1')" type="button" value="Login">
				</div>
			</td>
		</tr>
	</table>
</form>
<script language="javascript">
function toggleVisibility(what){ //------ makes the field identified by "what" invisible and everything else visible
<?=$hideList?>
document.getElementById(what).style.display='block';
}

toggleVisibility("field0");
</script>
<?}?>&nbsp;