

        <aside class="category-sidebar">
            <div class="category-header">
                <h4 class="category-title">
                    <i class="fas fa-align-left"></i>
                    <span>categories</span>
                </h4>
                <button class="category-close"><i class="icofont-close"></i></button>
            </div>
            <ul class="category-list">
                @for ($i=0 ; $i< count($categories);$i++ )
                <li class="category-item">
                    <a class="category-link dropdown-link" >
                        {{-- <i class="flaticon-vegetable"></i> --}}
                        <span>{{Str::limit($categories[$i]->name,17)}}</span>
                    </a>
                    <ul class="dropdown-list">

                        @for ($j=0 ; $j< count($sous_categories[$i]);$j++)
                        <li>  <a href="{{route('categorie_souscategorie',$sous_categories[$i][$j]->name)}}">{{ Str::limit($sous_categories[$i][$j]->name, 17)}}</a></li>
                        @endfor
                    </ul>
                </li>

                @endfor

            </ul>
            <div class="category-footer">
                <p>Tous droits réservés à  <a href="">VTP GROUP</a></p>
            </div>
        </aside>
        <!--=====================================
                    BANNER PART START
        =======================================-->

        <section class="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="home-grid-promo">
                                    <a href="#"><img src="{{asset('assets/imagesvtp/vtp-creation1.gif')}}" alt="promo"></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12">
                                <div class="home-grid-promo">
                                    <a href="#"><img src="{{asset('assets/imagesvtp/annonce3.jfif')}}" alt="promo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                        <div class="home-grid-slider slider-arrow slider-dots">
                            <a href="#"><img src="{{asset('assets/imagesvtp/annonce4.jfif')}}" alt=""  height="435px;" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('assets/imagesvtp/vtp-creation2.jpg')}}" alt=""  height="435px;" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>






         {{-- <section class="section suggest-part">
            <div class="container">
                <ul class="suggest-slider slider-arrow">

                    @foreach ($category as $category )
                    <li>
                        <a class="suggest-card" href="{{route('product.category.index', $category->id)}}">
                            <img src="{{asset('assets/pages/images/suggest/03.jpg')}}" alt="suggest" style="height:120px; width:250px;">
                            <h5>{{ Str::limit($category->name, 10)}} <span>{{count($category->products)}} Produits</span></h5>
                        </a>
                    </li>
                    @endforeach


                </ul>
            </div>
        </section> --}}




        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    SUGGEST PART START
        =======================================-->

        <!--=====================================
                    SUGGEST PART END
        =======================================-->


        <!--=====================================
                    RECENT PART START
        =======================================-->
        @livewire('product-component')
        @livewire('sectionproductcomponent')
        @livewire('sectiontwocomonent')




        <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Livraison à Domicille</h5>
                                <p>Nos Transporteurs Se Chargent de vous livrer vos produits ou que vou soyez</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Politique de retour </h5>
                                <p>Nous  nous chargons de prendre prendre en compte votre requette pour mieux faciliter vos  transactions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Notre Equipe 24/24</h5>
                                <p>Notre equipe est disponible 24/24 pour prendre en compte toutes vos préaucupationss</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>Paiement Securisé</h5>
                                <p>Nous vous offrons une large methode pour vos transactions sur notre plateforme de facon seucrisée</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


