@extends('dashboard.layout.app')

@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Liste de vos produits</h3>
                        </div><!-- .nk-block-head-content -->

                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list">
                                    <div class="nk-tb-item nk-tb-head">

                                        <div class="nk-tb-col tb-col-sm"><span>Image</span></div>
                                        <div class="nk-tb-col"><span>Pays</span></div>
                                        <div class="nk-tb-col"><span>Ville</span></div>
                                        <div class="nk-tb-col"><span>Prix</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Quantite</span></div>
                                        <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></div>

                                    </div>

                                    @foreach ( $product_product as  $product_products )


                                    <div class="nk-tb-item">

                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                <img src="{{asset('cover/'.$product_products->cover_image)}}" alt="" class="thumb">
                                                <span class="title">{{$product_products->name}}</span>
                                            </span>
                                        </div>

                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$product_products->country->name}}</span>
                                        </div>


                                        <div class="nk-tb-col">
                                            <span class="tb-lead">{{$product_products->country->name}} </span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-sub">{{$product_products->price}} ???</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-sub">{{$product_products->quantity}}</span>
                                        </div>


                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ route('edit.product', $product_products->id) }}" ><em class="icon ni ni-eye"></em><span>Detail et gestion de coupon</span></a></li>
                                                                <li><a href="{{ route('destroy.product', $product_products->id) }}" onclick="return confirm('Etes vous surs de vouloir supprimer ?')"><em class="icon ni ni-trash"></em><span>Supprimer le produit</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->

                                    @endforeach
                            </div>
                                <div style="margin-top:30px;">
                                    {{$product_product->links()}}
                                </div>

                        </div>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right toggle-screen-any" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px;">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New Product</h5>
                            <div class="nk-block-des">
                                <p>Add information and add new product.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Product Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="regular-price">Regular Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="regular-price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="sale-price">Sale Price</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="sale-price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="stock">Stock</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="stock">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="SKU">SKU</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="SKU">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="category">Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="category">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="tags">Tags</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="tags">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="upload-zone small bg-lighter my-2 dropzone dz-clickable">
                                    <div class="dz-message">
                                        <span class="dz-message-text">Drag and drop file</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 864px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 405px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
