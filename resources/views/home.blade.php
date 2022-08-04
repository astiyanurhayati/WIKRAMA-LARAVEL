
@extends('layouts.main')

@section('container')
    <div class="container">
      <div class="dasbore">
        <div class="dasboreContent">
          <h1>Welcome To Wikrama Website</h1>
          <a href="#about-us"> <button>Next</button></a>
        </div>
      </div>
        <div class="card">
          <div class="judul">
            <h2>Way Of Live's</h2>
          </div>
          <div class="wayOfLive">
            <div class="way">
              <h3>Motto</h3>
              <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
            </div>
            <div class="way">
              <h3>Attitude</h3>
              <p>Aku ada lingkunganku bahagia</p>
            </div>
            <div class="way">
              <h3>Sikap</h3>
              <p>Menjaga wudhu (jagalah wudhumu)</p>
            </div>
            <div class="way">
              <h3>Afirmasi</h3>
              <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
            </div>
            <div class="way">
              <h3>Comitmen</h3>
              <p>Melayani dengan hati dan teknologi</p>
            </div>
          </div>
        </div>
      <div id="about-us"></div>
    <div class="pages" style="padding-top: 100px">
          <div class="page">
              <div class="desk">
                <h3>About Us</h3>
                <h2>Welcome to SMK Wikrama Bogor</h2>
                <p>
                  SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris
                  dengan jumlah hanya 34 siswa.
                </p>
                <div class="readMore">
                  <a href="/sejarah"> Read More <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
              </div>

              <div class="foto">
                <img src="img/aboutpagefoto.png" alt="" />
              </div>
          </div>

          <div class="page kiri">
              <div class="desk desk-kiri">
                <h3>Ekstrakulikuler</h3>
                <p class="">SMK Wikrama Bogor menyelenggarakan cukup banyak kegiatan Ekstrakulikuler yang mempunyai tujuan untuk: mengembangkan potensi siswa itu dengan secara optimal serta terpadu yang melingkupi bakat,..</p>
                  <div class="readMore">
                    <a href="/eskul"> Read More <i class="fa-solid fa-arrow-right"></i> </a>
                  </div>
              </div>

              <div class="foto">
                <img src="img/silatfinal.png" alt="" />
              </div>
          </div>

          <div class="page-vidio">
            <i class="fa-solid fa-users" id="hua"></i>
            <h3>Testimonial</h3>
              <iframe
                width="460"
                height="315"
                src="https://www.youtube.com/embed/UqJxOVve2h4"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>

                <p>Testimoni alumni SMK Wikrama Bogor yang telah bekerja di industri, instalasi dan usaha dunia...</p>

            <div class="readMore">
              <a href="/testimoni"> Read More <i class="fa-solid fa-arrow-right"></i> </a>
            </div>

          </div>

          <div class="page-lanjut">
           <h2>GALERI</h2>
           

<ul class="cards">
  <li class="cards__item">
    <div class="card2">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Penghargaan dari Presiden RI Tahun 2012</div>
        <p class="card__text"> </p>
      
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card2">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">An Excellent Generation Start Here</div>
        <p class="card__text"></p>

      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card2">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">FAn Excellent Generation Start Here</div>
        <p class="card__text"></p>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card2">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title">An Excellent Generation Start Here</div>
        <p class="card__text"></p>
      </div>
    </div>
  </li>
</ul>
            
          </div>
        </div>
      
    </div>
@endsection
