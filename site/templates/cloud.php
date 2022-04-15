<?php snippet('header') ?>

<?php 
    $icon = $page->icon()->toFiles()->first();
?>

<main class="main">

    <article>
        <h1><?= $page->title() ?></h1>
        <div class="technology-layout">

            <div class="technology-info">
                <?php if ($page->text()->isNotEmpty()) : ?>
                    <div class="technology-text">
                        <?= $page->text() ?>
                    </div>
                <?php endif ?>

                <dl>
                    <?php if ($page->provider()->isNotEmpty()) : ?>
                        <dt>Provider</dt>
                        <dd><?= $page->provider() ?></dd>
                    <?php endif ?>

                    <?php if ($page->year()->isNotEmpty()) : ?>
                        <dt>Release</dt>
                        <dd><?= $page->year() ?></dd>
                    <?php endif ?>

                    <?php if ($page->service()->isNotEmpty()) : ?>
                        <dt>Services</dt>
                        <dd><?= $page->service() ?></dd>
                    <?php endif ?>

                    <?php if ($page->pricing()->isNotEmpty()) : ?>
                        <dt>Pricing</dt>
                        <dd><?= $page->pricing() ?></dd>
                    <?php endif ?>

                    <?php if ($page->link()->isNotEmpty()) : ?>
                        <dt>Link</dt>
                        <dd><?= $page->link() ?></dd>
                    <?php endif ?>
                </dl>
            </div>
            <div class="technology-gallery">
                <ul>
                    <li>
                        <figure>
                            <img src="<?= $icon->resize(1200, 1200)->url()  ?>" alt="<?= $icon->alt() ?>">
                            <figcaption>
                                <?= $icon->caption() ?>
                            </figcaption>
                        </figure>
                    </li>
                    <?php foreach ($page->serviceimages()->toFiles() as $image) : ?>
                        <li>
                            <figure>
                                <img src="<?= $image->resize(1200, 1200)->url()  ?>" alt="<?= $image->alt() ?>">
                                <figcaption>
                                    <?= $image->caption() ?>
                                </figcaption>
                            </figure>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>

    </article>
</main>

<?php snippet('footer') ?>