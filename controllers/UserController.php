<?php

require 'models/User.php';
require 'models/Status.php';
require 'models/Rol.php';

/**
 * 
 */
class UserController
{

	private $user;
	private $status;
	private $rol;

	public function __construct()
	{
		$this->user = new User;
		$this->status = new Status;
		$this->rol = new Rol;
	}

	public function index()
	{
		require 'views/layout.php';
		$users = $this->user->getAll();
		require 'views/users/list.php';
	}

	public function new()
	{
		$roles = $this->role->getAll();
		require 'views/layout.php';
		require 'views/users/new.php';
	}

	public function save()
	{
		$this->user->newUser($_REQUEST);
		header('Location: ?controller=user');
		
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->user->getById($id);
			$statuses = $this->status->getCustomStatuses('usuario');
			$roles = $this->role->getAll();
			require 'views/layout.php';
			require 'views/users/edit.php';
		} else {
			echo "Error, no se realizo";
		}
	}

	public function update()
	{
		if (isset($_POST)) {
			$this->user->editUser($_POST);
			header('Location: ?controller=user');
		} else {
			echo "Error, no se realizo";
		}
	}
	
	public function delete()
	{
		$this->user->deleteUser($_REQUEST);
		header('Location: ?controller=user');
	}

	
}
