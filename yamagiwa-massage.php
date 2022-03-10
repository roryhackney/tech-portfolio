<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/yamagiwa-massage-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/yamagiwa-massage-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/yamagiwa-massage-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/yamagiwa-massage-hero-medium.jpg">
                    <img src="assets/yamagiwa-massage-hero-small.jpg" alt="Screenshot of a website I built for a massage therapist, featuring serene water and stone imagery and easy to find information for clients.">
                </picture>
                <div class="is-overlay"></div>
                <p class="hero-text">A massage provider's website, planned and refined through a web design project, wireframed and designed in Photoshop, and then prototyped using HTML, CSS, and JavaScript.</p>
                <a class="button" href="portfolio.php">Portfolio</a>
                <a class="button" href="resume.php">Resume</a>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <h2 class="title is-5 has-text-centered mb-2">Massage Website Design Project</h2>
                        <p class="has-text-centered">Launched Apr. 2021</p>
                        <p class="process-steps">Client Interview <i class='fas fa-caret-right'></i> Goals <i class='fas fa-caret-right'></i> Audience <i class='fas fa-caret-right'></i> Information Architecture <i class='fas fa-caret-right'></i> Competitive Analysis <i class='fas fa-caret-right'></i> Content Plan <i class='fas fa-caret-right'></i> Wireframe <i class='fas fa-caret-right'></i> Review <i class='fas fa-caret-right'></i> Color Design <i class='fas fa-caret-right'></i> Live Website</p>
                        <div class="tags-div">
                            <h3 class="title is-6 mb-2">Tags</h3>
                            <ul>
                                <li>HTML, CSS, JavaScript</li>
                                <li>Photoshop</li>
                                <li>Frontend Web Development</li>
                                <li>Web Design</li>
                                <li>Project Documentation</li>
                                <li>Client Work</li>
                            </ul>
                        </div>
                        <div class="block">
                            <p class="desktop-margin">Yamagiwa Massage is a website I designed for a local massage therapist in Seattle. Because her business keeps her very busy, I wanted to
                            build a website that would help her reduce her workload by screening clients and answering questions, without adding tasks like content
                            management or responding to online messages.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-screen-clients-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-screen-clients-small.jpg" alt="A message is displayed on the contact page to screen new clients in order to save Rachel time and labor.">
                        </picture>
                        <div class="block">
                            <p>I first interviewed the client in order to understand the business goals, target audience, and design priorities of the project. I then
                            developed information architecture to plan the overall structure of the website, and conducted competitive analysis on the websites of
                            other massage clinics and providers to develop content, particularly about industry standard legal notices, allergens, and policies.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-information-architecture-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-information-architecture-small.jpg" alt="Information architecture diagram for a client's massage website.">
                        </picture>
                        <div class="block">
                            <p>Once I had completed the plan for the website, I built grid-based wireframes for each page of the website and conducted a color study
                            to find the best design choices for the final website.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-wireframe-design-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-wireframe-design-small.jpg" alt="Wireframe diagram for the pricing page built on a 960 pixel grid for a massage website.">
                        </picture>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-visual-design-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-visual-design-small.jpg" alt="Visual design of the massage website's pricing pagea with the blue and yellow color scheme that was chosen.">
                        </picture>
                        <div class="block">
                            <p>After gathering feedback from both the client and peers, I reviewed the design and
                            made changes before prototyping the live website using HTML, CSS, and JavaScript.</p>
                        </div>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-pricing-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-pricing-page-small.jpg" alt="The refined final website, showing pricing and package information for uninsured clients.">
                        </picture>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/yamagiwa-massage-contact-page-medium.jpg 760w">
                            <img src="assets/yamagiwa-massage-contact-page-small.jpg" alt="The refined final website built with HTML and CSS, showing the information on the contact page.">
                        </picture>
                        <p class="has-text-centered">Thanks for checking out my project!</p>
                        <div class="block">
                            <p class="has-text-centered">If you'd like to see the full documentation for this project, feel free to view it <a href="https://docs.google.com/document/d/1n5GXkGc5fWb1lIZqrXXhsdXqYgVKI6SiniGlFhxKbO4/edit?usp=sharing" target="_blank">here</a>!</p>
                        </div>
                        <div class="buttons-row three">
                            <a class="button" href="portfolio/yamagiwa-massage" target="_blank">Live Site</a>
                            <a class="button" href="https://github.com/roryhackney/MassageWebsite/tree/main/prototype" target="_blank">GitHub</a>
                            <a class="button urgent" href="hire-me.php">Hire Now</a>
                        </div>
                        <a href="portfolio.php" class="has-text-centered mb-3">Back to Portfolio</a>
                    </div>
                    <?php include 'includes/sidebar.php'; ?> <!-- aside-->
                </div>
            </div>
<?php include 'includes/footer.php'; ?>