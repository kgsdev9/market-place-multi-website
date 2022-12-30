{{-- <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Nos Categories</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
    </div>
</section>

<section class="inner-section">
    <div class="container">

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
            @foreach ($category as $value )
            <div class="col">
                <div class="category-wrap">
                    <div class="category-media">
                        <img src="{{asset('categorie/images/'.$value->image)}}" alt="" >
                        <div class="category-overlay">
                            <a href="{{route('product.category.index', $value->id)}}"> <i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="category-meta">
                        <h4>{{$value->name}}</h4>
                        <p>(Total : {{count($value->products)}} produit(s))</p>
                    </div>
                </div>
            </div>
            @endforeach --}}


            <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
                <div class="container">
                    <h2>Nos Categories</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </div>
            </section>

            <section class="inner-section shop-part">
                <div class="container">

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">


                        @foreach ($category as $value )
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text new">Populaire</label>
                                    </div>

                                    <a class="product-image" href="{{route('product.category.index', $value->id)}}">
                                        <img src="{{asset('categorie/images/'.$value->image)}}" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a href="{{route('product.category.index', $value->id)}}">{{$value->name}}</a>
                                    </h6>

                                    <a   href="{{route('product.category.index', $value->id)}}" class="product-add" title="Consulter">
                                        <i class="fas fa-eye"></i>
                                        <span>Consulter</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <ul class="pagination">
                                    {{ $category->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


















</section>
