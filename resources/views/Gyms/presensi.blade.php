@extends('dashboard')

@section('presensi')
<style>
    .img-fluid{
        border-color: black;
    }
    #tgl{
        margin-left: 400px;
    }
</style>

<div class="content">
    <div class="container-fluid">

        <div class="card mx-auto mb-3" style="max-width: 1300px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png"
             class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="card-text"><strong>Body Combat</strong></h3>
                </div>
                <div class="card-title" id="tgl">
                    <p class="border-bottom">Tanggal: {{ date('D, d-M-Y') }}</p>
                </div>
                <p class="card-text"><b>Instruktur: {{ $nama }}</b>  <br>
                                 <b>Ruang: {{ $ruang }}</b> <br>
                                 <b>Total Member: {{ $totMember }}</b> <br>                                 
                                 <b style="color: black">Rating:</b> 
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                 <i class="fas fa-star fa-xs" style="color: gold"></i>
                                
                </p>
                
            </div>
            </div>
        </div>
        </div>

        <h1 class="border-top">
            <strong>Daftar Member</strong>
        </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong></strong></h5>
                    <p class="card-text"> Email: 
                                          No Telp: 
                                          Jenis Kartu:
                                          Metode Pembayaran: 
                    </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection