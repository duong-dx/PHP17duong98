<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Xuân Duong</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
 </head>
 <body>
 	 <form action="" method="POST" enctype="multipart/form-data">
 	 	<input type="file" onchange="readURL(this)" name="avata" value="Choose file" id="avata">
 	 	<img id="blah" src="a.jpg">
 	 	<input type="submit" name="submit" value="Submit">
 	 </form>
 	  
 	 <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	
 </body>
 </html>