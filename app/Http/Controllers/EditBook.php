
public function insert(){
    DB::insert('INSERT INTO book(title, author) VALUES(?, ?)', [$title, $author]);
    return view('book', ["title" => $title, "author"=>$author]);
}
public function update($id, $title, $author){
  if(isset($_POST['submit'])){
     DB::update('UPDATE book
    SET title=?, author=?
    WHERE id_book=?', [$_POST['newTitle'], $_POST['newAuthor'], $GET_["id"]]
    );
  }
    return view('editbook', ["title" => $title, "author"=>$author, ]);
}
public function updated($id, $title, $author){
    if(isset($_POST['submit'])){
       DB::update('UPDATE book
      SET title=?, author=?
      WHERE id_book=?', [$_POST['newTitle'], $_POST['newAuthor'], $GET_["id"]]
      );
    }
      return view('editbook', ["title" => $title, "author"=>$author, ]);
  }
} //class end
