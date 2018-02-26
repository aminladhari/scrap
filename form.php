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
  
  						<div class="form-group">
  							 <input type="text" id="link" name="link" placeholder="Paste an URL, Ex http://www.youtube.com/watch?v=-i0qKReU9AM"  class="form-control">
  						</div>
						<div class="form-group">
						  <input type="submit" id ="submit" value="Get URL Info" class="btn btn-primary pull-right">
						</div>
						</form>

						

					</div>	
					<div  id="data">
						
					</div>
					

					  
					</div>

				  
					
			    </div>
		    </div>
	    </div>
	</div>
  <!-- Display  -->
						
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
				url: "get_data.php",
				data: send,
				cache: false,
				success: function(result)
				{
				
				 var json = JSON.parse(result);
					
					var res = "";

						if(json.title)
						{
		                                res += "<p class='text-center'>"+json.title+"</p>";
		                }
		                if(json.description)
		                {
		                                res += "<p class='text-center'>"+json.description+"</p>";
		                }

		                if(json.author)
		                {
		                                res += "<p class='text-center'>"+json.author+"</p>";
		                }

		                
		                if(json.if)
		                {
		                                res += "<p class='text-center'>"+json.if+"</p>";
		                }

                			$('#data').html(res);

			    }
			});
		}
			return false;
		
		});
});

</script>
</html>