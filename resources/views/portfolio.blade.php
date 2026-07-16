<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio-saad</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar" id="navbar">
    <div class="nav-logo">Sa'ad</div>
    <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
    <section class="hero" id="hero">
    <h1>Halo, ini portofolio saya!</h1>
    <p>Mahasiswa Informatika UMI | Asisten Praktikum Web Programming & Web Development</p>
    <a href="#projects" class="btn">Lihat Project Saya</a>
    </section>

<section class="about">
    <h2>Tentang Saya</h2>
    <p>Halo! Saya Sa'ad,saya adalah seorang 
        mahasiswa Teknik Informatika di fakultas ilmu Komputer Universitas Muslim Indonesia, saya berasal dari kota timika-papua, dan saya tinggal di makassar bersama kakek dan nenek saya, saya memiliki cita cita untuk menjadi seorang yang paham komputer dasar dan bisa membuat sebuah website, saya juga memiliki hobi bermain game dan menonton film, saya juga suka membaca buku buku tentang 
        sejarah dan biografi tokoh tokoh terkenal di dunia.</p>
</section>

<section class="skills">
    <h2>Skills</h2>
    <div class="skill-grid">
        <div class="skill-item">Membaca dan Menghafal Al-Quran</div>
        <div class="skill-item">HTML & CSS</div>
        <div class="skill-item">Git & Github</div>
        <div class="skill-item">Java (OOP)</div>
        <div class="skill-item">Cisco Packet Tracer</div>
          <div class="skill-item">Ex-Imo *100</div>
    </div>
</section>


<section class="projects" id="projects">
    <h2>Project Saya</h2>
    <div class="projects-grid">

        <div class="project-card">
            <h3>RuangLab</h3>
            <p>Sistem reservasi laboratorium berbasis Laravel, deploy di server Ubuntu via Proxmox dengan Cloudflare Tunnel.</p>
            <a href="https://github.com/TUBES-CCA-2026/RuangLab" target="_blank" class="project-link">Lihat di GitHub →</a>
        </div>

        <div class="project-card">
            <h3>Tugas Besar Jaringan Komputer</h3>
            <p>Desain jaringan komputer kawasan perumahan terpadu (5 blok) menggunakan VLSM, VLAN, Router-on-a-Stick, OSPF, BGP di Cisco Packet Tracer.</p>
        </div>

        

    </div>
</section>


<section class="contact" id="contact">
    <h2>Hubungi Saya</h2>
    <p>Terbuka untuk kolaborasi, diskusi project, atau sekadar ngobrol soal web & jaringan.</p>
    <div class="contact-links">
        <a href="mailto:muh.saadwahidwahidachberia@gmail.com" class="btn">Email</a>
        <a href="https://github.com/muhsaadwahidachberia-arch
" target="_blank" class="btn btn-outline">GitHub</a>
        <a href="https://linkedin.com/in/muhsaadwahidachberia" target="_blank" class="btn btn-outline">LinkedIn</a>
    </div>
</section>

<footer>
    <p>&copy; 2026 Sa'ad. Dibuat dengan Laravel.</p>
</footer>
            
</body>
</html>