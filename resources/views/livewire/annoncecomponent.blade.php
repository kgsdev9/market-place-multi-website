<div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center; margin-top:30px;">
        <div class="col-md-12">
            <H2>REDUISEZ VOS VOYAGES EN TOUTE SECURITE</H2>
<form wire:submit.prevent="search">
                @csrf
                  <ul class="list-inline">
                     <li class="list-inline-item mr-2">
                          <div class="form-inline">
              <label class="mr-2 text-white">DEPART</label>
                <select wire:model="depart"  class="form-control">
                   <option value=""></option>
                   @foreach ($countries_start as $c_start)
                       <option value="{{$c_start->country_start}}">{{$c_start->country_start}}</option>
                   @endforeach

                </select>



        </div>
      </li>

      <li class="list-inline-item mr-2">
        <div class="form-inline">
            <label class="mr-4 text-white">ARRIVEE</label>
              <select wire:model="arrive" id="" class="form-control">

                <option value=""></option>
                @foreach ($countries_destination as $c_destination )

                <option value="{{$c_destination->country_destination}}">{{$c_destination->country_destination}}</option>

                @endforeach


              </select>



      </div>
    </li>



    <li class="list-inline-item mr-2">
        <div class="form-inline">
            <label class="mr-4 text-white">DATE  DEPART </label>

            <select wire:model="date_depart" class="form-control">
                <option value=""  ></option>
                @foreach ($dates_departs as $d)
                    <option value="{{$d->start_date}}">{{$d->start_date}}</option>
                @endforeach
            </select>
        </div>

    </li>


    <li class="list-inline-item mr-3">
        <div class="form-inline">
            <label class="mr-4 text-white" > KILO </label>
            <select class="form-control"  wire:model="kilo" >
                <option value=""></option>
                @foreach ($kilos as $k)
                    <option value="{{$k->kilo}}">{{$k->kilo}}</option>
                @endforeach
            </select>




      </div>
    </li>
      <li class="list-inline-item mr-3">
         <button class="btn btn-success"  type="submit">RECHERCHER</button>
      </li>
    </ul>

</form>

</div> <!-- col.// -->
    </section>

    <section class="inner-section blog-grid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row">
                            @forelse ($annonces as $value )
                            <div class="col-md-4 col-lg-4">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="{{route('annnnonced.show', $value->id)}}">
                                            <img src="{{asset('annonces/images/'.$value->image)}}" alt="">
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

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-3">

                    <div class="blog-widget">
                        <h3 class="blog-widget-title">VTP VOYAGE</h3>
                        <ul class="blog-widget-feed">
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="{{asset('assets/vendeur.jpg')}}" alt="">

                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Comment Poster une annonce ?</a>

                                </h6>
                            </li>





                        </ul>
                    </div>


                    <div class="blog-widget"  style="line-height: 20px;">
                        <h3 class="blog-widget-title">Partager Ces Annonces</h3>
                        <ul class="blog-widget-social">
                            <li>   {!! $shareComponent !!}</li>

                        </ul>
                    </div>
                    <div class="blog-widget">

                        <a href="#"><img class="img-fluid" src="{{asset('assets/vendeur.jpg')}}" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
