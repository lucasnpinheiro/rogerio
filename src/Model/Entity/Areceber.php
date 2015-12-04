<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Areceber Entity.
 *
 * @property string $nro_docto
 * @property \Cake\I18n\Time $dt_vencto
 * @property int $cliente_id
 * @property \App\Model\Entity\Cliente $cliente
 * @property float $valor
 * @property int $parcela
 * @property float $vl_juros
 * @property float $vl_multa
 * @property string $status
 * @property \Cake\I18n\Time $dt_recebe
 * @property float $total_recebe
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $os_cliente_id
 * @property int $id
 * @property \App\Model\Entity\OsCliente $oscliente
 */
class Areceber extends Entity {

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
