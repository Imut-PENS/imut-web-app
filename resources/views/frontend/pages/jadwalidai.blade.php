@extends('frontend.layout')
@section('content')

<div class="services1-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
                <li><a href="{{url('/front/beranda')}}">Beranda</a><span>|</span></li>
                
                <li>Jadwal Imunisasi Menurut IDAI </li>
			</ul>
		</div>
</div>
<div class="container mediaprofile">
  <div class="col-md-12 jadwalidai">
    <img src="{{ asset('frontend/images/tabel-imunisasi.jpg') }}" class="img-responsive" alt="">
  </div>
<div id="jadwalImunisasi" class="col-md-12">
          <h2>Keterangan</h2>

          <div class="common-content">
            <p>Cara membaca kolom usia : misal 2 berarti usia 2 bulan (60 hari) s.d. 2 bulan 29 hari (89 hari) Rekomendasi imunisasi berlaku mulai <strong class="text-muted">Januari 2017</strong>. Dapat diakses pada website IDAI (<a href="http://www.idai.or.id/artikel/klinik/imunisasi/jadwal-imunisasi-2017" target="_blank">http://www.idai.or.id/artikel/klinik/imunisasi/jadwal-imunisasi-2017</a>)</p>

            <p>
              <sup>a</sup> Vaksin rotavirus monovalen tidak perlu dosis ke-3 (lihat keterangan)<br>
              <sup>b</sup> Apabila diberikan pada remaja usia 10-13 tahun, pemberian cukup 2 dosis dengan interval 6-12 bulan; respons antibody setara dengan 3 dosis (lihat keterangan)
            </p>

            <div class="keterangan-imunisasi">
              <div class="col-md-3 col-lg-3 keterangan-imunisasi-item keterangan-imunisasi-optimal">
                <span class="keterangan-imunisasi-box"></span>
                Optimal
              </div>

              <div class="col-md-3 col-lg-3 keterangan-imunisasi-item keterangan-imunisasi-catchup">
                <span class="keterangan-imunisasi-box"></span>
                Catch-up
              </div>

              <div class="col-md-3 col-lg-3 keterangan-imunisasi-item keterangan-imunisasi-booster">
                <span class="keterangan-imunisasi-box"></span>
                Booster
              </div>

              <div class="col-md-3 col-lg-3 keterangan-imunisasi-item keterangan-imunisasi-daerah">
                <span class="keterangan-imunisasi-box"></span>
                Daerah
              </div>
            </div>

            <p><strong class="text-muted">Untuk memahami tabel jadwal imunisasi perlu membaca keterangan tabel</strong></p>

            <ol>
              <li><strong>Vaksin hepatitis B (HB)</strong>. Vaksin HB pertama (monovalent) paling baik  diberikan dalam waktu 12 jam setelah lahir dan didahului pemberian suntikan vitamin K1 minimal 30 menit sebelumnya. Jadwal pemberian vaksin HB monovalen adalah usia 0,1, dan 6 bulan. Bayi lahir dari ibu HBsAg positif, diberikan vaksin HB dan imunoglobin hepatitis B (HBIg) pada ekstrimitas yang berbeda. Apabila diberikan HB kombinasi dengan DTPw, maka jadwal pemberian pada usia 2,3, dan 4 bulan. Apabila vaksin HB kombinasi dengan DTPa, maka jadwal pemberian pada usia 2,4, dan 6 bulan.</li>
              <li><strong>Vaksin polio</strong>. Apabila lahir di rumah segera berikan OPV-0. Apabila lahir di sarana kesehatan, OPV-0 diberikan saat bayi dipulangkan. Selanjutnya, untuk polio-1, polio-2, polio-3, dan polio booster diberikan OPV atau IPV. Paling sedikit harus mendapat satu dosis vaksin IPV bersamaan dengan pemberian OPV-3.</li>
              <li><strong>Vaksin BCG</strong>. Pemberian vaksin BCG dianjurkan sebelum usia 3 bulan, optimal usia 2 bulan. Apabila diberikan pada usia 3 bulan atau lebih, perlu dilakukan uji tuberculin terlebih dahulu.</li>
              <li><strong>Vaksin DTP</strong>. Vaksin DTP pertama diberikan paling cepat pada usia 6 minggu. Dapat diberikan vaksin DTPw atau DTPa atau kombinasi dengan vaksin lain. Apabila diberikan vaksin DTPa maka interval mengikuti rekomendasi vaksin tersebut yaitu usia 2,4, dan 6 bulan. Untuk usia lebih dari 7 bulan diberikan vaksin Td atau Tdap. Untuk DTP 6 dapat diberikan Td/Tdap pada usia 10-12 tahun dan booster Td diberikan setiap 10 tahun.</li>
              <li><strong>Vaksin pneumokokus (PCV)</strong>. Apabila diberikan pada usia 7-12 bulan, PCV diberikan 2 kali dengan interval 2 bulan; dan pada usia lebih dari 1 tahun diberikan 1 kali. Keduanya perlu booster pada usia lebih dari 12 bulan atau minimal 2 bulan setelah dosis terakhir. Pada anak usia di atas 2 tahun PCV diberikan cukup satu kali.</li>
              <li><strong>Vaksin rotavirus</strong>. Vaksin rotavirus monovalen diberikan 2 kali, dosis pertama diberikan usia 6-14 minggu (dosis pertama tidak diberikan pada usia ≥ 15 minggu), dosis ke-2 diberikan dengan interval minimal 4 minggu. Batas akhir pemberian pada usia 24 minggu. Vaksin rotavirus pentavalen diberikan 3 kali, dosis pertama diberikan usia 6-14 minggu (dosis pertama tidak diberikan pada usia ≥ 15 minggu), dosis kedua dan ketiga diberikan dengan interval 4-10 minggu. Batas akhir pemberian pada usia 32 minggu.</li>
              <li><strong>Vaksin influenza</strong>. Vaksin influenza diberikan pada usia lebih dari 6 bulan, diulang setiap tahun. Untuk imunisasi pertama kali (primary immunization) pada anak usia kurang dari 9 tahun diberi dua kali dengan interval minimal 4 minggu. Untuk anak 6-36 bulan, dosis 0,25 mL. Untuk anak usia 36 bulan atau lebih, dosis 0,5 mL.</li>
              <li><strong>Vaksin campak</strong>. Vaksin campak kedua (18 bulan) tidak perlu diberikan apabila sudah mendapatkan MMR.</li>
              <li><strong>Vaksin MMR/MR</strong>. Apabila sudah mendapatkan vaksin campak pada usia 9 bulan, maka vaksin MMR/MR diberikan pada usia 15 bulan (minimal interval 6 bulan). Apabila pada usia 12 bulan belum mendapatkan vaksin campak, maka dapat diberikan vaksin MMR/MR.</li>
              <li><strong>Vaksin varisela</strong>. Vaksin varisela diberikan setelah usia 12 bulan, terbaik pada usia sebelum masuk sekolah dasar. Apabila diberikan pada usia lebih dari 13 tahun, perlu 2 dosis dengan interval minimal 4 minggu.</li>
              <li><strong>Vaksin human papilloma virus (HPV)</strong>. Vaksin HPV diberikan mulai usia 10 tahun. Vaksin HPV bivalen diberikan tiga kali dengan jadwal 0, 1, 6 bulan; vaksin HPV tetravalent dengan jadwal 0,2,6 bulan. Apabila diberikan pada remaja usia 10-13 tahun, pemberian cukup 2 dosis dengan interval 6-12 bulan; respons antibodi setara dengan 3 dosis.</li>
              <li><strong>Vaksin Japanese encephalitis (JE)</strong>. Vaksin JE diberikan mulai usia 12 bulan pada daerah endemis atau turis yang akan bepergian ke daerah endemis tersebut. Untuk perlindungan jangka panjang dapat diberikan booster 1-2 tahun berikutnya.</li>
              <li><strong>Vaksin dengue</strong>. Diberikan pada usia 9-16 tahun dengan jadwal 0,6, dan 12 bulan.</li>
            </ol>

            <p>* Berdasarkan Rekomendasi Ikatan Dokter Anak Indonesia (IDAI) Tahun 2017</p>

          </div>
    </div>
</div>

@endsection