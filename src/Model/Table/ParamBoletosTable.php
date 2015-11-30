<?php
namespace App\Model\Table;

use App\Model\Entity\ParamBoleto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ParamBoletos Model
 *
 */
class ParamBoletosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('param_boletos');
        $this->displayField('id');
        $this->primaryKey('id');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('banco');

        $validator
            ->allowEmpty('agencia');

        $validator
            ->allowEmpty('ccorrente');

        $validator
            ->allowEmpty('carteira');

        $validator
            ->allowEmpty('convenio');

        $validator
            ->allowEmpty('cedente');

        $validator
            ->allowEmpty('cpf');

        $validator
            ->add('nro_seq', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('nro_seq');

        return $validator;
    }
}
