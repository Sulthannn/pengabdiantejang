<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php foreach ($pager->links() as $link) {
            $activeclass = $link['active'] ? 'active' : ''
        ?>
            <li class="page-item <?= $activeclass ?>"><a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a></li>

        <?php } ?>
    </ul>
</nav>