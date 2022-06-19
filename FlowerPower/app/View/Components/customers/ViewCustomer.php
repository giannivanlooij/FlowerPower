<?php

namespace App\View\Components\Customers;

use Illuminate\View\Component;
use App\Models\Klanten;

class Viewcustomer extends Component
{
    public ViewCustomer $customer;

    public function mount(Customers $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('views.components.customers.view-customer');
    }
}





