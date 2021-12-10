    <footer>
      <ul>
        <li>Copyright &copy; <?php
          $startDate = 2020;
          $currentDate = date('Y');
          if($startDate == $currentDate){
            echo $currentDate;
          } else {
            echo $startDate . '-' . $currentDate;
          }
        ?></li>
        <li><a href="https://www.linkedin.com/in/roryhackney" target="_blank">Web development by Rory Hackney</a></li>
        <li><a href="https://www.roryhackney.com/portfolio.php">Back to Portfolio</a></li>
        <li><a href="https://www.roryhackney.com/hire-me.php">Hire Me</a></li>
        <li><a href="<?php echo "https://validator.w3.org/check?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid HTML
      </a></li>
        <li><a href="<?php echo "https://jigsaw.w3.org/css-validator/validator?uri=https://www.roryhackney.com" . htmlspecialchars($_SERVER['REQUEST_URI']); ?>" target="_blank">Valid CSS</a></li>
      </ul>
    </footer>
  </div> <!--end wrapper-->
  </body>

</html>
