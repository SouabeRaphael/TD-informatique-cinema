<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\\function.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $movie = get_films_id($id);
}
?>

<?php
// pretty_print_r($movie);
$title = $movie->title;
$img =  $movie->backdrop_path;
$overview = $movie->overview;
$genres = $movie->genres;
$release_date = $movie->release_date;
?>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\inc\header.php"); ?>
<div class="content-details">
    <div class="first-page">
        <style>
            .first-page {
                background-image: url('https://image.tmdb.org/t/p/original<?php echo $img; ?> ');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <div class="info-movie">
            <div class="content-movie-detail">
                <div class="info-movie-detail">
                    <b><span>POPULAR</span> 2021</b>
                    <h1 class="title-movie-details"><?php echo $title; ?></h1>
                </div>
                <div class="separator"></div>
                <div class="container-genre">
                    <div class="item-genre">
                        <?php
                        foreach ($genres as $genre) {
                            echo '<div class="genre">' . $genre->name . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="synop">
                    <p><?php echo $overview; ?></p>
                </div>
                <p><?php echo $release_date; ?></p>
            </div>
        </div>
    </div>
</div>

</body>

</html>