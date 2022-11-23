

<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>wishlist</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
            <li class="breadcrumb-item active" aria-current="page">wishlist</li>
        </ol>
    </div>
</section>

<section class="inner-section wishlist-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-scroll">
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Nom du produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sous-total</th>
                                <th scope="col">Sous-total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            @livewire('actioncomponent')
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-5">
                    <button class="btn btn-outline">
                        Load more items
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
