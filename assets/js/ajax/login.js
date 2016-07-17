var baseurl = 'http://localhost/voting/';

$( document ).ready(function() {
    showCountry();
});


function showCountry()
{


	var _url = baseurl + 'ajaxcontroller/countrylist'
	$.ajax({
		type: "POST",
        url: _url,
        dataType: "json"
	})
	.done(function(response)
	{
		$('#sel1').append('<option>Select Country</option>');
		$(response).each(function () 
		{
			$('#sel1').append('<option value="'+this.idCountry+'">'+this.name+'</option>');
		});
	});
}