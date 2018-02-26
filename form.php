<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../url/css/style.css">
	<title>test preview</title>

</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">
            	<div class="panel panel-default">
                	<div class="panel-heading">PREVIEW</div>

				 	<div class="panel-body">

						<form id="myform">
  
						  <input type="text" id="link" name="link" placeholder="Enter the valid URL, Eg:http://www.youtube.com/watch?v=-i0qKReU9AM"  class="form-control">
						  <input type="submit" id ="submit" value="Get URL Info" class="btn btn-primary pull-right">

						</form>
					</div>	

					<div class="col-md-8 col-md-offset-2">
					<textarea id="data" name="data" > </textarea>

					  
					</div>
			    </div>
		    </div>
	    </div>
	</div>

</body>

<script src="js/jquery.js">  
</script>



<script type="text/javascript">
$(document).ready(function(){
	$("#submit").click(function(){
		send={};
		var link = $("#link").val();
		send.link=link;
		if(link=='')
		{
			alert("Please paste a link");
		}

		else
		{
		
			$.ajax({
				type: "POST",
				url: "youtube.php",
				data: send,
				cache: false,
				success: function(result){
					console.log(result);
					$("#data").val(result);

					console.log(link);
				}
			});
		}
			return false;
		
		});
});

</script>
</html>