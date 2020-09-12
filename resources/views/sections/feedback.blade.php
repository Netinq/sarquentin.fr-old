<section id="feedback">
    <div class="hide">
        <img class="landing-bg" src="{{asset('images/landing/fb.png')}}" alt="Landing background">
        <img class="landing-il" src="{{asset('images/landing/fb-ld-il.png')}}" alt="Landing illustration">
        <div class="content col-10 col-md-4 offset-1 offset-md-7">
            <div class="feedback">
                <h2>Les retours clients</h2>
                <div class="list" id="scroll-reviews">
                    @foreach ( $reviews as $review )
                    <div class="elem" itemscope itemtype="https://schema.org/Review">
                        <div class="note" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                            <meta itemprop="worstRating" content = "{{$review[4]}}">
                            @for ($i = 0; $i < (5 - $review[4]); $i++)
                            <img src="{{asset('images/svg/star.svg')}}" alt="Star icon">
                            @endfor
                            @for ($i = 0; $i < $review[4]; $i++)
                            <img src="{{asset('images/svg/star-filled.svg')}}" alt="Filled star icon">
                            @endfor
                        </div>
                        <div class="review">
                            <p itemprop="reviewBody">{{$review[3]}}</p>
                            <span>({{ ($loop->index+1) }} / {{count($reviews)}} avis ) <i itemprop="author">{{$review[0][1]}}</i></span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/auto-scroll.js')}}"></script>
</section>
