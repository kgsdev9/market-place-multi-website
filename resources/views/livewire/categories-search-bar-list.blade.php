<div class="megamenu">
    <div class="container megamenu-scroll">
        <div class="row row-cols-5">
            @for ($i=0 ; $i< count($categories);$i++ )
            <div class="col">
                <div class="megamenu-wrap">
                    <h5 class="megamenu-title">{{ Str::limit($categories[$i]->name, 17)}}</h5>
                    <ul class="megamenu-list">

                        @for ($j=0 ; $j< count($sous_categories[$i]);$j++)
                        <li>  <a href="{{route('categorie_souscategorie',$sous_categories[$i][$j]->name)}}">{{ Str::limit($sous_categories[$i][$j]->name, 17)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            @endfor




            <div class="col">
                <div class="megamenu-wrap">

                    <ul class="megamenu-list">
                        <li><a href="{{route('category.index')}}">Toutes les categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

