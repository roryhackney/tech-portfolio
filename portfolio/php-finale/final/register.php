<?php
include 'server.php';
include 'includes/loginheader.php';
?>

<main>
<h1>Register</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label for="FirstName">First Name</label>
        <input type="text" name="FirstName" id="FirstName" value="<?php if(isset($_POST['FirstName'])) {echo $_POST['FirstName'];} ?>">
        <label for="LastName">Last Name</label>
        <input type="text" name="LastName" id="LastName" value="<?php if(isset($_POST['LastName'])) {echo $_POST['LastName'];} ?>">
        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email" value="<?php if(isset($_POST['Email'])) {echo $_POST['Email'];} ?>">
        <label for="UserName">Username</label>
        <input type="text" name="UserName" id="UserName" value="<?php if(isset($_POST['UserName'])) {echo $_POST['UserName'];} ?>">
        <label for="Password1">Password</label>
        <input type="password" name="Password1" id="Password1">
        <label for="Password2">Confirm Password</label>
        <input type="password" name="Password2" id="Password2">
        <?php include 'includes/errors.php'; ?>
        <button type="submit" class="button" name="register">Register</button>
        <button type="button" class="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
    </fieldset>
</form>
<p class="center">Already have an account? Please <a href="login.php">log in</a>.</p>
</main>
<?php include 'includes/footer.php';
