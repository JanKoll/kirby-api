<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/index.css') ?>
    <?= css('@auto') ?>
</head>

<body>

    <header class="header">
        <a class="logo" href="<?= $site->url() ?>"> <?= $site->title() ?></a>
        <nav class="menu">
            <ul>
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>