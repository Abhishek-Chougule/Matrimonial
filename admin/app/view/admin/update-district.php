<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
        	<fieldset>
        		<legend>UPDATE DISTRICT</legend>
	        	<form method="POST">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td>District name</td>
							<td>:</td>
							<?php
							/**echo "<pre>";
							print_r($districtList);
							print_r($divisionList);
							echo "</pre>";**/
								if (isset($district)) {
									echo "<td><input type='text' name='name' value=".$district['name']."></td>";
								}
							?>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Division</td>
							<td>:</td>
							<td>
								<select name="division">
									<?php
										foreach ($divisionList as $division) {
											if ($division['id'] == $district['division']) {
												echo "<option value=".$division['id']." selected>".$division['name']."</option>";
											}else{
												echo "<option value=".$division['id'].">".$division['name']."</option>";
											}
										}
									?>
								</select>
							</td>
						</tr>
					</table>
					<input type="submit" value="UPDATE"><br><br>
					<?php
						if (isset($errorMsg)) {
							echo $errorMsg;
						}
					?>
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