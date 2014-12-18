<?php

class EloquentBookRepository implements BookRepositoryInterface {
	public function all() {
		var_dump("hitting the db");
		return Book::all();
	}

	public function find($id){

	}

	public function store($data){
		var_dump('fired store');
	}
}