@extends('layouts.app')

@section('content')
<div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">DSC UNAIR</h1>
            <p class="lead">Developer Student Club Airlangga University</p>
        </div>
    </div>

    <div class="container py-4">
        <div class="mb-5">
            <h2 class="font-weight-bold mb-3">About</h2>
            <h5>Helping students bridge the gap between theory and practice.</h5>
            <h5>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptas maiores dolores laudantium
                blanditiis numquam sed voluptatem modi labore nobis atque quisquam iusto nesciunt fugit enim nam est.
                Obcaecati accusantium unde eveniet iure voluptatum maiores nemo voluptas qui. Amet corrupti ipsum
                veniam,
                labore quibusdam eum quo fugiat eius recusandae nobis, doloribus numquam?
            </h5>
        </div>

        <div class="mb-5">
            <h2 class="font-weight-bold mb-3">Upcoming Event</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-rounded"
                            src="https://instagram.fsub9-1.fna.fbcdn.net/v/t51.2885-19/s320x320/120414626_486995042264844_4832466002459730772_n.jpg?_nc_ht=instagram.fsub9-1.fna.fbcdn.net&_nc_ohc=cxr3mARPw8AAX-IhCLG&oh=ab84754ec3e347faab2b5c47c5744bb6&oe=5FA21F6C"
                            alt="Card image cap">
                        <div class="card-body text-center mb-4">
                            <h5 class="card-title font-weight-bold">Info Session DSC Unair</h5>
                            <h5 class="card-text font-weight-semibold">10 October 2020</h5>
                            <p class="card-text mt-3">DSC Info Session</p>
                            <a href="#" class="btn btn-primary font-weight-semibold">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
