<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kumpulan Tugas Pemrograman Web</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1f1f1f, #3d3d3d);
      color: #f5f5f5;
    }

    .hero {
      display: flex;
      height: 100vh;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      align-items: center;
      padding: 20px 80px;
    }

    .hero h1 {
      font-size: 5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .hero a.btn-pill {
      background-color: #ffffff;
      color: #1f1f1f;
      font-weight: 600;
      padding: 10px 30px;
      border-radius: 50px;
      transition: background 0.3s ease;
      text-decoration: none;
      display: inline-block;
      max-width: 200px;
    }

    .hero a.btn-pill:hover {
      background-color: #dddddd;
      color: #000000;
    }

    .scroll-circle {
      margin-top: 30px;
      width: 50px;
      height: 50px;
      background-color: #ffffff;
      color: #1f1f1f;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;
      text-decoration: none;
      transition: background-color 0.3s;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      animation: bounce 2s infinite;
    }

    .scroll-circle:hover {
      background-color: #dddddd;
      text-decoration: none;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(8px);
      }
      60% {
        transform: translateY(4px);
      }
    }

    .section-title {
      text-align: center;
      font-size: 2rem;
      font-weight: 600;
      margin-top: 50px;
      margin-bottom: 40px;
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

    section:last-of-type {
      padding-bottom: 80px;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }
    }
  </style>
</head>
<body>

  <section class="hero">
    <h1>Kurnia Yufi Satrio Laksono</h1>
    <a href="https://github.com/KurniaYufi/FEB5026231086" target="_blank" class="btn-pill">Link GitHub</a>
    <a href="#tugas" class="scroll-circle">
        <span style="display: inline-block; transform: rotate(-90deg); font-weight: bold;">&lt;</span>
      </a>
  </section>

  <section id="tugas" class="px-5">
    <h2 class="section-title">Kumpulan Tugas Pemrograman Web</h2>
    <div class="container">
      <div class="row">

        <div class="col-lg-3 mb-4">
          <a href="materi1" class="card-link">
            <div class="card">
              <img src="image/satu.jpeg" class="card-img-top" alt="Tugas 1">
              <div class="card-body">
                <h5 class="card-title">Materi 1: HTML</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi2" class="card-link">
            <div class="card">
              <img src="image/dua.jpeg" class="card-img-top" alt="Tugas 2">
              <div class="card-body">
                <h5 class="card-title">Materi 2: Max width</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi3" class="card-link">
            <div class="card">
              <img src="image/grid.png" class="card-img-top" alt="Tugas 3">
              <div class="card-body">
                <h5 class="card-title">Materi 3: Grid & Layout</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi4" class="card-link">
            <div class="card">
              <img src="image/bootstrap.jpeg" class="card-img-top" alt="Tugas 4">
              <div class="card-body">
                <h5 class="card-title">Materi 4: Bootstrap</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi5" class="card-link">
            <div class="card">
              <img src="image/linktree.jpeg" class="card-img-top" alt="Tugas 5">
              <div class="card-body">
                <h5 class="card-title">Materi 5: Linktree</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi7kalkulator" class="card-link">
            <div class="card">
              <img src="image/kalkulator.png" class="card-img-top" alt="Tugas 6">
              <div class="card-body">
                <h5 class="card-title">Materi 7: Kalkulator</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="materi7validasi" class="card-link">
            <div class="card">
              <img src="image/form.jpeg" class="card-img-top" alt="Tugas 7">
              <div class="card-body">
                <h5 class="card-title">Materi 7: Validasi</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 mb-4">
          <a href="ets" class="card-link">
            <div class="card">
              <img src="image/ets.jpeg" class="card-img-top" alt="ETS">
              <div class="card-body">
                <h5 class="card-title">ETS</h5>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
</body>
</html>
