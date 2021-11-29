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
        <li>All Rights Reserved</li>
        <li><a href="https://validator.w3.org/check?uri=referer">HTML</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check/referer">CSS</a></li>
        <li>Web Design by Rory Hackney</li>
      </ul>
    </footer>
  </div> <!--end wrapper-->
  </body>

</html>
