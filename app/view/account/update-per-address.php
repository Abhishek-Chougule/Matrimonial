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
        	<form method="POST">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td rowspan="7">
							<img width="128" src="<?= APP_ROOT."/asset/".$loggedUser['propic']; ?>"/>
						</td>
					</tr>
				</table>
				<fieldset>
					<legend>PERMANENT ADDRESS</legend>
					<table cellpadding="0" cellspacing="0">
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							
							<td>
								House: <input type="text" name="per_house" value=
								<?php
									if (isset($loggedUser['per_address']['per_house'])) {
										echo $loggedUser['per_address']['per_house'];
									}
								?>><br><br>
								Road: <input type="text" name="per_road" value=
									<?php
										if (isset($loggedUser['per_address']['per_road'])) {
											echo $loggedUser['per_address']['per_road']; 
										}
									?>><br><br>
								Area: <input type="textarea" name="per_area" value=
									<?php
										if (isset($loggedUser['per_address']['per_area'])) {
											echo $loggedUser['per_address']['per_area'];
										}
									?>><br><br>
								Police station: 
								<select name='per_police_station'>
									<?php
										if (!isset($loggedUser['per_address']['police_station_id'])) {
											echo "<option value= null>-</option>";
										}
										foreach ($policeStationList as $policeStation) {
											if (isset($loggedUser['per_address']['per_police_station'])) {
												if ($policeStation['id']==$loggedUser['per_address']['per_police_station']) {
													echo "<option value=".$policeStation['id']." selected> ".$policeStation['name']."</option>";
												}else{
													echo "<option value=".$policeStation['id']."> ".$policeStation['name']."</option>";
												}
											}
											else{
												echo "<option value=".$policeStation['id']."> ".$policeStation['name']."</option>";
											}
										}
									?>
								</select><br><br>
								District: 
								<select name='per_district'>
									<?php
										if (!isset($loggedUser['per_address']['district_id'])) {
											echo "<option value= null>-</option>";
										}
										foreach ($districtList as $district) {
											if (isset($loggedUser['per_address']['district_id'])) {
												if ($district['id']==$loggedUser['per_address']['district_id']) {
													echo "<option value=".$district['id']." selected> ".$district['name']."</option>";
												}else{
													echo "<option value=".$district['id']."> ".$district['name']."</option>";
												}
											}
											else{
												echo "<option value=".$district['id']."> ".$district['name']."</option>";
											}
										}
									?>
								</select><br><br>
								Division:
								<select name='per_division'>
									<?php
										if (!isset($loggedUser['per_address']['division_id'])) {
											echo "<option value= null>-</option>";
										}
										foreach ($divisionList as $division) {
											if (isset($loggedUser['per_address']['division_id'])) {
												if ($division['id']==$loggedUser['per_address']['division_id']) {
													echo "<option value=".$division['id']." selected> ".$division['name']."</option>";
												}else{
													echo "<option value=".$division['id']."> ".$division['name']."</option>";
												}
											}
											else{
												echo "<option value=".$division['id']."> ".$division['name']."</option>";
											}
										}
									?>
								</select><br><br>
							</td>
						</tr>
					</table>
				</fieldset>
				<input type="submit" value="Update"><br><br>
				<?php
					if (isset($errorMsg)) {
						echo $errorMsg;
					}
				?>
			</form>
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