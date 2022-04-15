<?php snippet('header') ?>
<?php 
$categories = $page->children()->listed();
?>

<main class="main">
    <h1><?= $page->title() ?></h1>


    <ul class="technologys">
        <?php foreach ($categories as $project) : ?>
            <li>
                <a href="<?= $project->url() ?>">
                    <figure>

                        <?= $project->image()->crop(500, 500) ?>

                        <figcaption><?= $project->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</main>

<?php snippet('footer') ?>