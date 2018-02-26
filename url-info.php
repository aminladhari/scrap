<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <style>
                #searchForm input[type='text']{width:325px;height:25px;padding:0 5px;outline:none;}
                #searchForm input[type='submit']{padding:7px 14px;background-color:#4b48fd;color:#fff;border:none;cursor:pointer;outline:none;}
                .urlInfo-container{width:450px;border:1px solid #eee;margin:10px 0;}
                .urlInfo-container .title{font-size:14px;font-weight:bold;margin:10px; 0;}
                .urlInfo-container .sub-title{font-size:12px;margin:10px; 0;line-height:18px;}
                .urlInfo-container img{width:180px;height:100px;margin:10px auto;display: block;}
  </style>
</head>
<body>
 
<form action="get_data.php" id="searchForm">
  
  <input type="text" name="url" placeholder="Enter the valid URL, Eg:http://www.youtube.com/watch?v=-i0qKReU9AM" value="http://www.youtube.com/watch?v=-i0qKReU9AM">
  <input type="submit" value="Get URL Info">

</form>


<div id="result" class="urlInfo-container">
               
</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">  
</script>

<script>

$( "#searchForm" ).submit(function( event ) {
 
 
  event.preventDefault();
 
  
  var $form = $( this ),
    term = $form.find( "input[name='url']" ).val(),
    url = $form.attr( "action" );
	if(term==""){
		alert("Enter valid url");return false;
	}
 
  var posting = $.post( url, { getInfoFor: term } );
 
  //insert into the fucking div 
  posting.done(function( data ) {
    data = jQuery.parseJSON(JSON.stringify(data));
                var res = "";
                if(data.title){
                                res += "<p class='title'>"+data.title+"</p>";
                }
                if(data.description){
                                res += "<p class='title'>"+data.description+"</p>";
                }
                if(data.subject){
                                res += "<p class='title'>"+data.subject+"</p>";
                }
                if(data.author_url){
                                res += "<p class='title'>"+data.author_url+"</p>";
                }
                if(data.logo){
                                res += "<img src='"+decodeURIComponent(data.logo)+"' />";
                }
                $('#result').html(res);
  });
});
</script>


</body>
</html>