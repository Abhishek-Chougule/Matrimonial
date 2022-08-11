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
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td rowspan="7">
						<img width="128" src="<?= APP_ROOT."/asset/".$loggedUser['propic']; ?>"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
					<td>Name</td>
					<td>:</td>
					<td>
						<?php
							if (isset($loggedUser['fname'])) {
								echo $loggedUser['fname']." ";
							}
							if (isset($loggedUser['mname'])) {
								echo $loggedUser['mname']." ";
							}
							if (isset($loggedUser['lname'])) {
								echo $loggedUser['lname'];
							}
						?>
					</td>
				</tr>
				<tr><td colspan="3"><hr/></td></tr>
				<tr>
					<td>Age</td>
					<td>:</td>
					<td> 
						<?php 
						if (isset($loggedUser['age'])) {
							echo $loggedUser['age'];
						}
					 	?> 
					</td>
				</tr>
				<tr><td colspan="3"><hr/></td></tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td> 
						<?php
							if (isset($loggedUser['gender_name'])) {
								echo $loggedUser['gender_name'];
							}
						?>
					</td>
				</tr>
				<tr><td colspan="3"><hr/></td></tr>
				<tr>
					<td>Religion</td>
					<td>:</td>
					<td>
						<?php
							if (isset($loggedUser['religion']['name'])) {
								echo $loggedUser['religion']['name'];
							}
					 	?>
					 </td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>
			<hr>
			<fieldset>
				<legend>Additional information</legend>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>Height</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['height'])) {
									echo $loggedUser['height'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Weight</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['weight'])) {
									echo $loggedUser['weight']." Kg";
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Blood group</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['blood']['bgroup'])) {
									echo $loggedUser['blood']['bgroup'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['email'])) {
									echo $loggedUser['email'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Caste</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['number1'])) {
									echo $loggedUser['number1'];
								}
					 		?>
					 		<br>
					 		<?php
								if (isset($loggedUser['number2'])) {
									echo $loggedUser['number2'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Complexion</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['complexion']['type'])) {
									echo $loggedUser['complexion']['type'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Marital status</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['marital_status']['status'])) {
									echo $loggedUser['marital_status']['status'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Children</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['children'])) {
									echo $loggedUser['children'];
								}
					 		?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Permanent address</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['per_address'])) {
									echo "House: ". $loggedUser['per_address']['per_house'].", Road: ".$loggedUser['per_address']['per_road'].", ".$loggedUser['per_address']['police_station_name'].", ".$loggedUser['per_address']['district_name'].", ".$loggedUser['per_address']['division_name'];
								}
							?>	
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Present address</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['pr_address'])) {
									echo "House: ". $loggedUser['pr_address']['pr_house'].", Road: ".$loggedUser['pr_address']['pr_road'].", Area: ".$loggedUser['pr_address']['pr_area'].", ".$loggedUser['pr_address']['police_station_name'].", ".$loggedUser['pr_address']['district_name'].", ".$loggedUser['pr_address']['division_name'];
								}
							?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Occupation</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['job']['designation'])) {
									echo $loggedUser['job']['designation']." at ";
								}
								if (isset($loggedUser['job']['company'])) {
									echo $loggedUser['job']['company'];
								}
							?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Annual income</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['annual_income']) && $loggedUser['annual_income'] != 0) {
									 echo $loggedUser['annual_income']; 
								}
							?>
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
					<tr>
						<td>Education</td>
						<td>:</td>
						<td>
							<?php
								if (isset($loggedUser['education']['field']) && $loggedUser['education']['field'] != '') {
									echo $loggedUser['education']['field']." from ";
								}
								if (isset($loggedUser['education']['institution']) && $loggedUser['education']['institution'] != '') {
									echo $loggedUser['education']['institution']." in ";
								}
								if (isset($loggedUser['education']['passing_year']) && $loggedUser['education']['passing_year'] != '') {
									echo $loggedUser['education']['passing_year'];
								}
							?>	
						</td>
					</tr>
					<tr><td colspan="3"><hr/></td></tr>
				</table>
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