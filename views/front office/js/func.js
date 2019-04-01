$(document).ready(function(){
	//alert('teste');
	$('#like').click(function(){
		var id_prod=$(this).attr('class');
	    alert( id_prod);
		//show like permet d'afficher les jaime
		$.post('show_like.php',{id_prod:id_prod},function(data){
			if(data=="ok")
			{ 
				add_like(id_prod);
				$('#feedback').text("Merci d'avoir aime").css("color","green");
			}else{
				$('#feedback').text("Vous avez deja aime ce plat").css("color","red");
				
			
			}
			
		});
		
	});
	function add_like(id_prod)
	{

		$.post('add_like.php',{id_prod:id_prod},function(data){
			alert(data);
			$('#id'+id_prod+'').text(data);

		});
	}
});