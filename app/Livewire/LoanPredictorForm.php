<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class LoanPredictorForm extends Component
{
    #[Title('Loan Prediction')]
    public function render()
    {
        return view('livewire.loan-predictor-form');
    }
}
