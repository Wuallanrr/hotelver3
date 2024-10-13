<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Financeiro $financeiro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Financeiro'), ['action' => 'edit', $financeiro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Financeiro'), ['action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Financeiro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Financeiro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="financeiro view content">
            <h3><?= h($financeiro->Ano) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $financeiro->hasValue('funcionario') ? $this->Html->link($financeiro->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $financeiro->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganho') ?></th>
                    <td><?= $financeiro->hasValue('ganho') ? $this->Html->link($financeiro->ganho->id, ['controller' => 'Ganho', 'action' => 'view', $financeiro->ganho->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Despesa') ?></th>
                    <td><?= $financeiro->hasValue('despesa') ? $this->Html->link($financeiro->despesa->id, ['controller' => 'Despesa', 'action' => 'view', $financeiro->despesa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h($financeiro->Ano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechamento Mes') ?></th>
                    <td><?= h($financeiro->fechamento_mes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($financeiro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Liquido') ?></th>
                    <td><?= $this->Number->format($financeiro->valor_liquido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lanc') ?></th>
                    <td><?= h($financeiro->data_lanc) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>