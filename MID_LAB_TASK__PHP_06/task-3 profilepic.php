<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
</head>
<body>
        <fieldset style="width: 400px">
            <legend><b>Profile Picture</b></legend>
            <form action="" method="post" enctype="multipart/form-data">
                <img src="img/picture.png" height="100px" height="100px" alt=""><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </form>
        </fieldset>   
</body>
</html>

 

<?php 
    if (isset($_POST['submit'])){
     
        $target_file = basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png") {
            echo "Only jpeg, jpg & png files are allowed to submit.";
        }
        else{
            if ($_FILES["fileToUpload"]["size"] > 4194304) 
            {
                echo "Picture size is too large.it should not be more than 4MB";
              }
              else
              {
                  echo "Image uploaded successfully!!";
              }
        }
    }

 

?>