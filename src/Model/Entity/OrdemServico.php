<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdemServico Entity.
 *
 * @property int $id
 * @property string $servico
 * @property float $valor
 * @property int $parcelas
 * @property \Cake\I18n\Time $dt_vencto
 * @property float $juros
 * @property float $multa
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class OrdemServico extends Entity {

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
        'clientes' => true,
    ];
    protected $_virtual = ['clientes'];

    protected function _getClientes() {
        if (!empty($this->cliente_id)) {
            $find = \Cake\ORM\TableRegistry::get('Clientes');
            return $find->find('all')->where(['id' => $this->cliente_id])->first()->toArray();
        }
    }

}
