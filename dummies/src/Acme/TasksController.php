<?php

namespace Acme;

class TasksController{
	protected $auth;

	public function __construct(Authorizer $auth){
		$this->auth = $auth;
	}

    public function show()
    {
        var_dump($this->auth->guest());
        return 'a task';
    }
}
