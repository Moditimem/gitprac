var promt_question;

$('#action_options').live('pageshow', function(event) {

	get_action_options();
});

function get_action_options() {
	
	var id = getUrlVars()["id"];
	
	$.getJSON(serviceURL + 'get_action_options.php?cat_id='+id, function(data) {
	
	$('#action_option li').remove();
	questions = data.items;
	
		$.each(questions, function(index, Questions) {
			$('#action_option').append('<li><font face="verdana"><a href="prompt_questions.html?id='+ Questions.ID + '">' + Questions.Option + '</font></li></a>');
			});
	});
	$('#action_option').listview('refresh');
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
