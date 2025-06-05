<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page non trouvée | Alexis AMAND</title>
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" href="/img/favicon.png">
  <link rel="canonical" href="https://www.boitasite.com/404.php">

  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
    }
    .error-container {
      max-width: 600px;
      animation: fadeIn 1s ease-in-out;
    }
    .error-code {
      font-size: 6rem;
      font-weight: bold;
      color: #6c757d;
    }
    .error-message {
      font-size: 1.5rem;
      margin-bottom: 30px;
      color: #343a40;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .btn-custom {
      background-color: #6c757d;
      color: #fff;
      border: none;
    }
    .btn-custom:hover {
      background-color: #5a6268;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oups ! La page que vous cherchez n'existe plus.</div>
    <a href="https://boitasite.com/" class="btn btn-lg btn-custom">Retour à l'accueil</a>
  </div>
</body>
</html>
