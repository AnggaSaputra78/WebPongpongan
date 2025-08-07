<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Desa Pongpongan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
    }

    header {
      width: 100%;
      background-color: #006400;
      padding: 15px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      gap: 15px;
    }

    header img {
      height: 60px;
    }

    header h1 {
      color: white;
      font-size: 1.8em;
      line-height: 1.3;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 20px 10px;
      }

      header h1 {
        font-size: 1.4em;
      }
    }

    @media (max-width: 480px) {
      header img {
        height: 50px;
      }

      header h1 {
        font-size: 1.2em;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="assets/img/icon.webp" alt="Logo Desa">
    <h1>Sistem Informasi Desa Pongpongan</h1>
  </header>
</body>
</html>
