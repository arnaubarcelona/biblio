<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LentStates Controller
 *
 * @property \App\Model\Table\LentStatesTable $LentStates
 *
 * @method \App\Model\Entity\LentState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LentStatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lentStates = $this->paginate($this->LentStates);

        $this->set(compact('lentStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Lent State id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lentState = $this->LentStates->get($id, [
            'contain' => []
        ]);

        $this->set('lentState', $lentState);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lentState = $this->LentStates->newEntity();
        if ($this->request->is('post')) {
            $lentState = $this->LentStates->patchEntity($lentState, $this->request->getData());
            if ($this->LentStates->save($lentState)) {
                $this->Flash->success(__('The lent state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lent state could not be saved. Please, try again.'));
        }
        $this->set(compact('lentState'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lent State id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lentState = $this->LentStates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lentState = $this->LentStates->patchEntity($lentState, $this->request->getData());
            if ($this->LentStates->save($lentState)) {
                $this->Flash->success(__('The lent state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lent state could not be saved. Please, try again.'));
        }
        $this->set(compact('lentState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lent State id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lentState = $this->LentStates->get($id);
        if ($this->LentStates->delete($lentState)) {
            $this->Flash->success(__('The lent state has been deleted.'));
        } else {
            $this->Flash->error(__('The lent state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
