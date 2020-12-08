<?php
include './../templates/header.html.php';
?>

    <form id="txt" action="" method="post">

        <!--    <select class="custom-select" name="categorie" size="5">-->
        <!--        <option selected>Choisissez votre catégorie</option>-->
        <!--        <option value="1">Food lovers</option>-->
        <!--        <option value="2">Animaux</option>-->
        <!--        <option value="3">Société</option>-->
        <!--    </select>-->
        <br>
        <div align="center">
            <label class="bg-dark" for="comments">Saisissez votre titre !</label><br>
            <div id="txterror">
                <?php if (array_key_exists("title", $errors) == true) {
                    echo $errors["title"];
                } ?>
            </div>

            <input type="text" name="title" id="comments"
                   value="<?= filter_var($vote->title, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
        <br>
        <div align="center">
            <label class="bg-dark" for="comments">date d'expiration</label><br>
            <div id="txterror">
                <?php if (array_key_exists("expiration", $errors) == true) {
                    echo $errors["expiration"];
                } ?>
            </div>
            <input type="date" name="expiration" id="comments" 
                   value="<?= filter_var($vote->expiration, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
        </div>
        <br>

        <div align="center">
            <label class="bg-dark" for="comments">Options</label><br>

            <div id="txterror">
                <?php if (array_key_exists("options", $errors) == true) {
                    echo $errors["options"];
                } ?>
            </div>
            <?php

            foreach ($vote->options as $item): ?>


                <input type="text" name="options[]" id="comments"
                       value="<?= filter_var($item, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
                <br>
                <br>

            <?php endforeach ?>

        </div>
        <div align="center">
            <button type="button" onclick=";">Ajouter un choix</button>
        </div>

        <br>
        <div align="center">
            <input type="submit" name="submit" value="valider">
        </div>
        <br>
    </form>
<?php
include './../templates/footer.html.php';
?>