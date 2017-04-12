<?php
        $servername = "localhost";
        $username = "Henrique";
        $password = "";
        $dbname = "cs1520";
	$nameErr = $emailErr = $lastErr = "";
	$first = $last = $email = $message = "";

	$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
        }
	$sql = "CREATE TABLE MyGuests(
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL PRIMARY KEY,
	message VARCHAR(500)
	)";
	
	if($conn->query($sql) === TRUE){
	  echo "Table Created Successfully";
	} else{
	  echo "Error Creating Table: " . $conn-error;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	  if(empty($_POST["first_name"])){
	    $nameErr = "Name is required";
	  }else{
	  $first = test_input($_POST["first_name"]);
	  }
	  if(empty($_POST["last_name"])){
            $lastErr = "Last Name is required";
          }else{
          $last	= test_input($_POST["last_name"]);
          }
  	  if (empty($_POST["email"])) {
    	    $emailErr = "Email is required";
  	  } else {
    	    $email = test_input($_POST["email"]);
  	  }
  	  if (empty($_POST["email"])) {
    	    $message = "";
  	  } else {
    	    $message = test_input($_POST["message"]);
  	  }  
	}  
        function test_input($data) {
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

          	$sql = "INSERT INTO MyGuests (firstname, lastname, email, message)
VALUES ('".$first."', '".$last."', '".$email."', '".$message."')";
       	       	if($conn->query($sql) === TRUE){
		  echo "INSERT Successfully";
		  }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: Henrique Machado">
    <title>Project Part 2</title>
    <link rel="stylesheet" href="./css/contact_stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/navbar_stylesheet.css">
  </head>
  
  <body>

    <nav class="otherNav">
      <h1 onclick="return Home()"><a href="">Henrique Machado</a></h1>
      <ul>
        <li>
          <a href="https://www.facebook.com/henrique.handa.9" target=_blank>Facebook</a>
        </li>
        <li>
          <a href="https://www.instagram.com/henriquehanda" target=_blank>Instagram</a>
        </li>
        <li>
          <a href="./docs/hhm_resume.pdf" target=_blank>Resume</a>
        </li>
        <li onclick ="return Swimming()">
          <a href="">Swimming</a>
        </li>
        <li onclick="return Contact()">
          <a href="">Contact</a><!-- send to form-->
        </li>
      </ul>
    </nav>
    <div id="pageWrap">
      <div class="content-container">
        <div class="content">
          <div id="form" class="center">
            <form action="" method="post">         
              <p><label>First Name:</label><br> <input type="text" name="first_name">
	        <span class="error">* <?php echo $nameErr;?></span>
	      </p>
              <p><label>Last Name:</label><br> <input type="text" name="last_name" >
	      <span class="error">* <?php echo $lastErr;?></span>
	      </p>
              <p><label>Email Address:</label><br> <input type="text" name="email" >
	      <span class="error">* <?php echo $emailErr;?></span>
	      </p>
              <p><label>Message:</label><br><textarea rows="5" name="message"  cols="30" ></textarea></p>
              <p><span class="error">* required field.</span></p>
	      <input type="submit" name="submit" value="submit">
            </form>
          </div>
	  <div id="contactinfo">
            <p>Henrique Machado</p>
            <p>(702)858-8015</p>
            <p>henriqueh2m@hotmail.com</p>
            <p>6269 kalida drivre </p>
            <p>Pittsburgh, PA 15206</p>
      	  </div>
        </div>
      </div>
      <footer>
	<div class="social" id="LI">
	  <p>&copy; 2017 Henrique Machado<p>
          <a href="https://github.com/machadoh" target=_blank><img id="gh" src="./img/github_icon.png"></a>
          <a href="https://www.facebook.com/henrique.handa.9" target=_blank><img id="fb" src="./img/facebook1.png"></a>
          <a href="https://www.instagram.com/henriquehanda" target=_blank><img id="ig" src="./img/instagram-Logo.png"></a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script src="javascript/contact_script.js" type="text/javascript"></script>
      </footer>
    </div>
  </body>
</html>
