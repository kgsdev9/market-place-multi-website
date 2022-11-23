<section class="inner-section wishlist-part" style="margin-top:50px;">
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
                        Passer  au paiement
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
