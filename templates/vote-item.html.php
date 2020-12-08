

<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <?= $item->question;
        if ($item->expiration > time()):?>

            <a href="/votes?id=<?= $item->id ?>" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Votez !</a>
            <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Vote ouvert</a>

        <?php else:?>

            <a href="/votes?id=<?= $item->id ?>" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Résultats</a>
            <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Vote fermé</a>

        <?php endif; ?>

        <span class="badge badge-primary badge-pill"><?= random_int(0,500) ?> votes</span>
    </li>
</ul>

