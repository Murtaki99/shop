<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-grup">
                    <input wire:model.live="search" type="text" class="form-control" placeholder="Search product">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row p-3">
        @foreach ($products as $product )
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-80">
                <img src="{{ $product->image ? asset('storage/' .$product->image) :'https://source.unsplash.com/100x100' }}"
                    alt="" class="card-img-top img-fluid">
                <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.5)">
                    <h1 class="text-white">
                        <strong>{{ $product->name }}</strong>
                    </h1>
                    <h6 class="text-white">Rp.{{ number_format($product->price,2,",",".") }}</h6>
                    <p class="text-white">{{ $product->description }}</p>
                    <button class="btn btn-block btn-outline-secondary"> +Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $products->links() }}
</div>