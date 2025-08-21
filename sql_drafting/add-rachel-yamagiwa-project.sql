USE tech_portfolio;

INSERT INTO posts VALUES 
    -- title                            create_date    complete_date   
    ("Yamagiwa Massage Website Design", "January 5th, 2021", "April 7th, 2021",
    -- summary
    "A massage provider's website, planned and refined through a web design project, wireframed and designed in Photoshop, and then prototyped using HTML, CSS, and JavaScript.",
    -- is_collab    preview_filename_base            preview_alt
    false,          "yamagiwa-massage-card",    "Screenshot of a massage therapist's website, displaying a tranquil image of water near a rocky shore.")
;

--   tag      post
INSERT INTO post_tags VALUES
    ("Client Work", "Yamagiwa Massage Website Design"),
    ("Web Design", "Yamagiwa Massage Website Design"),
    ("Web Development", "Yamagiwa Massage Website Design"),
    ("HTML", "Yamagiwa Massage Website Design"),
    ("CSS", "Yamagiwa Massage Website Design"),
    ("Project Management", "Yamagiwa Massage Website Design"),
    ("Front End", "Yamagiwa Massage Website Design")
;

INSERT INTO images VALUES 
    -- filename base
    ("yamagiwa-massage-hero",
    -- alt
    "Website I built for a massage therapist, featuring serene water and stone imagery and easy to find information for clients.",
    -- post title
    "Yamagiwa Massage Website Design"),

    ("yamagiwa-massage-screen-clients",
    "A message saying 'Not accepting new clients' is displayed on the contact page to save the massage therapist time screening clients.",
    "Yamagiwa Massage Website Design"
    ),

    ("yamagiwa-massage-information-architecture",
    "Information architecture diagram displaying planned About, Pricing, Legal Notices, FAQs, and Contact pages.",
    "Yamagiwa Massage Website Design"
    ),

    ("yamagiwa-massage-wireframe-design",
    "Wireframe diagram for the pricing page built on a 960 pixel grid for the massage website.",
    "Yamagiwa Massage Website Design"
    ),

    ("yamagiwa-massage-visual-design",
    "Visual design of the massage website's pricing page based on the wireframe with a blue and yellow color scheme.",
    "Yamagiwa Massage Website Design"
    ),

    ("yamagiwa-massage-pricing-page",
    "The refined final website, showing the pricing page including individual and package costs for uninsured clients.",
    "Yamagiwa Massage Website Design"
    ),

    ("yamagiwa-massage-contact-page",
    "The refined final website, showing the contact page with a map and instructions for contacting the massage therapist.",
    "Yamagiwa Massage Website Design"
    )
;

INSERT INTO content (post, order_index, html_type, class, text_content, image_content) VALUES 
    ("Yamagiwa Massage Website Design", 1, "p", "process-steps",
    "Client Interview > Goals > Audience > Information Architecture > Competitive Analysis > Content Plan > Wireframe > Review > Color Design > Live Website", null),

    ("Yamagiwa Massage Website Design", 2, "p", "desktop-margin",
    "Yamagiwa Massage is a website I designed for a local massage therapist in Seattle. Because her business keeps her very busy, I wanted to build a website that would help her reduce her workload by screening clients and answering questions, without adding tasks like content management or responding to online messages.", null),

    ("Yamagiwa Massage Website Design", 3, "picture", "small-image",
    null, "yamagiwa-massage-screen-clients"),

    ("Yamagiwa Massage Website Design", 4, "p", null,
    "I first interviewed the client in order to understand the business goals, target audience, and design priorities of the project. I then developed information architecture to plan the overall structure of the website, and conducted competitive analysis on the websites of other massage clinics and providers to develop content, particularly about industry standard legal notices, allergens, and policies.", null),

    ("Yamagiwa Massage Website Design", 5, "picture", "small-image",
    null, "yamagiwa-massage-information-architecture"),

    ("Yamagiwa Massage Website Design", 6, "p", null,
    "Once I had completed the plan for the website, I built grid-based wireframes for each page of the website and conducted a color study to find the best design choices for the final website.", null),

    ("Yamagiwa Massage Website Design", 7, "picture", "small-image",
    null, "yamagiwa-massage-wireframe-design"),

    ("Yamagiwa Massage Website Design", 8, "picture", "small-image",
    null, "yamagiwa-massage-visual-design"),

    ("Yamagiwa Massage Website Design", 9, "p", null,
    "After gathering feedback from both the client and peers, I reviewed the design and made changes before prototyping the live website using HTML, CSS, and JavaScript.", null),

    ("Yamagiwa Massage Website Design", 10, "picture", "small-image",
    null, "yamagiwa-massage-pricing-page"),

    ("Yamagiwa Massage Website Design", 11, "picture", "small-image",
    null, "yamagiwa-massage-contact-page"),

    ("Yamagiwa Massage Website Design", 12, "p", null,
    "Thanks for checking out my project!", null),
    
    ("Yamagiwa Massage Website Design", 13, "html", null,
    "<p>If you'd like to see the full documentation for this project, feel free to view it <a href=\"https://docs.google.com/document/d/1n5GXkGc5fWb1lIZqrXXhsdXqYgVKI6SiniGlFhxKbO4/edit?usp=sharing\">here</a>!</p>", null),

    ("Yamagiwa Massage Website Design", 14, "html", null,
    "<div class=\"buttons-row three\"><a class=\"button\" href=\"portfolio/yamagiwa-massage\">Live Site</a><a class=\"button unset-width\" href=\"https://github.com/roryhackney/MassageWebsite/tree/main/prototype\" target=\"_blank\" aria-label=\"GitHub - link opens in new tab\">GitHub<span class=\"icon button-external\"><img src=\"assets/arrow-up-right-from-square-solid.svg\" alt=\"opens in new tab\"></span></a><a class=\"button urgent\" href=\"hire-me.php\">Hire Now</a></div>", null)
;