<?php
    class Project {
        private $name;
        private $link;
        private $image;
        private $alt;
        private $tags;
        private $date;
        private $summary;

        //$Name represents the name of the project, eg Java Swing Fractal.
        //The link will replace spaces with - and append .php and convert to lowercase
        //Image should be just the name of the image, eg fractal_image. Do not add .jpg, this should be added in code so various sizes can be created from one image name
        //Alt is the alt text for the image, eg "A red fractal made of triangles and circles on a black background"
        //Tags should be a single string, which is a list of tags, eg "Java, GUI, Graphics"
        //Date should be in the format Mon Year, eg "Jan 2024"
        function __construct($name, $image, $alt, $tags, $date, $summary) {
            $this->name = $name;
            $this->link = strtolower(str_replace(" ", "-", $name)) . ".php";
            $this->image = $image;
            $this->alt = $alt;
            $this->tags = $tags;
            $this->date = $date;
            $this->summary = $summary;
        }
    
        function displayProject() {
            echo(
            "<div class=\"column is-half\">
                <div class=\"project-card\">
                    <a href=\"$this->link\"><h3 class=\"title is-6 mb-0\">$this->name</h3></a>
                    <a href=\"$this->link\"><picture class=\"small-image dark-image\">
                        <source media=\"(min-width: 401px)\"
                            srcset=\"assets/$this->image-medium.jpg\">
                            <img src=\"assets/$this->image-small.jpg\" alt=\"$this->alt\"/>
                    </picture></a>
                    <div>
                        <span>$this->tags</span>
                        <span class=\"is-pulled-right\">$this->date</span>
                    </div>
                    <a href=\"$this->link\"><p class=\"content\">$this->summary</p></a>
                </div>
            </div>");
        } //end display
    } //end class

    $projects = array(
        new Project("Java Menu Drawing Sine", "sine-curve-card", "A menu in the console showing various options for user input", "Java, Backend Software Development", "Feb 2023",
        "Java project that scans user input, validates it, and uses it to select options from a menu, calculate a sine curve area, and draw the sine curve when requested using Graphics. One of my first Java projects.")
    ,
        new Project("Tech Portfolio", "tech-portfolio-code-examples", "Website design in Figma which was turned into the site you're on now!", "Mobile Friendly, Full Stack Web Development", "May 2022",
        "My software and web development/design portfolio (this website)! Optimized for mobile, with features including dark mode, a secure contact form, and passing HTML, CSS, and web accessibility standards.")
    ,
        new Project("PHP Finale", "php-finale-card", "Screenshot of a website built with PHP, showing a photo of Rory and links to various pages", "PHP, Backend Web Development", "Jan 2022",
        "My very first PHP project, recently updated with the skills and knowledge I've gained since. Features include daily content, database usage, user login and registration, kittens, form validation and submission, calculators, and more.")
    ,
        new Project("Database Design", "database-erd-diagram-card", "Entity relationship diagram (ERD) generated from the finished database, showing various customer, product, and business tables and views.", "Database Design, Project Documentation", "Aug 2021",
        "A database I designed and built for a small art business, tracking projects, clients, and cash flow. See my process conceptualizing, normalizing, and implementing the database.")
    ,
        new Project("The Book Shelf", "book-shelf-card", "Screenshot of a website with books and reviews, currently displaying a form to save favorite searches.", "Bulma, Frontend Web Development", "Jun 2021",
        "A book search and review search site built in a three-person team using Bulma, JavaScript, PHP, and SQL. Features include user accounts, forms that add to the database, dark mode, search, and a clean, mobile friendly design.")
    ,
        new Project("Yamagiwa Massage Website Design", "yamagiwa-massage-card", "Screenshot of a massage therapist's website, displaying a tranquil image of water near a rocky shore.", "Web Design, Project Documentation", "Apr 2021",
        "A massage provider's website, planned and refined through a web design project, wireframed and designed in Photoshop, and then prototyped using HTML, CSS, and JavaScript.")
    );
?>