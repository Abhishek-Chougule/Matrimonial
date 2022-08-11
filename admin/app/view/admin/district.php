<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
        	<fieldset>
        		<legend>ADD DISTRICT</legend>
	        	<form method="POST">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td>District name</td>
							<td>:</td>
		          			<td><input type="text" name="name"></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Division</td>
							<td>:</td>
							<td>
								<select name="division">
									<?php
										foreach ($divisionList as $division) {
											echo "<option value=".$division['id'].">".$division['name']."</option>";
										}
									?>
								</select>
							</td>
						</tr>
					</table>
					<input type="submit" value="Add"><br><br>
					<?php
						if (isset($errorMsg)) {
							echo $errorMsg;
						}
					?>
				</form>
			</fieldset>
			<fieldset>
        		<legend>UPDATE DISTRICT</legend>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<?php
							foreach ($districtList as $district) {
								echo "<tr>";
								echo "<td>".$district['name']."</td><td><td>";
								echo "<td><a href='".APP_ROOT."/?admin_update-district&".$district['id']."'>Update</a></td>";
								echo "</tr>";
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
										echo "<option value=".$division['id'].">".$division['name']."</option>";
									}
								?>
							</select>
						</td>
					</tr>
				</table>
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