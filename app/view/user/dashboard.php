<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matrimonial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  </head>
  <body>
<!-- <section id="top">
 <div class="container">
  <div class="row">
   <div class="top clearfix">
    <div class="col-sm-6">
	 <div class="top_left">
	  <p>ईथे जुळती पवित्र नाती . . .</p>
	 </div>
	</div>
	<div class="col-sm-6">
	  <div class="top_right clearfix text-right">
		   
		  <span class="span_2"> <i class="fa fa-whatsapp"></i>  <a href="https://api.whatsapp.com/send/?phone=918149004090&text=Hi&type=phone_number&app_absent=0">+91 - 8149004090 </a></span>
	  </div>
	</div>
   </div>
  </div>
 </div>
</section> -->

  <style>
.p12 {
  font-family: "Cursive",Brush Script MT;
}
</style>
<section id="header" class="cd-secondary-nav">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
     <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               
               <img height="48" src=<?php echo APP_ROOT."/asset/defaultpic/ring.png"; ?>>
               <a class="navbar-brand" href="index.html"><p class="p12">&nbsp;&nbsp;&nbsp;Spruha<br><span>Marriage Beuro </span></p></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
               
               <ul class="nav navbar-nav navbar-right">
                  
                 
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
   </div>
  </div>
 </div>
</section>
<?php
    $loggedUser = $_SESSION['loggedUser'];
?>
<table width="65%" align="center" cellspacing="0" cellpadding="5" border="0">
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\top-panel.php"; ?>
    </tr>
    <tr>
        <?php require_once SERVER_ROOT."\\app\\view\\left-panel.php"; ?>
        <td valign="top">
			<fieldset>
                <legend><b>Search</b></legend>
                <form method="POST">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>Age:</td>
                            <td>Min <input type="number" name="minAge"> </td>
                            <td>&nbsp;</td>
                            <td>Max: <input type="number" name="maxAge"></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Height:</td>
                            <td>Min <input type="text" name="minHeight"></td>
                            <td>&nbsp;</td>
                            <td>Max: <input type="text" name="maxHeight"></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Religion:</td>
                            <td>
                                <select name="religion">
                                    <option value="">--</option>
                                    <?php
                                    foreach ($religionList as $religion) {
                                        echo "<option value=".$religion['id']."> ".$religion['name']."</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Gender:</td>
                            <td>
                                <?php
                                    foreach ($genderList as $gender) {
                                        echo "<input type='radio' name=gender value=".$gender['id'].">".$gender['gender'];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Search"></td>
                        </tr>
                    </table>

                </form>
                <br>
            </fieldset>
            <?php
            if (isset($preSearchedList)) { ?>
                <fieldset>
                <legend><b>YOUR BEST MATCHES</b></legend>
                <?php foreach ($preSearchedList as $preSearched) {
                    if ($preSearched['uid'] != $loggedUser['uid']) {?>
                            <br/>
                            <fieldset style="background-color: #fdfdfd; border-radius: 5px;">
                            
                            <legend><h2><?php echo $preSearched['fname']; ?></h2></legend>
                            
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td rowspan="7" style="margin: 5px;">
                                        <a href= <?php echo APP_ROOT."/?user_public-profile&".$preSearched['uid']; ?>>
                                            <img width="128"  style="padding: 20px; border: 1px solid gray; border-radius: 10px; margin-right: 30px;" src="<?= APP_ROOT."/asset/".$preSearched['propic']; ?>">
                                    </a>
                                    </td>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><b><?= $preSearched['fname']." ".$preSearched['mname']." ".$preSearched['lname']; ?></b></td>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>:</td>
                                        <td><b><?= $preSearched['age'];?></b></td>
                                    </tr>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>:</td>
                                        <td><b><?= $preSearched['gender_name'];?></b></td>
                                    </tr>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Religion</td>
                                        <td>:</td>
                                        <td><b><?= $preSearched['religion_name'];?></b></td>
                                    </tr>
                                </tr>
                            <tr>
                                <td></td>
                                <td><a href="<?= APP_ROOT."/?user_public-profile&".$preSearched['uid']; ?>">View details</a></td>
                            </tr>
                        </table>
                    </fieldset>
            <?php }} ?>
            </fieldset>
            <?php } ?>
            <fieldset>
            <legend><h3>YOU MAY LOOKING FOR</h3></legend>
            
            <?php
            if (isset($suggestUserList)) {
                foreach ($suggestUserList as $suggestUser) {
                    if ($suggestUser['uid'] != $loggedUser['uid']) {?>
                    
                        <fieldset style="background-color: rgb(250, 246, 254); border-radius: 5px;">
                        <br> 
                        <h3>&nbsp<?= $suggestUser['fname']; ?></h3>
                            <br/>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td rowspan="7">
                                        <a href= <?php echo APP_ROOT."/?user_public-profile&".$suggestUser['uid']; ?>>
                                        &nbsp<img width="128" style="padding: 20px; border: 1px solid gray; border-radius: 10px; margin-right: 30px;" src="<?= APP_ROOT."/asset/".$suggestUser['propic']; ?>"></a>
                                    </td>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><b><?= $suggestUser['fname']." ".$suggestUser['mname']." ".$suggestUser['lname']; ?></b></td>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>:</td>
                                        <td><b><?= $suggestUser['age'];?></b></td>
                                    </tr>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>:</td>
                                        <td><b><?= $suggestUser['gender_name'];?></b></td>
                                    </tr>
                                    <tr><td colspan="3"><hr/></td></tr>
                                    <tr>
                                        <td>Religion</td>
                                        <td>:</td>
                                        <td><b><?= $suggestUser['religion_name'];?></b></td>
                                    </tr>
                                </tr>
                            <tr>
                                <td></td>
                                <td><a href="<?= APP_ROOT."/?user_public-profile&".$suggestUser['uid']; ?>">View details</a></td>
                            </tr>
                           
                        </table>
                        <br>
                    </fieldset>
                    <br>
            <?php }}}
            else{
                echo "User not found for searched criteria.";
             }?>
         </fieldset>
		</td>
    </tr>
    <tr>
    
    </tr>
</table>
<center>
    <br><br><br>
        &copy; 2022 - <?php $date = date("Y"); echo date('Y', strtotime("+36 months $date"));?> spruhamatrimony.com - The Maharashtra's No.1 Matchmaking Service™ 
        &nbsp &nbsp Passionately created by <a href="https://in.linkedin.com/in/abhishekchougule">Abhishek Chougule </a><i class="fa fa-heart-o" aria-hidden="true"></i>
            
<center>
<br>
<script>
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	}); 
$('#toTop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
});
});

</script>

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown(0);
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp(0);
            $(this).toggleClass('open');       
        }
    );
	
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
		$(window).on('scroll', function(){
			if($(window).scrollTop() > secondaryNavTopPosition ) {
				secondaryNav.addClass('is-fixed');	
			} else {
				secondaryNav.removeClass('is-fixed');
			}
		});	
		
});
	</script>
	
	
<script>
	$(document).ready(function(){
	var my_posts = $("[rel=tooltip]");

	var size = $(window).width();
	for(i=0;i<my_posts.length;i++){
		the_post = $(my_posts[i]);

		if(the_post.hasClass('invert') && size >=767 ){
			the_post.tooltip({ placement: 'left'});
			the_post.css("cursor","pointer");
		}else{
			the_post.tooltip({ placement: 'rigth'});
			the_post.css("cursor","pointer");
		}
	}
});
	</script>
    </body>
       
       </html>