<?php
include 'koneksi.php';

// ambil data experience
$expQuery = mysqli_query($conn, "SELECT * FROM experience");
$experiences = [];

while ($row = mysqli_fetch_assoc($expQuery)) {
  $row['image'] = "assets/image/" . $row['image'];
  $experiences[] = $row;
}

// ambil data certificates
$certQuery = mysqli_query($conn, "SELECT * FROM certificates");
$certificates = [];

while ($row = mysqli_fetch_assoc($certQuery)) {
  if (!empty($row['image'])) {
    $row['image'] = "assets/image/" . $row['image'];
  }
  $certificates[] = $row;
}

// PROJECTS 
$projQuery = mysqli_query($conn, "SELECT * FROM projects");
$projects = [];

while ($row = mysqli_fetch_assoc($projQuery)) {

  $imgQuery = mysqli_query($conn, "SELECT * FROM project_images WHERE project_id = " . $row['id']);
  $images = [];

  while ($img = mysqli_fetch_assoc($imgQuery)) {
    $images[] = "assets/image/" . $img['image'];
  }

  $row['images'] = $images; // <-- sekarang array
  $projects[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - Dinda Aulia Rizky</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=999">
</head>

<body>

<div id="app">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid px-4">
      <a class="navbar-brand fw-bold">🎀 Dinda Aulia Rizky</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#home">🏠 Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">👩 About</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">💼 Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#certificates">📜 Certificates</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">💌 Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">🚀 Projects</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="home" class="hero-section d-flex align-items-center text-center">
    <div class="container">
      <img src="assets/image/profile.png" class="profile-img mb-4">
      <h1 class="fw-bold">✨ {{ name }} ✨</h1>
      <p class="lead">💫 {{ tagline }}</p>
      <a href="#about" class="btn btn-primary mt-3">Explore 💖</a>
    </div>
  </section>

  <!-- ABOUT -->
<section id="about">
  <div class="container">
    <h2 class="text-center mb-5"> About Me</h2>

    <div class="row align-items-center about-wrapper">

      <!-- FOTO -->
      <div class="col-md-4 text-center about-left">
        <img src="assets/image/profile2.jpeg" class="about-img img-fluid">
      </div>

      <!-- DESKRIPSI -->
      <div class="col-md-4 about-middle">
        <p>{{ description }}</p>
      </div>

      <!-- SKILLS -->
      <div class="col-md-4 about-right">
        <h5 class="mb-4">✨ Skills</h5>

        <div v-for="skill in skills" class="mb-3">
          <div class="d-flex justify-content-between">
            <span>{{ skill.name }}</span>
            <span>{{ skill.level }}%</span>
          </div>
          <div class="progress">
            <div class="progress-bar" :style="{ width: skill.level + '%' }"></div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

  <!-- EXPERIENCE -->
  <section id="experience">
    <div class="container">
      <h2 class="text-center mb-4"> Experience</h2>

      <div class="row g-4">
        <div class="col-md-4" v-for="exp in filteredExperience">
          <div class="card h-100 p-3 text-center">
            <img :src="exp.image" class="experience-img mb-3">
            <h5>✨ {{ exp.title }}</h5>
            <p>{{ exp.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CERTIFICATES -->
  <section id="certificates">
    <div class="container">
      <h2 class="text-center mb-4"> Certificates</h2>

      <div class="row g-4">
        <div class="col-md-4" v-for="cert in filteredCertificates">
          <div class="card h-100 p-3 text-center">
            <img v-if="cert.image" :src="cert.image" class="experience-img mb-3">
            <h5>🎀 {{ cert.title }}</h5>
            <p>{{ cert.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Projects -->
  <section id="projects">
    <div class="container">
      <h2 class="text-center mb-4"> Projects</h2>

      <div class="row g-4">
        <div class="col-md-4" v-for="project in filteredProjects">
        <div class="card h-100 p-3 text-center"
           @click="openModal(project)">
           <img :src="project.images[0]" class="experience-img mb-3">
            <h5>🎀 {{ project.title }}</h5>
            <p>{{ project.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container text-center">
      <h2 class="mb-4">💌 Contact Me</h2>

      <div class="contact-card mx-auto">
        <p>Email<br>
          <a href="mailto:dindaauliarizky01@gmail.com">dindaauliarizky01@gmail.com</a>
        </p>

        <p>Instagram<br>
          <a href="https://instagram.com/dindaa.yr" target="_blank">@dindaa.yr</a>
        </p>
      </div>
    </div>
  </section>

  <footer class="text-center py-3">
    <p>✨ © 2026 Dinda ✨</p>
  </footer>

<!-- MODAL PROJECT -->
<div v-if="selectedProject !== null" class="custom-modal" @click.self="closeModal">
  <div class="modal-content-custom">

    <span class="close-btn" @click="closeModal">✖</span>

    <!-- GAMBAR SLIDER -->
    <img :src="selectedProject.images[currentIndex]" class="modal-img">

    <!-- BUTTON SLIDE -->
    <div class="mt-3">
      <button @click="prevImage" class="btn btn-sm btn-secondary me-2">⬅</button>
      <button @click="nextImage" class="btn btn-sm btn-secondary">➡</button>
    </div>

    <h4 class="mt-3">🎀 {{ selectedProject.title }}</h4>
    <p>{{ selectedProject.description }}</p>

  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
const { createApp } = Vue;

createApp({
  data() {
    return {
      name: "Dinda Aulia Rizky",
      tagline: "Tech Learner | Communicative | Team-Oriented",
      description: "Saya adalah mahasiswa ...",

      skills: [
        { name: "Communication", level: 80 },
        { name: "Teamwork", level: 85 },
        { name: "Event Management", level: 80 },
        { name: "Leadership", level: 75 }
      ],

      experienceList: <?php echo json_encode($experiences, JSON_UNESCAPED_UNICODE); ?>,
      certificates: <?php echo json_encode($certificates, JSON_UNESCAPED_UNICODE); ?>,
      projects: <?php echo json_encode($projects, JSON_UNESCAPED_UNICODE); ?>,

      selectedProject: null,
      currentIndex: 0
    }
  },

  methods: {
    openModal(project) {
      this.selectedProject = JSON.parse(JSON.stringify(project));
      this.currentIndex = 0;
    },
    closeModal() {
      this.selectedProject = null;
    },
    nextImage() {
      if (this.currentIndex < this.selectedProject.images.length - 1) {
        this.currentIndex++;
      }
    },
    prevImage() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
      }
    }
  },

  computed: {
    filteredExperience() {
      return this.experienceList;
    },
    filteredCertificates() {
      return this.certificates;
    },
    filteredProjects() {
      return this.projects;
    }
  }

}).mount('#app');
</script>
</script>

<script>
const reveal = () => {
  const trigger = window.innerHeight * 0.85;
  document.querySelectorAll("section, .card").forEach(el => {
    if (el.getBoundingClientRect().top < trigger) {
      el.classList.add("show");
    }
  });
};
window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);

</script>

</body>
</html>