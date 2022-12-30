<div>

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

</div>
