<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';
    //header, nav, main opener etc
    include 'includes/header.php';
?>
            <section>
                <h1 id="h1">Thank You</h1>
                <p>You have successfully contacted me. I'll respond as fast as possible. Thank you!</p>
                <div class="buttons-row">
                    <a class="button" href="<?= $linkedin ?>" target="_blank">LinkedIn <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a>
                    <a class="button" href="<?= $github ?>" target="_blank">GitHub  <span class="fas fa-up-right-from-square" title="opens in new tab"></span></a>
                </div>
            </section>

<?php include './includes/footer.php';