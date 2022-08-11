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
                  <li><a class="color_1" href=<?= APP_ROOT; ?>>Home</a></li>                  
				  <li><a class="color_1"href=<?= APP_ROOT."/?account_login"; ?>>Login</a></li>
				  <li><a class="color_1 active_1"href=<?= APP_ROOT."/?account_registration"; ?>>Registration</a></li>
				  <li><a class="color_1" href="https://api.whatsapp.com/send/?phone=918149004090&text=Hi&type=phone_number&app_absent=0" target="_blank">Contact Us</a></li>
				  
				  <li class="dropdown">
					<a class="dropdown-toggle color_1" data-toggle="dropdown" href="services.html" aria-expanded="false">More
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="about.html">About Us</a></li>
					  <li><a href="services.html">Services</a></li>
					  
					</ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
   </div>
  </div>
 </div>
</section>
<table width="60%" align="center" cellspacing="0" cellpadding="5" border="0">
    <!-- <tr>
        <td valign="middle" height="70">
			<table width="100%">
				<tr>
          			<td>
						<a href=<?= APP_ROOT."/"; ?>>
							<img height="48" src="<?= APP_ROOT."/asset/defaultpic/ring.png"; ?>">
						</a>
					</td>
					<td align="right">
						<a href=<?= APP_ROOT."/"; ?>>Home</a>&nbsp;|
						<a href=<?= APP_ROOT."/?account_login"; ?>>Login</a>&nbsp;|
						<a href=<?= APP_ROOT."/?account_registration";?>>Registration</a>
					</td>
				</tr>
			</table>
        </td>
    </tr> -->
	<br>
    <tr>
        <td width="60%">
			<fieldset>
			    <legend><b>REGISTRATION</b></legend>
				<form method="POST">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>First name :</td>
							
							<td><input name="fname" type="text"></td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Middle name :</td>
							
							<td><input name="mname" type="text"></td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Last name :</td>
							
							<td><input name="lname" type="text"></td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Username :</td>
							
							<td><input name="uname" type="text"></td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td valign="top">Date of Birth :</td>
							
							<td>
								<input name="dob" type="date">
								<br/>
								<font size="2"><i>(dd/mm/yyyy)</i></font>
							</td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Blood group :</td>
							
							<td>
								<select name="blood">
									<?php
										foreach ($bloodList as $blood) {
											echo "<option value=". $blood['id'] .">".$blood['bgroup'];
										}
									?>
								</select>
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Gender :</td>
							
							<td>
								<?php
									foreach ($genderList as $gender) {
										echo "<input name='gender' type='radio' value=". $gender['id'] ." checked>".$gender['gender'];
									}

								?>
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Email :</td>
							
							<td>
								<input name="email" type="text">
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Religion :</td>
							
							<td>
								<select name="religion">
									<?php
										foreach ($religionList as $religion) {
											echo "<option value=". $religion['id'] .">".$religion['name'];
										}
									?>
								</select>
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Caste :</td>
							
							<td>
								<input name="contact" type="text">
							</td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Password :</td>
							
							<td><input name="password" type="password"></td>
							<td></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Confirm Password :</td>
							
							<td><input name="confirmPassword" type="password"></td>
							<td></td>
						</tr>
					</table>
					<hr/>
					<input type="submit" value="Submit">
					<input type="reset">
				</form>
				<?php
					if (isset($errorMsg)) {
						echo $errorMsg;
					}
				?>
			</fieldset>
		</td>
		<td>
			<div><br><center><b>नियम आणि अटी</b></center>
			<br><br>१. आमच्या विवाह कंपनी मध्ये सर्व जाती धर्माचे विवाह इच्छुक वधू वराची नाव नोंदणी होते. <br><br>

२. नाव नोंदणी नंतर स्थळाचा बायोडाटा एपवर अपलोड केला जातो आणि आपणास प्रोफाइल आयडी दिला जातो.<br><br>

३. आपणास जुळत असलेल्या स्थळाची माहिती अपडेट द्वारे आपणास दिली जाते.<br><br>

४. नाव नोंदणी करणार्याने आपल्या स्थळाची माहिती खरी द्यावी, हि त्याची नैतिक

व कायदेशीर जबाबदारी आहे, यात काही असत्य असल्यास त्याची सर्व कायदेशीर

जबाबदारी नाव नोंदणी करणार्याची राहील.<br><br>

५. सभासदाने पसंत असलेल्या स्थळाशी संपर्क स्वतः करावा, व स्थळाच्या माहितीची खातरजमा करूनच घ्यावी व नंतरच भावी आयुष्याचा निर्णय घ्यावा.<br><br> ६. संस्थेतर्फे किंवा स्वताच्या प्रयत्नाने जुळून आल्यास त्याची माहिती विनाविलंब नजीकच्या शाखेस कळवावी.<br><br>

७. नाव नोंदणी नंतर विवाह जमेलच किंवा अमुक दिवसात जमेल, याची हमी आम्ही देत नाही तसेच कोणत्याही सबबीवर एकदा भरलेली फी परत केली जाणार नाही.<br><br>

८. वधू वर केंद्रातील माहितीचा अगर फोटोचा कोनीही गैरवापर करू नये, केल्यास

त्यांचे सभासदस्यत्व कोणतीही पूर्वसूचना न देता रद्द केले जाईल किंवा आयडी 3

महिन्यांसाठी ब्लॉक केला जाईल.<br><br>

९. विवाह जुळलेनंतर भविष्यात काही प्रश्न उपस्थित झाल्यास संस्था, संस्थेची

कोणतीही शाखा अगर संचालक जबाबदार राहणार नाही.<br><br>

१०. नाव नोंदणी नंतर सभासदाने कोणत्याही शाखेशी अगर हेड ओफिसशी माझे पुढे काय झाले, म्हणून सतत फोन करून त्रास देऊ नये, कारण तुमच्या इतकेच इतर हि सभासद संस्थेस तितकेच महत्वाचे आहेत तुम्हाला आम्ही नवीन स्थळाबद्दल माहिती अपडेट करत राहू.<br><br>

११. समोरील स्थळाला किंवा शाखेला अगर हेड ऑफिस ला सकाळी ९ ते रात्री ८ या वेळेतच कॉल करावा.<br><br>

१२. आमच्या विवाह कंपनी मध्ये आपणास जितकी स्थळे उपलब्ध आहेत, ते दाखविण्याचा आम्ही पुर्णपणे प्रयत्न करू.<br><br>

१३. वरील प्रमाणे सर्व अटी मान्य असणार्यांनीच नाव नोंद करावे.<br><br>

 </div>
		</td>
    </tr>
	
    <tr>
	<td align="left">
	<br>
        &copy; 2022 - <?php $date = date("Y"); echo date('Y', strtotime("+36 months $date"));?> spruhamatrimony.com - The Maharashtra's No.1 Matchmaking Service™ 
        <td align="right">Passionately created by <a href="https://in.linkedin.com/in/abhishekchougule">Abhishek Chougule </a><i class="fa fa-heart-o" aria-hidden="true"></i>
            
        </td>
    </tr>
</table>
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