<?php
include 'koneksi.php';

// ambil data experience
$expQuery = mysqli_query($conn, "SELECT * FROM experience");
$experiences = [];

while ($row = mysqli_fetch_assoc($expQuery)) {
  $row['image'] = "assets/image/" . $row['image']; // path gambar
  $experiences[] = $row;
}

// ambil data certificates
$certQuery = mysqli_query($conn, "SELECT * FROM certificates");
$certificates = [];

while ($row = mysqli_fetch_assoc($certQuery)) {
  $row['image'] = "assets/image/" . $row['image'];
  $certificates[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - Dinda Aulia Rizky</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div id="app">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Dinda Aulia Rizky</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
            <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="hero-section d-flex align-items-center text-center">
      <div class="container">
        <img src="assets/image/profile.jpeg" class="rounded-circle mb-4 profile-img" alt="Profile">
        <h1 class="fw-bold">{{ name }}</h1>
        <p class="lead">{{ tagline }}</p>
        <a href="#about" class="btn btn-primary mt-3">Explore More</a>
      </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="py-5">
      <div class="container">
        <h2 class="text-center mb-5 section-title">About Me</h2>

        <div class="row align-items-center">

          <!-- FOTO -->
          <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="about-img-wrapper">
              <img src="assets/image/profile2.jpeg"
                class="about-img img-fluid"
                alt="About Photo">
            </div>
          </div>


          <!-- DESKRIPSI -->
          <div class="col-md-4 mb-4 mb-md-0">
            <p class="about-text">
              {{ description }}
            </p>

            <ul class="about-list">
              <li v-for="exp in experiences">{{ exp }}</li>
            </ul>
          </div>

          <!-- SKILLS -->
          <div class="col-md-4">
            <h5 class="mb-4">Skills</h5>

            <div v-for="skill in skills" class="mb-4">
              <div class="d-flex justify-content-between">
                <span>{{ skill.name }}</span>
                <span>{{ skill.level }}%</span>
              </div>
              <div class="progress custom-progress">
                <div class="progress-bar"
                  :style="{ width: skill.level + '%' }">
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">Experience</h2>

        <!-- Fillter button Experience -->
        <div class="text-center mb-5">
          <button class="btn btn-outline-info me-2"
            :class="{ active: expCategory==='all' }"
            @click="expCategory='all'">All</button>

          <button class="btn btn-outline-info me-2"
            :class="{ active: expCategory==='Campus' }"
            @click="expCategory='Campus'">Campus</button>

          <button class="btn btn-outline-info"
            :class="{ active: expCategory==='School' }"
            @click="expCategory='School'">School</button>
        </div>

        <!-- GRID Experience-->
        <div class="row g-4">
          <div class="col-md-4"
            v-for="exp in filteredExperience"
            :key="exp.title">
            <div class="card h-100 p-3 text-center">
              <img :src="exp.image" class="experience-img mb-3">
              <h5 class="card-title">{{ exp.title }}</h5>
              <p class="card-text">{{ exp.description }}</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Sertifikat -->
    <section id="certificates" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">Certificates</h2>

        <!-- Filter Button Sertifikat -->
        <div class="text-center mb-5">
          <button class="btn btn-outline-info me-2"
            :class="{ active: certCategory==='all' }"
            @click="certCategory='all'">All</button>

          <button class="btn btn-outline-info me-2"
            :class="{ active: certCategory==='Campus' }"
            @click="certCategory='Campus'">Campus</button>

          <button class="btn btn-outline-info"
            :class="{ active: certCategory==='School' }"
            @click="certCategory='School'">School</button>
        </div>

        <!-- Grid Sertifikat -->
        <div class="row g-4">
          <div class="col-md-4"
            v-for="cert in filteredCertificates"
            :key="cert.title">
            <div class="card h-100 p-3 text-center">
              <img :src="cert.image" class="experience-img mb-3">
              <h5 class="card-title">{{ cert.title }}</h5>
              <p class="card-text">{{ cert.description }}</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Contact Person -->
    <section id="contact" class="py-5 contact-section">
      <div class="container text-center">
        <h2 class="mb-4">Contact Me</h2>

        <div class="contact-card p-4 mx-auto">
          <p><strong>Email:</strong><br>
            <a href="mailto:dindaauliarizky01@gmail.com" class="text-info">
              dindaauliarizky01@gmail.com
            </a>
          </p>

          <p><strong>Instagram:</strong><br>
            <a href="https://instagram.com/dindaa.yr" target="_blank" class="text-info">
              @dindaa.yr
            </a>
          </p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
      <p class="mb-0">© 2026 Dinda Aulia Rizky | Portfolio Website</p>
    </footer>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vue JS -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <script>
    const {
      createApp
    } = Vue

    createApp({
      data() {
        return {
          name: "Dinda Aulia Rizky",
          tagline: "Tech Learner | Communicative | Team-Oriented",
          description: "Saya adalah mahasiswa yang aktif dalam kegiatan organisasi dan pengembangan diri, dengan minat pada bidang teknologi, analisis data, serta pengelolaan program. Berpengalaman dalam kepanitiaan seminar dan kegiatan kampus, saya terbiasa bekerja dalam tim, berkomunikasi secara efektif, serta mengoordinasikan berbagai kebutuhan acara. Selain itu, saya juga mengembangkan kemampuan teknis melalui bootcamp Microsoft Excel dan pembelajaran data science, serta memperdalam pemahaman di bidang UI/UX. Saya memiliki semangat belajar yang tinggi dan tertarik menghubungkan teknologi dengan kebutuhan manusia melalui pendekatan yang komunikatif dan solutif.",

          expCategory: 'all',
          certCategory: 'all',

          skills: [{
              name: "Communication",
              level: 80
            },
            {
              name: "Teamwork & Collaboration",
              level: 85
            },
            {
              name: "Event Management",
              level: 80
            },
            {
              name: "Leadership Potential",
              level: 75
            }
          ],

          experienceList: <?php echo json_encode($experiences); ?>,
          certificates: <?php echo json_encode($certificates); ?>,
        }
      },

      computed: {
        filteredExperience() {
          if (this.expCategory === 'all') return this.experienceList;
          return this.experienceList.filter(e => e.category === this.expCategory);
        },
        filteredCertificates() {
          if (this.certCategory === 'all') return this.certificates;
          return this.certificates.filter(c => c.category === this.certCategory);
        }
      }

    }).mount('#app')
  </script>

  <script>
    const revealOnScroll = () => {
      const trigger = window.innerHeight * 0.85;
      const elements = document.querySelectorAll("section, .card");

      elements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < trigger) {
          el.classList.add("show");
        }
      });
    };

    window.addEventListener("scroll", revealOnScroll);
    window.addEventListener("load", revealOnScroll);
  </script>

</body>

</html>