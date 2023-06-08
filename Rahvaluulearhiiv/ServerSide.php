<?php
// Connect PostgreSQL 
$host = "localhost";
$port = "5432";
$dbname = "your_database_name";
$user = "your_username";
$password = "your_password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// save post data to the database
function savePostData($post) {
    global $conn;

    // Prepare the SQL statement
    $query = "INSERT INTO posts (picture, author, likes, comments, tags, archiver) VALUES ($1, $2, $3, $4, $5, $6)";
    $params = array($post['picture'], $post['author'], $post['likes'], $post['comments'], $post['tags'], $post['archiver']);

    // Execute the statement
    $result = pg_query_params($conn, $query, $params);

    if (!$result) {
        die("Error executing query: " . pg_last_error($conn));
    }
}

// retrieve saved posts from the database
function getSavedPosts() {
    global $conn;

    $query = "SELECT * FROM posts";
    $result = pg_query($conn, $query);

    $posts = array();
    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
            $posts[] = $row;
        }
    } else {
        die("Error executing query: " . pg_last_error($conn));
    }

    return $posts;
}

// filter posts by tag
function filterByTag($tag) {
    global $conn;

    $query = "SELECT * FROM posts WHERE LOWER(tags) LIKE LOWER('%' || $1 || '%')";
    $result = pg_query_params($conn, $query, array($tag));

    $filteredPosts = array();
    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
            $filteredPosts[] = $row;
        }
    } else {
        die("Error executing query: " . pg_last_error($conn));
    }

    return $filteredPosts;
}

// Close the database connection
pg_close($conn);
?>