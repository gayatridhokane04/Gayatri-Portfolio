<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gayatri Dhokane | Full Stack Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<header class="navbar">
    <div class="nav-container">

        <a href="#home" class="logo">
            Gayatri<span>.</span>
        </a>

        <nav class="nav-menu">

            <a href="#home" class="nav-link active">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#skills" class="nav-link">Skills</a>
            <a href="#experience" class="nav-link">Experience</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#education" class="nav-link">Education</a>
            <a href="#contact" class="nav-link">Contact</a>

            <a href="assets/resume/Gayatri-Dhokane-Resume.pdf"
               class="resume-btn"
               target="_blank">
                Resume <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>

        </nav>

        <button class="mobile-menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="hero-bg-circle circle-one"></div>
    <div class="hero-bg-circle circle-two"></div>

    <div class="hero-container">

        <div class="hero-content reveal-left">

            <div class="availability">
                <span></span>
                Available for opportunities
            </div>

            <p class="hello-text">
                Hello, I'm
            </p>

            <h1>
                Gayatri
                <span>Dhokane</span>
            </h1>

            <h2>
                Full Stack Developer
            </h2>

            <p class="hero-description">
                I build responsive, user-friendly and dynamic websites
                using modern frontend and backend technologies.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="btn btn-primary">
                    View My Work
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#contact" class="btn btn-outline">
                    Contact Me
                </a>

            </div>

            <div class="hero-stats">

                <div class="stat">
                    <h3>1+</h3>
                    <p>Year Experience</p>
                </div>

                <div class="stat">
                    <h3>10+</h3>
                    <p>Projects</p>
                </div>

                <div class="stat">
                    <h3>8+</h3>
                    <p>Technologies</p>
                </div>

            </div>

        </div>


        <div class="hero-visual reveal-right">

            <div class="image-wrapper">

                <div class="image-shape"></div>

                <img src="assets/images/profile.webp"
                     alt="Gayatri Dhokane"
                     class="profile-image">

            </div>


            <div class="floating-card code-card">

                <div class="card-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <p>
                    <span class="code-orange">const</span>
                    developer = {<br>

                    &nbsp;&nbsp;name:
                    <span class="code-yellow">"Gayatri"</span>,<br>

                    &nbsp;&nbsp;role:
                    <span class="code-yellow">"Full Stack"</span>,<br>

                    &nbsp;&nbsp;passion:
                    <span class="code-yellow">"Coding"</span><br>

                    };
                </p>

            </div>


            <div class="tech-badge badge-html">
                <i class="fa-brands fa-html5"></i>
                HTML
            </div>

            <div class="tech-badge badge-js">
                <i class="fa-brands fa-js"></i>
                JavaScript
            </div>

            <div class="tech-badge badge-node">
                <i class="fa-brands fa-node-js"></i>
                Node.js
            </div>

        </div>

    </div>
</section>


<!-- ================= ABOUT ================= -->

<section class="about section" id="about">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">ABOUT ME</p>
            <h2>Turning Ideas Into <span>Web Experiences</span></h2>
        </div>


        <div class="about-grid">

            <div class="about-text reveal-left">

                <h3>
                    Passionate about creating
                    modern web solutions.
                </h3>

                <p>
                    I am a Full Stack Developer with practical experience
                    in developing responsive and dynamic websites.
                    I enjoy converting ideas into clean, functional
                    and user-friendly web applications.
                </p>

                <p>
                    I have experience working with frontend technologies,
                    backend development, databases and deployment.
                    I continuously learn new technologies to improve
                    my development skills.
                </p>

                <a href="#contact" class="text-link">
                    Let's work together
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <div class="about-details reveal-right">

                <div class="detail-card">
                    <i class="fa-solid fa-code"></i>
                    <div>
                        <strong>Frontend</strong>
                        <span>HTML, CSS, JS, Bootstrap, React</span>
                    </div>
                </div>

                <div class="detail-card">
                    <i class="fa-solid fa-server"></i>
                    <div>
                        <strong>Backend</strong>
                        <span>Node.js, Express, PHP</span>
                    </div>
                </div>

                <div class="detail-card">
                    <i class="fa-solid fa-database"></i>
                    <div>
                        <strong>Database</strong>
                        <span>MySQL</span>
                    </div>
                </div>

                <div class="detail-card">
                    <i class="fa-solid fa-laptop-code"></i>
                    <div>
                        <strong>Development</strong>
                        <span>Responsive Web Development</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= SKILLS ================= -->

<section class="skills section" id="skills">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">MY SKILLS</p>
            <h2>Technologies I <span>Work With</span></h2>
        </div>


        <div class="skills-grid">

            <div class="skill-card reveal">
                <div class="skill-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>Frontend Development</h3>

                <div class="skill-tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>
                    <span>jQuery</span>
                    <span>React</span>
                    <span>Tailwind CSS</span>
                </div>
            </div>


            <div class="skill-card reveal">
                <div class="skill-icon">
                    <i class="fa-solid fa-server"></i>
                </div>

                <h3>Backend Development</h3>

                <div class="skill-tags">
                    <span>Node.js</span>
                    <span>Express.js</span>
                    <span>PHP</span>
                    <span>REST API</span>
                </div>
            </div>


            <div class="skill-card reveal">
                <div class="skill-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <h3>Database & Tools</h3>

                <div class="skill-tags">
                    <span>MySQL</span>
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>VS Code</span>
                    <span>cPanel</span>
                    <span>Figma</span>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- ================= EXPERIENCE ================= -->

<section class="experience section" id="experience">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">MY JOURNEY</p>
            <h2>Work <span>Experience</span></h2>
        </div>


        <div class="timeline">

            <!-- A2Z IT HUB -->

            <div class="timeline-item reveal-left">

                <div class="timeline-dot"></div>

                <div class="experience-card">

                    <div class="experience-top">

                        <div>
                            <p class="experience-duration">
                                6 MONTHS
                            </p>

                            <h3>Web Development Intern</h3>

                            <h4>A2Z IT Hub</h4>
                        </div>

                        <div class="experience-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>

                    </div>

                    <p>
                        Worked on web development projects and gained
                        practical experience in frontend and backend
                        development, responsive websites and database
                        integration.
                    </p>

                    <div class="experience-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>

                </div>

            </div>


            <!-- DESIGN FOR U -->

            <div class="timeline-item reveal-right">

                <div class="timeline-dot"></div>

                <div class="experience-card">

                    <div class="experience-top">

                        <div>
                            <p class="experience-duration">
                                PRESENT
                            </p>

                            <h3>Web Developer</h3>

                            <h4>Design For U</h4>
                        </div>

                        <div class="experience-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                    </div>

                    <p>
                        Currently working on web development projects,
                        creating responsive websites and implementing
                        frontend and backend functionality.
                    </p>

                    <div class="experience-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PROJECTS ================= -->

<section class="projects section" id="projects">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">MY WORK</p>
            <h2>Featured <span>Projects</span></h2>
        </div>


        <div class="projects-grid">

            <article class="project-card reveal">

                <div class="project-image">
                    <img src="assets/images/project-1.webp"
                         alt="Utopia Optovision">
                </div>

                <div class="project-content">

                    <p class="project-category">
                        BUSINESS WEBSITE
                    </p>

                    <h3>Utopia Optovision</h3>

                    <p>
                        Professional corporate website with responsive
                        layouts, animations and modern UI components.
                    </p>

                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>JavaScript</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>

                </div>

            </article>


            <article class="project-card reveal">

                <div class="project-image">
                    <img src="assets/images/project-2.webp"
                         alt="Satya Sparsh School">
                </div>

                <div class="project-content">

                    <p class="project-category">
                        SCHOOL WEBSITE
                    </p>

                    <h3>Satya Sparsh School</h3>

                    <p>
                        Modern school website with responsive sections,
                        admission information and interactive UI.
                    </p>

                    <div class="project-tech">
                        <span>React</span>
                        <span>Vite</span>
                        <span>CSS</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>

                </div>

            </article>


            <article class="project-card reveal">

                <div class="project-image">
                    <img src="assets/images/project-3.webp"
                         alt="EduNext">
                </div>

                <div class="project-content">

                    <p class="project-category">
                        LEARNING PLATFORM
                    </p>

                    <h3>EduNext</h3>

                    <p>
                        Learning platform website designed for courses,
                        enquiries and professional online learning.
                    </p>

                    <div class="project-tech">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>JavaScript</span>
                    </div>

                    <a href="#" class="project-link">
                        View Project
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- ================= EDUCATION ================= -->

<section class="education section" id="education">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">EDUCATION</p>
            <h2>My <span>Education</span></h2>
        </div>


        <div class="education-grid">

            <div class="education-card reveal-left">

                <div class="education-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>

                <p class="education-year">
                    CURRENTLY PURSUING
                </p>

                <h3>MCA</h3>

                <h4>
                    PES MIBS, Nigdi, Pune
                </h4>

                <p>
                    Master of Computer Applications
                </p>

            </div>


            <div class="education-card reveal-right">

                <div class="education-icon">
                    <i class="fa-solid fa-school"></i>
                </div>

                <p class="education-year">
                    PASSED - 2025
                </p>

                <h3>BCA</h3>

                <h4>
                    College of Computer Science, Wakad, Pune
                </h4>

                <p>
                    CGPA: 7.68
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section class="contact section" id="contact">

    <div class="container">

        <div class="section-heading reveal">
            <p class="section-label">GET IN TOUCH</p>
            <h2>Let's Build Something <span>Together</span></h2>

            <p>
                Have a project or opportunity in mind?
                Feel free to contact me.
            </p>
        </div>


        <div class="contact-grid">

            <div class="contact-info reveal-left">

                <a href="mailto:yourmail@gmail.com"
                   class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                        <strong>Email</strong>
                        <span>yourmail@gmail.com</span>
                    </div>

                </a>


                <a href="#"
                   class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <div>
                        <strong>LinkedIn</strong>
                        <span>linkedin.com/in/yourprofile</span>
                    </div>

                </a>


                <a href="#"
                   class="contact-item">

                    <div class="contact-icon">
                        <i class="fa-brands fa-github"></i>
                    </div>

                    <div>
                        <strong>GitHub</strong>
                        <span>github.com/yourusername</span>
                    </div>

                </a>

            </div>


            <form class="contact-form reveal-right">

                <div class="form-row">

                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text"
                               placeholder="Enter your name"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                               placeholder="Enter your email"
                               required>
                    </div>

                </div>


                <div class="form-group">
                    <label>Subject</label>

                    <input type="text"
                           placeholder="Enter subject"
                           required>
                </div>


                <div class="form-group">
                    <label>Message</label>

                    <textarea
                        placeholder="Write your message..."
                        required></textarea>
                </div>


                <button type="submit"
                        class="btn btn-primary">
                    Send Message
                    <i class="fa-solid fa-paper-plane"></i>
                </button>

            </form>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="container">

        <p>
            © 2026 <span>Gayatri Dhokane</span>.
            All Rights Reserved.
        </p>

    </div>

</footer>


<script src="js/script.js"></script>

</body>
</html>