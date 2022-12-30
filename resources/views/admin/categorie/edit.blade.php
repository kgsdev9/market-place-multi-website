@extends('admin.apps.adminlayout')


@section('admin')

<div id="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Modification de la categorie</h2>
                    </div>
                    <div class="body">
                        <form  method="post" action="{{route('update.co', $edit_cate->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Nom de la categorie</label>
                                <input type="text" class="form-control"  value="{{$edit_cate->name}}" name="name">
                            </div>
                            <div class="form-group">

                                <input type="hidden" class="form-control"   value="{{$edit_cate->slug}}" name="slug">
                            </div>
                            <div class="form-group">
                                <label>Description </label>
                                <textarea class="form-control" rows="5" cols="30"  name="description">{{$edit_cate->description}}</textarea>
                            </div>

                            <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label>Changer l'image</label>
                                            <input type="file" class="form-control"  name="image">
                                        </div>

                                        <div class="col-md-6" >
                                            <img src="{{asset('categorie/images/'.$edit_cate->image)}}" alt="" style="width: 120px; height:100px; margin-left:480px;">
                                        </div>

                                    </div>



                            </div>



                            <br>
                            <button type="submit" class="btn btn-primary col-md-12" >Modifier</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
@endsection

