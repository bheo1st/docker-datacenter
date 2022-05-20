<?php

if (! ($alert = $this->session->flashdata('alert')))
    return;

$data = json_decode($alert, true);
$class = isset($data['class']) ? $data['class'] : 'danger';
$text  = isset($data['text'])  ? $data['text']  : 'There were some error on your submitted data.';
$list  = isset($data['list'])  ? $data['list']  : [];

?>

<div class="alert alert-fill-<?= $class ?> mb-4" role="alert">
    <i class="mdi mdi-alert-circle mr-1" style="margin-left:-10px"></i>
    <?= $text ?>
    <?php if ($list) : ?>
    <ul class="mb-0 mt-3 ml-3">
        <?php foreach ($list as $item) : ?>
        <li><?= ucfirst($item) ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>