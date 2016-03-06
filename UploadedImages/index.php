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
        margin-left:  12.5%;
        margin-right: 12.5%; 
        padding-left: 12.5%;
        padding-right: 12.5%;
    }
    </style>

</head>
<body>
    <img src="vanhacks.png" class="img-responsive" alt="bigsis" style="margin: auto;">
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
    <form id="formID" method="POST" role="form" action="index.php"> 
    <div class="panel panel-danger">
    <div class="panel-body">
        <div class="checkbox">
            <label><input class="validate[minCheckbox[1]] checkbox" type="checkbox" name="checkbox">YES, I have read the BIG Intro for Big Sisters presentation on the Big Sisters website (you can find the presentation in “Step 2” <a href="www.bigsisters.bc.ca/Home/volunteer/apply/BigSister/">here</a>). </label>
        </div>
    
        <div class="col-xs-6">
            <label for="firstname" style="text-align: center;">First Name:</label>
            <input type="text" class="validate[required,custom[onlyLetterSp]] form-control" id="firstname" name="firstname" value="<?php echo $firstname;?>">
        </div>

        <div class="col-xs-6" style="text-align: center; margin-top: 15px;"><br>
            <label for="fileToUpload">Select image to upload:</label>
        </div>

        <div class="col-xs-6">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control validate[required,custom[onlyLetterSp]]" id="lastname" name="lastname" value="<?php echo $lastname;?>">
        </div>

        <div class="col-xs-6" style="margin-top: 30px;" >
             <input type="file" name="fileToUpload" id="fileToUpload">
        </div>

        <div class="col-xs-12">
            <label for="homenum">Home Phone Number:</label>
            <input type="text" class="form-control validate[required,custom[phone]]" id="homenum" name="homenum" value="<?php echo $homenum;?>">
        </div>

        <div class="col-xs-12">
            <label for="email">Email:</label>
            <input type="text" class="form-control validate[required,custom[email]]" id="email" name="email" value="<?php echo $email;?>">
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
            <label for="empHist">Employment History</label>
            <textarea name="empHist" rows="5" id="emphist"></textarea>
        </div>

        <div class="col-xs-12" style="margin-top: 20px; margin-bottom: 20px;">
        <p>Please rank, in order of preference, all of the locations you would be comfortable travelling to and from when meeting with your Little Sister each week.</p>
        <div class="col-xs-3">
                <select class="form-control" id="tsa">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="tsa" style="margin-top: 9px;">Tsawsassen</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="sur">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="sur" style="margin-top: 9px;">Surrey</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="ric">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="ric" style="margin-top: 9px;">Richmond</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="coq">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="tsa" style="margin-top: 9px;">Coquitlam</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="del">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="del" style="margin-top: 9px;">Delta</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="ssu">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="ssu" style="margin-top: 9px;">South Surrey</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="van">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="van" style="margin-top: 9px;">Vancouver</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="pmo">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="pmo" style="margin-top: 9px;">Port Moody</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="lad">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="lad" style="margin-top: 9px;">Ladner</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="bur">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="bur" style="margin-top: 9px;">Burnaby</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="nva">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="nva" style="margin-top: 9px;">North Vancouver</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="pco">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="pco" style="margin-top: 9px;">Port Coquitlam</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="clo">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="clo" style="margin-top: 9px;">Cloverdale</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="nwe">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="nwe" style="margin-top: 9px;">New Westminster</label><br>
        </div>

        <div class="col-xs-3">
                <select class="form-control" id="wva">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                </select>
            </div>  
         <div class="col-xs-3">
            <label for="wva" style="margin-top: 9px;">West Vancouver</label><br>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12">
            <div class="container">
                <input type="submit" class="btn btn-info" value="Submit" style="margin-top: 20px;">
            </div>
        </div>
    </form>

    <?php
        //data input variables, set to empty
        //$firstname = $lastname = $email = "";

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

            echo "done writing to csv";

            //Finds or creates directory for uploaded image and adds file to new directory. 
            $target_dir = "UploadedImages/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            if (isset($target_file)) {
                echo "target file set";
            } else
                echo "target file not set";
            $uploadOk = 1;
            echo "submitted";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
            //Checks if file inputted is image/is the right file size/has the right extension etc.
            if(isset($_POST["submit"])) {
                echo "submitted";
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                elseif ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                // Allow certain file formats
                elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                elseif ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } 

                else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        $uploadOk == 0;
                    }
                } 
            } else {
                echo "submit doesnt work";
            }
        }

/**
                //Email: Form submission confirmation sent to user 
                $message = "Hello ".$firstname." ".$lastname.",\n"."Email id".$email."\n";

                $subject ="Thank you for your interest in volunteering with Big Sisters!";

                if(mail($email, $subject, $message)){
                    echo "Thank you for your application, we will be emailing you with further information shortly.";
                } 
                else{ 
                    echo "There was an error with sending an email to the address you provided, but your data was saved.";
                }
/**
            }     
        }
*/
    ?>

    <?php

    echo "<h2> Your Input:</h2>";
    echo $firstname;
    echo $lastname;
    echo $email;
    echo $homenum;
    echo $bornInCA;
    echo $conmethod;
    echo $empHist;

    ?>

</body>
</html>


