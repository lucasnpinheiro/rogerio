<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ParamBoleto Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $banco
 * @property string $agencia
 * @property string $ccorrente
 * @property string $carteira
 * @property string $convenio
 * @property string $cedente
 * @property string $cpf
 * @property int $nro_seq
 */
class ParamBoleto extends Entity
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
