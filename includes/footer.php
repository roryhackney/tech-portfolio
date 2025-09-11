    </main>
        <footer>
            <div id="form-container">
                <p>Thanks for checking out my work! If you've got a project or job you think suits me, contact me here, by email at <a href="mailto:<?php echo $email; ?>"><?php echo $email;?></a>, or on <a href="<?php echo $linkedin;?>" target="_blank">LinkedIn</a>.</p>
                
                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" id="contact-form">
                    <h2>Contact Me</h2>
                    
                    <div>
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" autocomplete="name" required/>
                        <span class="error" id="name-error">Name is required</span>
                    </div>

                    <div class="hidden">
                        <label for="url">URL *</label>
                        <input type="text" id="url" name="url" autocomplete="off" tabindex="-1"/>
                    </div>
                    
                    <div>
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" autocomplete="email" required/>
                        <span class="error" id="email-error"></span>
                    </div>

                    <div>
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" cols="15" autocomplete="off" required></textarea>
                        <span class="error" id="message-error">Message is required</span>
                    </div>

                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
            <section>
                <p>Site content &copy; Rory Hackney <?= $copyYear ?>.</p>
                <address id="footer-icons">
                    <a href="<?php echo $email; ?>" target="_blank">
                        <span class="fa fa-envelope fa-2x" title="Email"></span>
                    <?= $email ?></a>
                    <div>
                        <a href="<?php echo $linkedin; ?>" target="_blank">
                            <span class="fab fa-linkedin fa-2x" title="LinkedIn"></span>
                        LinkedIn</a>
                        <a href="<?php echo $github; ?>" target="_blank">
                            <span class="fab fa-github fa-2x" title="GitHub"></span>
                        GitHub</a>
                    </div>
                </address>
                <?php include 'includes/nav.php'; ?>
            </section>
        </footer>
    </body>
</html>