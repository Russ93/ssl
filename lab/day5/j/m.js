$('document').ready(function(){
	$('#city').keyup(function(){
		$.ajax({
			url: 'p/cityresponse.php',
			type: 'get',
			data: {
				cityget: $(this).val()
			},
			dataType: 'json',
			success: function(response){
				var strang = ''
				var arr = response
				for (var i in arr){
					var obj = arr[i]
					strang = strang+"<span>"+obj.city+", "+obj.region+"</span><br />"
				}
				$('#cityresponse').html(strang)
			}//success
		})//.AJAX
	})// keyup
})// Document