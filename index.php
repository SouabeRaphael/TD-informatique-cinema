<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\\function.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\inc\header.php");
$movies = get_films();
$page = '';
$page = $_GET['page'];
$pageAdd = $page + 1;
$pagePrev = $page - 1;
if ($pagePrev < 1) {
    $pagePrev = 1;
}
?>


<div class="content-wrapper">
    <div class="bg-tilte">InfoCiné</div>
    <h1 class="title-popular">Les films les plus populaires</h1>
    <div class="container-item">
        <?php
        foreach ($movies as $element) {
            $title = $element->original_title;
            $img = $element->poster_path;
            $overview = $element->overview;
            $movies_id = $element->id;
            require './const/composant.php';
        }
        ?>
    </div>
    <div class="btn-pagination">
        <div class="container-btn-page">
            <button class="prev-page btn-page" name="prev"><a class="link-btn-page" href="http://php.test/TP-site-informatique-cinema?page=<?php echo $pagePrev; ?>">Prev</a></button>
            <button class="next-page btn-page" name="next"><a class="link-btn-page" href="http://php.test/TP-site-informatique-cinema?page=<?php echo $pageAdd; ?>">Next</a></button>
        </div>
    </div>

</div>

</body>

</html>