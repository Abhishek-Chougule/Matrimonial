<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
			<fieldset>
			    <legend><b>Education</b></legend>
				<form>
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Degree</td>
							<td>:</td>
							<td>
								<select>
									<option>PhD</option>
									<option>MSc</option>
									<option>MBA</option>
									<option>BSc</option>
									<option>BBA</option>
									<option>HSC</option>
									<option>SSC</option>
									<option>Didn't go to school</option>
								</select>
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Field</td>
							<td>:</td>
							<td><input type="text" name="efield">
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Institution</td>
							<td>:</td>
							<td><input type="text" name="institution">
							</td>
							<td></td>
						</tr>
					</table>
					<hr/>
					<a href="introduction.html"><input type="button" value="Previous"></a>
					<input type="reset">
					<a href="family-info.html"><input type="button" value="Next"></a>
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
