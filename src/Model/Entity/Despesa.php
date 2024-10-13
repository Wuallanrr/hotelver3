<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Despesa Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $funcionario_id
 * @property string $valor_gasto
 * @property \Cake\I18n\Date $data_gasto
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Financeiro[] $financeiro
 */
class Despesa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'produto_id' => true,
        'funcionario_id' => true,
        'valor_gasto' => true,
        'data_gasto' => true,
        'produto' => true,
        'funcionario' => true,
        'financeiro' => true,
    ];
}