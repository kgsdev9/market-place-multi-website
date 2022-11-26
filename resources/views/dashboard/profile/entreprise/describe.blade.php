@extends('dashboard.layout.app')

@section('main')


<div id="wrapper" class="theme-cyan">

    <!-- mani page content body part -->
    <div id="main-content">

        <div class="row clearfix">

            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Mes Informations Entreprise</h2>
                    </div>
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-withicon"><i class="fa fa-home"></i> Nom De L'entreprise </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-withicon"><i class="fa fa-user"></i> Modifier mes informations</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="Home-withicon">
                                <h6> Nom : {{$detail_entreprise->name}}</h6>
                                <p> Description Entreprise  {{$detail_entreprise->website}}</p>
                                <p> Site Web entreprise : {{$detail_entreprise->website}}</p>
                                <p> Date de creation : {{$detail_entreprise->created_at}}</p>
                                <br>

                                <img src="{{asset('Entreprise/images/'.$detail_entreprise->image)}}" alt="image entreprise" width="100px" height="100px">
                            </div>
                            <div class="tab-pane" id="Profile-withicon">
                                <form method="POST" action="{{route('update.entreprise')}}"   enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label class="form-label">Nom de l'entreprise

                                            @error('name')
                                            <small style="color: red" >{{$message}}</small>
                                            @enderror
                                          </label>
                                          <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  de l' entreprise" value="{{$detail_entreprise->name}}">
                                        </div>






                                        <div class="col-md-6">
                                          <label class="form-label"> Lien de sitweb (facultatif)

                                            @error('referencies')
                                            <small style="color: red" >{{$message}}</small>
                                            @enderror
                                          </label>
                                          <input type="text" class="form-control" name="Website" placeholder="Entrer le  lien de votre site" value="{{$detail_entreprise->website}}">
                                        </div>







                                    </div>


                                    <div class="mb-3">
                                     <label class="form-label" for="basic-form-textarea">Description
                                         @error('description')

                                     <small class="text-danger">{{$message}}</small>

                                   @enderror</label>
                                     </label>
                                     <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" >{{$detail_entreprise->description}}</textarea>
                                   </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                  <label class="form-label">Modifier la photo
                                                    @error('image')
                                                    <small style="color: red" >{{$message}}</small>
                                                    @enderror
                                                  </label>
                                                  <input type="file" name="image"   class="form-control" placeholder="" value="{{$detail_entreprise->image}}">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-6">

                                            <img src="{{asset('Entreprise/images/'.$detail_entreprise->image)}}" alt="image entreprise" width="100px" height="100px">
                                        </div>

                                    </div>







                                    <button class="btn btn-dark" type="submit">Modifier</button>
                                  </form>

                            </div>



                        </div>
                    </div>
                </div>
            </div>





        </div>


        </div>
        </div>

        @include('sweetalert::alert')
@endsection
