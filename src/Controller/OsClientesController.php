<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OsClientes Controller
 *
 * @property \App\Model\Table\OsClientesTable $OsClientes
 */
class OsClientesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrdemServidos']
        ];
        $this->set('osClientes', $this->paginate($this->OsClientes));
        $this->set('_serialize', ['osClientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Os Cliente id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $osCliente = $this->OsClientes->get($id, [
            'contain' => ['OrdemServidos', 'Areceber']
        ]);
        $this->set('osCliente', $osCliente);
        $this->set('_serialize', ['osCliente']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $osCliente = $this->OsClientes->newEntity();
        if ($this->request->is('post')) {
            $osCliente = $this->OsClientes->patchEntity($osCliente, $this->request->data);
            if ($this->OsClientes->save($osCliente)) {
                $this->Flash->success(__('The os cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The os cliente could not be saved. Please, try again.'));
            }
        }
        $ordemServidos = $this->OsClientes->OrdemServidos->find('list', ['limit' => 200]);
        $this->set(compact('osCliente', 'ordemServidos'));
        $this->set('_serialize', ['osCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Os Cliente id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $osCliente = $this->OsClientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $osCliente = $this->OsClientes->patchEntity($osCliente, $this->request->data);
            if ($this->OsClientes->save($osCliente)) {
                $this->Flash->success(__('The os cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The os cliente could not be saved. Please, try again.'));
            }
        }
        $ordemServidos = $this->OsClientes->OrdemServidos->find('list', ['limit' => 200]);
        $this->set(compact('osCliente', 'ordemServidos'));
        $this->set('_serialize', ['osCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Os Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $osCliente = $this->OsClientes->get($id);
        if ($this->OsClientes->delete($osCliente)) {
            $this->Flash->success(__('The os cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The os cliente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
