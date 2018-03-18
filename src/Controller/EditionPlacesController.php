<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EditionPlaces Controller
 *
 * @property \App\Model\Table\EditionPlacesTable $EditionPlaces
 *
 * @method \App\Model\Entity\EditionPlace[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EditionPlacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $editionPlaces = $this->paginate($this->EditionPlaces);

        $this->set(compact('editionPlaces'));
    }

    /**
     * View method
     *
     * @param string|null $id Edition Place id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $editionPlace = $this->EditionPlaces->get($id, [
            'contain' => ['Countries', 'Books']
        ]);

        $this->set('editionPlace', $editionPlace);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $editionPlace = $this->EditionPlaces->newEntity();
        if ($this->request->is('post')) {
            $editionPlace = $this->EditionPlaces->patchEntity($editionPlace, $this->request->getData());
            if ($this->EditionPlaces->save($editionPlace)) {
                $this->Flash->success(__('The edition place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edition place could not be saved. Please, try again.'));
        }
        $countries = $this->EditionPlaces->Countries->find('list', ['limit' => 200]);
        $this->set(compact('editionPlace', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Edition Place id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $editionPlace = $this->EditionPlaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $editionPlace = $this->EditionPlaces->patchEntity($editionPlace, $this->request->getData());
            if ($this->EditionPlaces->save($editionPlace)) {
                $this->Flash->success(__('The edition place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edition place could not be saved. Please, try again.'));
        }
        $countries = $this->EditionPlaces->Countries->find('list', ['limit' => 200]);
        $this->set(compact('editionPlace', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Edition Place id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $editionPlace = $this->EditionPlaces->get($id);
        if ($this->EditionPlaces->delete($editionPlace)) {
            $this->Flash->success(__('The edition place has been deleted.'));
        } else {
            $this->Flash->error(__('The edition place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
