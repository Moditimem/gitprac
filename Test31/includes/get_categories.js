var categories;

$('#log_request').live('pageshow', function(event) {
	var id = getUrlVars()["id"];
	localStorage.setItem("town", id)
	getCategories();
});

function getCategories() {

	var cat_id = 143;
	$.getJSON(serviceURL + 'get_categories.php?cat_id='+cat_id, function(data) {
	
		$('#categories li').remove();
		categories = data.items;
		$.each(categories, function(index, Category) {
			$('#categories').append('<li><font face="verdana"><a href="action_options.html?id='+ Category.ID + '">' + Category.Category + '</font></li></a>');
		});
		$('#categories').listview('refresh');
	});
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
