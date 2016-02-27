<?php 
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php")
?>

  

    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Loginscript</h1>
        <p>Herzlich Willkommen zum Loginscript von PHP-Einfach.de. Details zu diesem Script sowie eine Schritt-für-Schritt Anleitung findet ihr auf <a href="http://www.php-einfach.de/experte/php-codebeispiele/loginscript/" target="_blank">PHP-Einfach.de &raquo; Loginscript</a>.
        
        Das Design wurde mittels <a href="http://getbootstrap.com" target="_blank">Bootstrap v3.3.6</a> erstellt.<br><br>
        
        Dieser Code ist unter der GPLv3 lizenziert. Ihr könnt ihn also nach belieben auf eure eigene Website stellen und auch verändern, nur der kommerzielle Verkauf des Scripts ist ausgeschlossen. Über einen Link auf <a href="http://www.php-einfach.de" target="_blank">www.php-einfach.de</a> würden wir uns freuen.
        
        </p>
        <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Features</h2>
          <ul>
          	<li>Registrierung & Login</li> 
          	<li>Interner Mitgliederbereich</li>
          	<li>Neues Zusenden eines Passworts</li>
          	<li>Programmcode leicht verständlich und erweiterbar</li>
          	<li>Responsive Webdesign, ideal für PC, Tablet und Smartphone</li>
          </ul>
         
        </div>
        <div class="col-md-4">
          <h2>Dokumentation</h2>
          <p>Auf unserer Website erhaltet ihr eine umfangreiche Einführung in das Loginscript. Ziel ist es nicht einfach nur dieses Script zu dokumentieren, sondern euch zu befähigen eigene Login- und Mitgliederscripts zu erstellen. In den verschiedenen Artikeln auf unserer Website erhaltet umfangreiche Informationen dazu. </p>
          <p><a class="btn btn-default" href="http://www.php-einfach.de/experte/php-codebeispiele/loginscript/" target="_blank" role="button">Weitere Informationen &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Webhosting</h2>
          <p>Möchtet ihr diesen Loginscript für eure Website nutzen, so benötigt ihr PHP fähigen Webspace. Unsere Seite ist selber bei All-Inkl gehostet und über viele Jahre haben wir dort sehr gute Erfahrungen erreicht, sowohl was die technische Ausstattung der Server angeht als auch was den Service angeht.</p>
          <p><a class="btn btn-default" href="http://all-inkl.com/?partner=477397" target="_blank" role="button">Weitere Informationen &raquo;</a></p>
        </div>
      </div>
	</div> <!-- /container -->
      

  
<?php 
include("templates/footer.inc.php")
?>