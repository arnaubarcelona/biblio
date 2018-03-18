<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BooksLevels Controller
 *
 * @property \App\Model\Table\BooksLevelsTable $BooksLevels
 *
 * @method \App\Model\Entity\BooksLevel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Levels']
        ];
        $booksLevels = $this->paginate($this->BooksLevels);

        $this->set(compact('booksLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id Books Level id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booksLevel = $this->BooksLevels->get($id, [
            'contain' => ['Books', 'Levels']
        ]);

        $this->set('booksLevel', $booksLevel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booksLevel = $this->BooksLevels->newEntity();
        if ($this->request->is('post')) {
            $booksLevel = $this->BooksLevels->patchEntity($booksLevel, $this->request->getData());
            if ($this->BooksLevels->save($booksLevel)) {
                $this->Flash->success(__('The books level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books level could not be saved. Please, try again.'));
        }
        $books = $this->BooksLevels->Books->find('list', ['limit' => 200]);
        $levels = $this->BooksLevels->Levels->find('list', ['limit' => 200]);
        $this->set(compact('booksLevel', 'books', 'levels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Books Level id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booksLevel = $this->BooksLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booksLevel = $this->BooksLevels->patchEntity($booksLevel, $this->request->getData());
            if ($this->BooksLevels->save($booksLevel)) {
                $this->Flash->success(__('The books level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books level could not be saved. Please, try again.'));
        }
        $books = $this->BooksLevels->Books->find('list', ['limit' => 200]);
        $levels = $this->BooksLevels->Levels->find('list', ['limit' => 200]);
        $this->set(compact('booksLevel', 'books', 'levels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Books Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booksLevel = $this->BooksLevels->get($id);
        if ($this->BooksLevels->delete($booksLevel)) {
            $this->Flash->success(__('The books level has been deleted.'));
        } else {
            $this->Flash->error(__('The books level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
