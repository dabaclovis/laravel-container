<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Article extends Component
{
    public function render()
    {
        return view('livewire.index');
    }

    public function about()
    {
        return view('livewire.about');
    }

    public function policy()
    {
        return view('livewire.policy');
    }

    public function articles()
    {
        return view('livewire.articles',[
            'articles' => DB::table('articles')->paginate(5),
        ]);
    }
}
