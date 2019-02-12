<?php
namespace app\admin\controller;

class Auth extends Common
{
	public function login()
	{
		return $this->fetch();
	}
}