<?php

namespace App\Http\Livewire;

use App\Models\Comments;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class ProfileSellerPublicComponent extends Component
{
    public $contentComment;
    public $products;
    public $comments;
    public $order;
    public $idUser;

    public function mount($id)
    {
        $this->idUser = $id;
    }

    public function render()
    {
        $user = User::find($this->idUser);
        $this->products = Product::where('user_iduser_seller',$this->idUser)->get();
        $this->comments = Comments::where('user_iduser',$this->idUser)->get();
        return view('livewire.profile-seller-public-component',
        ['products' => $this->products,
        'comments' => $this->comments,
            'user' => $user]
        )->layout('layouts.base');
    }

    public function submitComment()
    {
        $user = Auth::user();
        $comment = new Comments();
        $comment->publication_date = Carbon::now();
        $comment->content = $this->contentComment;
        $comment->user_iduser = $this->idUser;
        $comment->user_iduser_comment = $user->id;
        $comment->save();
        $this->contentComment = '';
    }
}
