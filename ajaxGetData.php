<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX Get Data</title>
	<script src="jquery-3.5.1.min.js"></script>
	<script>
		$(function(){
			$('button').click(function(){
				$.ajax({
					url: 'myData.php',
					success : function(data){
						$('#content').html(data)
					}
				})				
			})
		})
	</script>
</head>
<body>
	<button>Load Data !</button>
	<hr>
	<div id="content"></div>
</body>
</html>