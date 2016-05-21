$(document).ready(
	function(){
		$(".hooks").click(function(){
			$.ajax({
				url:'ajax.php',
				type:'post',
				data:{
					thing:$(this).val()
				},
				response:'text',
				success:function(data){
					if(data=="have"){
						alert("This thing already in your basket")
					}
					///else{
						//alert("Firstly log in to site")
					}
				}
			})

		})
		$("#out").click(function(){
			$.ajax({
				url:'ajax2.php',
				type:'post',
				data:{
					a:'a'
				},
				response:'text',
				success:function(data){
					if(data=="yes"){
						document.location.reload()
					}else{
						alert('successfull')
						document.location.reload()
					}
				}
			})

		})

	})