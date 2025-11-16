<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontakt – ALFASYSTEMS</title>
  <link rel="stylesheet" href="style/style.css">
  
</head>
<body>

  <div class="topbar">
    <div class="topbar-inner">
      <a class="brand" href="index.html#home">
        <img src="images/logo.png" alt="ALFASYSTEMS logo">
        <h1>ALFASYSTEMS <span class="brand-subtitle">— ALFADESK Fix IT</span></h1>
      </a>
      <nav class="nav">
        <a href="projects.html">Projekty</a>
        <a href="team.html">Tím</a>
        <a href="about.html">O nás</a>
        <a href="contact.php">Kontakt</a>
        <a href="motivacny-list.html">Motivačný list</a>
      </nav>
    </div>
  </div>

  <header class="banner">
    <div class="banner-inner">
      <div class="banner-logo">
        <img src="images/logo.png" alt="ALFASYSTEMS logo">
      </div>
      <div class="banner-copy">
        <h2>Kontakt</h2>
        <p class="lead">Napíšte nám – odpovieme do 24 hodín.</p>
      </div>
    </div>
  </header>

  <main class="main container">

    <!-- SPRÁVA PO ÚSPEŠNOM ODOSLANÍ -->
    <?php if (isset($_GET['success'])): ?>
      <div class="alert-success">
        ✔ Vaša správa bola úspešne odoslaná. Ďakujeme!
      </div>
    <?php endif; ?>

    <div class="cards">
      <div class="card">
        <h3>Kontaktné údaje</h3>
        <p>Email: <a href="mailto:peter.fidler2@ucm.sk">peter.fidler2@ucm.sk</a><br>
        Web: <a href="https://www.alfasystems.sk">www.alfasystems.sk</a></p>
      </div>

      <div class="card">
        <h3>Rýchly dopyt</h3>

        <!-- FORMULÁR S ODOSIELANÍM -->
        <form action="send.php" method="POST"

          <label>Meno<br>
            <input required class="form-control" name="name">
          </label><br><br>

          <label>Email<br>
            <input type="email" required class="form-control" name="email">
          </label><br><br>

          <label>Predmet<br>
            <input required class="form-control" name="subject">
          </label><br><br>

          <label>Správa<br>
            <textarea rows="5" required class="form-control" name="message"></textarea>
          </label><br><br>

          <button class="btn-primary">Odoslať</button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <div class="copyright">© 2025 ALFASYSTEMS – tím ALFADESK</div>
  </footer>

</body>
</html>
