<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Produk</h2>
        <p>Check Our <span>Produk</span></p>
      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Starters</h3>
          </div>

          <div class="row gy-5">
            @foreach ($ar_barang as $barang)
              <div class="col-lg-4 menu-item">
                @empty($barang->foto)

                  <a href="{{ url('assets/img/no-image.png') }}" class="glightbox">
                    <img src="{{ url('assets/img/no-image.png') }}" class="menu-img img-fluid" alt="">
                  </a>
                @else
                  <a href="{{ url('assets/img') }}/{{ $barang->foto }}" class="glightbox">
                    <img src="{{ url('assets/img') }}/{{ $barang->foto }}" class="menu-img img-fluid" alt="">
                  </a>
                @endempty
                <h4>{{ $barang->nama }}</h4>
                <p class="ingredients">
                  {{ $barang->kode }}, {{ $barang->kategori }}, {{ $barang->stok }}
                </p>
                <p class="price">
                  {{ number_format($barang->harga,0,',','.') }}
                </p>
              </div><!-- Menu Item -->    
            @endforeach

          </div>
        </div><!-- End Starter Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->