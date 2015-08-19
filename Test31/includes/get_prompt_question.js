
var promt_question;

 
$('#prompt_question').live('pageshow', function(event) {

	getpromt_question();
});


function getpromt_question() {
	var q = 0;
	var t = 0;
		
	var id = getUrlVars()["id"];
	localStorage.setItem("action_option", id)
	
	$.getJSON(serviceURL + 'get_prompt_questions.php?cat_id='+id, function(data) {
	
	$('#prompt_question li').remove();
	questions = data.items;
			$.each(questions, function(index, Questions) {
					q = q + 1;
					qid = Questions.ID;
					if(q==1){
					localStorage.setItem("q1", Questions.ID)
					}
					if(q==2){
					localStorage.setItem("q2", Questions.ID)
					}
					if(q==3){
					localStorage.setItem("q3", Questions.ID)
					}
					if(q==4){
					localStorage.setItem("q4", Questions.ID)
					}
					if(q==5){
					localStorage.setItem("q5", Questions.ID)
					}
					if(q==6){
					localStorage.setItem("q6", Questions.ID)
					}
					if(q==7){
					localStorage.setItem("q7", Questions.ID)
					}
					if(q==8){
					localStorage.setItem("q8", Questions.ID)
					}
					if(q==9){
					localStorage.setItem("q9", Questions.ID)
					}
					if(q==10){
					localStorage.setItem("q10", Questions.ID)
					}
					if(q==11){
					localStorage.setItem("q11", Questions.ID)
					}
					if(q==12){
					localStorage.setItem("q12", Questions.ID)
					}
					if(q==13){
					localStorage.setItem("q13", Questions.ID)
					}
					if(q==14){
					localStorage.setItem("q14", Questions.ID)
					}
					if(q==15){
					localStorage.setItem("q15", Questions.ID)
					}
					if(q==16){
					localStorage.setItem("q16", Questions.ID)
					}
					if(q==17){
					localStorage.setItem("q17", Questions.ID)
					}
					if(q==18){
					localStorage.setItem("q18", Questions.ID)
					}
					if(q==19){
					localStorage.setItem("q19", Questions.ID)
					}
					if(q==20){
					localStorage.setItem("q20", Questions.ID)
					}
					if (Questions.Type=="Text") {
					t = 1;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '">' + 
					Questions.Text + '</label><input type="text" name="' + q + ';' + t + '" id="' + qid + '" value=""  /> </div></li>');	
					
					}
					if (Questions.Type=="text") {
					t = 1;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '">' + 
					Questions.Text + '</label><input type="text" name="' + q + ';' + t + '" id="' + qid + '" value=""  /> </div></li>');	
					}
					if (Questions.Type=="Yes/No") {
					t = 2;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '" class="select">' +
					Questions.Text + '</label> <select name="selectmenu" id="' + qid + '"> <option value="Yes">Yes</option>' +
					'<option value="No">No</option> </select></li>');	
					}
					if (Questions.Type=="yes/no") {
					t = 2;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '" class="select">' +
					Questions.Text + '</label> <select name="selectmenu" id="' + qid + '"> <option value="Yes">Yes</option>' +
					'<option value="No">No</option> </select></li>');	
					}
					if (Questions.Type=="Options"){
						t = 3;
						z = Questions.Options;
						x = z.split(';');
						y = x.length;
						
						if(y==2){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' </select> </div></li>');
							}
						if(y==3){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' </select> </div></li>');
							}
						if(y==4){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' </select> </div></li>');
							}
						if(y==5){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' </select> </div></li>');
							}
						if(y==6){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' <option value="' + x[5] +'">' + x[5] +'</option>' +
							' </select> </div></li>');
							}
						if(y==7){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' <option value="' + x[5] +'">' + x[5] +'</option>' +
							' <option value="' + x[6] +'">' + x[6] +'</option>' +
							' </select> </div></li>');
							}
						if(y==8){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' <option value="' + x[5] +'">' + x[5] +'</option>' +
							' <option value="' + x[6] +'">' + x[6] +'</option>' +
							' <option value="' + x[7] +'">' + x[7] +'</option>' +
							' </select> </div></li>');
							}
						if(y==9){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' <option value="' + x[5] +'">' + x[5] +'</option>' +
							' <option value="' + x[6] +'">' + x[6] +'</option>' +
							' <option value="' + x[7] +'">' + x[7] +'</option>' +
							' <option value="' + x[8] +'">' + x[8] +'</option>' +
							' </select> </div></li>');
							}
						if(y==10){
							$('#prompt_question').append('<li><div data-role="fieldcontain">' +
							'<label for="' + q + ';' + t + ';' + qid + '" class="select">' +
							Questions.Text + '</label><select name="selectmenu" id="' + qid + '">' +
							' <option value="' + x[0] +'">' + x[0] +'</option>' +
							' <option value="' + x[1] +'">' + x[1] +'</option>' +
							' <option value="' + x[2] +'">' + x[2] +'</option>' +
							' <option value="' + x[3] +'">' + x[3] +'</option>' +
							' <option value="' + x[4] +'">' + x[4] +'</option>' +
							' <option value="' + x[5] +'">' + x[5] +'</option>' +
							' <option value="' + x[6] +'">' + x[6] +'</option>' +
							' <option value="' + x[7] +'">' + x[7] +'</option>' +
							' <option value="' + x[8] +'">' + x[8] +'</option>' +
							' <option value="' + x[9] +'">' + x[9] +'</option>' +
							' </select> </div></li>');
							}
					}
					if (Questions.Type=="Number") {
					t = 4;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '">' + 
					Questions.Text + '</label><input type="text" name="textinput" id="' + qid + '" value=""  /> </div></li>');	
					}
					if (Questions.Type=="number") {
					t = 4;
					$('#prompt_question').append('<li><div data-role="fieldcontain"><label for="' + q + ';' + t + ';' + qid + '">' + 
					Questions.Text + '</label><input type="text" name="textinput" id="' + qid + '" value=""  /> </div></li>');	
					}
				
			});
		
	});
	
	$('#prompt_question').listview('refresh');
	
}

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

          $('#prompt_questions').live('pagecreate', function() {
		  
            $('#send_data').click(function() {

			var action_option = localStorage.getItem("action_option");
			var fk_TelesaveID = localStorage.getItem("fk_TelesaveID");
			var town = localStorage.getItem("town");
		
		function wl(){
			alert("Your request has been logged successfully");
			getMenuList()
		}

		
		
		$.post(serviceURL + 'log_request.php',{
		nu_fk_TelesaveID: fk_TelesaveID,
		nu_action_option: action_option,
		nu_town: town,
		success: wl,
		});

			
            });
			
  			});

