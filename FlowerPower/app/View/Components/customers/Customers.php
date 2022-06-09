<?php

namespace App\View\Components\Customers;

use Illuminate\View\Component;

//models
use App\Models\Artikel;
use App\Models\Artikel;
use App\Models\ArtikelCategorie;
use App\Models\ArtikelGroep;
use App\Models\ArtikelMerk;
use Illuminate\Database\Eloquent\Builder;

class Articles extends Component
{
    use WithPagination;

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public $search;

    public $brands;
    public $groups;
    public $categories;

    public $brandFilter = 0;
    public $groupFilter = 0;
    public $categoryFilter = 0;

    public function mount()
    {
        $this->brands = ArtikelMerk::orderBy('MerkNaam', 'ASC')->get();
        $this->groups = ArtikelGroep::orderBy('ArtikelGroep', 'ASC')->get();
        $this->categories = ArtikelCategorie::orderBy('ArtikelCategorie', 'ASC')->get();
    }

    public function clearFilters()
    {
        $this->brandFilter = 0;
        $this->groupFilter = 0;
        $this->categoryFilter = 0;
        $this->search = '';
    }

    public function render()
    {
        $search = '%'.$this->search.'%';

        $articles = Artikel::query()->where([['Artikel_Omschrijving', 'LIKE', '%' . $this->search . '%'],])
        ->when($this->brandFilter != 0, function (Builder $query): Builder {
            return $query->where('Artikel_Merk_ID', $this->brandFilter);
        })
        ->when($this->groupFilter != 0, function (Builder $query): Builder {
            return $query->where('Artikel_Groep_ID', $this->groupFilter);
        })
        ->when($this->categoryFilter != 0, function (Builder $query): Builder {
            return $query->where('Artikel_Categorie_ID', $this->categoryFilter);
        })->orderBy('Artikel_ID', 'DESC')->paginate(15);

        return view('livewire.article.articles', [
            'articles' => $articles,
        ]);
    }
}
