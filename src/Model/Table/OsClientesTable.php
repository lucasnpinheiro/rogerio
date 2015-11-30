<?php
namespace App\Model\Table;

use App\Model\Entity\OsCliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OsClientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrdemServicos
 * @property \Cake\ORM\Association\HasMany $Areceber
 */
class OsClientesTable extends Table
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

        $this->table('os_clientes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('OrdemServico', [
            'foreignKey' => 'ordem_servico_id'
        ]);
        $this->hasMany('Areceber', [
            'foreignKey' => 'os_cliente_id'
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
            ->add('cliente_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cliente_id');

        $validator
            ->add('valor', 'valid', ['rule' => 'money'])
            ->allowEmpty('valor');

        $validator
            ->add('parcela', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('parcela');

        $validator
           
            ->allowEmpty('dt_vencto');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['ordem_servico_id'], 'OrdemServico'));
        return $rules;
    }
}
