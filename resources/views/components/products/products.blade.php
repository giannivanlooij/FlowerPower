<div>
    <div class="form-row">
        <div class="form-group col-md-10">
            <label for="inputDescription">Omschrijving</label>
            <input type="text" class="form-control " id="inputDescription" placeholder="Zoek...." wire:model="search">
        </div>
        <div class="form-group col-md-2" style="margin-top: 30px">
            <button class="btn btn-primary" wire:click="clearFilters">Filters leeghalen</button>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover border">
            <thead class="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Artikel</th>
                <th scope="col">Beschrijving</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <div>
                <tr class="clickable" onclick="window.location='/apps/products/bekijken/{{ $product->Product_ID }}'">
                    <td>{{ $product->Product_ID }}</td>
                    <td>{{ $product->Product_Name }}</td>
                    <td>{{ $product->Product_Description }}</td>
>
                </tr>
            </div>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="float-right">
        {{ $products->links() }}
    </div>
</div>
