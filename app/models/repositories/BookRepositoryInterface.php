<?php

interface BookRepositoryInterface {
	public function all();
	public function find($id);
	public function store($data);
}