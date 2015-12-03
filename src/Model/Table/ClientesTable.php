<?php

namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\HasMany $Areceber
 * @property \Cake\ORM\Association\HasMany $OrdemServico
 */
class ClientesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('clientes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->hasMany('Areceber', [
            'foreignKey' => 'cliente_id'
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
                ->allowEmpty('nome');

        $validator
                ->allowEmpty('endereco');

        $validator
                ->allowEmpty('numero');

        $validator
                ->allowEmpty('complemento');

        $validator
                ->allowEmpty('bairro');

        $validator
                ->allowEmpty('cidade');

        $validator
                ->allowEmpty('estado');

        $validator
                ->allowEmpty('cep');

        $validator
                ->allowEmpty('estado_civil');

        $validator
                ->allowEmpty('nacionalidade');

        $validator
                ->allowEmpty('profissao');

        $validator
                ->allowEmpty('dt_nascimento');

        $validator
                ->allowEmpty('mae');

        $validator
                ->allowEmpty('ctps');

        $validator
                ->allowEmpty('nit');

        $validator
                ->allowEmpty('cpf');

        return $validator;
    }

}
