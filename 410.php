<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Page disparue... mais pas notre bonne humeur ! | Alexis AMAND</title>
  <meta name="robots" content="noindex" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" href="/dist/favicon.png" />
  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      color: #343a40;
      padding: 20px;
    }
    .error-container {
      max-width: 600px;
      animation: 1s ease-in-out fadeIn;
    }
    .error-code {
      font-size: 7rem;
      font-weight: 700;
      color: #6c757d;
    }
    .error-message {
      font-size: 1.8rem;
      margin-bottom: 20px;
    }
    .error-fun {
      font-size: 1.1rem;
      color: #868e96;
      margin-bottom: 30px;
      font-style: italic;
    }
    .btn-custom {
      background-color: #6c757d;
      color: #fff;
      border: none;
      padding: 12px 30px;
      font-size: 1.1rem;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }
    .btn-custom:hover {
      background-color: #5a6268;
      text-decoration: none;
      color: #fff;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="error-container">
    <div class="error-code">410</div>
    <div class="error-message">Oups ! La page que vous cherchez a définitivement pris la poudre d’escampette.</div>
    <div class="error-fun">Mais ne vous inquiétez pas, tout va bien ici, on garde le sourire ! 😊</div>
    <a href="https://boitasite.com/" class="btn-custom">Retour à l'accueil</a>
  </div>
</body>
</html>
