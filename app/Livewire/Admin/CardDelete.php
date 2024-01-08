<?php

namespace App\Livewire\Admin;

use App\Livewire\Partials\Modal;

class CardDelete extends Modal
{
    public $card;


    public function delete()
    {
        $this->card->delete();

        $this->redirect('/admin/cards');
    }

    public function render()
    {
        return view('livewire.admin.card-delete');
    }
}
