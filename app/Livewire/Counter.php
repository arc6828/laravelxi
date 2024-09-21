<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{
    // 1
    public $count = 0;

    // 2
    public $message = "this is default text";

    // 3 
    public $height = 170;
    public $weight = 70;
    public $bmi;

    public function mount()
    {
        
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function calculate()
    {
        $result = $this->weight / $this->height / $this->height *100 *100;
        $this->bmi = number_format($result,2);
    }
   
    #[Layout('components.bootstrap-theme')] 
    public function render()
    {
        $this->calculate();
        return view('livewire.counter');
    }
}
