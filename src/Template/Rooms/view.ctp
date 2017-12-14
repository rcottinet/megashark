<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Showtimes') ?></h4>
        <?php if (!empty($showtimes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('L') ?></th>
                <th scope="col"><?= __('M') ?></th>
                <th scope="col"><?= __('M') ?></th>
                <th scope="col"><?= __('J') ?></th>
                <th scope="col"><?= __('V') ?></th>
                <th scope="col"><?= __('S') ?></th>
                <th scope="col"><?= __('D') ?></th>   
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($showtimes as $showtimes): ?>
            <tr>
                <td><?= h([1]=>$showtimesThisWeek) ?></td>
                <td><?= h([2]=>$showtimesThisWeek) ?></td>
                <td><?= h([3]=>$showtimesThisWeek) ?></td>
                <td><?= h([4]=>$showtimesThisWeek) ?></td>
                <td><?= h([5]=>$showtimesThisWeek) ?></td>
                <td><?= h([6]=>$showtimesThisWeek) ?></td>
                <td><?= h([7]=>$showtimesThisWeek) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Showtimes', 'action' => 'view', $showtimes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Showtimes', 'action' => 'edit', $showtimes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Showtimes', 'action' => 'delete', $showtimes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtimes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
