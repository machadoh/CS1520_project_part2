<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: Henrique Machado">
    <title>Project Part 2</title>
    <link rel="stylesheet" href="./css/home_stylesheet.css">
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
          <div id="personal">
            <img src="./img/Henrique_pitt.jpg">
	    <div id="personalinfo">
              <br>
	      <p>Name: Henrique Handa Machado </p>
	      <p>College: University of Pittsburgh </p>
	      <p>Major: Computer Science </p>
	      <p>Home Town: Sao Paulo,SP - Brazil </p>
	      <p>Language:Portuguese, English, and Spanish </p>
            </div>
          </div>
        </div>
      </div>
      
      
      <footer>
        <p>
          &copy; 2017 Henrique Machado
        </p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"\></script>
        <script src="javascript/home_script.js" type="text/javascript"></script>
      </footer>
    </div>
  </body>
</html>
