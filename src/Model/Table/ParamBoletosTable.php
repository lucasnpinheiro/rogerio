<?php

namespace App\Model\Table;

use App\Model\Entity\ParamBoleto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * ParamBoletos Model
 *
 */
class ParamBoletosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('param_boletos');
        $this->displayField('id');
        $this->primaryKey('id');


        $this->addBehavior('Search.Search');
    }

    public function searchConfiguration() {
        return $this->searchConfigurationDynamic();
    }

    private function searchConfigurationDynamic() {
        $search = new Manager($this);
        $c = $this->schema()->columns();
        foreach ($c as $key => $value) {
            $t = $this->schema()->columnType($value);
            if ($t != 'string' AND $t != 'text') {
                $search->value($value, ['field' => $this->aliasField($value)]);
            } else {
                $search->like($value, ['before' => true, 'after' => true, 'field' => $this->aliasField($value)]);
            }
        }
        return $search;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
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
