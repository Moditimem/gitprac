var provinces;
var URL = "http://www.plp.co.za/svc/";
var countrycode = null;

var viewModelProvinces = null;

$(function(){

$('#provinces').bind('pageinit', function(event) {
	getprovinces();
});

//getprovinces();

function getprovinces() {
	
	//var id = getUrlVars()["id"];
	
	countrycode = getQueryStringByName('CountryCode');
	
	$.getJSON(URL + 'get_provinces.php?countrycode='+ countrycode, function(data) {
	
		viewModelProvinces = ko.mapping.fromJS(data);
		console.log(JSON.stringify(ko.toJS(viewModelProvinces)));
		
		ko.attach("viewModelProvinces", viewModelProvinces);
	
		/*$('#province_list li').remove();
		provinces = data.items;
		$.each(provinces, function(index, Province) {
			$('#province_list').append('<li><font face="verdana"><a href="towns.html?prov_id='+ Province.ID + '">' + Province.Province + '</li></font></a>');
		});
		$('#province_list').listview('refresh');*/
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

function getQueryStringByName(name) {
            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regexS = "[\\?&]" + name + "=([^&#]*)";
            var regex = new RegExp(regexS);
            var results = regex.exec(window.location.search);
            if (results == null)
                return "";
            else
                return decodeURIComponent(results[1].replace(/\+/g, " "));
}

});
