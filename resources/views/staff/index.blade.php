@extends('landingpage.index')
@section('content')
    <section id="chefs" class="chefs section-bg mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Staff</h2>
            <p>Our <span>Proffesional</span> Staff</p>
            </div>

            <div class="row gy-4">
                @foreach ($ar_staff as $staff)

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="chef-member">
                    <div class="member-img">
                         @empty($staff->foto)
                            <img src="{{ url('assets/img/no-image.png') }}" class="menu-img img-fluid" alt="">
                        @else
                            <img src="{{ url('assets/img') }}/{{ $staff->foto }}" class="menu-img img-fluid" alt="">
                        @endempty
                    </div>
                    <div class="member-info">
                        <h4>{{ $staff->nama }}</h4>
                        <span>{{ $staff->posisi }}</span>
                        <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                    </div>
                    </div>
                </div><!-- End Chefs Member -->
                @endforeach

            </div>

        </div>
    </section><!-- End Chefs Section -->
@endsection