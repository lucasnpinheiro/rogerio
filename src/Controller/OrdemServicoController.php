<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdemServico Controller
 *
 * @property \App\Model\Table\OrdemServicoTable $OrdemServico
 */
class OrdemServicoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $this->set('ordemServico', $this->paginate($this->OrdemServico));
        $this->set('_serialize', ['ordemServico']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordem Servico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordemServico = $this->OrdemServico->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('ordemServico', $ordemServico);
        $this->set('_serialize', ['ordemServico']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordemServico = $this->OrdemServico->newEntity();
        if ($this->request->is('post'))
        {

            $ordemServico = $this->OrdemServico->patchEntity($ordemServico, $this->request->data);

            if ($this->OrdemServico->save($ordemServico))
            {

                $totalClientes = (int) count($ordemServico->cliente_id);
                $totalPorClientes = (float) $ordemServico->valor / $totalClientes;
                $totalPorParcela = number_format((float) $ordemServico->valor / $totalClientes / (int) $ordemServico->parcelas, 2);
                $dataVencimento = explode('-',$ordemServico->dt_vencto->format('Y-m-d'));

                $this->loadModel('OsClientes');
                $this->loadModel('Areceber');

                
                
                foreach ($ordemServico->cliente_id as $key => $value)
                {
                    
                    $osClientes = $this->OsClientes->newEntity();
                    $osClientes = $this->OsClientes->patchEntity($osClientes, [
                        'ordem_servico_id' => $ordemServico->id,
                        'cliente_id' => (int)$value,
                        'parcela' => $ordemServico->parcelas,
                        'dt_vencto' => $ordemServico->dt_vencto,
                        'valor' => $totalPorClientes,
                    ]);
                    

                    $this->OsClientes->save($osClientes);
                   
                    for ($i = 0; $i < $ordemServico->parcelas; $i++)
                    {
                        $d = date('d/m/Y', mktime(0, 0,0 , $dataVencimento[1]+$i, $dataVencimento[2]));
                        
                        
                        $areceber = $this->Areceber->newEntity();
                        $areceber = $this->Areceber->patchEntity($areceber, [
                            'nro_docto' => $value . $ordemServico->id . '/' . ($i + 1),
                            'dt_vencto' => $d,
                            'cliente_id' => $value,
                            'valor' => $totalPorParcela,
                            'parcela' => ($i + 1),
                            'vl_juros' => $ordemServico->vl_juros,
                            'vl_multa' => $ordemServico->vl_multa,
                            'status' => 'A',
                            'dt_recebe' => null,
                            'total_recebe' => null,
                            'os_cliente_id' => $osClientes->id,
                        ]);
                       
                        $this->Areceber->save($areceber);
                    }
                }

                $this->Flash->success(__('The ordem servico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else
            {
                $this->Flash->error(__('The ordem servico could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Clientes');
        $this->loadModel('Contratos');
        $clientes = $this->Clientes->find('list');
        $contratos = $this->Contratos->find('list');
        $this->set(compact('ordemServico', 'clientes', 'contratos'));
        $this->set('_serialize', ['ordemServico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordem Servico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordemServico = $this->OrdemServico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put']))
        {
            $ordemServico = $this->OrdemServico->patchEntity($ordemServico, $this->request->data);
            if ($this->OrdemServico->save($ordemServico))
            {
                $this->Flash->success(__('The ordem servico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else
            {
                $this->Flash->error(__('The ordem servico could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->OrdemServico->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ordemServico', 'clientes'));
        $this->set('_serialize', ['ordemServico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordem Servico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordemServico = $this->OrdemServico->get($id);
        if ($this->OrdemServico->delete($ordemServico))
        {
            $this->Flash->success(__('The ordem servico has been deleted.'));
        } else
        {
            $this->Flash->error(__('The ordem servico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
