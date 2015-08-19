$('#Page').live('pageshow', function(event) {
	getService();
});

function getService() {
	
	var id = getUrlVars()["id"];

	if (id=="car_dealer") {
	$('#serviceBody').append('<h2>Car Dealer</h2>');
	$('#serviceBody').append('Sometimes the unexpected happens at home a window gets broken, the geyser bursts, or you 	loose');
	$('#serviceBody').append(' your keys and are locked out of your house. Our Home Emergency service provides Blue Sky members with');
	$('#serviceBody').append(' complete peace of mind that help is never far away, regardless of the time of day or night. One call to our Home');
	$('#serviceBody').append(' Emergency agents will see a professional locksmith, plumber, glazier, electrician, builder,');
	$('#serviceBody').append(' or whichever service professional you need, sent out to help you. Costs will be reasonable and for your account.');
	$('#serviceBody').append(' To see more click <a href=http://www.bluesky.co.ls/cardealer.aspx>here</a>');
	}
	

	if (id=="assistant") {
	
	$('#serviceBody').append('<h2>Assistant</h2>');
	$('#serviceBody').append('We all lead busy lives and most of us, at one time or another, have wished we had a');
	$('#serviceBody').append(' personal assistant to take care of all those little jobs that take up our precious time.');
	$('#serviceBody').append(' Well now you can have one, on call 24/7, with Blue Sky&acute;spersonal information,');
	$('#serviceBody').append(' bookings and direction service. Whether you need to buy a birthday present for someone,');
	$('#serviceBody').append(' or require a handyman to come and fix something in your home, your Blue Sky personal');
	$('#serviceBody').append(' assistant is there to help. They will find whatever product or service you&acute;re');
	$('#serviceBody').append(' looking for and do their best to negotiate a better price &minus; saving you money as ');
	$('#serviceBody').append(' well as time. Need directions? One call to your Blue Sky assistant will ensure you get');
	$('#serviceBody').append(' to where you want to go. Want to know the cheapest and quickest way to get to Johannesburg.');
	$('#serviceBody').append(' or Mozambique? What the weather will be like when you get there, what the local time is in');
	$('#serviceBody').append(' Dubai? Your Blue Sky PA is on-hand to provide you with all the answers to your questions.');
}

	if (id=="tutor") {
	
	$('#serviceBody').append('<h2>Tutor</h2>');
	$('#serviceBody').append('It isn&acute;t always easy being the teacher when your children need help with');
	$('#serviceBody').append(' their assignments. With Blue Sky&acute;s Tutor service you don&acute;t have to');
	$('#serviceBody').append(' be. We have a panel of qualified teachers waiting to help your children with their');
	$('#serviceBody').append(' studies and projects. They are available from 18:00-21:00 Monday to Thursday (excluding');
	$('#serviceBody').append(' school and public holidays). Our teachers also have great study tips to help your');
	$('#serviceBody').append(' children learn more effectively, along with career advice when they&acute;re ready');
	$('#serviceBody').append(' to start looking towards the future. ');
}

	if (id=="home_emeg") {
	
	$('#serviceBody').append('<h2>Home Emergency</h2>');
	$('#serviceBody').append('Sometimes the unexpected happens at home &minus; a window gets broken, the geyser');
	$('#serviceBody').append(' bursts, or you lose your keys and are locked out of your house. Our Home Emergency');
	$('#serviceBody').append(' service provides Blue Sky members with complete peace of mind that help is never far');
	$('#serviceBody').append(' away, regardless of the time of day or night. One call to our Home Emergency agents');
	$('#serviceBody').append(' will see a professional locksmith, plumber, glazier, electrician, builder, or whichever');
	$('#serviceBody').append(' service professional you need, sent out to help you. Costs will be reasonable and for your account.');
}


	if (id=="travel") {
	
	$('#serviceBody').append('<h2>Travel</h2>');
	$('#serviceBody').append('Do you long to stroll along white sandy beaches? Maybe you&acute;re happier hiking');
	$('#serviceBody').append(' through the bushveld on a safari adventure. Or perhaps you dream of visiting far');
	$('#serviceBody').append(' flung tropical islands. Wherever you want to go, let Blue Sky turn your holiday');
	$('#serviceBody').append(' dreams into a reality. Our team of knowledgeable travel consultants will take care');
	$('#serviceBody').append(' of everything for you. They will search for accommodation that fits your budget, find');
	$('#serviceBody').append(' child-friendly venues, secure tour packages at great discounts, arrange car hire and');
	$('#serviceBody').append(' book your flights. All you have to do is decide where you&acute;d like to go! ');
}


	if (id=="classified") {
	
	$('#serviceBody').append('<h2>Classified</h2>');
	$('#serviceBody').append('Buy something, sell something or even swap something with Blue Sky classifieds &minus;');
	$('#serviceBody').append(' our internet&minus;based classified advertisement service. Just visit www.bluesky.co.ls');
	$('#serviceBody').append(' to browse the classifieds section or place an advertisement. You can call us with the');
	$('#serviceBody').append(' details of your advertisement, if you prefer, and we will post it onto the website for');
	$('#serviceBody').append(' you. Your ad will automatically run for 21 days and should your item get snapped up,');
	$('#serviceBody').append(' or you change your mind, you can call us at any time and we&acute;ll remove your ad from our listings.');
}


	if (id=="shopper") {
	
	$('#serviceBody').append('<h2>Shopper</h2>');
	$('#serviceBody').append('Blue Sky Shopper is a comprehensive telephone information and procurement service');
	$('#serviceBody').append(' giving you the opportunity to request the sourcing of any product or service, for');
	$('#serviceBody').append(' example: household appliances, electronic goods, gift vouchers, jewellery, flowers,');
	$('#serviceBody').append(' toys, pool services, renovating services, builders to name a few. We will source the');
	$('#serviceBody').append(' product or service in an area most convenient for you, negotiate where possible a better');
	$('#serviceBody').append(' price on your behalf and get back to you within 24 hours with the details of your request.');
	
}


	if (id=="connect") {
	
	$('#serviceBody').append('<h2>Connect</h2>');
	$('#serviceBody').append('With Blue Sky we can find you the best cellphone and internet connections,');
	$('#serviceBody').append(' latest handsets to suit your needs. Blue Sky will also make sure you have all the');
	$('#serviceBody').append(' information you need to make an informed Internet connection choice that best suits your web surfing needs');
}


	if (id=="funeral") {
	
	$('#serviceBody').append('<h2>Funeral Assist</h2>');
	$('#serviceBody').append('Dealing with the grief of losing a loved one is difficult enough without having');
	$('#serviceBody').append(' to worry about making all the decisions regarding funeral arrangements too. As');
	$('#serviceBody').append(' a valued Blue Sky member, our caring Funeral Assist agents will take some of that');
	$('#serviceBody').append(' burden off your shoulders and help organise everything from the funeral venue,');
	$('#serviceBody').append(' burial arrangements, catering requirements, or anything else you’d like them');
	$('#serviceBody').append(' to deal with on your behalf.');
}


	if (id=="medical") {
	
	$('#serviceBody').append('<h2>Medical Matters</h2>');
	$('#serviceBody').append('Not sure what those medical symptoms might be? Unsure how to treat an illness?');
	$('#serviceBody').append(' Want to be more informed about various diseases and other medical matters? As a');
	$('#serviceBody').append(' Blue Sky member, you have instant telephonic access to medical advice from our');
	$('#serviceBody').append(' qualified team of nurses. They will answer your health and wellness questions,');
	$('#serviceBody').append(' provide you with information and offer you advice if you need it. It&acute;s just');
	$('#serviceBody').append(' like having your own nurse in the house!');
}


	if (id=="finance") {
	
	$('#serviceBody').append('<h2>Finance Assist</h2>');
	$('#serviceBody').append('Ever wished you had a personal financial advisor to give you advice on handling');
	$('#serviceBody').append(' your budget and debt, to make the most of your money? Your wish is granted! As a');
	$('#serviceBody').append(' Blue Sky member you have an entire team of financial professionals on stand-by');
	$('#serviceBody').append(' waiting to take your call and help whip your finances into shape.');
}


	if (id=="law") {
	
	$('#serviceBody').append('<h2>Legal Assist</h2>');
	$('#serviceBody').append('We all need a legal opinion from time to time. With Blue Sky you have access');
	$('#serviceBody').append(' to a panel of experienced attorneys who will give you free advice, over the phone,');
	$('#serviceBody').append(' on issues such as debt, divorce or child custody. And if you just need help with');
	$('#serviceBody').append(' standard legal documents, the legal experts can help with those too.');
}




$('#serviceBody').listview('refresh');
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
