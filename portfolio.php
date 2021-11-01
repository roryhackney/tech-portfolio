<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/home-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/home-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/home-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/home-hero-medium.jpg">
                    <img src="assets/home-hero-small.jpg" alt="Photo of Rory Hackney over a background of a computer displaying code next to a sketchbook filled with design work.">
                </picture>
                <p class="hero-text">Check out my recent work - web development, design, and mixed projects, along with a peek into my process.</p>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-5 has-text-centered">Recent Projects</h2>
                            </div>
                            <?php ?>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 1</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <div>
                                    <span>Tags, categories, etc</span>
                                    <span class="is-pulled-right">Date published</span>
                                </div>
                                <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-half">
                                <h3 class="title is-6 mb-0">Project 2</h3>
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                                <div>
                                    <span>Tags, categories, etc</span>
                                    <span class="is-pulled-right">Date published</span>
                                </div>
                                <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem iste nesciunt volup! Incidunt odit commodi laborus descia.</p>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row three">
                                    <a class="button" href="assets/resume.php">Resume</a>
                                    <a class="button" href="hire-me.php">Hire Now</a>
                                </div>
                                <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                                <a href="" class="is-block has-text-centered is-hidden-touch pb-3">Back to top</a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
<?php include 'includes/footer.php'; ?>
