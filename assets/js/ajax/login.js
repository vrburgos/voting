function showCountry()
{


	$.ajax({
		type: "POST",
        url: _url,
        data: {society:_society},
        dataType: "json"
	})
	.done(function(response)
	{
		$('#cmbClient').append('<option>Seleccione..</option>');
		$(response).each(function () 
		{
			$('#cmbClient').append('<option value="'+this.id+'">'+this.nombre+'</option>');
		});
	});
}