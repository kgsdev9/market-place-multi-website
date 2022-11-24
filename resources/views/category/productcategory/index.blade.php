@extends('layout.app')

@section('content')
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Produits De Cette Categorie</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </div>
</section>

    @livewire('productcatecomponent')
@endsection
