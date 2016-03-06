<!DOCTYPE html>
<html>
<body>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<fieldset>
		<legend>VanHacks Stuff: </legend>			
		<p>
			First name:
			<br>
		<input type="text" name="firstname" value="<?php echo $firstname;?>"><?php echo $firstnameErr;?> <br>
		   	Last name:
		   	<br>
		<input type="text" name="lastname" value="<?php echo $lastname;?>"><?php echo $lastnameErr;?>
		</p>
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>


    <?php
    	//data input variables, set to empty
    	$firstname = $lastname = "";
    	$firstnameErr = $lastnameErr = "";

    	//check if there is input data
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    		
    		//check any fields are empty, if not, set variable to input value

    		//if (empty($_POST["firstname"])) {
    			$firstnameErr = "First name is required";
    		//} else {
    			$firstname = $_POST["firstname"];
    		//}

    		//if (empty($_POST["lastname"])) {
    		//	$lastnameErr = "Last name is required";
    		//} else {
    			$lastname = $_POST["lastname"];
    		//}
    			$fs = fopen("mydata.csv","a");
  				fwrite($fs,$firstname . ", " . $lastname . "\n");
				fclose($fs);
				 
				exit;
    	}

        $target_dir = "UploadedImages/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

    ?>

    <?php

    echo "<h2> Your Input:</h2>";
    echo $firstname;
    echo $lastname;
    ?>

</body>
</html>
