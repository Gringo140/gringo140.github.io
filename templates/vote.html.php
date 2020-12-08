<?php
include './../templates/header.html.php';
?>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        Catégorie
    </button>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        Date
    </button>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        Filtres
    </button>
</div>
<br>
<!--<nav aria-label="...">-->
<!--    <ul class="pagination">-->
<!--        <li class="page-item disabled">-->
<!--            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">précédent</a>-->
<!--        </li>-->
<!--        <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--        <li class="page-item active" aria-current="page">-->
<!--            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>-->
<!--        </li>-->
<!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--        <li class="page-item">-->
<!--            <a class="page-link" href="#">Suivant</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->

<?php
include "./../templates/vote-item.html.php";


include './../templates/footer.html.php';
?>

