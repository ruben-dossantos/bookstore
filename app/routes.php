<?php

App::bind('BookRepositoryInterface', 'EloquentBookRepository');

Route::resource('books', 'BooksController');