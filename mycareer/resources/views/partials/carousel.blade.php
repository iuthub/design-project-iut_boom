<!--old code parts created by front end developers that was not integrated with database
    Here only the modified codes: 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../images/1.jpg" alt="Image">
                    <div class="carousel-caption">
                    <h2>Find your dream job!</h2>
                    <p>We are looking for talented people</p>
                    </div>      
                </div>
                <div class="item">
                    <img src="../images/2.jpg" alt="Image">
                    <div class="carousel-caption">
                    <h2>Join Us!</h2>
                    <p>We are looking for talented people</p>
                    </div>      
                </div>
            </div> 
        </div>
    </div>
-->
                    
  <!--Ok lets make it Dynamic #NavruzbekNoraliev -->
  <!-- Well now i have to make it to take the random posts from the database-->

<div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators  -->   
        <ol class="carousel-indicators">
                @foreach( $posts as $post )
                @if($post->cover_image != 'noimage.jpg')
                    <li data-target="#carousel-examplgenerice-" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endif
                @endforeach
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox" style="width:100%;   vertical-align: bottom;">
                @foreach( $posts as $post)
                    @if($post->cover_image != 'noimage.jpg')
                            <div class="item {{ $loop->first ? ' active' : '' }}" >
                         @if($post->cover_image != 'noimage.jpg')
                            <a href= "/posts/{{$post->id}}"><img style="height: 380px !important;" class="car-img" src="/storage/cover_images/{{$post->cover_image}}" alt ="BestPosts"></a>
                            <div class="carousel-caption">
                                <h3>{{$post->title}}</h3>
                            </div>    
                            @endif
                        </div>
                    @endif
                @endforeach
         </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background-image: none;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class "sr-only"></span></a>
         
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background-image: none;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span></a>
    </div>
</div>