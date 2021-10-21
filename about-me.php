<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2001px, 1600px, 1200px, 800px, 480px-->
                    <source
                        media="(min-width:801px)"
                        srcset="assets/home-hero-large.jpg 1200w,
                        assets/home-hero-larger.jpg 1599w,
                        assets/home-hero-largest.jpg 2001w">
                    <source
                        media="(min-width:481px)"
                        srcset="assets/home-hero-medium.jpg 800w">
                    <img src="assets/home-hero-small.jpg"
                    alt="">
                </picture>
                <p class="hero-text">I’m a web developer passionate about making the web more accessible by creating intuitive, mobile friendly, quality websites that combine functionality with creativity.</p>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop">
                        <div class="columns is-multiline">
                            <div class="column is-full">
                                <h2 class="title is-6 mb-0">My education and certifications</h2>
                                <p>I received my BFA from the Minneapolis College of Art and Design in 2016, and for the past few years I’ve been studying web development in school and out. I moved to Seattle February 2020 and graduated with a Certificate in Web Development and Design September 2021 from Seattle Central College.</p>
                                <picture class="large-image">
                                    <!--400 like small-image on mobile, then 760 on tablet, 900/1240/1600> on desktop-->
                                    <source media="(min-width: 1551px)" srcset="assets/home-body-largest.jpg"> <!--1550-max-->
                                    <source media="(min-width:1081px)" srcset="assets/home-body-larger.jpg"> <!--1081-1550-->
                                    <source media="(min-width:790px)" srcset="assets/home-body-large.jpg"> <!--790 - 1080-->
                                    <source media="(min-width: 401px)" srcset="assets/home-body-medium.jpg"> <!--401 to 789-->
                                    <img src="assets/home-body-small.jpg" alt="Rory Hackney standing in front of two graduation certificates framed on a wall.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-6 mb-0">My top priorities when building websites</h2>
                                <ul>
                                    <li>Web accessibility for all</li>
                                    <li>Responsive, mobile first layouts</li>
                                    <li>High quality code and best practices</li>
                                    <li>Useful, creative, consistent design</li>
                                    <li>Improving and learning every day</li>
                                </ul>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-half">
                                <h2 class="title is-6 mb-0">My favorite languages and software</h2>
                                <div class="columns is-mobile">
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>SASS</li>
                                            <li title="CSS Framework">Bulma</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>JavaScript</li>
                                            <li>PHP</li>
                                            <li>Python</li>
                                            <li>SQL</li>
                                        </ul>
                                    </div>
                                    <div class="column is-one-third">
                                        <ul>
                                            <li>Figma</li>
                                            <li>Photoshop</li>
                                            <li title="Project Management">Asana</li>
                                            <li>GitHub</li>
                                        </ul>
                                    </div>
                                </div>
                                <picture class="small-image is-hidden-tablet">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-half is-hidden-mobile">
                                <picture class="small-image">
                                    <source media="(min-width: 401px)"
                                    srcset="assets/home-body-medium.jpg 760w">
                                    <img src="assets/home-body-small.jpg" alt="Website design displayed on mobile, tablet, and desktop, from wireframe to full site.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <p>In addition to coding, I enjoy producing diagrams, design documents, and case studies. I spend my free time making art for fun, petting cats, and learning more about web development and design.</p>
                                <picture class="large-image">
                                    <source media="(min-width: 1551px)" srcset="assets/home-body-largest.jpg">
                                    <source media="(min-width:1081px)" srcset="assets/home-body-larger.jpg">
                                    <source media="(min-width:790px)" srcset="assets/home-body-large.jpg">
                                    <source media="(min-width: 401px)" srcset="assets/home-body-medium.jpg">
                                    <img src="assets/home-body-small.jpg" alt="Rory Hackney standing in front of two graduation certificates framed on a wall.">
                                </picture>
                            </div>
                            <div class="column is-full">
                                <div class="buttons-row">
                                    <a class="button" href="portfolio.php">Portfolio</a>
                                    <a class="button" href="hire-me.php">Hire Now</a>
                                </div>
                                <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                                <a href="" class="is-block has-text-centered is-hidden-touch">Back to top</a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
<?php include 'includes/footer.php'; ?>