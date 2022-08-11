<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
      <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
			<fieldset>
			    <legend><b>Personal information</b></legend>
				<form>
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Introduction</td>
							<td>:</td>
							<td><textarea name="intro"></textarea></td>
						</tr>
					</table>
					<hr/>
					<a href="personal-info.html"><input type="button" value="previous"></a>
					<input type="reset">
					<a href="education.html"><input type="button" value="Next"></a>
				</form>
			</fieldset>
		</td>
    </tr>
    <tr>
      <td></td>
        <td align="center">
            &copy; 2022 - <?php $date = date("Y"); echo date('Y', strtotime("+36 months $date"));?> spruhamatrimony.com - The Maharashtra's No.1 Matchmaking Service™ 
        <td align="right">Passionately created by <a href="https://in.linkedin.com/in/abhishekchougule">Abhishek Chougule </a><i class="fa fa-heart-o" aria-hidden="true"></i>
        </td>
    </tr>
</table>
