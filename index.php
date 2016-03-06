<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/validationEngine.jquery2.css" type="text/css"/>
    <link rel="stylesheet" href="../css/template2.css" type="text/css"/>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript">  </script>
    <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">   </script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
   
 <script>
        jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#formID").validationEngine();
        });
    </script>
    
<style>
    form {
        margin-left:  5%;
        margin-right: 5%; 
    }
    </style>

</head>
<body>
    <img src="bbs.gif" class="img-responsive" alt="bigsis" style="margin: auto; width: 50%; height: 50%; padding: 30px;">
    <h1 style="margin-top: -10px; padding-bottom: 15px; text-align: center; font-family: Arial;">Big Sisters <br> of BC Lower Mainland</h1>
    <script>
        /**
        *
        * @param {jqObject} the field where the validation applies
        * @param {Array[String]} validation rules for this field
        * @param {int} rule index
        * @param {Map} form options
        * @return an error string if validation failed
        */
        function checkHELLO(field, rules, i, options){
            if (field.val() != "HELLO") {
                // this allows to use i18 for the error msgs
                return options.allrules.validate2fields.alertText;
            }
        }
    </script>
    <form id="formID" method="POST" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data"> 
    <div class="panel panel-danger">
    <div class="panel-body">

        <div class="checkbox" style="margin-left: 17px; padding-top: 20px;">
            <label><input class="validate[minCheckbox[1]] checkbox" type="checkbox" name="checkbox">YES, I have read the BIG Intro for Big Sisters presentation found <a href="https://docs.google.com/presentation/d/1-KPSB5Q8uaxrD4s2ugLc-bnCe_NIRQVXg1PNTjzkH4E/pub?start=false&loop=false&delayms=10000&slide=id.i0" target="_blank">here</a>. </label>
        </div>

        <div class="col-xs-6">
            <label for="firstname" style="text-align: center;">First Name:</label>
            <input type="text" class="validate[required,custom[onlyLetterSp]] form-control" id="firstname" name="firstname" value="<?php echo $firstname;?>" placeholder="enter your first name">
        </div>

        <div class="col-xs-6" style="text-align: center; margin-top: 15px;"><br>
            <label for="fileToUpload">Select image to upload:</label>
        </div>

        <div class="col-xs-6">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control validate[required,custom[onlyLetterSp]]" id="lastname" name="lastname" value="<?php echo $lastname;?>" placeholder="enter your last name">
        </div>

        <div class="col-xs-6" style="margin-top: 25px;" >
             <input type="file" class="form-control validate[required]" name="fileToUpload" id="fileToUpload">
        </div>

        <div class="col-xs-12" style="margin-top: 2px;">
            <label for="homenum">Home Phone Number:</label>
            <input type="text" class="form-control validate[required,custom[phone]]" id="homenum" name="homenum" value="<?php echo $homenum;?>" placeholder="enter your home phone number">
        </div>

        <div class="col-xs-12">
            <label for="email">Email:</label>
            <input type="text" class="form-control validate[required,custom[email]]" id="email" name="email" value="<?php echo $email;?>"placeholder="contact@example.com">
        </div>

        <div class="col-xs-6" style="margin-top: 20px; margin-bottom: 20px;">
            <label for="workcall">Were you born in Canada?</label><br>
            <label class="radio-inline">
                <input type="radio" <?php if(isset($bornInCA) && $bornInCA=="Yes") echo "Yes";?> name="bornInCA" value="Yes">Yes
            </label>
            <label class="radio-inline">
                <input type="radio" <?php if(isset($bornInCA) && $bornInCA=="No") echo "No";?> name="bornInCA" value="No">No
            </label>            
        </div> 

        <div class="col-xs-6" style="margin-top: 20px; margin-bottom: 20px;">
            <label for="conmethod">What is your preferred method of contact?</label><br>
                <label for="conmethod">Select from the list:</label>
                <select class="form-control" id="conmethod" name="conmethod">
                    <option <?php if(isset($conmethod) && $conmethod=="any") echo "Any";?> value="Any">Any</option>
                    <option <?php if(isset($conmethod) && $conmethod=="work") echo "Work";?> value="Work Phone">Work Phone</option>
                    <option <?php if(isset($conmethod) && $conmethod=="email") echo "Email";?> value="Email">Email</option>
                    <option <?php if(isset($conmethod) && $conmethod=="home") echo "Home";?> value="Home Phone">Home Phone</option>
                    <option <?php if(isset($conmethod) && $conmethod=="cell") echo "Cell";?> value="Cell Phone">Cell Phone</option> 
                </select>          
        </div> 

        <div class="col-xs-12">
            <label for="empHist">Employment History</label><br>
            <textarea name="empHist" class="form-control" rows="5" id="emphist" placeholder="Please describe your past work experience."></textarea>
        </div>

        <div class="col-xs-12">
            <div class="container">
                <input type="submit" class="btn btn-default" value="Submit" style="margin-top: 20px; margin-left: -15px; background-color: gray; border: none; color: white;">
            </div>
        </div>

    </div>
    </div>
    </form>

    <?php
        //data input variables, set to empty
        $firstname = $lastname = $email = $homenum = $bornInCA = $conmethod = $empHist = "";

        function pageRedirect ($page) {
            if (!@header("Location: ".$page))
               echo "\n<script type=\"text/javascript\">window.location.replace('$page');</script>\n";
            exit;
        }
        
        //check if there is input data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $homenum = $_POST["homenum"];
            $bornInCA = $_POST["bornInCA"];
            $conmethod = $_POST["conmethod"];
            $empHist = $_POST["empHist"];


            //Open existing .csv file, if any, and writes to it. If it is a new file, it will add a header
            $userData = array($firstname, $lastname, $email, $homenum, $bornInCA, $conmethod, $empHist);
            $filename='mydata.csv';
            $isNew = (file_exists($filename) || is_file($filename)) ? false : true ;
            touch($filename); //Sets access and modification time of file and  If the file does not exist, Create it.
            $fp = fopen($filename, 'a');
            if($isNew) {      //Add header Information if its new 
                fputcsv($fp , array ('FIRST NAME' , 'LAST NAME' , 'EMAIL' , 'HOME PHONE' , 'BORN IN CANADA?' , 'CONTACT METHOD' , 'EMPLOYMENT HISTORY'));
            }
            fputcsv($fp, $userData);
            fclose($fp);

            //Finds or creates directory for uploaded image and adds file to new directory. 
            $target_dir = "UploadedImages/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            //Checks if file inputted is image/is the right file size/has the right extension etc.
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.\n"; 
                $uploadOk = 0;
            }

            // Check file size
            elseif ($_FILES["fileToUpload"]["size"] > 2000000) {
                echo "Sorry, your file is too large.\n"; 
                $uploadOk = 0;
            }

            // Allow certain file formats
            elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\n"; 
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            elseif ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.\n"; 
            // if everything is ok, try to upload file
            } 

            else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.\n"; 
                } else {
                    echo "Sorry, there was an error uploading your file.\n"; 
                    $uploadOk == 0;
                }
            } 

            //Email: Form submission confirmation sent to user 
            $message = "Hello ".$firstname." ".$lastname.",\n"."Email id"." ".$email."\n";

            $subject ="Thank you for your interest in volunteering with Big Sisters!";

            if(mail($email, $subject, $message)){
                echo "Thank you for your application, we will be emailing you with further information shortly.";
                pageRedirect ("/thankyou.html");
            } 
            else{ 
                echo "There was an error with sending an email to the address you provided, but your data was saved.";
            }

        }





?>

</body>
</html>


