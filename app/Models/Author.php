<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    use HasFactory;

    public static function get_author(){

      /*$list_author =  DB::table('author')->paginate(6);
      $list_book_author = DB::table('author')
          ->join('books', 'author.id', '=', 'books.author')
          ->select('author.id, books.name');*/
      $author = DB::table('authors')->paginate(6);
      $author = $author->load('books');
      return $author;//array('list_author'=>$list_author,'list_book_author'=>$list_book_author);

    }
    /**
  * Получить комментарии статьи блога.
  */
   public function books()
   {
     return $this->hasMany('App\Models\Book');
   }
}
