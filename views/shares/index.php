<div>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share somthing</a>
    <?php foreach($viewmodel as $item) : ?>
        <div class="well">
            <h3><?= $item['title']; ?></h3>
            <small><?= $item['create_date']; ?></small>
            <hr />
            <p><?= $item['body']; ?></p>
            <br />
            <a class="btn btn-default" href="<?= $item['link']; ?>" target="_blank">GO To Website</a>
        </div>
    <?php endforeach; ?>
</div>
