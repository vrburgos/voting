
var baseurl = 'http://localhost/voting/';
var ctx = '';

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
			$('#results').append('<div class=" panel panel-default">'+
				'<div class="panel-heading">'+this.name+'</div>'+
				'<div class="panel-body" id="committee'+this.idCommittee+'"></div>'+
					
					'<table class="table"><thead><tr>'+
        			'<th>Candidate</th>'+
        			'<th>Votes</th>'+
        			'<th>%</th>'+
      				'</tr>' +
    				'</thead>'+
    				'<tbody id="data'+this.idCommittee+'">'+
      
    				'</tbody>'+
  					'</table>'+
				'</div>'
			);

			getChart(this.idCommittee);
		});

		
	});
}


function getChart(_committee)
{

	var _url = baseurl + 'ajaxcontroller/getChartCommittee'
	var _country=$('#country').val(); 
	
	$.ajax({
		type: "POST",
        url: _url,
        data: {committee:_committee, country:_country},
        dataType: "json"
	})
	.done(function(response){

			$('#data'+_committee).html('');
			
			$(response).each(function(){
				$('#data'+_committee).append('<tr>'+
       			'<td>'+this.name+'</td>'+
        		'<td>'+this.quant+'</td>'+
        		'<td>'+(accounting.formatNumber( this.quant/this.total * 100)) +'%</td>')
			});

			
	});


}