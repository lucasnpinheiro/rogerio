<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OsCliente Entity.
 *
 * @property int $id
 * @property int $ordem_servico_id
 * @property int $clientes id
 * @property float $valor
 * @property int $parcela
 * @property \Cake\I18n\Time $dt_vencto
 * @property \App\Model\Entity\OrdemServido $ordem_servido
 * @property \App\Model\Entity\Areceber[] $areceber
 */
class OsCliente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
