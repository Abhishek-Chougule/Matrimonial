<?php
	$loggedAdmin = $_SESSION['loggedAdmin'];
?>
<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
        	<form method="POST">
	        	<fieldset>
	        		<legend>Personal information</legend>
					<table cellpadding="0" cellspacing="0">
						<tr>
						<td>Name</td>
						<td>:</td>
						<td><?php 
							if (isset($searchedUser['fname'])) {
								echo $searchedUser['fname']." ";
							}
							if (isset($searchedUser['mname'])) {
								echo $searchedUser['mname']." ";
							}
							if (isset($searchedUser['lname'])) {
								echo $searchedUser['lname'];
							}
						 ?></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Age</td>
							<td>:</td>
							<td><?php
								if (isset($searchedUser['age'])) {
									echo $searchedUser['age'];
								}
							?></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td><?php
								if (isset($searchedUser['gender_name'])) {
									echo $searchedUser['gender_name'];
								}
							?></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Blood</td>
							<td>:</td>
							<td><?php 
							if (isset($searchedUser['bgroup'])) {
								echo $searchedUser['bgroup'];
							}
							?></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Religion</td>
							<td>:</td>
							<td><?php 
							if (isset($searchedUser['religion_name'])) {
							 	echo $searchedUser['religion_name'];
							 } ?></td>
						</tr>
				<table>
					<tr>
						<td><input type="submit" name="accept" value="Accept request"></td>
	                	<td><input type="submit" name="reject" value="Reject request"></td>
	                </tr>
				</table>
			</form>
			<?php
				echo $errorMsg;
			?>
		</td>
		<?php
		if (isset($isFriend) && $isFriend) { ?>
			<td valign="top">
				<form method="POST">
					<?php
					if (isset($messages)) {
						foreach ($messages as $message) {
							if ($message['sender']==$_SESSION['loggedUser']['uid']) {
								echo "<span style='float:right'>".$message['message']."</span><br>";
							}else{
								echo "<span style='float:left'>".$message['message']."</span><br>";
							}
						}
					}
					?>
				<hr>
				<form method="POST">
					<input style="width: 100%" type="text" name="message"><br>
					<input style="float: right;" type="submit" name="send" value="Send">
				</form>
			</td>
		<?php } ?>
    </tr>
    <tr>
        <td align="center">
            &copy; 2022 - <?php $date = date("Y"); echo date('Y', strtotime("+36 months $date"));?> spruhamatrimony.com - The Maharashtra's No.1 Matchmaking Service™ 
        <td align="right">Passionately created by <a href="https://in.linkedin.com/in/abhishekchougule">Abhishek Chougule </a><i class="fa fa-heart-o" aria-hidden="true"></i>
        </td>
    </tr>
</table>
