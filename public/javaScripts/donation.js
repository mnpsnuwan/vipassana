$(function(){
	$(".submit").click(function(){

		//var donationId = $("#donation_id").val();
		var necessity = $("#necessity").val();
		var amount = $("#amount").val();
		var message = $("#message").val();
		var dataString = 'necessity=' necessity + '&amount=' + amount + '&message=' + message;

		if(amount==''){
			alert('fill the amout or quntity feild');
		}else{
			$.ajax({
				type: "POST",
				url: "../donation_necesity_backup_php.php",
				data: dataString,
				cache: false,
				success: function(html){
					document.getElementById('necessity').value='';
					document.getElementById('amount').value='';
					document.getElementById('message').value='';
				}
			});
		}
		return false;
	});
});