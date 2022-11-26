<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>all category</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">all-category</li>
            </ol>
        </div>
    </section>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-filter">
                        <div class="filter-show">
                            <label class="filter-label">Show :</label>
                            <select class="form-select filter-select">
                                <option value="1">12</option>
                                <option value="2">24</option>
                                <option value="3">36</option>
                            </select>
                        </div>
                        <div class="filter-short">
                            <label class="filter-label">Short by :</label>
                            <select class="form-select filter-select">
                                <option selected="">default</option>
                                <option value="3">trending</option>
                                <option value="1">featured</option>
                                <option value="2">recommend</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                        @foreach ($sellerspages as $sellers )
                        <div class="col">
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="{{asset('items/2.jpg')}}" alt="category">
                                    <div class="category-overlay">
                                        <a href="{{route('sellers.products.index', $sellers->id)}}"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>{{$sellers->sirname}}  {{$sellers->firstname}}</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                        </div>
                        @endforeach




            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">60</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
