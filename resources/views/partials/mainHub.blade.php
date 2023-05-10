<div class="hubBg">
    <img src="../../../img/jumbotron.jpg" alt="jumbotron">
    <div class="currentSeries">
        <h3>CURRENT SERIES</h3>
    </div>
</div>

<div class="hubBottom">
    <div class="container">
        <div class="cardLayout">
            @foreach ($comicsData as $item)
            
                <div class="mainCard">
                    <img src="{{$item['thumb']}}" alt="comic Photo">
                    <h3>{{$item['series']}}</h3>
                </div>
            @endforeach
        </div>
    </div>

    <div class="loadMore">
        <a href="#">Load More</a>
    </div>
    
</div>