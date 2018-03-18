<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AuthoritiesBooks Controller
 *
 * @property \App\Model\Table\AuthoritiesBooksTable $AuthoritiesBooks
 *
 * @method \App\Model\Entity\AuthoritiesBook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthoritiesBooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Authorities', 'Books']
        ];
        $authoritiesBooks = $this->paginate($this->AuthoritiesBooks);

        $this->set(compact('authoritiesBooks'));
    }

    /**
     * View method
     *
     * @param string|null $id Authorities Book id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authoritiesBook = $this->AuthoritiesBooks->get($id, [
            'contain' => ['Authorities', 'Books']
        ]);

        $this->set('authoritiesBook', $authoritiesBook);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authoritiesBook = $this->AuthoritiesBooks->newEntity();
        if ($this->request->is('post')) {
            $authoritiesBook = $this->AuthoritiesBooks->patchEntity($authoritiesBook, $this->request->getData());
            if ($this->AuthoritiesBooks->save($authoritiesBook)) {
                $this->Flash->success(__('The authorities book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorities book could not be saved. Please, try again.'));
        }
        $authorities = $this->AuthoritiesBooks->Authorities->find('list', ['limit' => 200]);
        $books = $this->AuthoritiesBooks->Books->find('list', ['limit' => 200]);
        $this->set(compact('authoritiesBook', 'authorities', 'books'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authorities Book id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authoritiesBook = $this->AuthoritiesBooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authoritiesBook = $this->AuthoritiesBooks->patchEntity($authoritiesBook, $this->request->getData());
            if ($this->AuthoritiesBooks->save($authoritiesBook)) {
                $this->Flash->success(__('The authorities book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorities book could not be saved. Please, try again.'));
        }
        $authorities = $this->AuthoritiesBooks->Authorities->find('list', ['limit' => 200]);
        $books = $this->AuthoritiesBooks->Books->find('list', ['limit' => 200]);
        $this->set(compact('authoritiesBook', 'authorities', 'books'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authorities Book id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authoritiesBook = $this->AuthoritiesBooks->get($id);
        if ($this->AuthoritiesBooks->delete($authoritiesBook)) {
            $this->Flash->success(__('The authorities book has been deleted.'));
        } else {
            $this->Flash->error(__('The authorities book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
