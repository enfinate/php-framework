<?= include_view("components.header") ?>

  <!-- Hero Section -->
  <section id="home" class="hero-section">
    <div class="container">
      <h1>Welcome to Your Software Company</h1>
      <p class="lead">Crafting innovative solutions for a digital world.</p>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 feature">
          <i class="fas fa-code"></i>
          <h3>Custom Development</h3>
          <p>Create tailored software solutions to meet your unique business needs.</p>
        </div>
        <div class="col-lg-4 feature">
          <i class="fas fa-mobile-alt"></i>
          <h3>Responsive Design</h3>
          <p>Build applications that work seamlessly across various devices and screen sizes.</p>
        </div>
        <div class="col-lg-4 feature">
          <i class="fas fa-cogs"></i>
          <h3>Scalable Solutions</h3>
          <p>Design scalable and flexible architectures to support your growing business.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2>Contact Us</h2>
      <p class="lead">Have a project in mind? Let's discuss how we can help you.</p>
      <div class="contact-form">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
