var countries;
var serviceURL = "http://www.plp.co.za/svc/";

var viewModelCoutries = null;


$(function(){

$('#countries').bind('pageinit', function(event) {
	
	getcountries();
});

function getcountries() {
	
	$.getJSON(serviceURL + 'get_countries.php?', function(data) {

		viewModelCoutries = ko.mapping.fromJS(data);
		console.log(JSON.stringify(ko.toJS(viewModelCoutries)));
		
		ko.attach("viewModelCoutries", viewModelCoutries);
		
		//console.log(viewModelCoutries);
		
		/*$('#country_list li').remove();
		provinces = data.items;
		$.each(provinces, function(index, Country) {
			$('#country_list').append('<li><font face="verdana"><a href="provinces.html?countryCode='+ Country.CountryCode + '">' + Country.CountryName + '</li></font></a>');
		});
		$('#country_list').listview('refresh');*/
	});
}
});