<?php

use Mockery as m;

class BooksControllerTest extends TestCase {
	
	public function testAll(){
		//$mocked = m::mock('BookRepositoryInterface');
		//App::instance('BookRepositoryInterface', $mocked);
		//$mocked->shouldReceive('all')->once()->andReturn('foo');

		Book::shouldReceive('all')->once()->andReturn('foo');		

		$this->call('GET', 'books');
		
		$this->assertRequestOk();
		
		$this->assertViewReceives('books', 'foo');
	}

	public function testStore()
	{
		Book::shouldReceive('store')->once()->andReturn('truthy');
		
		$this->call('POST', 'books');
		
		$this->assertRedirectedTo('books');		
	}


	public function testStoreFails(){
		Book::shouldReceive('store')->once()->andReturn(false);

		$this->call('POST', 'books');

		$this->assertRedirectedTo('books/create');
	}

}