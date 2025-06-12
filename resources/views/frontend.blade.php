@extends('template')

@section('content')
  <style>
    .section-title {
      text-align: center;
      font-size: 2rem;
      font-weight: 600;
      margin-top: 30px;
      margin-bottom: 30px;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      background-color: #ffffff;
      color: #1f1f1f;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    .card-img-top {
      height: 180px;
      object-fit: cover;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.1rem;
    }

    .card-body {
      padding: 20px;
    }

    .card-link {
      text-decoration: none;
    }
  </style>

  <section id="tugas" class="px-5">
    <h2 class="section-title">Kumpulan Tugas Front End</h2>
    <div class="container">
      <div class="row">
        @php
          $tugas = [
            ['link' => 'materi1', 'img' => 'image/satu.jpeg', 'title' => 'Materi 1: HTML'],
            ['link' => 'materi2', 'img' => 'image/dua.jpeg', 'title' => 'Materi 2: Max width'],
            ['link' => 'materi3', 'img' => 'image/grid.png', 'title' => 'Materi 3: Grid & Layout'],
            ['link' => 'materi4', 'img' => 'image/bootstrap.jpeg', 'title' => 'Materi 4: Bootstrap'],
            ['link' => 'materi5', 'img' => 'image/linktree.jpeg', 'title' => 'Materi 5: Linktree'],
            ['link' => 'materi7kalkulator', 'img' => 'image/kalkulator.png', 'title' => 'Materi 7: Kalkulator'],
            ['link' => 'materi7validasi', 'img' => 'image/form.jpeg', 'title' => 'Materi 7: Validasi'],
            ['link' => 'ets', 'img' => 'image/ets.jpeg', 'title' => 'ETS'],
          ];
        @endphp

        @foreach($tugas as $item)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <a href="{{ $item['link'] }}" class="card-link">
            <div class="card h-100">
              <img src="{{ asset($item['img']) }}" class="card-img-top" alt="{{ $item['title'] }}">
              <div class="card-body">
                <h5 class="card-title">{{ $item['title'] }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach

      </div>
    </div>
  </section>
@endsection
