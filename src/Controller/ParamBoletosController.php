<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ParamBoletos Controller
 *
 * @property \App\Model\Table\ParamBoletosTable $ParamBoletos
 */
class ParamBoletosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('paramBoletos', $this->paginate($this->ParamBoletos));
        $this->set('_serialize', ['paramBoletos']);
    }

    /**
     * View method
     *
     * @param string|null $id Param Boleto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paramBoleto = $this->ParamBoletos->get($id, [
            'contain' => []
        ]);
        $this->set('paramBoleto', $paramBoleto);
        $this->set('_serialize', ['paramBoleto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paramBoleto = $this->ParamBoletos->newEntity();
        if ($this->request->is('post')) {
            $paramBoleto = $this->ParamBoletos->patchEntity($paramBoleto, $this->request->data);
            if ($this->ParamBoletos->save($paramBoleto)) {
                $this->Flash->success(__('The param boleto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The param boleto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paramBoleto'));
        $this->set('_serialize', ['paramBoleto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Param Boleto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paramBoleto = $this->ParamBoletos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paramBoleto = $this->ParamBoletos->patchEntity($paramBoleto, $this->request->data);
            if ($this->ParamBoletos->save($paramBoleto)) {
                $this->Flash->success(__('The param boleto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The param boleto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('paramBoleto'));
        $this->set('_serialize', ['paramBoleto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Param Boleto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paramBoleto = $this->ParamBoletos->get($id);
        if ($this->ParamBoletos->delete($paramBoleto)) {
            $this->Flash->success(__('The param boleto has been deleted.'));
        } else {
            $this->Flash->error(__('The param boleto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
