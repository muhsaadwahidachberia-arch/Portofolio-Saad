<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        (function () {
            var saved = localStorage.getItem('theme');
            var theme = saved || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
    <title>Sa'ad — Portofolio Mahasiswa Teknik Informatika</title>
    <meta name="description" content="Portofolio Sa'ad, mahasiswa Teknik Informatika Universitas Muslim Indonesia. Project Laravel, MySQL, jaringan komputer, dan sertifikat pencapaian.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Sa'ad — Portofolio Mahasiswa Teknik Informatika">
    <meta property="og:description" content="Project Laravel, MySQL, jaringan komputer, dan sertifikat pencapaian Sa'ad, mahasiswa Teknik Informatika UMI.">
    <meta property="og:image" content="{{ asset('images/profile.jpeg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Sa'ad",
        "jobTitle": "Mahasiswa Teknik Informatika",
        "affiliation": {
            "@type": "CollegeOrUniversity",
            "name": "Universitas Muslim Indonesia"
        },
        "url": "{{ url('/') }}",
        "image": "{{ asset('images/profile.jpeg') }}",
        "sameAs": [
            "https://github.com/muhsaadwahidachberia-arch",
            "https://linkedin.com/in/muhsaadwahidachberia"
        ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<body>

 <div id="particles-js" aria-hidden="true"></div>

<div id="progressBar"></div>

<div class="custom-cursor" aria-hidden="true"></div>

    <!-- Navbar -->
<nav class="navbar" id="navbar" aria-label="Navigasi utama">
    <div class="nav-logo">Sa'ad</div>
    <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#certificates">Certificates</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <button id="themeToggle" aria-label="Ganti tema terang/gelap">
        <i class="fa-solid fa-sun theme-icon-light" aria-hidden="true"></i>
        <i class="fa-solid fa-moon theme-icon-dark" aria-hidden="true"></i>
    </button>
</nav>
<section class="hero fade-in" id="hero">

    <img src="{{ asset('images/profile.jpeg') }}" alt="Foto Sa'ad" class="profile-photo">
   <h1>Halo, saya <span class="gradient-text">Sa'ad</span></h1>
    <p><span id="typing-text"></span><span class="cursor">|</span></p>
    <div class="hero-actions">
        <a href="#projects" class="btn">Lihat Project Saya</a>
        @if ($cvPath)
            <a href="{{ asset($cvPath) }}" target="_blank" class="btn btn-outline"><i class="fa-solid fa-download" aria-hidden="true"></i> Download CV</a>
        @endif
    </div>
</section>

<section class="about fade-in" id="about">
  <span class="section-label">01 — About</span>
<h2 class="gradient-text">Tentang Saya</h2>
  <div class="section-divider"></div>
    <p>Halo! Saya Sa'ad,saya adalah seorang 
        mahasiswa Teknik Informatika di fakultas ilmu Komputer Universitas Muslim Indonesia, saya berasal dari kota timika-papua, dan saya tinggal di makassar bersama kakek dan nenek saya, saya memiliki cita cita untuk menjadi seorang yang paham komputer dasar dan bisa membuat sebuah website, saya juga memiliki hobi bermain game dan menonton film, saya juga suka membaca buku buku tentang 
        sejarah dan biografi tokoh tokoh terkenal di dunia.</p>
        <div class="section-divider"></div>
</section>

<section class="skills fade-in" id="skills">
   <span class="section-label">02 — Skills</span>
   <h2 class="gradient-text">Skills</h2>
   <div class="skills-grid">
    <div class="skill-item"><i class="fa-brands fa-html5" aria-hidden="true"></i> HTML & CSS</div>
    <div class="skill-item"><i class="fa-solid fa-book-quran" aria-hidden="true"></i> Membaca dan Menghafal Al-Quran</div>
    <div class="skill-item"><i class="fa-solid fa-trophy" aria-hidden="true"></i> EX IMMO 100</div>
    <div class="skill-item"><i class="fa-brands fa-laravel" aria-hidden="true"></i> Laravel</div>
    <div class="skill-item"><i class="fa-solid fa-database" aria-hidden="true"></i> MySQL</div>
    <div class="skill-item"><i class="fa-brands fa-git-alt" aria-hidden="true"></i> Git & GitHub</div>
    <div class="skill-item"><i class="fa-brands fa-java" aria-hidden="true"></i> Java (OOP)</div>
    <div class="skill-item"><i class="fa-solid fa-network-wired" aria-hidden="true"></i> Cisco Packet Tracer</div>

</div>
<div class="section-divider"></div>
</section>

<section class="experience fade-in" id="experience">
    <span class="section-label">03 — Experience</span>
    <h2 class="gradient-text">Pengalaman & Pendidikan</h2>

    <div class="timeline">
        @foreach ($experiences as $experience)
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-year">{{ $experience['year'] }}</span>
                    <h3>{{ $experience['title'] }}</h3>
                    <p class="timeline-place">{{ $experience['place'] }}</p>
                    <p>{{ $experience['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="section-divider"></div>
</section>

<!-- Certificates Section -->
<section class="certificates fade-in" id="certificates">
    <span class="section-label">04 — Certificates</span>
    <h2 class="gradient-text">Sertifikat & Pencapaian</h2>

    <div class="certificates-grid">
        @foreach ($certificates as $certificate)
            <a href="{{ asset($certificate['file']) }}" target="_blank" class="cert-card">
                @if ($certificate['thumbnail'])
                    <img src="{{ asset($certificate['thumbnail']) }}" alt="{{ $certificate['title'] }}" loading="lazy">
                @else
                    <div class="cert-pdf-icon"><i class="fa-solid fa-file-pdf" aria-hidden="true"></i></div>
                @endif
                <div class="cert-overlay">
                    <span><i class="fa-solid fa-eye" aria-hidden="true"></i> {{ $certificate['title'] }}</span>
                </div>
            </a>
        @endforeach
    </div>

    <div class="section-divider"></div>
</section>


<section class="projects fade-in" id="projects">
    <span class="section-label">05 — Work</span>
    <h2 class="gradient-text">Project Saya</h2>
    <div class="projects-grid">

        @foreach ($projects as $project)
            <div class="project-card">
                @if ($project['image'])
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="project-thumb" loading="lazy">
                @else
                    <div class="project-thumb project-thumb-placeholder"><i class="fa-solid fa-diagram-project"></i></div>
                @endif
                <h3>{{ $project['title'] }}</h3>
                <p>{{ $project['description'] }}</p>
                @if (!empty($project['tags']))
                    <div class="project-tags">
                        @foreach ($project['tags'] as $tag)
                            <span class="tag-badge">{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif
                @if ($project['link'])
                    <a href="{{ $project['link'] }}" target="_blank" class="project-link">Lihat di GitHub →</a>
                @endif
            </div>
        @endforeach

    </div>
    <div class="section-divider"></div>
</section>


<section class="contact fade-in" id="contact">
   <span class="section-label">06 — Contact</span>
<h2 class="gradient-text">Hubungi Saya</h2>
    <p>Terbuka untuk kolaborasi, diskusi project, atau sekadar ngobrol soal web & jaringan.</p>

    @if (session('contact_success'))
        <p class="contact-success"><i class="fa-solid fa-circle-check"></i> {{ session('contact_success') }}</p>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
        @csrf
        <div class="hp-field" aria-hidden="true">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" tabindex="-1" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Nama kamu" value="{{ old('name') }}">
            @error('name') <span class="form-error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email kamu" value="{{ old('email') }}">
            @error('email') <span class="form-error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <textarea name="message" rows="4" placeholder="Pesan kamu">{{ old('message') }}</textarea>
            @error('message') <span class="form-error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i> Kirim Pesan</button>
    </form>

    <div class="contact-links">
        <a href="https://wa.me/6282288873939" target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        <a href="mailto:muh.saadwahidwahidachberia@gmail.com" class="btn btn-outline"><i class="fa-solid fa-envelope" aria-hidden="true"></i> Email</a>
        <a href="https://github.com/muhsaadwahidachberia-arch" target="_blank" class="btn btn-outline"><i class="fa-brands fa-github" aria-hidden="true"></i> GitHub</a>
        <a href="https://linkedin.com/in/muhsaadwahidachberia" target="_blank" class="btn btn-outline"><i class="fa-brands fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
    </div>
</section>

<footer>
    <p>&copy; 2026 Sa'ad. Dibuat dengan Laravel.</p>
</footer>

<button id="scrollTopBtn" title="Kembali ke atas" aria-label="Kembali ke atas">
    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
</button>

<script src="{{ asset('js/portfolio.js') }}" defer></script>

</body>
</html>