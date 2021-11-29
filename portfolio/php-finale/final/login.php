<?php
include 'server.php';
include 'includes/loginheader.php';
?>
<main>
<h1>Log In</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
   <fieldset>
       <label for="loginUN">Username</label>
       <input type="text" name="loginUN" id="loginUN" value="<?php if(isset($_POST['loginUN'])) {echo $_POST['loginUN'];} ?>">
       <label for="loginPW">Password</label>
       <input type="password" name="loginPW" id="loginPW">
       <?php include 'includes/errors.php'; ?>
       <button type="submit" name="login" class="button">Log In</button>
       <button type="button" class="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
   </fieldset>
</form>

<p class="center">If you don't have an account yet, please <a href="register.php">register here</a>.</p>
</main>
<?php include 'includes/footer.php';
