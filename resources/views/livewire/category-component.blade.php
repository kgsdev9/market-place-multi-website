<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
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
        <div class="row">
            <div class="col-lg-12">
                <div class="top-filter">
                    <div class="filter-show">
                        <label class="filter-label">Affichage :</label>
                        <select class="form-select filter-select">
                            <option value="1">12</option>
                            <option value="2">24</option>
                            <option value="3">36</option>
                        </select>
                    </div>
                    <div class="filter-short">
                        <label class="filter-label">Short by :</label>
                        <select class="form-select filter-select">
                            <option selected="">Populaire</option>
                            <option value="3">Tendance</option>
                            <option value="1">Product</option>
                            <option value="2">Recomandé</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
            @foreach ($category as $value )
            <div class="col">
                <div class="category-wrap">
                    <div class="category-media">
                        <img src="{{asset('assets/pages/images/category/dairy.jpg')}}" alt="">
                        <div class="category-overlay">
                            <a href="{{route('product.category.index', $value->id)}}"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="category-meta">
                        <h4>{{$value->name}}</h4>
                        <p>(25 items)</p>
                    </div>
                </div>
            </div>
            @endforeach




















        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-paginate">
                    <p class="page-info">VTP MARKET CATEGORIE</p>
                    <ul class="pagination">
                        {{ $category->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
