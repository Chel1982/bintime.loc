<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-lg-4">
            <?php if (isset($users)): ?>
                <ul>
                   <?php foreach ($users as $user): ?>
                       <li>
                           <?= $user->name ?>
                       </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            </div>

        </div>

    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="bottom-links">
            <?php echo LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => '<div class="pagination-next"><span>СЛЕДУЮЩАЯ</span></div>',
                'prevPageLabel' => '<div class="pagination-prev"><span>ПРЕДЫДУЩАЯ</span></div>',
                'maxButtonCount'=>5,
                'options' => [
                    'class' => 'pagination',
                ]
            ]);
            ?>
        </div>
    </div>
</div>
