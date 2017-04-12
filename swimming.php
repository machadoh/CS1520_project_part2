<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: Henrique Machado">
    <title>Project Part 2</title>
    <link rel="stylesheet" href="./css/swimming_stylesheet.css">
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
          <a href="./docs/hhm4_resume.pdf" target=_blank>Resume</a>
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
	  <div id="pinheiros">
	    <img src="./img/ecp.jpg">
	    <div id="pinheirosinfo">
	      <br>
	      <p> Esport Clube Pinheiros / Brazil 2010-2017</p>
	      <p> 5 time Junior National Champion</p>
              <p> Second place on 2015 on Brazilian National</p>
              <p> Member of National Team / Placed 9th in the world in 2014</p>
	    </div>
	  </div>
        </div>
      </div>
      
      <div class="content-container">
        <div class="content">
          <div id="unlv">
            <img src="./img/unlv.jpg">
            <div id="unlvinfo">
              <br>          
	      <p> University of Nevada Las Vegas 2012-2016</p>
	      <p> School record holder on the 100 back, 200 back, 4x100medley,4x50medley</p>
              <p> 3 time NCAA qualifier</p>
	      <p> 3 time conference champion</p>
	    </div>
	  </div>
        </div>
      </div>

      <div class="content-container">
        <div class="content">
          <div id="pitt">
            <img src="./img/pitt.jpg">
            <div id="pittinfo">
              <br>
              <p> University of Pittsburgh 2016-2017</p>
              <p> School record holder on the 100 back</p>
              <p> ACC finalist</p>
              <p> Team captain</p>

	    </div>
	  </div>
        </div>
      </div>
    </div>   

      <footer>
        <p>&copy; 2017 Henrique Machado</p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script src="javascript/swimming_script.js" type="text/javascript"></script>
      </footer>
  </body>
</html>
