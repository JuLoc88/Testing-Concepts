<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Acme\Authorizer;

class TasksControllerSpec extends ObjectBehavior {
	function let(Authorizer $auth){
		$this->beConstructedWith($auth);
	}

    function it_shows_a_specific_task(){
        $this->show()->shouldReturn('a task');
    }
}
