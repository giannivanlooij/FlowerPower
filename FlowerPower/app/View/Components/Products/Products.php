<?php

namespace App\View\Components\Products;

use Illuminate\View\Component;
use App\Models\Product;

use Illuminate\Database\Eloquent\Builder;

class Products extends Component
{

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public $search;

    public $products;

    

        public function mount()
    {
        $this->product = Product::orderBy('Product_Name', 'ASC')->get();
        
    }

    public function clearFilters()
    {
        $this->search = '';
    }

    
    public function render()
    {
        $search = '%'.$this->search.'%';

        $products = Product::query()
        ->where([['Product_Name', 'LIKE', '%' . $this->search . '%'],])
        ->orderBy('Product_Id', 'DESC')->paginate(15);

        return view('components.products.products', [
            'products' => $products,
        ]);
    }
}














