</main>
        <footer>
            <div class="columns">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <nav>
                        <ul>
                            <li class="is-pulled-left mx-2"><a href="index.php">Home</a></li>
                            <li class="is-pulled-left mx-2"><a href="portfolio.php">Portfolio</a></li>
                            <li class="is-pulled-left mx-2"><a href="hire-me.php">Hire Me</a></li>
                            <li class="is-pulled-left mx-2"><a href="about-me.php">About Me</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <p class="has-text-centered">Site content &copy; Rory Hackney <?php echo $copyYear; ?>.</p>
                </div>
            </div>
        </footer>
        <script>
            function menuToggle() {
                let nav = document.getElementById("nav");
                if(nav.style.display !== "block") {
                    nav.style.display = "block";
                } else {
                    nav.style.display = "none";
                }
            }
        </script>
    </body>
</html>