$('#page').bind('pageinit', function(event) {
checkCode();
});

function getMenuList() {
	
$('#main_menu').append('<li><a href="#countries" data-transition="slide" "><img src="images/logrequest.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;" ><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px "><font face="Open Sans Regular">LOG A REQUEST</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular" >Quick Request logging</font></p></a></li>');

$('#main_menu').append('<li><a href="#specials" data-transition="slide"><img src="images/specials.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px"><font face="Open Sans Regular">SPECIALS</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular">Discount,voucher and more..</font></p></a></li>');

$('#main_menu').append('<li><a href="#services" data-transition="slide"><img src="images/services.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;" ><p style="font-size: 18px;padding-left: 25px" ><font face="Open Sans Regular">SERVICES</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular">Know your benefits</font></p></a></li>');

$('#main_menu').append('<li><a href="http://www.bluesky.co.ls/article.aspx?news" data-transition="slide"><img src="images/News.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px" ><font face="Open Sans Regular">NEWS</font></p><p style="font-size: 18px;padding-left: 25px;" ></h3><font face="Open Sans Regular">Hot and heppening</font></p></a></li>');

$('#main_menu').append('<li><a href="" data-transition="slide"><img src="images/Profile.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px"><font face="Open Sans Regular">PROFILE</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular">Settings and preferences</font></p></a></li>');

$('#main_menu').append('<li><a href="#callcenter1" data-transition="slide" ><img src="images/contact.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px"><font face="Open Sans Regular">CONTACT CENTER</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular">Speak to a consultant</font></p></a></li>');

$('#main_menu').append('<li><a href="#page1" data-transition="slide" ><img src="images/logout.png" width="75" height="75" style="padding-left: 25px;padding-top: 10px;"><img align="right" src="images/arrow.png" width="15" height="30" style="padding: 25px 25px;"><p style="font-size: 18px;padding-left: 25px"><font face="Open Sans Regular">LOGOUT</font></p><p style="font-size: 18px;padding-left: 25px;"><font face="Open Sans Regular">See you again soon</font></p></a></li>');

		
$('#main_menu').listview('refresh');	
}


function checkActivation() {
	
$('#main_menu').append('<li><h3>Activation Required!</h3><p>Please call our contact center for activation code</p></li>');

$('#main_menu').append('<li>Contact no 011 449 7300 - 24/7</li>');

$('#main_menu').append('<li><a href="tel://0114497300" data-role="button" data-inline="false">Call Now</a></li>');

$('#main_menu').append('<li><label for="activation_code">Activation Code:</label></li>');

$('#main_menu').append('<li><div data-role="fieldcontain"><input type="text" name="activation_code" id="activation_code" value=""  /></div></li>');

$('#main_menu').append('<li><button name="activation_code_btn" id="activation_code_btn">Activate Now</button></li>');

$('#main_menu').append('<li><a href="http://localhost/bank/signin_signup/index.php?route=users/logout" data-role="button" data-inline="false">Cancel</a></li>');

		
$('#main_menu').listview('refresh');	
}


function checkCode() {
	var usercode = localStorage.getItem("act_code");
	var useremail = localStorage.getItem("act_email");
	var hold_email = localStorage.getItem("hold_email");
	
	//if(usercode== "Active" && useremail == hold_email){
	if(usercode== "Active"){
		getMenuList();
	}else{

		getMenuList();
		//checkActivation();
	}
}