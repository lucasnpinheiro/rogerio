<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contratos Controller
 *
 * @property \App\Model\Table\ContratosTable $Contratos
 */
class ContratosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('contratos', $this->paginate($this->Contratos));
        $this->set('_serialize', ['contratos']);
    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => []
        ]);
        $this->set('contrato', $contrato);
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrato = $this->Contratos->newEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->data);
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contrato'));
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->data);
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contrato'));
        $this->set('_serialize', ['contrato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('The contrato has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function modelo($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => []
        ]);
        $this->set('contrato', $contrato);
        $this->set('_serialize', ['contrato']);
    }
}
