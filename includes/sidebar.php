<div class="column is-full-tablet is-one-third-desktop px-6 aside">
                        <h2 class="title is-5 has-text-centered">Thank you!</h2>
                        <div class="columns is-multiline">
                            <div class="column is-half-tablet is-full-desktop">
                                <p class="content">Thanks for checking out my work! If you've got a project or job you think suits me, contact me here, by <a href="mailto:roryhackney@gmail.com">email</a>, or on <a href="https://www.linkedin.com/in/roryhackney" target="_blank">LinkedIn</a>.</p>
                                <h2 id="contact" class="title is-5 has-text-centered mb-1 mt-3">Contact Me</h2>
                                <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="field">
                                        <label class="label" for="name">Name</label>
                                        <div class="control">
                                            <input class="input is-grey-darker" type="text" id="name" name="name" maxlength="250" value="<?php echo $name;?>">
                                        </div>
                                        <span class="error help is-danger"><?php echo $nameError;?></span>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="email">Email</label>
                                        <div class="control">
                                            <input class="input" type="text" id="email" name="email" maxlength="250" value="<?php echo $emailValue;?>">
                                        </div>
                                        <span class="error help is-danger"><?php echo $emailError;?></span>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="subject">Subject</label>
                                        <div class="control">
                                            <input class="input" type="text" id="subject" name="subject" maxlength="250" value="<?php echo $subject;?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="message">Message</label>
                                        <div class="control">
                                            <textarea class="textarea" id="message" name="message" maxlength="600"><?php echo $message;?></textarea>
                                        </div>
                                        <span class="error help is-danger"><?php echo $messageError;?></span>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="g-recaptcha" data-sitekey="6LdQbH8fAAAAAK-0EELREPd1hStjBMzpv4a9mut1"></div>
                                        </div>
                                        <span class="error help is-danger"><?php echo $recaptchaError;?></span>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <button class="button" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="column is-half-tablet is-full-desktop contact-icons">
                                <h2 class="title is-5 has-text-centered">Find Me</h2>
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <a href="mailto:roryhackney@gmail.com"><span class="level-item"><i class="fas fa-2x fa-envelope"></i></span></a>
                                        <span class="level-item pl-3"><a href="mailto:roryhackney@gmail.com">roryhackney@gmail.com</a></span>
                                    </div>
                                </div>
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <a href="https://www.linkedin.com/in/roryhackney" target="_blank" class="no-ext"><span class="level-item"><i class="fab fa-2x fa-linkedin"></i></span></a>
                                        <span class="level-item pl-3"><a href="https://www.linkedin.com/in/roryhackney" target="_blank">LinkedIn</a></span>
                                    </div>
                                </div>
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <a href="https://github.com/roryhackney" target="_blank" class="no-ext"><span class="level-item"><i class="fab fa-2x fa-github-square"></i></span></a>
                                        <span class="level-item pl-3"><a href="https://github.com/roryhackney" target="_blank">GitHub</a></span>
                                    </div>
                                </div>
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <a href="resume.php"><span class="level-item"><i class="fas fa-2x fa-file-alt"></i></span></a>
                                        <span class="level-item pl-3"><a href="resume.php">Resume</a></span>
                                    </div>
                                </div>
                            </div>
                        <p class="has-text-centered is-hidden-desktop mx-3">Thanks for dropping by!</p>
                        <a href="" class="is-block has-text-centered is-hidden-desktop mx-3" role="button">Back to top</a>
                    </div>