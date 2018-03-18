<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BooksLanguages Controller
 *
 * @property \App\Model\Table\BooksLanguagesTable $BooksLanguages
 *
 * @method \App\Model\Entity\BooksLanguage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksLanguagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Languages']
        ];
        $booksLanguages = $this->paginate($this->BooksLanguages);

        $this->set(compact('booksLanguages'));
    }

    /**
     * View method
     *
     * @param string|null $id Books Language id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booksLanguage = $this->BooksLanguages->get($id, [
            'contain' => ['Books', 'Languages']
        ]);

        $this->set('booksLanguage', $booksLanguage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booksLanguage = $this->BooksLanguages->newEntity();
        if ($this->request->is('post')) {
            $booksLanguage = $this->BooksLanguages->patchEntity($booksLanguage, $this->request->getData());
            if ($this->BooksLanguages->save($booksLanguage)) {
                $this->Flash->success(__('The books language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books language could not be saved. Please, try again.'));
        }
        $books = $this->BooksLanguages->Books->find('list', ['limit' => 200]);
        $languages = $this->BooksLanguages->Languages->find('list', ['limit' => 200]);
        $this->set(compact('booksLanguage', 'books', 'languages'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Books Language id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booksLanguage = $this->BooksLanguages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booksLanguage = $this->BooksLanguages->patchEntity($booksLanguage, $this->request->getData());
            if ($this->BooksLanguages->save($booksLanguage)) {
                $this->Flash->success(__('The books language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books language could not be saved. Please, try again.'));
        }
        $books = $this->BooksLanguages->Books->find('list', ['limit' => 200]);
        $languages = $this->BooksLanguages->Languages->find('list', ['limit' => 200]);
        $this->set(compact('booksLanguage', 'books', 'languages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Books Language id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booksLanguage = $this->BooksLanguages->get($id);
        if ($this->BooksLanguages->delete($booksLanguage)) {
            $this->Flash->success(__('The books language has been deleted.'));
        } else {
            $this->Flash->error(__('The books language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
