<section class="footer_carosal">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_carosal_icon owl-carousel owl-theme">
                    @foreach($teams as $team)
                        <div class="item">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url("team/{$team->photo}") }}" height="130" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>