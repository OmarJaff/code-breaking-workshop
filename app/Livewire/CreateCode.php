<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public $message;

    protected array $symbols = [
       'search', 'home' , 'favorite', 'star', 'check', 'key', 'deployed_code', 'public', 'sentiment_satisfied' , 'rocket_launch',
       'partly_cloudy_day',
        'sentiment_extremely_dissatisfied', 'wind_power','elderly_woman','eyeglasses','barefoot','visibility',
        'brush','auto_stories','shopping_cart','local_shipping','flight','sailing','bike_lane','sports_esports',
        'sports_soccer'
    ] ;

    #[Computed(persist: true)]
    public function letters () : array
    {
         shuffle($this->symbols);
         return collect(range('a' , 'z'))->combine($this->symbols)->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
