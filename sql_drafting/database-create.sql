CREATE DATABASE tech_portfolio;
USE tech_portfolio;

CREATE TABLE posts (
    title VARCHAR(64) PRIMARY KEY,
    create_date VARCHAR(64), -- honestly probs won't use but just in case we want to later...
    complete_date VARCHAR(64) NOT NULL,
    summary VARCHAR(512) NOT NULL, -- the excerpt displayed in list of posts
    is_collaborative BOOLEAN NOT NULL, -- was this a group project?
    preview_filename_base VARCHAR(64) NOT NULL,
    preview_alt VARCHAR(255) NOT NULL,
);

CREATE TABLE images (
    file_name_base VARCHAR(64) PRIMARY KEY,
    alt VARCHAR(255) NOT NULL,
    post VARCHAR(64) NOT NULL,
    FOREIGN KEY (post) REFERENCES posts(title)
);

-- rather than store a long html string, store html elements of a post's content in order
CREATE TABLE content (
    id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    -- so you can sort elements in order to display post content in order
    order_index SMALLINT NOT NULL,
    -- eg h1, p, picture, ....
    html_type VARCHAR(64) NOT NULL,
    -- for css styling, if null there is no class for the content
    class VARCHAR(64),
    -- this is text content for h1, p, etc, unused for images
    text_content VARCHAR(2048),
    -- which post this content is a part of
    post VARCHAR(64) NOT NULL,
    FOREIGN KEY (post) REFERENCES posts(title),
    -- image FK content for images eg base="myimage" would map to 
    -- <picture class="small-image">
    --     <source media="(min-width: 401px)"
    --             srcset="assets/myimage-medium.jpg">
    --     <img src="assets/myimage-small.jpg" alt="{content}">
    -- </picture>
    -- while h1, p, etc would map to
    -- <p>{content}</p>, ignoring image_src_base
    image_content VARCHAR(64),
    FOREIGN KEY (image_content) REFERENCES images(file_name_base)
);

-- eg design, websites, software, languages, skills used
CREATE TABLE tags (
    tag_name VARCHAR(64) PRIMARY KEY
);

-- associate posts with tags (many to many)
CREATE TABLE post_tags (
    tag VARCHAR(64) NOT NULL,
    FOREIGN KEY (tag) REFERENCES tags(tag_name),
    post VARCHAR(64) NOT NULL,
    FOREIGN KEY (post) REFERENCES posts(title),
    PRIMARY KEY (tag, post)
);