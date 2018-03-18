<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lendings Controller
 *
 * @property \App\Model\Table\LendingsTable $Lendings
 *
 * @method \App\Model\Entity\Lending[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LendingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Users', 'SetLoanUsers', 'SetReturnUsers', 'LendingStates']
        ];
        $lendings = $this->paginate($this->Lendings);

        $this->set(compact('lendings'));
    }

    /**
     * View method
     *
     * @param string|null $id Lending id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lending = $this->Lendings->get($id, [
            'contain' => ['Books', 'Users', 'SetLoanUsers', 'SetReturnUsers', 'LendingStates']
        ]);

        $this->set('lending', $lending);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lending = $this->Lendings->newEntity();
        if ($this->request->is('post')) {
            $lending = $this->Lendings->patchEntity($lending, $this->request->getData());
            if ($this->Lendings->save($lending)) {
                $this->Flash->success(__('The lending has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lending could not be saved. Please, try again.'));
        }
        $books = $this->Lendings->Books->find('list', ['limit' => 200]);
        $users = $this->Lendings->Users->find('list', ['limit' => 200]);
        $setLoanUsers = $this->Lendings->SetLoanUsers->find('list', ['limit' => 200]);
        $setReturnUsers = $this->Lendings->SetReturnUsers->find('list', ['limit' => 200]);
        $lendingStates = $this->Lendings->LendingStates->find('list', ['limit' => 200]);
        $this->set(compact('lending', 'books', 'users', 'setLoanUsers', 'setReturnUsers', 'lendingStates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lending id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lending = $this->Lendings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lending = $this->Lendings->patchEntity($lending, $this->request->getData());
            if ($this->Lendings->save($lending)) {
                $this->Flash->success(__('The lending has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lending could not be saved. Please, try again.'));
        }
        $books = $this->Lendings->Books->find('list', ['limit' => 200]);
        $users = $this->Lendings->Users->find('list', ['limit' => 200]);
        $setLoanUsers = $this->Lendings->SetLoanUsers->find('list', ['limit' => 200]);
        $setReturnUsers = $this->Lendings->SetReturnUsers->find('list', ['limit' => 200]);
        $lendingStates = $this->Lendings->LendingStates->find('list', ['limit' => 200]);
        $this->set(compact('lending', 'books', 'users', 'setLoanUsers', 'setReturnUsers', 'lendingStates'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lending id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lending = $this->Lendings->get($id);
        if ($this->Lendings->delete($lending)) {
            $this->Flash->success(__('The lending has been deleted.'));
        } else {
            $this->Flash->error(__('The lending could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
