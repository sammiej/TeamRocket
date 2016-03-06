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
    <form id="formID" method="POST" role="form"> 
    <div class="panel panel-danger">
    <div class="panel-body">
        <div class="checkbox">
            <label><input type="checkbox"  class="validate[required]">YES, I have read the BIG Intro for Big Sisters presentation on the Big Sisters website (you can find the presentation in “Step 2” <a href="www.bigsisters.bc.ca/Home/volunteer/apply/BigSister/">here</a>). </label>
        </div>
    
        <div class="col-xs-6">
            <label for="firstname" style="text-align: center;">First Name:</label>
            <input type="text" class="validate[required,custom[onlyLetterSp]] form-control" id="firstname">
        </div>

        <div class="col-xs-6" style="text-align: center; margin-top: 15px;"><br>
            <label for="fileToUpload">Select image to upload:</label>
        </div>

        <div class="col-xs-6">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control validate[required,custom[onlyLetterSp]]" id="lastname">
        </div>

        <div class="col-xs-6" style="margin-top: 30px;" >
             <input type="file" class="validate[required]" name="fileToUpload" id="fileToUpload">
        </div>

        <div class="col-xs-12">
            <label for="homenum">Home Phone Number:</label>
            <input type="text" class="form-control validate[required,custom[phone]]" id="homenum">
        </div>

        <div class="col-xs-12">
            <label for="email">Email:</label>
            <input type="text" class="form-control validate[required,custom[email]]" id="email">
        </div>

        <div class="col-xs-6" style="margin-top: 20px; margin-bottom: 20px;">
            <label for="workcall">Were you born in Canada?</label><br>
            <label class="radio-inline">
                <input type="radio" class="validate[required] radio" name="workcall">Yes
            </label>
            <label class="radio-inline">
                <input type="radio" class="validate[required] radio" name="workcall">No
            </label>            
        </div> 

        <div class="col-xs-6" style="margin-top: 20px; margin-bottom: 20px;">
            <label for="conmethod">What is your preferred method of contact?</label><br>
                <label for="conmethod">Select from the list:</label>
                <select class="form-control" id="conmethod">
                    <option>Any</option>
                    <option>Work Phone</option>
                    <option>Email</option>
                    <option>Home Phone</option>
                    <option>Cell Phone</option> 
                </select>          
        </div> 

        <div class="col-xs-12">
            <label for="emphist">Employment History</label>
            <textarea class="form-control" rows="5" id="emphist"></textarea>
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
        $firstname = $lastname = "";
        $firstnameErr = $lastnameErr = "";

        //check if there is input data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            //check any fields are empty, if not, set variable to input value

            //if (empty($_POST["firstname")) {
            //  $firstnameErr = "First name is required";
            //} else {
                $firstname = $_POST["firstname"];
            //}

            //if (empty($_POST["lastname"])) {
            //  $lastnameErr = "Last name is required";
            //} else {
                $lastname = $_POST["lastname"];
            //}
        }

    ?>

</body>
</html>


