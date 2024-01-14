<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Software Company</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezR12Dl2PndVlZcGPDZFAYs5bThvAc5SA6/DI8izM6Be3TZ4hd3QTaD9CJB2tbz" crossorigin="anonymous">
  <!-- Custom styles -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: white;
    }
    .hero-section {
      background: linear-gradient(to right, #2c3e50, #3498db);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .hero-section h1 {
      font-size: 3rem;
    }
    .hero-section p {
      font-size: 1.2rem;
    }
    .features-section {
      padding: 80px 0;
      background-color: #f8f9fa;
    }
    .feature {
      text-align: center;
    }
    .feature i {
      font-size: 2rem;
      color: #3498db;
    }
    .feature h3 {
      margin-top: 20px;
    }
    .contact-section {
      background: #343a40;
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .contact-section h2 {
      font-size: 2.5rem;
    }
    .contact-form {
      max-width: 500px;
      margin: auto;
    }
    .contact-form input,
    .contact-form textarea {
      margin-bottom: 20px;
    }
    .contact-form button {
      background-color: #3498db;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Your Company</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
