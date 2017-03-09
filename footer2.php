	<tr>
		<td align="right">
		<div id="footer">
		<table width="1000" height="400" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<img src="images/left.gif" width="170" height="160" alt=""></td>
				<td width="280">
					<p align="center"><b><font size="4">Bharat's World.</font></b></td>
				<td>
					<img src="images/right.gif" width="550" height="160" alt=""></td>
			</tr>
			<tr>
				<td colspan="3" background="images/bottom.gif" width="1000" height="240">
					<p align="center">
					<?include("pass.php")?>&nbsp;</td>
			</tr>
		</table>
		</td>
		</div>
	</tr>
<script name = "Javascript">
function toggleFooter(){
	if (document.getElementById('footer').style.display=='none')
		document.getElementById('footer').style.display='block';
	else document.getElementById('footer').style.display='none';
}
<?=$toggleFooter?>
</script>