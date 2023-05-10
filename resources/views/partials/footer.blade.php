<footer>
    <div class="footContainer">
        <div class="footerLists">
            <div class="firstList">
                <h4>DC COMICS</h4>
                <ul>
                    @foreach ($dcComics as $dcComic)
                    
                        <li><a href="#">{{ $dcComic }}</a></li>

                    @endforeach
                </ul>

                <h4>SHOP</h4>
                <ul>
                    @foreach ($dcShop as $item)
                    
                        <li><a href="#">{{ $item }}</a></li>

                    @endforeach
                </ul>

            </div>
           
            <div class="firstList">
                <h4>DC</h4>
                <ul>
                    @foreach ($dcDc as $item)
                    
                        <li><a href="#">{{ $item }}</a></li>

                    @endforeach
                </ul>
            </div>
           
            <div class="firstList">
                <h4>SITES</h4>
                <ul>
                    @foreach ($dcSites as $dcSite)
                    
                        <li><a href="#">{{ $dcSite }}</a></li>

                    @endforeach
                </ul>
            </div>

            
        </div>      
    </div>
</footer>