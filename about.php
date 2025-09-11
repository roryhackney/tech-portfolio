<?php 
    //title, class, h1, etc for the current page
    include 'includes/current-page.php';
    //contact form submission handling
    include 'includes/form-handler.php';
    //header, nav, main opener etc
    include 'includes/header.php';
?>
            <div id="hero">
                <picture>
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/general-hero-me-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/general-hero-me-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/general-hero-me-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/general-hero-me-medium.jpg">
                    <img src="assets/general-hero-me-small.jpg" alt="Photo of Rory Hackney smiling on the left next to abstract computer imagery on the right.">
                </picture>
            </div>
            <section>
                <h1 id="h1">About</h1>
                <section id="education">
                    <h2>My Education</h2>
                    <div class="row">
                        <img 
                            src="assets/graduation.jpg"
                            width="800" height="800"
                            alt="Photo of Rory Hackney, a white person in a black graduation cap and gown, smiling in front of some pine trees."
                        />
                        <div>
                            <ol>
                                <li><h3>BS in Computer Science</h3>
                                    <p>Sep 2022 - Jun 2025</p>
                                </li>
                                <li>
                                    <h3>Web Development and Design Certificate</h3>
                                    <p>Sep 2020 - Aug 2021</p>
                                </li>
                                <li>
                                    <h3>BFA in Comic Art</h3>
                                    <p>Sep 2012 - Jun 2016</p>
                                </li>
                            </ol>
                            <p>As a recent Computer Science BS graduate, I'm looking forward to making a positive impact in my new career.</p>
                            <p>I enjoy combining my technical skills in software development, web development, and programming with my design background, allowing me to work with clients, developers, and designers seamlessly.</p>
                            <p>During college, I had the opportunity to work on real world websites for clients like EllePower and Licton Springs Review.</p>
                        </div>

                    </div>
                </section>
                <section id="skills">
                    <h2>My Skills</h2>
                    <div class="row">
                        <div>
                            <ul>
                                <li><h3>Web Development</h3>
                                    <ul>
                                        <li>JavaScript, PHP, SQL, HTML, CSS</li>
                                        <li>TypeScript, React, Node, Express</li>
                                        <li>WordPress, Systeme.IO, Bulma</li>
                                    </ul>
                                </li>
                                <li><h3>Software Development</h3>
                                    <ul>
                                        <li>Java, SQL, Python, APIs</li>
                                        <li>Relational, NoSQL, Key/Value Databases</li>
                                        <li>Unit Testing, Software Design, Data Structures</li>
                                    </ul>
                                </li>
                                <li><h3>Cloud Computing</h3>
                                    <ul>
                                        <li>Amazon Web Services (AWS), Firebase, Google Cloud</li>
                                    </ul>
                                </li>
                                <li><h3>Project Management</h3>
                                    <ul>
                                        <li>Version Control, Git, GitHub</li>
                                        <li>Agile, Scrum, Sprints, Miro, Jira</li>
                                    </ul>
                                </li>
                                <li><h3>Design</h3>
                                    <ul>
                                        <li>Web Design, Software Design, UX Design</li>
                                        <li>Figma, Canva, Clip Studio Paint, Photoshop</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <img
                            src="assets/lsr-ellepower.jpg"
                            width="800" height="800"
                            alt="Screenshot of code that fetches and cleans content from the WordPress API above a website design in Figma for EllePower."
                        />
                    </div>
                </section>
                <section id="work-experience">
                    <h2>My Work Experience</h2>
                    <div class="row">
                        <img src="assets/chatbot.jpg" alt="Chatbot interface producing an AI policy based on school name, mission, approved AI tools, and stance (1-5)." width="800" height="800"/>
                        <div>
                            <ol>
                                <li>
                                    <div>
                                        <h3>AWS Open Source U Contributor</h3>
                                        <p>July - August 2025</p>
                                    </div>
                                    <ul>
                                        <li>Collaborated to develop REST API L3 construct for AWS Amplify.</li>
                                        <li>Improved skills in TypeScript, AWS cloud services, unit testing, version control, the factory pattern, and understanding large codebases.</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <h3>CS and IT Tutor</h3>
                                        <p>October 2021 - present</p>
                                    </div>
                                    <ul>
                                        <li>Strengthens knowledge explaining and troubleshooting CS concepts, Git issues, and Java, Python, JavaScript, and SQL code with students.</li>
                                        <li>Teaches students to debug and reason through bugs using browser inspectors, debuggers, stack traces, and by eye.</li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <h3>SureStart AI Intern</h3>
                                        <p>June - October 2024</p>
                                    </div>
                                    <ul>
                                        <li>Developed AI chatbot that produces draft of K-12 school policy on AI, taking into account user input, best practices, and industry research.</li>
                                        <li>Created Python program run in the terminal, then JavaScript version integrating with intuitive web interface for internal users and clients.</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
                <section id="client-work">
                    <h2>My Client Work</h2>
                    <div class="row">
                        <div>
                            <ol>
                                <li>
                                    <div>
                                        <h3>Licton Springs Review Website (Practicum)</h3>
                                        <p>January - June 2025</p>
                                    </div>
                                    <ul>
                                        <li>Collaborated to migrate existing WordPress website to React, fetching, cleaning, and displaying site content and student posts on the new website using TypeScript, Postman, and the WordPress API.</li>
                                        <li>Led rapid solution to add new student work in time for project demo.</li>
                                    </ul>
                                </li>

                                <li>
                                    <div>
                                        <h3>EllePower Website (Capstone)</h3>
                                        <p>April - June 2025</p>
                                    </div>
                                    <ul>
                                        <li>As lead, designed website layouts in Figma based on client design preferences, branding, and best practices in accessibility and UX.</li>
                                        <li>Implemented responsive website in Systeme.IO, developing advanced features with CSS and JavaScript, and custom blocks for use by client.</li>
                                    </ul>
                                </li>

                                <li>
                                    <div>
                                        <h3>Tabi Wellbeing Security Analysis</h3>
                                        <p>April - June 2025</p>
                                    </div>
                                    <ul>
                                        <li>Analyzed security vulnerabilities of health and wellness mobile app.</li>
                                        <li>Presented formal report of recommendations for Firebase /  Google Cloud resource access, multi factor authentication, database security rules, local privacy laws, backups, alerts, and input sanitization.</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                        <img src="assets/lsr-react.jpg" alt="Licton Springs Review website Poetry page above React code mapping generating HTML code for each post." width="800" height="800"/>
                    </div>
                </section>
                <p>See more of my projects on my <a href="portfolio.php">Portfolio</a> page.</p>
            </section>
            
            <?php include 'includes/footer.php';