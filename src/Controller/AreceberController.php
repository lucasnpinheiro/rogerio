<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Areceber Controller
 *
 * @property \App\Model\Table\AreceberTable $Areceber
 */
class AreceberController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $this->set('areceber', $this->paginate($this->Areceber));
        $this->set('_serialize', ['areceber']);
    }

    /**
     * View method
     *
     * @param string|null $id Areceber id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areceber = $this->Areceber->get($id, [
            'contain' => ['Clientes']
        ]);
        $this->set('areceber', $areceber);
        $this->set('_serialize', ['areceber']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areceber = $this->Areceber->newEntity();
        if ($this->request->is('post')) {
            $areceber = $this->Areceber->patchEntity($areceber, $this->request->data);
            if ($this->Areceber->save($areceber)) {
                $this->Flash->success(__('The areceber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areceber could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Areceber->Clientes->find('list')->select(['id', 'nome'])->order('nome','asc');
       
        $this->set(compact('areceber', 'clientes'));
        $this->set('_serialize', ['areceber']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Areceber id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areceber = $this->Areceber->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areceber = $this->Areceber->patchEntity($areceber, $this->request->data);
            if ($this->Areceber->save($areceber)) {
                $this->Flash->success(__('The areceber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areceber could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Areceber->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('areceber', 'clientes'));
        $this->set('_serialize', ['areceber']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Areceber id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areceber = $this->Areceber->get($id);
        if ($this->Areceber->delete($areceber)) {
            $this->Flash->success(__('The areceber has been deleted.'));
        } else {
            $this->Flash->error(__('The areceber could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
