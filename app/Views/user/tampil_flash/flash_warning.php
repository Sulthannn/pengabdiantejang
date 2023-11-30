<?php if ($session->getFlashdata('warning')) : ?>
    <div class="alert alert-warning">
        <ul>
            <?php foreach ($session->getFlashdata('warning') as $warn) : ?>
                <li><?= $warn ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
<?php if ($session->getFlashdata('success')) : ?>
    <div class="alert alert-success">
        <ul>
            <?php foreach ($session->getFlashdata('success') as $scs) : ?>
                <li><?= $scs ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>