<?php

include "dbconnection.php";

if (isset($_REQUEST["s"])) {
    $start = abs($_REQUEST["s"]);
} else {
    $start = 0;
}

$records_per_page = 5;
$end = $start + $records_per_page;

$sql = "SELECT book_name, image_name, price FROM books;";

$stmt = $con->prepare($sql);
$stmt->execute();
$rows = $stmt->rowcount();

$nooflinks = ($rows - ($rows % $records_per_page)) / $records_per_page;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstall Shop</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/shop.css" />

</head>

<body>
    <?php require_once("header.php"); ?>

    <div class="breadcrumb">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>shop</li>
        </ul>
    </div>

    <div class="book-slides">
        <div id="category" class="row">
            <h3>Catogories</h3>
            <ul>
                <a href="#all">
                    <li>All</li>
                </a>
                <a href="">
                    <li>Action and Adventure</li>
                </a>
                <a href="">
                    <li>Animal and Wildlife</li>
                </a>
                <a href="">
                    <li>English</li>
                </a>
                <a href="">
                    <li>Clildren's books</li>
                </a>
                <a href="">
                    <li>Historical</li>
                </a>
                <a href="">
                    <li>Biographies</li>
                </a>
                <a href="">
                    <li>Histoarical Fictions</li>
                </a>
                <a href="">
                    <li>Art and Theater</li>
                </a>
            </ul>
        </div>
        <div id="book-show" class="row">
            <div class="row1">
                <?php
                if (isset($_REQUEST["p"])) {
                    $temp = $_REQUEST["p"];
                    $ss = (($temp - 1) * $records_per_page);
                    $sql = "SELECT book_name,img_name,price FROM books limit $ss,$records_per_page";
                } else {
                    $sql = "SELECT book_name,img_name,price FROM books limit $start,$records_per_page";
                }
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $list = $stmt->fetchall();
                $rows = $stmt->rowcount();

                foreach ($list as $r) {
                    echo "
                    <div id=\"books\" class=\"row1-1\">
                        <div class=\"image-box\">
                            <img src=\"" . $r['img_name'] . "\" alt=\"\" width=\"225rem\">
                        </div>
                        
                        <span>" . $r['book_name'] . "</span><br>
                        <span>" . $r['price'] . "</span><br>
                        <button type=\"submit\" name=\"view\" value=\"27545\" class=\"btn\">view</button>

                    
                        </div>
                    ";
                }
                ?>
            </div>

        </div>
    </div>
    <div class="navigation">

        <?php
        if ($start != 0) {

        ?>

            <a href="shop.php?s=<?php echo $start - 5; ?>">BACK</a>
        <?php
        }

        for ($i = 1; $i < $nooflinks; $i++) {
            echo "<a href='shop.php?p=" . $i . "'>$i</a>&nbsp";
        }

        ?>



        <a href="shop.php?s=<?php echo $end; ?>">NEXT</a>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>