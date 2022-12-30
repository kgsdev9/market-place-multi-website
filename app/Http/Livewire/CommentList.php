<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentList extends Component
{


    public $id_product;

    public $comments;
    public $content;
    public $id_comment;
    public $rating;



    public function mount($id_product){
        $this->id_product = $id_product ;
        $this->comments = Comment::where('product_id',$this->id_product);
    }




    public function render()
    {
        return view('livewire.comment-list');
    }


    public function addComment(){
        dd(  $this->content);

    }
}
