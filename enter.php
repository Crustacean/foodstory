<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--        <script type="text/javascript" src="script/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script>
$(document).ready(function() { 
 $('form').ajaxForm(function() { 
 }); 
});
</script>-->
</head>
    <body>
        <div>


            Signin
            <form class="formbody" id="comment_form" accept-charset="UTF-8" action='backend.php?request=login' method="post"> 
                <div for="login_field" id="enter">
                    <label>User Identification</label><br>
                    <input type="text" name="username" tabindex="1" placeholder="Email address" >
                </div>
                <div for="password" id="enter">
                    <label>Password</label>
                    <br />
                    <input type="password" name="password" tabindex="2" placeholder="Password" >
                </div>
                <div>                 
                    <input type="submit" name="commit" tabindex="3" value="Sign in">
                </div>
            </form>
            
            
        </div>

        <div>
            signup

            <form method="post" name="userSignup" action='backend.php?request=register' accept-charset="UTF-8">
                <input placeholder="First name" type='text' name='surname' value=''/>
                <input placeholder="Other names" type='text' name='othernames' value=''/>
                <input placeholder="Email: required field" type='email' name='mail' value='' maxlength="50" />
                <input placeholder="Password" type='password' name='password' value='' maxlength="20" />
                <input placeholder="Confirm password" type='password' name='confpassword' value='' maxlength="20" />
                <input type="reset" value="Clear">
                <input style="width:200px;" type="submit" name="submit" value="Create" />
            </form>
        </div>
        <form action="backend.php?request=fileUpload" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <select name="category">
                        <option value=""> --- Please Select Category--- </option>
                       <option value="travels">FoodTravels</option>
                        <option value="recipes">Recipes</option>
                    </select>
    <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
    <input type="submit" value="Upload Image" name="submit">
</form>
        <div>
            
        </div>
    </body>
</html>
