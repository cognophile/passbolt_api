<?php
/**
 * Insert User Task
 *
 * @copyright    copyright 2012 Passbolt.com
 * @license      http://www.passbolt.com/license
 * @package      app.plugins.DataExtras.Console.Command.Task.UserTask
 * @since        version 2.12.11
 */

require_once(APP_DIR . DS  . 'Plugin' . DS . 'DataExtras' . DS . 'Console' . DS . 'Command' . DS . 'Task' . DS . 'ModelTask.php');

App::uses('User', 'Model');

class UserTask extends ModelTask {

	public $model = 'User';

	public static function getAlias() {
		$User = ClassRegistry::init('User');
		$aliases = array (
			'adm' => $User->findByUsername('admin@passbolt.com'),
			'gue' => $User->findByUsername('guest@passbolt.com'),
			'ano' => $User->findByUsername('anonymous@passbolt.com'),
			'mng' => $User->findByUsername('manager.nogroup@passbolt.com'),
			'utt' => $User->findByUsername('utest@passbolt.com'),
			'tst' => $User->findByUsername('test@passbolt.com'),
			'ins' => $User->findByUsername('root@passbolt.com'),
			'dar' => $User->findByUsername('darth.vader@passbolt.com'),
			'rem' => $User->findByUsername('remy@passbolt.com'),
			'aur' => $User->findByUsername('aurelie@passbolt.com'),
			'myr' => $User->findByUsername('myriam@passbolt.com'),
			'ism' => $User->findByUsername('ismail@passbolt.com'),
			'kev' => $User->findByUsername('kevin@passbolt.com'),
			'ced' => $User->findByUsername('cedric@passbolt.com'),
			'fra' => $User->findByUsername('frank@passbolt.com'),
			'jea' => $User->findByUsername('jean-rene@test.com'),
			'usr' => $User->findByUsername('user@passbolt.com'),
			'au1' => $User->findByUsername('a-usr1@companya.com'),
			// 'ala' => $User->findByUsername('alan@passbolt.com'),
			// 'ras' => $User->findByUsername('rasterman@passbolt.com')
		);
		foreach ($aliases as $name=>$obj){
			$aliases[$name] = $obj['User']['id'];
		}
		return $aliases;
	}
	
	protected function getData() {
		$us[] = array('User' => array(
			'id' => 'eeee6042-c5cd-11e1-a0c5-080027796c51',
			'username' => 'utest@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c', // USER
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => 'dada6042-c5cd-11e1-a0c5-080027796c51',
			'username' => 'root@passbolt.com',
			'role_id' => '142c1340-c5cd-11e1-a0c5-080027796c4c', // ROOT
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => 'dada6042-c5cd-11e1-a0c5-080027796c4c',
			'username' => 'darth.vader@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			//533d32c0-1f30-438c-8f26-1768c0a895dc
			'id' => '533d32c0-1f30-438c-8f26-1768c0a895dc',
			'username' => 'manager.nogroup@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4c',
			'username' => 'anonymous@passbolt.com',
			'role_id' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4e',
			'username' => 'test@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-f214-4549-9807-2f4fd7a10fce',
			'username' => 'aurelie@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-af80-4e5e-86d0-2f4fd7a10fce',
			'username' => 'ismail@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-fa10-47af-aaa8-2f4fd7a10fce',
			'username' => 'myriam@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-a34c-406f-a9f1-2f4fd7a10fce',
			'username' => 'remy@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-aa88-46cb-a09b-2f4fd7a10fce',
			'username' => 'kevin@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-7e80-4eb6-b4cc-2f4fd7a10fce',
			'username' => 'cedric@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdea9c-4380-4eb6-b4cc-2f4fd7a10fce',
			'username' => 'jean-rene@test.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '50cdab9c-4380-4eb6-b4cc-2f4fd7a10fce',
			'username' => 'user@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '533d3564-03e8-4963-94a7-178cc0a895dc',
			'username' => 'guest@passbolt.com',
			'role_id' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '533d37a0-bc80-4945-9b11-1663c0a895dc',
			'username' => 'admin@passbolt.com',
			'role_id' => '142c1188-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			'id' => '533d37a0-aa11-4945-9b11-1663a0a895dc',
			'username' => 'a-usr1@companya.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		$us[] = array('User' => array(
			// 533d346d-d378-4acc-affd-1663c0a895dc
			'id' => '533d346d-d378-4acc-affd-1663c0a895dc',
			'username' => 'frank@passbolt.com',
			'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			'password' => 'password',
			'active' => 1
		));
		// $us[] = array('User' => array(
			// 'id' => 'abcdab9c-4380-8888-b4cc-2f4fd7a10fce',
			// 'username' => 'alan@passbolt.com',
			// 'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			// 'password' => 'password',
			// 'active' => 1
		// ));
		// $us[] = array('User' => array(
			// 'id' => 'abcdab9c-4380-7777-b4cc-2f4fd7a10fce',
			// 'username' => 'rasterman@passbolt.com',
			// 'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
			// 'password' => 'password',
			// 'active' => 1
		// ));
		
		return $us;
	}
}