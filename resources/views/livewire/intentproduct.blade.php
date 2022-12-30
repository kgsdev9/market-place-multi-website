<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Liste de vos envies</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">Liste d'envie</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produit</li>
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
                                    <th scope="col">Article</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">statut</th>
                                    <th scope="col">Panier</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $heart  )
                                <tr>

                                    <td class="table-image"><img src="{{asset('cover/'.$heart->cover_image)}}" alt="product"></td>

                                    <td class="table-name"><h6>{{Str::limit( $heart->product->name, 30)}}</h6></td>
                                    <td class="table-price"><h6>{{$heart->product->price}} €</h6></td>
                                    <td class="table-desc"><p>{{Str::limit( $heart->product->description, 40)}}</p></td>
                                    <td class="table-status">
                                        @if($heart->product->statut =="disponible")
                                        <h6 class="stock-out">en stock</h6>
                                        @elseif ($heart->product->statut =="stock vide")
                                        <h6 class="stock-out">Stock Vide</h6>
                                        @endif

                                    </td>
                                    <td class="table-shop">
                                        <button  wire:click="addtoproduct({{$heart->product->id}})"  class="product-add" title="Ajouter au panier">Ajouter au panier</button>

                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="" title="Quick View"><i class="fas fa-eye"></i></a>
                                        <a class="trash" href="" title="Remove Wishlist"><i class="icofont-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach






                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <a href="{{route('index.product')}}" class="btn btn-outline">Consulter D'autres Produits</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
