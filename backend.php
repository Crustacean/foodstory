<?php

require ("DatabaseConnection.php"); //connect to the database

$request = filter_input(INPUT_GET, 'submit');

if (strcasecmp($_GET['request'], 'login') == 0) {
    session_start();

    $submit = filter_input(INPUT_POST, 'username');

    // If form submitted, insert values into the database.
    if (isset($submit)) {

        $username = mysqli_real_escape_string($conn, stripslashes($_REQUEST['username']));
        $password = mysqli_real_escape_string($conn, stripslashes($_REQUEST['password']));

        //Checking is user existing in the database or not
        $query = "SELECT * FROM credentials WHERE ";
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $query .= "email='$username' ";
        } else {
            $query .= "firstname='$username' ";
        }

        $result = mysqli_query($conn, $query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                header("Location: index.html");
            } else {
                echo "Wrong Password.";
                echo "<div class='form'>
                <h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='enter.php'>Login</a></div>";
            }
        } else {
            echo "No User found";
        }
    }
} else if (strcasecmp($_GET['request'], 'register') == 0) {
    session_start();

    $submit = filter_input(INPUT_POST, 'submit');

    if (isset($submit)) {
//        session_start();
        //If you are using mysqli_* function then you have to include your connection to database into mysqli_real_escape function
        //Data is retrieved from a FORM input
        $surname = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'surname'));
        $othernames = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'othernames'));
        $email = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'mail'));
        $password = mysqli_real_escape_string($conn, password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT));

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $sql = "INSERT INTO credentials (firstname,othernames,email,password,datecreated)
        VALUES ('$surname','$othernames','$email','$password',NOW())";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $_SESSION['message'] = "You have successfully registered";
                $_SESSION['user'] = $surname;
                header("location:index.html");
            } else {
                echo "Error: Unable to execute sql." . $sql . "<br>" . $conn->error;
            }
        } else {
            echo 'Please enter a valid email address.';
        }

        $conn->close();
    }
} else if (strcasecmp($_GET['request'], 'fileUpload') == 0) {
    $target_dir = "gallery/";
    //Get image name
    $image = $_FILES['fileToUpload']['name'];
    $imageName = basename($image);
    $target_file = $target_dir . $imageName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //Initialize message variable
    $msg = "";
    $submit = filter_input(INPUT_POST, 'submit');

    if (isset($submit)) {
        // Check if image file is a actual image or fake image
        $check = @getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            //echo "File is an image - " . $check["mime"] . "."; //Multipurpose Internet Mail Extensions (MIME) indicate the nature and format of document.
            $uploadOk = 1;

            //Get image size
            $imageSize = $_FILES["fileToUpload"]["size"];

            // Get text
            $category = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'category'));
            $image_text = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'image_text'));

            // image file directory
            $uploadpath = $target_dir . $category . '/';
            $target_file = $uploadpath . basename($_FILES["fileToUpload"]["name"]);

            $allowedSize = ($imageSize <= 500000);

            //trigger exception in a "try" block
            try {
                if (!$allowedSize) {
                    echo 'Sorry, your file is too large. Please select another file to upload.';
                    $uploadOk = 0;
                }
            }

            //catch exception
            catch (Exception $e) {
                echo $e->getFile() . $e->getMessage();
            }

            // Check file size
//            if ($imageSize > 500000) {
//                echo "Sorry, your file is too large.";
//                $uploadOk = 0;
//            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Upload terminated. Please try again.";
            }

            //  if everything is ok, attempt file upload
            else {
                if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                    $sql = "INSERT INTO gallery (image, category, description, created) VALUES ('$image', '$category', '$image_text', NOW())";
                    // execute query
                    mysqli_query($conn, $sql);

                    echo "The file " . $imageName . " has been uploaded.";
                    //  		$msg = "Image uploaded successfully";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    //$msg = "Failed to upload image";
                }
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
} else if (strcasecmp($_GET['request'], 'logout') == 0) {
    session_start();
    // Destroying All Sessions
    if (session_destroy()) {
        // Redirecting To Home Page
        header("Location: enter.php");
    }
}