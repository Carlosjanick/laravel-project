<?php
	function printableTitle(array $book) : string {
		$result = '<i>' . $book['title'] . '</i> - '. $book['author'];

		if(!$book['available']){
			$result .= '<b> - Not available</b> ';
		}

		$result .= '  <a href="?title='.$book['title'].'" >Escolher</a>';

		return $result;
	}

	//passa a array por referencia assim cada mudança afetara a matriz original.
	function bookingBook(array &$books, string $title) : bool{
		foreach ($books as $key => $book) {
			if($book['title'] == $title){
				if($book['available']){
					$books[$key]['available'] = false;
					return true;
				}else{
					return false;
				}
			}
		}
		return false;
	}


	function updateBooks(array $books){
		$booksJson = json_encode($books); //transforma a array em json.
		file_put_contents(__DIR__ . '/books.json', $booksJson);
	}
?>

