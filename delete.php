<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$hostname = "localhost";
$username = "root";
$password = "password";
$dbname = "blogdb";
$conn = new mysqli($hostname, $username, $password, $dbname);

if (!empty($_GET["id"])) {

    $stmt = "DELETE FROM articles WHERE id = " . $_GET["id"];
    $delete = $conn->query($stmt);

}


// delete : table ke andar row ko gayab
// drop: puri table ko khtm
// truncate: table ka data remove krdeta hai


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cool Blog</title>

    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <?php include './components/header.php';  ?>
    <main>
        <!-- This is our main content area. This is where the content of each page will go. For example, on the home page, we might have a list of recent blog posts. On the about page, we might have some information about the author. On the contact page, we might have a contact form. -->

        <div class="form-wrapper">
            <?php if ($delete) { ?>
                <h2>Article deleted successfully.</h2>
            <?php } else{ ?>
                <h2>Failed to delete article</h2>
            <?php } ?>


        </div>
    </main>


    <footer>
        <!-- This is our footer, it will be the same on all pages. It will contain some copyright information and maybe some links to social media. -->
    </footer>

</body>

</html>