@extends('dashboard')

@section('presensi')

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
                <ul class="mb-0 ml-auto list-unstyled d-flex flex-row">
                    <li>
                    <div class="card-title d-flex flex-row">
                        <h3 class="card-text"><strong>Body Combat</strong></h3>
                        <button type="button" class="btn btn-primary  ml-2" data-bs-toggle="modal" data-bs-target="#detailModal">
                        <i class="fa-solid fa-eye"></i>
                        </button>

                        <!--Detail Modal -->
                        <div class="modal fade" id="detailModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-bg-primary">
                                        <h5 class="modal-title fs-5" id="staticBackdropLabel"><strong>Detail Kelas</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5><strong>Body Combat</strong></h5>    
                                        <p>
                                            Nama Instruktur     : {{ $nama }}<br>
                                            Kode Instruktur     : {{ $npm }}<br>
                                            Hari Kelas          : {{ date('l') }}<br>
                                            Tanggal Kelas       : {{ date('d-M-Y') }}<br>
                                            Ruang               : {{ $ruang }}<br>
                                            Rating              : 
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                            <i class="fas fa-star fa-xs" style="color: black"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </li>

                    <li class="ml-auto mb-1">
                    <div class="card-title" id="tgl">
                        <p class="border-bottom">Tanggal: {{ date('l, d-M-Y') }}</p>
                    </div>
                    </li>
                </ul>
                
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

        <ul class="border-top"></ul>
        <ul class="mb-0 ml-auto list-unstyled d-flex flex-row">
            <li>
                <h5>
                    <strong>Daftar Member</strong>
                </h5>
            </li>
            <li class="ml-auto mb-1">
                <button type="button" class="btn btn-success" id="liveToastBtn">
                    <i class="fas fa-check"></i> Presensi
                </button>
            </li>
        </ul>
        
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
            @forelse ($member as $member)
            <div class="col">
                @if ($member['jenisKartu'] == 'Gold')
                <div class="card border-warning mb-3">
                @elseif ($member['jenisKartu'] == 'Silver')
                <div class="card border-secondary mb-3">   
                @elseif ($member['jenisKartu'] == 'Black')
                <div class="card border-dark mb-3">    
                @endif            
                <img src="{{ asset('img/cat.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $member['namaMember'] }}</strong></h5>
                    <p class="card-text"> Email: {{ $member['email'] }} <br>
                                          No Telp: {{ $member['telp'] }} <br>

                                          @if ($member['jenisKartu'] == 'Gold')
                                          Jenis Kartu: <span class="badge rounded-pill text-bg-warning">
                                            {{ $member['jenisKartu'] }} 
                                          </span> <br>
                                          @elseif ($member['jenisKartu'] == 'Silver')
                                          Jenis Kartu: <span class="badge rounded-pill text-bg-secondary">
                                            {{ $member['jenisKartu'] }} 
                                          </span> <br>
                                          @elseif ($member['jenisKartu'] == 'Black')
                                          Jenis Kartu: <span class="badge rounded-pill text-bg-dark">
                                            {{ $member['jenisKartu'] }}
                                          </span> <br>
                                          @endif

                                          @if ($member['metodePembayaran'] == 'Deposit Uang')
                                          Metode Pembayaran: <span class="badge rounded-pill text-bg-success">
                                            {{ $member['metodePembayaran'] }} 
                                          </span> <br>
                                          @elseif ($member['metodePembayaran'] == 'Deposit Kelas')
                                          Metode Pembayaran: <span class="badge rounded-pill text-bg-primary">
                                            {{ $member['metodePembayaran'] }} 
                                          </span> <br>
                                          @endif
                                         
                    </p>
                </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data Kelas masi kosong
            </div>
            @endforelse
            
        </div>
    </div>

    <!-- Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <i class="fas fa-check"></i> Berhasil Mempresensi Member
            </div>
        </div>
    </div>

    <script>
        // Function to show the toast notification
        function showToast() {
            var toast = new bootstrap.Toast(document.querySelector('.toast'));
            toast.show();
        }

        // Attach an event listener to the "Presensi" button
        var presensiButton = document.getElementById('liveToastBtn');
        presensiButton.addEventListener('click', showToast);
    </script>
</div>
@endsection