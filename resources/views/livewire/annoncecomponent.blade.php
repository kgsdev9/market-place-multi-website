<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Reduisez vos voyages en toute securite</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bagages</li>
            </ol>
        </div>
    </section>

    <section class="inner-section blog-grid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
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
                                        <option value="3">recent</option>
                                        <option value="1">featured</option>
                                        <option value="2">recommend</option>
                                    </select>
                                </div>
                                <div class="filter-action">
                                    <a href="blog-grid.html" class="active" title="Two Column"><i class="fas fa-th-large"></i></a>
                                    <a href="blog-standard.html" title="One Column"><i class="fas fa-th-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            @forelse ($annonce as $value )
                            <div class="col-md-4 col-lg-4">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="{{route('annnnonced.show', $value->id)}}">
                                            <img src="{{asset('assets/pages/images/blog/01.jpg')}}" alt="">

                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="fas fa-user"></i>
                                                <span>{{$value->user->name}}</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Départ le {{$value->start_date}}</span>
                                            </li>
                                        </ul>
                                        <h4 class="blog-title">
                                            <a >{{$value->title}}</a>
                                        </h4>
                                        <p class="blog-desc">
                                            {{Str::limit($value->description, 30)}}
                                        </p>
                                        <p class="blog-desc">
                                            {{$value->country_start}} - {{$value->country_destination}}
                                        </p>
                                        <a class="blog-btn" href="{{route('annnnonced.show', $value->id)}}">
                                            <span>Detail de l'annonce</span>
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <span>aucune annonce</span>
                            @endforelse


                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <p class="page-info">AVEC  VTP VOYAGE EN TOUTE SERENITE</p>
                                <ul class="pagination">
                                        {{$annonce->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-3">

                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Départ Imminent</h3>
                        <ul class="blog-widget-feed">
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{asset('assets/pages/images/blog-widget/01.jpg')}}" alt="">

                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>





                        </ul>
                    </div>


                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Partager Ces Annonces</h3>
                        <ul class="blog-widget-social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                            <li><a href="#" class="icofont-pinterest"></a></li>
                            <li><a href="#" class="icofont-instagram"></a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">

                        <a href="#"><img class="img-fluid" src="{{asset('assets/pages/images/promo/blog/01.jpg')}}" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
