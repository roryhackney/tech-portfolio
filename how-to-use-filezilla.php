<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/blog-filezilla-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/blog-filezilla-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/blog-filezilla-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/blog-filezilla-hero-medium.jpg">
                    <img src="assets/blog-filezilla-hero-small.jpg" alt="Screenshot of FileZilla">
                </picture>
                <div class="is-overlay"></div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                        <span class="tags-span">Posted 6/19/22</span>
                        <span class="pl-2 tags-span">Tutorials</span>
                        <div class="block pt-2">
                            <h3 class="title is-6 mb-0">Note:</h3>
                            <p>This tutorial was written using a Windows 10 laptop, Google Chrome, FileZilla version 3.6, and
                                DreamHost shared hosting. Things may look different on other browsers, operating systems, or versions.</p>
                        </div>
                        <div class="block">
                            <h3 class="title is-6 mb-2">What Is FileZilla?</h3>
                            <p>FileZilla is a free file transfer software used to upload files from your local computer to your website,
                                or download from your website, or other tasks. The advantage of FileZilla, compared to DreamHost and other built in
                                file transfer tools, is that it’s much faster to upload files, you can see the folder structure both
                                locally and online easily, and it’s faster to connect to your site(s) than it is on the web.</p>
                        </div>
                        <div class="block">
                            <h3 class="title is-6 mb-2">How Do I Start?</h3>
                            <ol>
                                <li>Download Filezilla. Go to <a href="https://filezilla-project.org/download.php?type=client" target="_blank"
                                >filezilla-project.org/download.php?type=client</a> (or search for filezilla in your browser) and download the
                                free client version.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-download-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-download-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-download-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-download-small.jpg" alt="Screenshot of the FileZilla website with a large Download button.">
                                </picture></li>
                                <li value="2">Click the button on the leftmost column (basic Filezilla), not with manual (unless you want
                                a user manual), not Pro (unless you want the higher end, paid version).</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-options-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-options-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-options-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-options-small.jpg" alt="FileZilla download options with the left option circled in red.">
                                </picture></li>
                                <li value="3">Click on the downloaded file in your browser, or go to Downloads and click on the downloaded file from there.
                                    Allow it to make changes to your device. Agree to the license agreement.</li>
                                <li>Click through the installation wizard, leaving everything as default. Click Install. Click Finish and allow it to Start Filezilla Now.</li>
                                <li>Click OK on the Welcome popup.</li>
                                <li>An explanation of the system: at the top are fields that you fill out to connect to your hosted website files. The Local Site box refers to
                                    a folder on your computer, holding your local files. Below that is all the filenames within it. If you change the folder in Local Site,
                                    for example to the folder holding your current project, it will then display those files for easy file transfer.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-interface-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-interface-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-interface-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-interface-small.jpg" alt="FileZilla UI with different areas circled and captioned: Log In, Local Files, Hosted Files.">
                                </picture></li>
                                <li value="7">If you’re not sure how to find your desired folder in Filezilla, you can navigate to the folder in File Explorer, and click the folder icon to
                                    display the path to that folder.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-finder1-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-finder1-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-finder1-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-finder1-small.jpg" alt="File Explorer with the path at the top circled and labeled 'Click Here'.">
                                </picture></li>
                                <li value="8">Copy your preferred folder path and paste it in the Local Site field. Filezilla should now display your files.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-finder2-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-finder2-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-finder2-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-finder2-small.jpg" alt="File Explorer with an arrow pointing to the Local Site field in FileZilla where the path should be pasted.">
                                </picture></li>
                                <li value="9">Now, on the right side of Filezilla, Remote Site will display your web hosting server files once you enter your host name, username, password, and port.</li>
                                <li>Your hostname is easy to find, being the name of your website. For example, my website is https://www.roryhackney.com, so my hostname is roryhackney.com.</li>
                                <li>You can either connect using Secure File Transfer Protocol (SFTP, preferred) or insecure File Transfer Protocol (FTP). To connect securely, prefix sftp:// before
                                    your hostname, ie sftp://roryhackney.com, or enter 22 for the port. 21 is the port for FTP.</li>
                                <li>Your username (at least in Dreamhost) is a more secure randomized string of letters and numbers created by Dreamhost, not your email. You can find it by logging in
                                    to dreamhost.com and going to Websites > Manage Websites > Your Website > Manage Your Site > Show Login Info.</li>
                                <li>Your password will be what you set when you made your web hosting account. If it doesn’t work, try resetting your password, even if you’re sure it’s right. It could
                                    be a bug causing the issue.</li>
                                <li>Enter your port if you haven't already. 22 for SFTP, 21 for FTP, or another port if you've changed it manually or with code.</li>
                                <li>Press Quickconnect. There may be a popup saying the host key is unknown. You can check Dreamhost or your hosting provider to be sure, or just click OK. The right side of
                                    the Filezilla screen should now be populated with the files in your web hosting service.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-connected-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-connected-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-connected-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-connected-small.jpg" alt="FileZilla displaying local files on the left and hosted files on the right.">
                                </picture></li>
                                <li value="16">To upload files, simply drag them from the left side to the right, into the folder you want, or right click and press upload to put them into the folder that’s open on
                                    the right. You are now set up with Filezilla!</li>
                            </ol>
                        </div>
                        <div class="block">
                            <h3 class="title is-6 mb-2">Bonus: Saving Site Connections Using Site Manager</h3>
                            <p class="pb-2">If you connect to a website often, it might be worth your time to save your settings and credentials using Site Manager.</p>
                            <ol>
                                <li>In FileZilla, click File > Site Manager.</li>
                                <li>To create a new site connection, click New Site on the bottom left, and fill out the fields on the right.</li>
                                <li class="no-bullet"><picture class="large-image">
                                    <source media="(min-width:961px)" srcset="assets/blog-filezilla-site-manager-larger.jpg"> <!--961 - max 2000-->
                                    <source media="(min-width:791px)" srcset="assets/blog-filezilla-site-manager-large.jpg"> <!--791 - 960-->
                                    <source media="(min-width: 421px)" srcset="assets/blog-filezilla-site-manager-medium.jpg"> <!--421 to 791-->
                                    <img src="assets/blog-filezilla-site-manager-small.jpg" alt="FileZilla Site Manager tool with New Site and Settings circled.">
                                </picture></li>
                                <li value="3">Set Protocol to SFTP - Secure File Transfer Protocol, unless you want to use FTP instead.</li>
                                <li>Set Hostname to yoursite.com.</li>
                                <li>If Port is something other than the default 21 for FTP or 22 for SFTP, enter it there. Otherwise, the Site Manager will automatically set this based off Protocol.</li>
                                <li>Set the Logon Type to your preferred authentication, such as Ask For Password.</li>
                                <li>Set the User to your username.</li>
                                <li>Now anytime you want to connect to your site quickly and easily, just select your site in Site Manager and click Connect!</li>
                            </ol>
                        </div>
                        <div class="block">
                            <p class="pb-2">I hope this helps you with uploading your files more quickly and easily. FileZilla is a great tool used by many developers! If you found this helpful, please consider checking
                                out my <a href="portfolio.php">web development portfolio</a>.</p>
                            <p class="has-text-centered is-hidden-touch">Thanks for dropping by!</p>
                            <a href="" class="is-block has-text-centered is-hidden-touch pb-3" role="button">Back to top</a>
                        </div>
                    </div>
                <?php include 'includes/sidebar.php'; ?> <!-- aside-->
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?></div>