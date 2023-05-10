<header>
    <div class="container">
        <div class="image">
            <img src="../../src/assets/img/dc-logo.png" alt="">
        </div>

        <ul class="sectionList">
            @foreach ($categoriesList as $categoria)
                
                <li><a href="#">{{$categoria}}</a></li>
                
            @endforeach
        </ul>
    </div>    
</header>