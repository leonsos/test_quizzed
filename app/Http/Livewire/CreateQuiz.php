<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;

class CreateQuiz extends Component
{
    protected $rules = [
        'favoriteSocialNetwork'=> 'required',
        'age'=> 'required',
        'gender'=> 'required',
        'timeOnFacebook'=> 'required',
        'timeOnTwitter'=> 'required',
        'timeOnTiktok'=> 'required',
        'timeOnWhatsApp'=> 'required',
        'timeOnInstagram'=> 'required',
    ];
    public $timeOnFacebook,$timeOnWhatsApp,$count=0,$timeOnTwitter,$timeOnInstagram,$timeOnTiktok,$gender,$age,$favoriteSocialNetwork;//,$count=0;
    public function setCount()
    {
        $this->count=1;
    }
    public function save()
    {
        $this->validate();     
        Quiz::create([
            'user_id'=>auth()->id(),
            'age'=>$this->age,
            'gender'=>$this->gender,
            'favoriteSocialNetwork'=>$this->favoriteSocialNetwork,
            'timeOnFacebook'=>$this->timeOnFacebook,
            'timeOnWhatsApp'=>$this->timeOnWhatsApp,
            'timeOnTwitter'=>$this->timeOnTwitter,
            'timeOnInstagram'=>$this->timeOnInstagram,
            'timeOnTiktok'=>$this->timeOnTiktok,
        ]);
        $this->reset(['age','favoriteSocialNetwork','gender','timeOnFacebook','timeOnTiktok','timeOnInstagram','timeOnTwitter','timeOnWhatsApp']);
        $this->emit('alert','Survey completed');
        $this->setCount();
    }
    public function render()
    {
        return view('livewire.create-quiz');
    }
}
