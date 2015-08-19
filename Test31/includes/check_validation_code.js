var serviceURL = "http://www.plp.co.za/svc/";

$(document).ready(function () {

    $('#activation_code_btn').click(function () {
	
		var act_code = document.getElementById("activation_code").value;
			if(act_code==""){
			alert("Please type the activation code and try again");
			}else{
			
		$.getJSON(serviceURL + 'check_activation_code.php?id='+act_code, check_act_code);	
		}
	});
	
});

function check_act_code(data) {
		var hold_code;
		var hold_act_date;
		var act_code = document.getElementById("activation_code").value;
		ActCode = data.items;
	
		$.each(ActCode, function(index, ActCde) {
			hold_code = ActCde.fk_TelesaveID;
			hold_act_date = ActCde.Date_Redeemed;
			
			});
		switch(true){
		case(hold_code>0 && (hold_act_date==null || hold_act_date==NULL)):
		
		function wl(){
		var usercode = "Active";
			localStorage.setItem("usercode", usercode);
			localStorage.setItem("fk_TelesaveID", hold_code);
			$('#main_menu li').remove();
			getMenuList();
		}
		var base64 = act_code; 
		$.post(serviceURL + 'update_activation_code.php',{
		basevalue: base64,
		success: wl,
		});
		break;
			
			default:
			alert("invalid activation code");
			break;
			}
		
		
}
