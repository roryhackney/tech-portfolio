<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <fieldset>
    <label for="contactName">Name</label>
    <input type="text" name="contactName" id="contactName" value="<?php
        if(isset($_POST['contactName'])) {echo htmlspecialchars($_POST['contactName']);} ?>">
    <span><?php echo $nameError; ?></span>

    <label for="contactEmail">Email</label>
    <input type="email" name="contactEmail" id="contactEmail" value="<?php
        if(isset($_POST['contactEmail'])) {echo htmlspecialchars($_POST['contactEmail']);} ?>">
    <span><?php echo $emailError; ?></span>

    <label for="contactSubject">Subject</label>
    <select name="contactSubject" id="contactSubject">
      <option value="NULL" <?php
          if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'NULL') {
            echo 'selected = "unselected"';} ?>>Select One</option>
      <option value="I want to buy your art!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'I want to buy your art!') {
          echo 'selected="selected"';} ?>>I want to buy your art!</option>
      <option value="I want to hire you!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'I want to hire you!') {
          echo 'selected="selected"';} ?>>I want to hire you!</option>
      <option value="I want more information!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'I want more information!') {
          echo 'selected="selected"';} ?>>I want more information!</option>
      <option value="I want to network!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'I want to network!') {
          echo 'selected="selected"';} ?>>I want to network!</option>
      <option value="I want to talk shop!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'I want to talk shop!') {
          echo 'selected="selected"';} ?>>I want to talk shop!</option>
      <option value="Something else!" <?php
        if(isset($_POST['contactSubject']) && $_POST['contactSubject'] == 'Something else!') {
          echo 'selected="selected"';} ?>>Something else!</option>
    </select>
    <span><?php echo $subjectError; ?></span>

    <label>Budget (Commissions)</label>
    <div id="radios">
      <label for="budget20">$20.00</label>
      <input type="radio" name="contactBudget" id="budget20" value="20" <?php
        if(isset($_POST['contactBudget']) && $_POST['contactBudget'] == '20') {
          echo 'checked="checked"';} ?>>
      <label for="budget40">$40.00</label>
      <input type="radio" name="contactBudget" id="budget40" value="40" <?php
        if(isset($_POST['contactBudget']) && $_POST['contactBudget'] == '40') {
          echo 'checked="checked"';} ?>>
      <label for="budget60">$60.00</label>
      <input type="radio" name="contactBudget" id="budget60" value="60" <?php
        if(isset($_POST['contactBudget']) && $_POST['contactBudget'] == '60') {
          echo 'checked="checked"';} ?>>
      <label for="bigbudget">Big Project!</label>
      <input type="radio" name="contactBudget" id="bigbudget" value="big" <?php
        if(isset($_POST['contactBudget']) && $_POST['contactBudget'] == 'big') {
          echo 'checked="checked"';} ?>>
      <label for="budget0">N/A</label>
      <input type="radio" name="contactBudget" id="budget0" value="NA" <?php
        if(isset($_POST['contactBudget']) && $_POST['contactBudget'] == 'NA') {
          echo 'checked="checked"';} ?>>
        <span><?php echo $budgetError; ?></span>
    </div>

    <label>Favorite Art Techniques</label>
    <div id="checks">
      <label for="standard">Standard</label>
      <input type="checkbox" name="favorites[]" id="standard" value="standard" <?php
        if(isset($_POST['favorites']) && in_array('standard', $_POST['favorites'])) {
          echo 'checked="checked"';} ?>>
      <label for="lineless">Lineless</label>
      <input type="checkbox" name="favorites[]" id="lineless" value="lineless" <?php
        if(isset($_POST['favorites']) && in_array('lineless', $_POST['favorites'])) {
          echo 'checked="checked"';} ?>>
      <label for="hatching">Hatching</label>
      <input type="checkbox" name="favorites[]" id="hatching" value="hatching" <?php
        if(isset($_POST['favorites']) && in_array('hatching', $_POST['favorites'])) {
          echo 'checked="checked"';} ?>>
      <label for="watercolor">Watercolor</label>
      <input type="checkbox" name="favorites[]" id="watercolor" value="watercolor" <?php
        if(isset($_POST['favorites']) && in_array('watercolor', $_POST['favorites'])) {
          echo 'checked="checked"';} ?>>
      <label for="other">Other</label>
      <input type="checkbox" name="favorites[]" id="other" value="other" <?php
        if(isset($_POST['favorites']) && in_array('other', $_POST['favorites'])) {
          echo 'checked="checked"';} ?>>
      <span><?php echo $favoritesError; ?></span>
    </div>

    <label for="comments">Additional Information</label>
    <textarea name="comments" id="comments"><?php if(isset($_POST['comments'])) {
      echo htmlspecialchars($_POST['comments']);}?></textarea>
    <span><?php echo $commentsError; ?></span>

    <button type="submit" class="button" name="contact">Submit</button>
    <button type="button" class="button" onclick="window.location.href='<?php
      echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
  </fieldset>
</form>
