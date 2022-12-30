@if(session()->get('cart') >0 )
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
                                <th scope="col">Statut</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Sous-total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            @livewire('actioncomponent')
                    </table>
                </div>
            </div>
        </div>
            @livewire('totalcartcomponent')
    </div>
</section>


@else
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Votre panier est vide </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Panier</li>
        </ol>
    </div>
</section>

@endif
