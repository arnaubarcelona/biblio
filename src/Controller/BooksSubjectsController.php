<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BooksSubjects Controller
 *
 * @property \App\Model\Table\BooksSubjectsTable $BooksSubjects
 *
 * @method \App\Model\Entity\BooksSubject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksSubjectsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books', 'Subjects']
        ];
        $booksSubjects = $this->paginate($this->BooksSubjects);

        $this->set(compact('booksSubjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Books Subject id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booksSubject = $this->BooksSubjects->get($id, [
            'contain' => ['Books', 'Subjects']
        ]);

        $this->set('booksSubject', $booksSubject);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booksSubject = $this->BooksSubjects->newEntity();
        if ($this->request->is('post')) {
            $booksSubject = $this->BooksSubjects->patchEntity($booksSubject, $this->request->getData());
            if ($this->BooksSubjects->save($booksSubject)) {
                $this->Flash->success(__('The books subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books subject could not be saved. Please, try again.'));
        }
        $books = $this->BooksSubjects->Books->find('list', ['limit' => 200]);
        $subjects = $this->BooksSubjects->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('booksSubject', 'books', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Books Subject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booksSubject = $this->BooksSubjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booksSubject = $this->BooksSubjects->patchEntity($booksSubject, $this->request->getData());
            if ($this->BooksSubjects->save($booksSubject)) {
                $this->Flash->success(__('The books subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books subject could not be saved. Please, try again.'));
        }
        $books = $this->BooksSubjects->Books->find('list', ['limit' => 200]);
        $subjects = $this->BooksSubjects->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('booksSubject', 'books', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Books Subject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booksSubject = $this->BooksSubjects->get($id);
        if ($this->BooksSubjects->delete($booksSubject)) {
            $this->Flash->success(__('The books subject has been deleted.'));
        } else {
            $this->Flash->error(__('The books subject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
