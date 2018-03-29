<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Hash;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 *
 * @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cdus', 'Formats', 'Collections', 'EditionPlaces', 'Locations', 'CatalogueStates', 'ConservationStates']
        ];
        $books = $this->paginate($this->Books);

        $this->set(compact('books'));
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => ['Cdus', 'Formats', 'Collections', 'EditionPlaces', 'Locations', 'CatalogueStates', 'ConservationStates', 'Authorities', 'Editorials', 'Languages', 'Levels', 'Subjects', 'Items', 'Lendings']
        ]);

        $this->set('book', $book);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // Added by IV[14-03-2018]
        $this->loadModel('Authorities');
        $this->loadModel('AuthoritiesBooks');
        $formattedAuthorities = [];

        $book = $this->Books->newEntity();
        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                // Save authorities books
                $book_id = $book->id;
                $this->saveAuthoritiesBooks($book_id, $this->request->getData('authority_ids'));

                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }

        // Added by IV[15-03-2018]
        $books = $this->Books->find();
        $groupedCduIds = $books->select([
            'count' => $books->func()->count('id'),
            'id' => $books->func()->max('cdu_id')
        ])
        ->group('cdu_id')
        ->where(['cdu_id != ""'])
        ->toArray();

        $formattedCduIds = Hash::combine($groupedCduIds, '{n}.id', '{n}.count');
        $cdus = $this->Books->Cdus->find()->toArray();
        if (!empty($cdus)) {
            foreach ($cdus as $key => $cdu) {
                $formattedCdus[$cdu['id']] = $cdu['name'];

                if (!empty($cdu['description'])) {
                    $formattedCdus[$cdu['id']] .= " {$cdu['description']}";

                    if (isset($formattedCduIds[$cdu['id']])) {
                        $formattedCdus[$cdu['id']] .= " ({$formattedCduIds[$cdu['id']]})";
                    } else {
                        $formattedCdus[$cdu['id']] .= " (0)";
                    }
                }
            }
        }
        // Added by IV -- end
        
        $formats = $this->Books->Formats->find('list', ['limit' => 200]);
        $collections = $this->Books->Collections->find('list', ['limit' => 200]);
        $editionPlaces = $this->Books->EditionPlaces->find('list', ['limit' => 200]);
        $locations = $this->Books->Locations->find('list', ['limit' => 200]);
        $catalogueStates = $this->Books->CatalogueStates->find('list', ['limit' => 200]);
        $conservationStates = $this->Books->ConservationStates->find('list', ['limit' => 200]);

        // Added by IV[14-03-2018]
        $authorities = $this->Authorities->find()
            ->contain([
                'Authors' => function ($q) {
                    return $q->select(['id', 'name']);
                },
                'AuthorTypes' => function ($q) {
                    return $q->select(['id', 'name']);
                }
            ])
            ->toArray();

        $authoritiesBooks = $this->AuthoritiesBooks->find();
        $groupedauthoritiesBooksIds = $authoritiesBooks->select([
            'count' => $authoritiesBooks->func()->count('id'),
            'id' => $authoritiesBooks->func()->max('authority_id')
        ])
        ->group('authority_id')
        ->where(['authority_id != ""'])
        ->toArray();

        $formattedauthoritiesBooksIds = Hash::combine($groupedauthoritiesBooksIds, '{n}.id', '{n}.count');

        if (!empty($authorities)) {
            foreach ($authorities as $key => $authority) {
                $formattedAuthorities[$authority['id']] = $authority['author']['name'];

                if (!empty($authority['author_type']['name'])) {
                    $formattedAuthorities[$authority['id']] .= " {$authority['author_type']['name']}";
                }

                if (isset($formattedauthoritiesBooksIds[$authority['id']])) {
                    $formattedAuthorities[$authority['id']] .= " ({$formattedauthoritiesBooksIds[$authority['id']]})";
                } else {
                    $formattedAuthorities[$authority['id']] .= " (0)";
                }
            }
        }
        // Added by IV -- end

        $editorials = $this->Books->Editorials->find('list', ['limit' => 200]);
        $languages = $this->Books->Languages->find('list', ['limit' => 200]);
        $levels = $this->Books->Levels->find('list', ['limit' => 200]);
        $subjects = $this->Books->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('book', 'cdus', 'formats', 'collections', 'editionPlaces', 'locations', 'catalogueStates', 'conservationStates', 'formattedCdus', 'formattedAuthorities', 'editorials', 'languages', 'levels', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => ['Authorities', 'Editorials', 'Languages', 'Levels', 'Subjects']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        $cdus = $this->Books->Cdus->find('list', ['limit' => 200]);
        $formats = $this->Books->Formats->find('list', ['limit' => 200]);
        $collections = $this->Books->Collections->find('list', ['limit' => 200]);
        $editionPlaces = $this->Books->EditionPlaces->find('list', ['limit' => 200]);
        $locations = $this->Books->Locations->find('list', ['limit' => 200]);
        $catalogueStates = $this->Books->CatalogueStates->find('list', ['limit' => 200]);
        $conservationStates = $this->Books->ConservationStates->find('list', ['limit' => 200]);
        $authorities = $this->Books->Authorities->find('list', ['limit' => 200]);
        $editorials = $this->Books->Editorials->find('list', ['limit' => 200]);
        $languages = $this->Books->Languages->find('list', ['limit' => 200]);
        $levels = $this->Books->Levels->find('list', ['limit' => 200]);
        $subjects = $this->Books->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('book', 'cdus', 'formats', 'collections', 'editionPlaces', 'locations', 'catalogueStates', 'conservationStates', 'authorities', 'editorials', 'languages', 'levels', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        if ($this->Books->delete($book)) {
            $this->Flash->success(__('The book has been deleted.'));
        } else {
            $this->Flash->error(__('The book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function saveAuthoritiesBooks($book_id, $authority_ids)
    {
        $this->loadModel('AuthoritiesBooks');
        $this->loadModel('Authorities');
        $this->loadModel('Authors');
        $this->loadModel('AuthorTypes');

        foreach ($authority_ids as $key => $authority_id) {
            $saveData = [];

            $authorityId = $this->Authorities->find()
                ->where([
                    'id' => $authority_id,
                ])
                ->first();

            if ($authorityId == null) {
                $split = explode('[', $authority_id);

                if (count($split) > 0 && isset($split[0]) && !empty($split[0])) {
                    $author = $this->Authors->find()
                        ->where([
                            'name' => trim($split[0]),
                        ])
                        ->first();

                    if (!$author) {
                        return false;                            
                    }

                    $authorId = $author->id;

                    if (isset($split[1]) && !empty($split[1])) {
                        $split[1] = '[' . $split[1];

                        $authorType = $this->AuthorTypes->find()
                            ->where([
                                'name' => $split[1],
                            ])
                            ->first();

                        if (!$authorType) {
                            return false;
                        }

                        $authorTypeId = $authorType->id;
                    } else {
                        $authorTypeId = 1;
                    }

                    $authorities = $this->Authorities->find()
                        ->where([
                            'author_id' => $authorId,
                            'author_type_id' => $authorTypeId,
                        ])
                        ->first();
                    
                    if (!$authorities) {
                        return false;
                    }

                    $authority_id = $authorities->id;
                }
            }

            $authorityBook = $this->AuthoritiesBooks->find()
                ->where([
                    'book_id' => $book_id,
                    'authority_id' => $authority_id,
                ])
                ->first();

            if (!$authorityBook) {
                $saveData = [
                    'book_id' => $book_id,
                    'authority_id' => $authority_id
                ];

                $AuthoritiesBooks = $this->AuthoritiesBooks->newEntity();
                $AuthoritiesBooks = $this->AuthoritiesBooks->patchEntity($AuthoritiesBooks, $saveData);
                $result = $this->AuthoritiesBooks->save($AuthoritiesBooks, ['validate' => false]);
            }
        }
    }

    public function checkAuthorTypesExists()
    {
        $response = [
            'status' => 'error',
            'message' => 'Method not allowed'
        ];

        if ($this->request->is('ajax')) {
            $this->loadModel('Authors');
            $this->loadModel('AuthorTypes');
            $this->loadModel('Authorities');

            $requestData = $this->request->getData('data');
            $split = explode('[', $requestData['text']);

            if (count($split) > 0) {
                $response['status'] = 'success';
                $response['message'] = 'success';

                // Sanitize string
                $authorName = trim($split['0']);

                // Check if author is exists
                $author = $this->Authors->find()
                    ->where(['name LIKE' => $authorName])
                    ->first();

                if (is_null($author)) {
                    $response['author'] = [
                        'name' => $authorName,
                        'not_exist' => true
                    ];
                } else {
                    $response['author'] = [
                        'name' => $authorName,
                        'id' => $author->id
                    ];
                }

                // Check if author_type is exists
                if (count($split) != 1) {
                    $authorTypeName = trim($split['1']);
                    $authorTypeName = '[' . $authorTypeName;

                    $authorType = $this->AuthorTypes->find()
                        ->where(['name LIKE' => $authorTypeName])
                        ->first();

                    if (is_null($authorType)) {
                        $response['author_type'] = [
                            'name' => $authorTypeName,
                            'not_exist' => true
                        ];
                    } else {
                        $response['author_type'] = [
                            'name' => $authorTypeName,
                            'id' => $authorType->id
                        ];
                    }
                } else {
                    $response['author_type'] = [
                        'id' => '1'
                    ];
                }

                // Check for authorities
                if (!isset($response['author']['not_exist']) && !isset($response['author_type']['not_exist'])) {
                    $authority = $this->Authorities->find()
                        ->where([
                            'author_id' => $response['author']['id'],
                            'author_type_id' => $response['author_type']['id'],
                        ])
                        ->first();

                    if (is_null($authority)) {
                        $response['authorities'] = [
                            'found' => false
                        ];
                    } else {
                        $response['authorities'] = [
                            'found' => true
                        ];
                    }
                }
            } else {
                $response['message'] = 'Text is not inserted in proper format';
            }

            return $this->response->withType('application/json')
                ->withStringBody(json_encode($response));
        }

        return $this->response->withType('application/json')
                ->withStringBody(json_encode($response));
    }
}
