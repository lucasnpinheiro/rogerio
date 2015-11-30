<?php
namespace App\Model\Table;

use App\Model\Entity\Areceber;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Areceber Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 * @property \Cake\ORM\Association\BelongsTo $OsClientes
 */
class AreceberTable extends Table
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

        $this->table('areceber');
        $this->displayField('nro_docto');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->belongsTo('OsClientes', [
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
            ->allowEmpty('nro_docto');

        $validator
           
            ->allowEmpty('dt_vencto');

        $validator
            ->add('valor', 'valid', ['rule' => 'money'])
            ->allowEmpty('valor');

        $validator
            ->add('parcela', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('parcela');

        $validator
            ->add('vl_juros', 'valid', ['rule' => 'money'])
            ->allowEmpty('vl_juros');

        $validator
            ->add('vl_multa', 'valid', ['rule' => 'money'])
            ->allowEmpty('vl_multa');

        $validator
            ->allowEmpty('status');

        $validator
            
            ->allowEmpty('dt_recebe');

        $validator
            ->add('total_recebe', 'valid', ['rule' => 'money'])
            ->allowEmpty('total_recebe');

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['os_cliente_id'], 'OsClientes'));
        return $rules;
    }
}
