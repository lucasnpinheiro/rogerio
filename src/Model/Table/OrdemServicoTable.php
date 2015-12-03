<?php

namespace App\Model\Table;

use App\Model\Entity\OrdemServico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * OrdemServico Model
 *
 * @property \Cake\ORM\Association\HasMany $OsClientes
 */
class OrdemServicoTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('ordem_servico');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('OsClientes', [
            'foreignKey' => 'ordem_servico_id'
        ]);

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
                ->allowEmpty('servico');

        $validator
                ->add('valor', 'valid', ['rule' => 'money'])
                ->allowEmpty('valor');

        $validator
                ->add('parcelas', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('parcelas');

        $validator
                ->allowEmpty('dt_vencto');

        $validator
                ->add('juros', 'valid', ['rule' => 'money'])
                ->allowEmpty('juros');

        $validator
                ->add('multa', 'valid', ['rule' => 'money'])
                ->allowEmpty('multa');

        return $validator;
    }

}
