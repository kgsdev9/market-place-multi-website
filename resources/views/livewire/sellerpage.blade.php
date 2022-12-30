<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>NOS VENDEURS</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nos Vendeurs</li>
            </ol>
        </div>
    </section>


    <section class="inner-section">
        <div class="container">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                        @foreach ($sellerspages as $sellers )
                        <div class="col">
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="{{asset('assets/imagesvtp/vendeur.jpg')}}" alt="category">
                                    <div class="category-overlay">
                                        <a href="{{route('sellers.products.index', $sellers->id)}}"> <i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>{{$sellers->sirname}}  {{$sellers->firstname}}</h4>
                                    <p>{{count($sellers->products)}} Produit(s)</p>
                                </div>
                            </div>
                        </div>
                        @endforeach




            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-paginate">
                        <ul class="pagination">
                                {{$sellerspages->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
