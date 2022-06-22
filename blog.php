<?php include 'includes/header.php'; ?>
            <div class="hero-container">
                <picture class="hero">
                    <!--2000px, 1600px, 1200px, 800px, 480px-->
                    <source media="(min-width:1601px)" srcset="assets/blog-hero-largest.jpg">
                    <source media="(min-width:1201px)" srcset="assets/blog-hero-larger.jpg">
                    <source media="(min-width:801px)" srcset="assets/blog-hero-large.jpg">
                    <source media="(min-width:481px)" srcset="assets/blog-hero-medium.jpg">
                    <img src="assets/blog-hero-small.jpg" alt="What I Learned Today, over a decorative background.">
                </picture>
                <div class="is-overlay"></div>
            </div>
            <div class="main-content">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-two-thirds-desktop my-main"> <!--main-->
                    <!-- <h2 class="title is-5 has-text-centered mb-2">Web Development Blog</h2> -->
                    <div class="level">
                        <div class="tags-div">
                            <ul>
                                <li>Projects</li>
                                <li>Tutorials</li>
                                <li>Announcements</li>
                                <li>Other</li>
                            </ul>
                        </div>
                        <div class="ml-3">
                            <p>Welcome to my blog! I post about tech stuff I'm learning, current projects, news, and occasional tutorials.</p>
                        </div>
                    </div>
                    <!-- <div class="block">
                        <h3 class="title is-6 mb-2">Blog Post</h3>
                        <picture class="small-image">
                            <source media="(min-width: 401px)"
                            srcset="assets/blog-id-card-medium.jpg">
                            <img src="assets/blog-id-card-small.jpg" alt="Blog Title Image">
                        </picture>
                        <span>Posted Date</span>
                        <span>Category</span>
                        <p>Teaser text...</p>
                        <a href="post-link?postid=1">Post Link</a>
                    </div> -->
                    <div class="project-card">
                        <a href="how-to-use-filezilla.php"><h3 class="title is-6 mb-2">How to Use FileZilla</h3></a>
                        <a href="how-to-use-filezilla.php">
                            <picture class="small-image">
                                <source media="(min-width: 401px)"
                                srcset="assets/blog-filezilla-card-medium.jpg">
                                <img src="assets/blog-filezilla-card-small.jpg" alt="Screenshot of FileZilla">
                            </picture>
                        </a>
                        <span>Posted 6/19/22</span>
                        <span class="pl-2">Tutorials</span>
                        <a href="how-to-use-filezilla.php">
                            <h4 class="has-text-weight-bold">What is FileZilla?</h4>
                            <p>FileZilla is a free file transfer software used to upload files from your local computer to your website, or
                            download from your website, or other tasks. The advantage of FileZilla, compared to DreamHost and other built in file
                            transfer tools, is that it’s much faster to...</p>
                        </a>
                    </div>
                </div>
                <?php include 'includes/sidebar.php'; ?> <!-- aside-->
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>