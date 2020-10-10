<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**

 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/**

	 * e.g. `$this->loadComponent('Security');`
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();

		$this->loadComponent('RequestHandler', [
			'enableBeforeRedirect' => false,
		]);
		$this->loadComponent('Flash');
		$this->loadComponent('Auth', [ //  FUNÇÃO DE SEGURANÇA DO CAKEPHP
			'loginRedirect' => [
				'controller' => 'Welcome',
				'action' => 'index',
			],
			'logoutRedirect' => [
				'controller' => 'users',
				'action' => 'login',
			],
			'authError' => false,
		]);

		/*
			         * Enable the following component for recommended CakePHP security settings.
			         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
		*/
		//$this->loadComponent('Security');

	}
	public function beforeRender(Event $event) {
		$prefix = null;
		if ($this->request->getParam(['prefix']) !== null) {
			$prefix = $this->request->getParam(['prefix']);
		}

		if ($prefix == 'admin') {
			if (($this->request->getParam(['action']) !== null) and ($this->request->getParam(['action']) == 'login')) {
				$this->viewBuilder()->setLayout('login');
			} else {
				$perfilUser = $this->Auth->user();
				$this->set(compact('perfilUser'));
				$this->viewBuilder()->setLayout('admin'); //FUNÇÃO VERIFICADORA PARA CASO NÃO CARREGAR A TELA DE LOGIN ENTRAR NO ADM
			}
		}
	}
}

/* O metodo beforeRender é utilizado antes e carregar a view, olhar a documentaçao0 do cake nas partes de controoller*/