var towns;

$('#towns').live('pageshow', function(event) {
	
	get_towns();
});

function get_towns() {
	
	var id = getUrlVars()["id"];
	
	$.getJSON(serviceURL + 'get_towns.php?prov_id='+id, function(data) {
	
	$('#town_list li').remove();
	towns = data.items;
	
		$.each(towns, function(index, town) {
			$('#town_list').append('<li><a href="categories.html?id='+ town.ID + '">' + town.Area + '</li></a>');
			});
	});
	$('#town_list').listview('refresh');
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
