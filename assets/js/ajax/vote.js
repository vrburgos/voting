var baseurl = 'http://localhost/voting/';

$( document ).ready(function() {
    	getCommiteess();	
 });

function getCommiteess()
{
	$('#committess').html('');

	var _url = baseurl + 'ajaxcontroller/getCommittees'


	$.ajax({
		type: "POST",
        url: _url,
        dataType: "json"
	})
	.done(function(response)
	{
		
		$(response).each(function () 
		{
			$('#committess').append('<div class="panel panel-default">'+
				'<div class="panel-heading">'+this.name+'</div>'+
				'<div class="panel-body" id="committee'+this.idCommittee+'"></div>'+

				'</div>'
			);

			getCandidates(this.idCommittee);
		});

		
	});
}

function getCandidates(_committee)
{
	var _url = baseurl + 'ajaxcontroller/getCandidates'
	
	$.ajax({
		type: "POST",
        url: _url,
        data: {committee:_committee},
        dataType: "json"
	})
	.done(function(response){

			$(response).each(function(){
				//alert( '#committee'+this.idcommittee);

				$('#committee'+this.idcommittee).append('<div class="col-md-3">'+
						
						'<div class="form-group">'+
							'<label>Candidate</label>:' +this.name + ' ' +this.surnames +
							
							'<br><button class="btn btn-success" onclick="vote('+this.idcandidate+', '+this.idcommittee+')">Vote</button>'+
						'</div>'+
						
					'</div>');
			});

	});


}

function vote(_candidate, _committee)
{
	var _url = baseurl + 'ajaxcontroller/verifyVote';

	$.ajax({
		type: "POST",
        url: _url,
        data: {committee:_committee},
        dataType: "json"
	})
	.done(function(response){
		if(response.exists=='false')
		{
			var _url2 = baseurl + 'ajaxcontroller/vote';
			$.ajax({
				type: "POST",
				url: _url2,
				data: {candidate:_candidate ,committee:_committee},
				dataType: "json"
			})
			.done(function(response){
				$.notify({
					message: 'Your vote has been saved' 
				},
				{
					type: 'success'
				});	

			});

			
		}
		else
		{
			$.notify({
				message: 'You cant vote twice' 
			},
			{
				type: 'danger'
			});	
		}

		

		

	});

}

