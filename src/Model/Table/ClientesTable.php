<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\HasMany $Areceber
 * @property \Cake\ORM\Association\HasMany $OrdemServico
 */
class ClientesTable extends Table
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

        $this->table('clientes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->hasMany('Areceber', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->hasMany('OrdemServico', [
            'foreignKey' => 'cliente_id'
        ]);
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
