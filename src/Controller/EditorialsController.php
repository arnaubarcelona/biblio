<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Editorials Controller
 *
 * @property \App\Model\Table\EditorialsTable $Editorials
 *
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EditorialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $editorials = $this->paginate($this->Editorials);

        $this->set(compact('editorials'));
    }

    /**
     * View method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $editorial = $this->Editorials->get($id, [
            'contain' => ['Books']
        ]);

        $this->set('editorial', $editorial);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $editorial = $this->Editorials->newEntity();
        if ($this->request->is('post')) {
            $editorial = $this->Editorials->patchEntity($editorial, $this->request->getData());
            if ($this->Editorials->save($editorial)) {
                $this->Flash->success(__('The editorial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editorial could not be saved. Please, try again.'));
        }
        $books = $this->Editorials->Books->find('list', ['limit' => 200]);
        $this->set(compact('editorial', 'books'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $editorial = $this->Editorials->get($id, [
            'contain' => ['Books']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $editorial = $this->Editorials->patchEntity($editorial, $this->request->getData());
            if ($this->Editorials->save($editorial)) {
                $this->Flash->success(__('The editorial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editorial could not be saved. Please, try again.'));
        }
        $books = $this->Editorials->Books->find('list', ['limit' => 200]);
        $this->set(compact('editorial', 'books'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $editorial = $this->Editorials->get($id);
        if ($this->Editorials->delete($editorial)) {
            $this->Flash->success(__('The editorial has been deleted.'));
        } else {
            $this->Flash->error(__('The editorial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
