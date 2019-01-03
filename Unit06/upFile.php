<?php 
	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = "Uploadfile/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["avata"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["avata"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["avata"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }

        if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
}

    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Xuân Duong</title>
 </head>
 <body>
 	 <form action="" method="POST" enctype="multipart/form-data">
 	 	<input type="file" name="avata" value="Choose file" id="avata">
 	 	<input type="submit" name="submit" value="Submit">
 	 </form>
 </body>
 </html>