<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|null
	 */
	public function index()
	{
		$this->paginate = [
			'limit' => 40,
		]; /* limitador de quantidade por paginas */
		$users = $this->paginate($this->Users);

		$this->set(compact('users'));
	}

	/**
	 * View method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Http\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$user = $this->Users->get($id, [
			'contain' => [],
		]);

		$this->set('user', $user);
	}

	public function perfil()
	{
		// metodo para listar o perfil do usuário
		$user = $this->Auth->user();

		$this->set(compact('user'));
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				$this->Flash->success((' O Usuário Salvo com sucesso.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->danger(('O usuário não foi salvo. Por favor, tente novamente.'));
		}
		$this->set(compact('user'));
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$user = $this->Users->get($id, [
			'contain' => [],
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				$this->Flash->success(__('o Usuário foi salvo com sucesso.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->danger(('O usuário não foi salvo. Por favor tente novamente.'));
		}
		$this->set(compact('user'));
	}

	public function editSenha($id = null)
	{
		$user = $this->Users->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Senha do usuário editado com sucesso'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->danger(__('Erro: A senha do usuário não foi editado com sucesso'));
		}
		$this->set(compact('user'));
	}
	public function editPerfil()
	{
		$user_id = $this->Auth->user('id');
		$user = $this->Users->get($user_id, [
			'contain' => []
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				if ($this->Auth->user('id') === $user->id) {
					$data = $user->toArray();
					$this->Auth->setUser($data);
				}
				$this->Flash->success(__('Perfil editado com sucesso'));

				return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
			}
			$this->Flash->danger(__('Erro: Perfil não foi editado com sucesso'));
		}

		$this->set(compact('user'));
	}


	public function editSenhaPerfil()
	{
		$user_id = $this->Auth->user('id');
		$user = $this->Users->get($user_id, [
			'contain' => []
		]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Senha editada com sucesso'));

				return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
			}
			$this->Flash->danger(__('Erro: Senha não foi editada com sucesso'));
		}

		$this->set(compact('user'));
	}

	public function alterarFotoPerfil()
	{
		$user_id = $this->Auth->user('id');
		$user = $this->Users->get($user_id, [
			'contain' => []
		]);
		$imagemAntiga = $user->imagem;

		if ($this->request->is(['patch', 'post', 'put'])) {
			//var_dump($this->request->getData());
			$nomeImagem = $this->request->getData()['imagem']['name'];
			$imagemTemporaria = $this->request->getData()['imagem']['tmp_name'];
			$user = $this->Users->newEntity();
			$user->id = $user_id;
			$user->imagem = $nomeImagem;

			$destino = "files\user\\" . $user_id . "\\" . $nomeImagem;

			if (move_uploaded_file($imagemTemporaria, WWW_ROOT . $destino)) {
				if (($imagemAntiga !== null) and ($imagemAntiga !== $user->imagem)) {
					unlink(WWW_ROOT . "files\user\\" . $user_id . "\\" . $imagemAntiga);
				}


				if ($this->Users->save($user)) {
					if ($this->Auth->user('id') === $user->id) {
						$user = $this->Users->get($user_id, [
							'contain' => []
						]);
						$this->Auth->setUser($user);
					}

					$this->Flash->success(__('Foto editada com sucesso'));
					return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
				} else {
					$this->Flash->danger(__('Erro: Foto não foi editada com sucesso'));
				}
			}
		}

		$this->set(compact('user'));
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Http\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Users->get($id);
		if ($this->Users->delete($user)) {
			$this->Flash->success(__('o Usuário foi deletado.'));
		} else {
			$this->Flash->danger(__('O usuário não foi deletado. Por favor tente novamente.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/* FUNÇÃO VERIFICADORA DA TELA DE LOGIN */

	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->danger(__('Erro: Usuário não autenticado ou login e senha incorretos'));
			}
		}
	}

	/* FUNÇÃO PARA DESLOGAR O USUÁRIO DO SISTEMA */

	public function logout()
	{
		$this->Flash->success(__('Deslogado com sucesso!')); //
		return $this->redirect($this->Auth->logout());
	}
}
