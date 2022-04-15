


    <?php if ($pagination->hasPages()): ?>
    <nav class="pagination">
        <?php if ($pagination->hasPrevPage()): ?>
        <a href="<?= $pagination->prevPageUrl() ?>" arial-label="Go to previous page">&larr;</a>
        <?php else: ?>
        <span>&larr;</span>
        <?php endif ?>

        <span>Page <?= $pagination->page() ?>  of <?= $pagination->pages() ?> </span>

        <?php if ($pagination->hasNextPage()): ?>
        <a href="<?= $pagination->nextPageUrl() ?>" arial-label="Go to next page">&rarr;</a>
        <?php else: ?>
        <span>&rarr;</span>
        <?php endif ?>
    </nav>
    <?php endif ?>