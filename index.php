<?php
$base  = (str_contains($_SERVER['HTTP_HOST'] ?? '', 'localhost')) ? '/portfolio' : '';
$flash = $_COOKIE['flash'] ?? '';
if ($flash) setcookie('flash', '', time() - 3600, $base . '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Madhu Saravanan | Web Developer</title>
  <meta name="description" content="Madhu Saravanan – Web Developer & UI Designer based in Ponneri, Tamil Nadu." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $base ?>/css/style.css" />
</head>
<body>

<!-- Scroll progress -->
<div id="progress-bar"></div>

<!-- Global constellation canvas (fixed, full viewport) -->
<canvas id="constellation-canvas"></canvas>

<!-- ===== HEADER ===== -->
<header id="header">
  <a href="#home" class="logo">Madhu<span class="dot">.</span></a>
  <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
  <nav id="main-nav">
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#education">Journey</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<!-- ===== HERO ===== -->
<section id="home">
  <div class="hero-glow-a"></div>
  <div class="hero-glow-b"></div>

  <div class="hero-inner">
    <!-- Text -->
    <div class="hero-text reveal">
      <span class="hero-greeting">Hello, I'm 👋</span>
      <h1 class="hero-name">
        Madhu<br>
        <span class="gradient-text">Saravanan</span>
      </h1>
      <div class="hero-role">
        <span class="role-prefix">&gt;</span>
        <span id="typewriter-text">Software Developer</span><span class="typewriter-cursor"></span>
      </div>
      <p class="hero-bio">
        A motivated software developer with strong time management skills.
        Currently building full-stack apps at NGP Websmart using PHP &amp; AngularJS.
        Passionate about clean code and great UI design.
      </p>
      <div class="btn-row">
        <a href="<?= $base ?>/resume/Madhu_software_developer.pdf" target="_blank" class="btn btn-primary">
          ↓ Download CV
        </a>
        <a href="#contact" class="btn btn-outline">Contact Me →</a>
      </div>
    </div>

    <!-- Photo -->
    <div class="hero-photo-col reveal d2">
      <div class="photo-ring">
        <div class="photo-ring-inner">
          <img src="<?= $base ?>/photos/photo.jpg" alt="Madhu Saravanan" />
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-cue">
    <span>Scroll</span>
    <div class="cue-arrow"></div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about">
  <div class="container">
    <div class="about-grid">

      <!-- Photo card -->
      <div class="about-img-wrap reveal-l">
        <div class="about-img-card">
          <img src="<?= $base ?>/photos/photo.jpg" alt="Madhu Saravanan" />
        </div>
        <div class="img-accent-a"></div>
        <div class="img-accent-b"></div>
      </div>

      <!-- Text -->
      <div class="about-text reveal-r">
        <span class="section-label">About Me</span>
        <h2 class="section-title">Who I Am</h2>
        <div class="divider"></div>
        <p>
          A motivated and detail-oriented software developer with strong time management
          skills and the ability to perform under pressure. Eager to take on new challenges
          in a dynamic organisation where I can apply my technical knowledge, learn new
          technologies, and contribute to impactful solutions.
        </p>
        <p>
          Currently working as a Software Developer at NGP Websmart, building full-stack
          applications with PHP and AngularJS. I also love UI design — from wireframing in
          Figma to shipping pixel-perfect interfaces.
        </p>

        <div class="about-meta">
          <div class="meta-item">
            <span class="meta-label">Current Role</span>
            <span class="meta-value">Software Developer</span>
          </div>
          <div class="meta-item">
            <span class="meta-label">Location</span>
            <span class="meta-value">Ponneri, Tamil Nadu</span>
          </div>
          <div class="meta-item">
            <span class="meta-label">Degree</span>
            <span class="meta-value">MSc Cyber Forensics (Pursuing)</span>
          </div>
          <div class="meta-item">
            <span class="meta-label">Stack</span>
            <span class="meta-value">PHP · AngularJS · MySQL</span>
          </div>
        </div>

        <a href="<?= $base ?>/resume/Madhu_software_developer.pdf" target="_blank" class="btn btn-primary" style="align-self:flex-start;">
          View Resume ↗
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===== SKILLS ===== -->
<section id="skills">
  <div class="container">
    <span class="section-label reveal">Technical Skills</span>
    <h2 class="section-title reveal d1">What I Work With</h2>
    <div class="divider reveal d2"></div>

    <div class="skills-intro reveal d2">
      <p>
        A mix of frontend, backend, and design tools I've picked up over my development journey.
        Always learning and adding to this list.
      </p>
    </div>

    <div class="skill-group reveal d1">
      <p class="group-label">Frontend</p>
      <div class="tags">
        <span class="tag">HTML5</span>
        <span class="tag">CSS3</span>
        <span class="tag">JavaScript</span>
        <span class="tag">Angular JS</span>
        <span class="tag">Bootstrap</span>
      </div>
    </div>

    <div class="skill-group reveal d2">
      <p class="group-label">Backend</p>
      <div class="tags">
        <span class="tag">PHP</span>
        <span class="tag">Adonis JS</span>
        <span class="tag">Python</span>
        <span class="tag">C</span>
      </div>
    </div>

    <div class="skill-group reveal d2">
      <p class="group-label">Database & OS</p>
      <div class="tags">
        <span class="tag">MySQL</span>
        <span class="tag">PostgreSQL</span>
        <span class="tag">Linux</span>
        <span class="tag">Windows</span>
      </div>
    </div>

    <div class="skill-group reveal d3">
      <p class="group-label">Tools & Software</p>
      <div class="tags">
        <span class="tag">Git</span>
        <span class="tag">Figma</span>
        <span class="tag">Postman</span>
        <span class="tag">Canva</span>
        <span class="tag">Wix</span>
        <span class="tag">MS Office</span>
      </div>
    </div>

    <div class="skill-group reveal d4">
      <p class="group-label">AI & Vibe Coding</p>
      <div class="tags">
        <span class="tag">Vibe Coder</span>
        <span class="tag">Claude AI</span>
        <span class="tag">AI-Assisted Dev</span>
      </div>
    </div>
  </div>
</section>

<!-- ===== PROJECTS ===== -->
<section id="projects">
  <div class="container">
    <span class="section-label reveal">My Work</span>
    <h2 class="section-title reveal d1">Projects</h2>
    <div class="divider reveal d2"></div>

    <div class="projects-list">

      <div class="project-featured reveal">

        <!-- Info -->
        <div class="pf-info">
          <span class="pf-number">Project — 01</span>
          <h3 class="pf-title">Day Task Tracker</h3>
          <p class="pf-desc">
            A full-stack todo application to track day-to-day activities and tasks.
            Features task creation, completion tracking, and persistent storage —
            helping users stay organised and productive every day.
            Hosted on Vercel with TiDB as the cloud MySQL database.
          </p>
          <div class="pf-tags">
            <span class="tag">PHP</span>
            <span class="tag">MySQL</span>
            <span class="tag">TiDB</span>
            <span class="tag">Vercel</span>
            <span class="tag">HTML5</span>
            <span class="tag">CSS3</span>
          </div>
          <div>
            <a href="https://madhu-saravanan-todo-app.vercel.app/" target="_blank" rel="noopener" class="btn btn-primary">
              Live Demo ↗
            </a>
          </div>
        </div>

        <!-- Browser mockup -->
        <div class="pf-preview">
          <div class="browser-mock">
            <div class="browser-bar">
              <span class="b-dot red"></span>
              <span class="b-dot yellow"></span>
              <span class="b-dot green"></span>
              <div class="browser-url">madhu-saravanan-todo-app.vercel.app</div>
            </div>
            <div class="browser-body" style="padding:0;">
              <img src="<?= $base ?>/images/todo-preview.png" alt="Day Task Tracker preview" style="width:100%;display:block;border-radius:0 0 12px 12px;" />
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ===== EDUCATION & EXPERIENCE ===== -->
<section id="education">
  <div class="container">
    <span class="section-label reveal">Background</span>
    <h2 class="section-title reveal d1">My Journey</h2>
    <div class="divider reveal d2"></div>

    <div class="edu-grid">

      <!-- Education -->
      <div class="reveal-l">
        <div class="sub-heading">
          <span class="sub-icon">🎓</span> Education
        </div>
        <div class="timeline">
          <div class="tl-item">
            <p class="tl-year">Pursuing</p>
            <p class="tl-title">MSc Cyber Forensics & Information Security</p>
            <p class="tl-sub">University of Madras, Chennai</p>
          </div>
          <div class="tl-item">
            <p class="tl-year">2020 – 2023</p>
            <p class="tl-title">Bachelor of Computer Application</p>
            <p class="tl-sub">Loyola College, Nungambakkam</p>
          </div>
          <div class="tl-item">
            <p class="tl-year">HSLC</p>
            <p class="tl-title">Higher Secondary — 68.1%</p>
            <p class="tl-sub">Velammal Matriculation School, State Board</p>
          </div>
          <div class="tl-item">
            <p class="tl-year">SSLC</p>
            <p class="tl-title">Secondary School — 84%</p>
            <p class="tl-sub">Velammal Matriculation School, State Board</p>
          </div>
        </div>
      </div>

      <!-- Experience -->
      <div class="reveal-r d1">
        <div class="sub-heading">
          <span class="sub-icon">💼</span> Experience
        </div>
        <div class="timeline">
          <div class="tl-item">
            <p class="tl-year">April 2025 – Present</p>
            <p class="tl-title">Software Developer</p>
            <p class="tl-sub">NGP Websmart</p>
            <p class="tl-body">Full-stack development with PHP & AngularJS 1.6. Built new features including Slack integration for real-time notifications.</p>
          </div>
          <div class="tl-item">
            <p class="tl-year">May 2024 – April 2025</p>
            <p class="tl-title">Technical Support Engineer</p>
            <p class="tl-sub">NGP Websmart</p>
            <p class="tl-body">Resolved support tickets, executed DB queries, implemented code fixes, and generated custom reports for clients.</p>
          </div>
          <div class="tl-item">
            <p class="tl-year">Dec 2023 – Jan 2024</p>
            <p class="tl-title">Intern — Frontend Developer</p>
            <p class="tl-sub">Mavdero TechServices PVT Limited</p>
            <p class="tl-body">Built responsive web interfaces using HTML, CSS and Figma for UI/UX design and prototyping.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Certifications -->
    <div class="cert-row reveal">
      <div class="sub-heading" style="margin-top:56px;">
        <span class="sub-icon">🏆</span> Certifications
      </div>
      <div class="cert-grid">
        <div class="cert-card">
          <span class="cert-issuer">Selfmade Ninja Academy</span>
          <p class="cert-name">Web Engineering</p>
        </div>
        <div class="cert-card">
          <span class="cert-issuer">Selfmade Ninja Academy</span>
          <p class="cert-name">Application Programming Interface</p>
        </div>
        <div class="cert-card">
          <span class="cert-issuer">Coursera</span>
          <p class="cert-name">Develop a Company Website with Wix</p>
        </div>
        <div class="cert-card">
          <span class="cert-issuer">Selfmade Ninja Academy</span>
          <p class="cert-name">Learn the Art of Hacking Through Programming</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact">
  <div class="container">
    <span class="section-label reveal">Get In Touch</span>
    <h2 class="section-title reveal d1">Let's Work Together</h2>
    <div class="divider reveal d2"></div>

    <div class="contact-grid">

      <!-- Info -->
      <div class="reveal-l">
        <p class="contact-blurb">
          Have a project in mind or just want to say hi? Drop me a message —
          I usually respond within 24 hours.
        </p>

        <div class="info-item">
          <div class="info-icon">📍</div>
          <div>
            <p class="info-label">Address</p>
            <p class="info-val">84, Bharathi Street, Balaji Nagar,<br>Ponneri, Thiruvallur District – 601204</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">📞</div>
          <div>
            <p class="info-label">Phone</p>
            <a href="tel:+919150503505" class="info-val">+91 9150503505</a>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">✉️</div>
          <div>
            <p class="info-label">Email</p>
            <a href="mailto:madhusaravanan9150@gmail.com" class="info-val">madhusaravanan9150@gmail.com</a>
          </div>
        </div>

        <div class="social-row">
          <a href="https://github.com/Madhu-Saravanan" target="_blank" rel="noopener" class="soc-btn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
            GitHub
          </a>
          <a href="https://www.linkedin.com/in/madhu-saravanan-a92857242/" target="_blank" rel="noopener" class="soc-btn">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
            LinkedIn
          </a>
        </div>
      </div>

      <!-- Form -->
      <div class="reveal-r d1">
        <div class="form-card">

          <?php if ($flash === 'ok'): ?>
            <p class="flash ok">✅ Message sent! I'll get back to you soon.</p>
          <?php elseif ($flash === 'err'): ?>
            <p class="flash err">❌ Something went wrong. Please try again or email directly.</p>
          <?php endif; ?>

          <form id="contactForm" action="<?= $base ?>/contact" method="POST" novalidate>
            <div class="form-2col">
              <div class="field">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" placeholder="Your name" required />
              </div>
              <div class="field">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="you@email.com" required />
              </div>
            </div>
            <div class="field">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="What's this about?" />
            </div>
            <div class="field">
              <label for="message">Message *</label>
              <textarea id="message" name="message" rows="5" placeholder="Tell me about your project or idea..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
              Send Message ✉️
            </button>
          </form>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <p>
    Designed & Built by
    <a href="https://github.com/Madhu-Saravanan" target="_blank" rel="noopener">Madhu Saravanan</a>
    &nbsp;·&nbsp; &copy; <?php echo date('Y'); ?>
  </p>
</footer>

<script src="<?= $base ?>/js/main.js"></script>
</body>
</html>
