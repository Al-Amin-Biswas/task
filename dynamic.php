<!doctype html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Ajax File Upload with jQuery and PHP</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">

<hr> 
<form id="form" action="dynamicinsert.php" enctype="multipart/form-data">
<div class="form-group">
<label for="name">NAME</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
</div>
<div class="form-group">
<label for="email">EMAIL</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
</div>
<input id="uploadImage" type="file" accept="image/*" name="image" />
<input class="btn btn-success" type="submit" value="Upload">
</form>
<div id="err"></div>
<hr>
<p><a href="https://www.cloudways.com" target="_blank">www.Cloudways.com</a></p>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "dynamicinsert.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {

    $("#err").fadeOut();
   },
   success: function(data)
      {
        alert(data);
    // if(data=='invalid')
    // {

    //  $("#err").html("Invalid File !").fadeIn();
    // }
    // else
    // {

    //  $("#preview").html(data).fadeIn();
    //  $("#form")[0].reset(); 
    // }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>


</body>
</html>