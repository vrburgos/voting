
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
		$('#country').append('<option>Select Country</option>');
		$(response).each(function () 
		{
			$('#country').append('<option value="'+this.idCountry+'">'+this.name+'</option>');
		});
	});
}

function getCommittees()
{
	$('#committess').html('');

	var _url = baseurl + 'ajaxcontroller/getCommitteesOpt'
	var _country=$('#country').val(); 

	$.ajax({
		type: "POST",
        url: _url,
        data: {country:_country},
        dataType: "json"
	})
	.done(function(response)
	{
		
		$(response).each(function () 
		{
			$('#committee').append('<div class="panel panel-default">'+
				'<div class="panel-heading">'+this.name+'</div>'+
				'<div class="panel-body" id="committee'+this.idCommittee+'"></div>'+

				'</div>'
			);

			getCandidates(this.idCommittee);
		});

		
	});
}