<table width="65%" align="center" cellspacing="0" cellpadding="5" border="1">
    <tr>
      <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
          <fieldset>
            <legend>ADD COMPLEXION</legend>
            <form method="POST">
          <table cellpadding="0" cellspacing="0">
            <tr>
              <td>Complexion name</td>
              <td>:</td>
                    <td><input type="text" name="type"></td>
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
            <legend>UPDATE Complexion</legend>
        <table cellpadding="0" cellspacing="0">
          <tr>
            <?php
              foreach ($typeList as $type) {
                echo "<tr>
                <td>".$type['type']."</td><td><td>
                <td><a href='".APP_ROOT."/?admin_update-complexion&".$type['id']."'>Update</a></td>
                </tr>";
              }
            ?>
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