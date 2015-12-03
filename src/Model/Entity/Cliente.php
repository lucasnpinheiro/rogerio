<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $estado_civil
 * @property string $nacionalidade
 * @property string $profissao
 * @property \Cake\I18n\Time $dt_nascimento
 * @property string $mae
 * @property string $ctps
 * @property string $nit
 * @property string $cpf
 * @property \App\Model\Entity\Areceber[] $areceber
 * @property \App\Model\Entity\OrdemServico[] $ordem_servico
 */
class Cliente extends Entity {

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

    protected function _getCpf() {
        return trim(str_replace(array('.', '-'), '', $this->_properties['cpf']));
    }

    protected function _setCpf($cpf) {
        $cpf = trim(str_replace(array('.', '-'), '', $cpf));
        return $cpf;
    }

}
