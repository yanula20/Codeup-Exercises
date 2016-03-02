<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach($books as $title => $book){

	echo "Book information for {$title} is listed below.\n\n";
	 
	foreach($book as  $key => $value){

	 	echo "{$key} : {$value}\n\n";
	 }
	
}

foreach($books as $title => $book){
	
	echo "{$title} is a title in the array. It was published in {$book['published']}.\nThe author's name is {$book['author']} and it has {$book['pages']} pages.\n\n";
	
}


foreach($books as $title => $book){ //k => v;

	 
	foreach($book as  $key => $value){

	 	if($value > 1950){

	 		echo "{$title} - {$value}.\n\n";

	 	} else {

	 		//do nothing
	 	}
	 }
}

