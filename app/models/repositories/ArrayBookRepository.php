<?php

class ArrayBookRepository implements BookRepositoryInterface {
	public function all(){
		return 'all with array';
	}

	public function find($id){
		return 'find by id';
	}
}