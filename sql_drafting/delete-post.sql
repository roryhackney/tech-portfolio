DELETE FROM post_tags WHERE post = TITLE;
DELETE FROM images WHERE post = TITLE;
DELETE FROM post_content WHERE post = TITLE;
DELETE FROM posts WHERE title = TITLE;
