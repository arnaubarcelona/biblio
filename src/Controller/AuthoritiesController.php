<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Authorities Controller
 *
 * @property \App\Model\Table\AuthoritiesTable $Authorities
 *
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthoritiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Authors', 'AuthorTypes']
        ];
        $authorities = $this->paginate($this->Authorities);

        $this->set(compact('authorities'));
    }

    /**
     * View method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authority = $this->Authorities->get($id, [
            'contain' => ['Authors', 'AuthorTypes', 'Books']
        ]);

        $this->set('authority', $authority);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authority = $this->Authorities->newEntity();
        if ($this->request->is('post')) {
            if ($this->request->is('ajax')) {
                $isAuthoritiesSaved = $this->upsertAuthorities($this->request->getData());

                if ($isAuthoritiesSaved) {
                    return $this->response->withType('application/json')
                        ->withStringBody(json_encode([
                            'status' => 'success',
                            'message' => 'The authority has been saved.',
                            'data' => json_decode(json_encode($isAuthoritiesSaved), true)
                        ]));
                }

                return $this->response->withType('application/json')
                    ->withStringBody(json_encode([
                        'status' => 'error',
                        'message' => 'The authority could not be saved. Please, try again.'
                    ]));
            }

            $authority = $this->Authorities->patchEntity($authority, $this->request->getData());
            if ($this->Authorities->save($authority)) {
                $this->Flash->success(__('The authority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority could not be saved. Please, try again.'));
        }
        $authors = $this->Authorities->Authors->find('list', ['limit' => 200]);
        $authorTypes = $this->Authorities->AuthorTypes->find('list', ['limit' => 200]);
        $books = $this->Authorities->Books->find('list', ['limit' => 200]);
        $this->set(compact('authority', 'authors', 'authorTypes', 'books'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authority = $this->Authorities->get($id, [
            'contain' => ['Books']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authority = $this->Authorities->patchEntity($authority, $this->request->getData());
            if ($this->Authorities->save($authority)) {
                $this->Flash->success(__('The authority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority could not be saved. Please, try again.'));
        }
        $authors = $this->Authorities->Authors->find('list', ['limit' => 200]);
        $authorTypes = $this->Authorities->AuthorTypes->find('list', ['limit' => 200]);
        $books = $this->Authorities->Books->find('list', ['limit' => 200]);
        $this->set(compact('authority', 'authors', 'authorTypes', 'books'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authority = $this->Authorities->get($id);
        if ($this->Authorities->delete($authority)) {
            $this->Flash->success(__('The authority has been deleted.'));
        } else {
            $this->Flash->error(__('The authority could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function upsertAuthorities($requestData)
    {
        $authority = $this->Authorities->find()
            ->where([
                'author_id' => $requestData['author_id'],
                'author_type_id' => $requestData['author_type_id'],
            ])
            ->first();

        if (is_null($authority)) {
            $authority = $this->Authorities->newEntity();
            $authority = $this->Authorities->patchEntity($authority, $requestData);
            if ($this->Authorities->save($authority)) {
                return $authority;
            }

            return false;
        }

        return $authority;
    }
}
