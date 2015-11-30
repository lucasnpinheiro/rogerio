<?php

namespace App\Controller;

use App\Controller\AppController;
use OpenBoleto\Banco\Santander;
use OpenBoleto\Agente as Agente;

/**
 * OrdemServico Controller
 *
 * @property \App\Model\Table\OrdemServicoTable $OrdemServico
 */
class OrdemServicoController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
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
    public function view($id = null) {
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
    public function add() {
        $ordemServico = $this->OrdemServico->newEntity();
        if ($this->request->is('post')) {

            $ordemServico = $this->OrdemServico->patchEntity($ordemServico, $this->request->data);

            if ($this->OrdemServico->save($ordemServico)) {

                $totalClientes = (int) count($ordemServico->cliente_id);
                $totalPorClientes = (float) $ordemServico->valor / $totalClientes;
                $totalPorParcela = number_format((float) $ordemServico->valor / $totalClientes / (int) $ordemServico->parcelas, 2);
                $dataVencimento = explode('-', $ordemServico->dt_vencto->format('Y-m-d'));

                $this->loadModel('OsClientes');
                $this->loadModel('Areceber');



                foreach ($ordemServico->cliente_id as $key => $value) {

                    $osClientes = $this->OsClientes->newEntity();
                    $osClientes = $this->OsClientes->patchEntity($osClientes, [
                        'ordem_servico_id' => $ordemServico->id,
                        'cliente_id' => (int) $value,
                        'parcela' => $ordemServico->parcelas,
                        'dt_vencto' => $ordemServico->dt_vencto,
                        'valor' => $totalPorClientes,
                    ]);


                    $this->OsClientes->save($osClientes);

                    for ($i = 0; $i < $ordemServico->parcelas; $i++) {
                        $d = date('d/m/Y', mktime(0, 0, 0, $dataVencimento[1] + $i, $dataVencimento[2]));


                        $areceber = $this->Areceber->newEntity();
                        $areceber = $this->Areceber->patchEntity($areceber, [
                            'nro_docto' => $value . $ordemServico->id . '/' . ($i + 1),
                            'dt_vencto' => $d,
                            'cliente_id' => $value,
                            'valor' => $totalPorParcela,
                            'parcela' => ($i + 1),
                            'vl_juros' => $ordemServico->juros,
                            'vl_multa' => $ordemServico->multa,
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
            } else {
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
    public function edit($id = null) {
        $ordemServico = $this->OrdemServico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordemServico = $this->OrdemServico->patchEntity($ordemServico, $this->request->data);
            if ($this->OrdemServico->save($ordemServico)) {
                $this->Flash->success(__('The ordem servico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $ordemServico = $this->OrdemServico->get($id);
        if ($this->OrdemServico->delete($ordemServico)) {
            $this->Flash->success(__('The ordem servico has been deleted.'));
        } else {
            $this->Flash->error(__('The ordem servico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function imprimirBoletos($id = null) {
        \Cake\Core\Configure::write('debug', false);
        $this->viewBuilder()->layout('boletos');
        $this->loadModel('ParamBoletos');
        $this->loadModel('OsClientes');
        $this->loadModel('Clientes');
        $this->loadModel('Areceber');

        $ordemServico = $this->OrdemServico->findById($id)->toArray();
        $osClientes = $this->OsClientes->findByOrdemServicoId($ordemServico[0]['id'])->toArray();
        $areceber = $this->Areceber->findByOsClienteId($osClientes[0]['id'])->toArray();
        $sacado = $this->Clientes->findById($osClientes[0]['cliente_id'])->toArray();
        $paramBoletos = $this->ParamBoletos->findByNome('santander')->toArray();

        $sacado = new Agente($sacado[0]['nome'], $sacado[0]['cpf'], $sacado[0]['endereco'] . ',' . $sacado[0]['numero'], $sacado[0]['cep'], $sacado[0]['cidade'], $sacado[0]['estado']);
        $cedente = new Agente($paramBoletos[0]['cedente'], $paramBoletos[0]['cpf'], $paramBoletos[0]['endereco'] . ',' . $paramBoletos[0]['numero'], $paramBoletos[0]['cep'], $paramBoletos[0]['cidade'], $paramBoletos[0]['estado']);

        $retorno = '';

        $seq = ((int) $paramBoletos[0]['nro_seq']);
        $calcula_seq = true;
        $count = count($areceber) - 1;
        foreach ($areceber as $k => $v) {
            $seq +=1;
            if (!is_null($v['nro_seq'])) {
                $calcula_seq = false;
                $seq = $v['nro_seq'];
            }

            $boleto = new Santander(array(
                // Parâmetros obrigatórios
                'dataVencimento' => new \DateTime($v['dt_vencto']->format('Y-m-d')),
                'valor' => $v['valor'],
                'valorUnitario' => $v['valor'],
                'quantidade' => 1,
                'sequencial' => $seq, // Para gerar o nosso número
                'numeroDocumento' => $seq, // Para gerar o nosso número
                'sacado' => $sacado,
                'cedente' => $cedente,
                'agencia' => $paramBoletos[0]['agencia'], // Até 4 dígitos
                'carteira' => $paramBoletos[0]['carteira'],
                'moraMulta' => $v['vl_multa'],
                'conta' => $paramBoletos[0]['conta'], // Até 8 dígitos
                'convenio' => $paramBoletos[0]['convenio'], // 4, 6 ou 7 dígitos
                'instrucoes' => str_replace(array('{{vl_juros}}', '{{vl_multa}}'), array($v['vl_juros'], number_format($v['vl_multa'], 2, ',', '.')), $paramBoletos[0]['instrucao']), // 4, 6 ou 7 dígitos
            ));
            $areceberSave = $this->Areceber->patchEntity($areceber[$k], ['nro_seq' => $seq]);
            $this->Areceber->save($areceberSave);

            $retorno .= $boleto->getOutput();
            if ($count > 0) {
                $retorno .= '<div class="boleto-pagina"></div>';
                $count -=1;
            }
        }
        if ($calcula_seq == true) {
            $paramBoletos = $this->ParamBoletos->patchEntity($paramBoletos[0], ['nro_seq' => $seq]);
            $this->ParamBoletos->save($paramBoletos);
        }
        $this->set('retorno', $retorno);
        $this->set('url_retorno', $this->referer());
    }

    public function word() {
        $arquivo = 'planilha.rtf'; // Definindo o nome do documento e sua extensão – .doc ou .xls

        $html = '';

        $html .= '<table>';

        $html .= '<tr>';

        $html .= '<td colspan=”3″>Planilha teste</tr>';

        $html .= '</tr>';

        $html .= '<tr>';

        $html .= '<td><b>Coluna 1</b></td>';

        $html .= '<td><b>Coluna 2</b></td>';

        $html .= '<td><b>Coluna 3</b></td>';

        $html .= '</tr>';

        $html .= '<tr>';

        $html .= '<td>Linha 1 Coluna 1</td>';

        $html .= '<td>Linha 1 Coluna 2</td>';

        $html .= '<td>Linha 1 Coluna 3</td>';

        $html .= '</tr>';

        $html .= '<tr>';

        $html .= '<td>Linha 2 Coluna 1</td>';

        $html .= '<td>Linha 2 Coluna 2</td>';

        $html .= '<td>Linha 2 Coluna 3</td>';

        $html .= '</tr>';

        $html .= '</table>';

        header('Content-type: application/vnd.ms-word');
        header('Content-type: application/force-download');
        header('Content-Disposition: attachment; filename="' . $arquivo . '"');
        header('Pragma: no-cache');

        echo $html; //Mostrando o arquivo

        exit;
    }

}
