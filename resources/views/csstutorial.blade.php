<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>max-width & CSS Variables</title>
  <style>
    :root {
      --primary-color: #4CAF50;
      --secondary-color: #f9f9f9;
      --text-color: #333;
      --container-width: 800px;
      --border-radius: 12px;
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 40px 20px;
      background-color: var(--secondary-color);
      color: var(--text-color);
      display: flex;
      justify-content: center;
    }

    .container {
      max-width: var(--container-width);
      width: 100%;
      background-color: white;
      border-radius: var(--border-radius);
      padding: 30px;
      box-shadow: var(--shadow);
    }

    h1 {
      color: var(--primary-color);
      margin-top: 0;
    }

    p {
      line-height: 1.6;
    }

    .image-box {
      margin: 30px 0;
      text-align: center;
    }

    .image-box img {
      width: 1000px; /* sangat lebar */
      max-width: 100%; /* agar tidak melebihi container */
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    code {
      background: #eee;
      padding: 2px 4px;
      border-radius: 4px;
      font-family: monospace;
    }

    .note {
      font-size: 0.9em;
      color: #666;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Penjelasan <code>max-width</code> dan <code>CSS Variables</code></h1>
    <p><strong>CSS Variable</strong> (variabel kustom) adalah nilai-nilai CSS yang dapat digunakan kembali, contohnya: <code>--primary-color</code>, <code>--container-width</code>.</p>

    <p><strong>max-width</strong> membatasi lebar maksimum elemen. Ini berguna untuk memastikan tampilan tetap rapi meskipun konten (seperti gambar) lebih besar dari container.</p>

    <div class="image-box">
      <img src="https://ichef.bbci.co.uk/ace/standard/981/cpsprodpb/5c38/live/16192430-f5ef-11ef-bd6e-cd71c2e1454a.jpg" alt="Contoh gambar lebar" />
      <div class="note">Gambar ini memiliki lebar asli 1000px, tapi dibatasi oleh <code>max-width: 100%</code> agar tidak keluar dari container.</div>
    </div>

    <p>Dengan <code>max-width: var(--container-width)</code> pada elemen <code>.container</code>, kita menjaga desain tetap responsif dan estetis.</p>
  </div>

</body>
</html>
