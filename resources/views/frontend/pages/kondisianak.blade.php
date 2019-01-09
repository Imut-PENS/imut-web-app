@extends('frontend.layout')
@section('content')
<div class="container mediaprofile">
    <h3>Kondisi Anak</h3><br>
   
   
    <div class="col-md-4 col-lg-4">
    <p>Tanggal : {{ $last->tanggal }}</p>
        <div class="kondisileft">
            <h4>Tinggi Badan</h4><br>
            <h5> {{ $last->tinggi_badan }} cm</h5>
        </div>
        <div class="kondisileft">
            <h4>Berat Badan</h4><br>
            
            <h5> {{ $last->berat_badan }}kg</h5>
        </div>
        <div class="kondisileft">
            <h4>Lingkar Kepala</h4><br>
            <h5> {{ $last->lingkar_kepala }} cm</h5>
        </div>
    </div>
    <?php
        
        
    ?>
    <div class="col-md-8 col-lg-8">
    <p>Kondisi Anak</p>
        <div class="kondisiright">
        <?php
            $tinggi = $last->tinggi_badan;
            if($tinggi >= 0 && $tinggi <= 48){
                echo "Pendek(Tidak Ideal)<br>";
                echo "harus memperoleh penanganan dari dokter(kemungkinan besar terjadi gizi buruk)";
            }elseif($tinggi >= 49 && $tinggi <= 52){
                echo "Tinggi Badan Ideal";
            }elseif($tinggi >= 53 && $tinggi <= 56){
                echo "Tinggi Badan Jangkung";
            }elseif($tinggi >= 57){
                echo "Tinggi Badan Tidak Ideal";
            }
        ?>
        </div>
        <div class="kondisiright">
        <?php
            $berat = $last->berat_badan;
            if($berat >= 0 && $berat <= 2){
                echo "Berat Badan Kurang<br>";
                echo "harus memperoleh penanganan dari dokter(kemungkinan besar terjadi gizi buruk)";
            }elseif($berat >= 2.5 && $berat <= 3.3){
                echo "Berat Badan Ideal";
            }elseif($berat >= 3.4 && $berat <= 4.4){
                echo "Berat Badan Normal Atas";
            }elseif($berat >= 4.5){
                echo "Berat Badan Tidak Ideal<br>";
                echo "harus memperoleh penanganan dari dokter(kemungkinan besar terjadi gizi buruk)";
            }
        ?>
        </div>
        <div class="kondisiright">
        <?php
            $lingkar = $last->lingkar_kepala;
            if($lingkar >= 0 && $lingkar <= 30){
                echo "Lingkar Kepala Kecil<br>";
                echo "harus memperoleh penanganan dari dokter(kemungkinan besar terjadi gizi buruk)";
            }elseif($lingkar >= 31 && $lingkar <= 34.5){
                echo "Lingkar Kepala Ideal";
            }elseif($lingkar >= 34.6 && $lingkar <= 37){
                echo "Lingkar Kepala Normal Atas";
            }elseif($lingkar >= 37.1){
                echo "Lingkar Kepala Besar<br>";
                echo "harus memperoleh penanganan dari dokter(kemungkinan besar terjadi gizi buruk)";
            }
        ?>
        </div>
    </div>
</div>
@endsection