    <!--can also point to another file: form action = formhandler.php-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <fieldset>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php
          if(isset($_POST['firstName'])){echo htmlspecialchars($_POST['firstName']);} ?>">
          <span><?php echo $firstNameError; ?></span>

        <label>Last Name</label>
        <input type="text" name="lastName" value = "<?php
          if(isset($_POST['lastName'])) {echo htmlspecialchars($_POST['lastName']);}?>">
          <span><?php echo $lastNameError; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php
          if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>">
          <span><?php echo $emailError; ?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php
          if(isset($_POST['phone'])){echo htmlspecialchars($_POST['phone']);} ?>">
          <span><?php echo $phoneError; ?></span>

        <label>Gender</label>
        <ul>
          <li><input type="radio" name="gender" value="Masculine"
            <?php if(isset($_POST['gender']) && $_POST['gender']  == 'Masculine') {
              echo 'checked = "checked"';
            } ?>
            >Masculine</li>
          <li><input type="radio" name="gender" value="Feminine"
            <?php if(isset($_POST['gender']) && $_POST['gender']  == 'Feminine') {
              echo 'checked = "checked"';
            } ?>
            >Feminine</li>
          <li><input type="radio" name="gender" value="Both"
            <?php if(isset($_POST['gender']) && $_POST['gender']  == 'Both') {
              echo 'checked = "checked"';
            } ?>
            >Both</li>
          <li><input type="radio" name="gender" value="Neither"
            <?php if(isset($_POST['gender']) && $_POST['gender']  == 'Neither') {
              echo 'checked = "checked"';
            } ?>
            >Neither</li>
          <li><input type="radio" name="gender" value="Other"
            <?php if(isset($_POST['gender']) && $_POST['gender']  == 'Other') {
              echo 'checked = "checked"';
            } ?>
            >Other</li>
        </ul>
        <span><?php echo $genderError ?></span>

        <label>Favorite Foods</label>
        <ul>
          <li><input type="checkbox" name="favorites[]" value="chocolate"
            <?php if(isset($_POST['favorites']) &&
                    in_array('chocolate', $_POST['favorites'])) {
              echo 'checked = "checked"';
            } ?>
            >Chocolate</li>

          <li><input type="checkbox" name="favorites[]" value="cheese"
            <?php if(isset($_POST['favorites']) &&
                    in_array('cheese', $_POST['favorites'])) {
              echo 'checked = "checked"';
          } ?>
          >Cheese</li>

          <li><input type="checkbox" name="favorites[]" value="potatoes"
            <?php if(isset($_POST['favorites']) &&
                    in_array('potatoes', $_POST['favorites'])) {
              echo 'checked = "checked"';
          } ?>
          >Potatoes</li>

          <li><input type="checkbox" name="favorites[]" value="meat"
            <?php if(isset($_POST['favorites']) &&
                    in_array('meat', $_POST['favorites'])) {
              echo 'checked = "checked"';
          } ?>
          >Meat</li>
        </ul>
        <span><?php echo $favoritesError ?></span>

        <label>Favorite Pet</label>
        <select name="pet">
          <option value="NULL"
            <?php if(isset($_POST['pet']) && $_POST['pet'] == 'NULL'){
              echo 'selected = "unselected"';}?>
          >Select One</option>

          <option value="kitten"
            <?php if(isset($_POST['pet']) && $_POST['pet'] == 'kitten') {
              echo 'selected="selected"';} ?>
          >Kitten</option>

          <option value="crocodile"
            <?php if(isset($_POST['pet']) && $_POST['pet'] == 'crocodile') {
            echo 'selected="selected"';} ?>
          >Crocodile</option>

          <option value="swarm of bees"
            <?php if(isset($_POST['pet']) && $_POST['pet'] == 'swarm of bees') {
            echo 'selected="selected"';} ?>
          >Swarm of Bees</option>
        </select>
        <span><?php echo $selectError ?></span>

        <label>Comments</label>
        <textarea name="comments"><?php
          if(isset($_POST['comments'])){
            echo htmlspecialchars($_POST['comments']);
          } ?></textarea>
        <span><?php echo $commentsError; ?></span>

        <input type="radio" name="privacy" <?php
          if(isset($_POST['privacy'])) {echo 'checked="checked"';} ?>
        >I agree to your terms
        <span><?php echo $privacyError; ?></span>

        <input type="submit" value="Submit">
        <p><a href="">Reset form</a></p>
      </fieldset>
    </form>
