<?php snippet('header') ?>

<?php 
$categories = $site->children()->filterBy('template', 'categories')->children()->listed()->paginate(3);
$pagination = $categories->pagination();
?>

<main class="main">
    <h1><?= $page->title() ?></h1>


    <ul class="technologys">
        <?php foreach ($categories as $technology) : ?>
            <li>
                <a href="<?= $technology->url() ?>">
                    <figure>
                        <?= $technology->image()->crop(500, 500) ?>

                        <figcaption><b><?= $technology->title() ?></b> | <?= $technology->parent()->title() ?></figcaption>
                    </figure>
                </a>
            </li>
        <?php endforeach ?>
    </ul>


    <?php snippet('pagination', ['pagination' => $pagination]) ?>

</main>

<?php snippet('footer') ?>