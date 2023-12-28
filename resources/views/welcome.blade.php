<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Kawsar Ahmad</title>
  <style>
    .sidebar {
      background-color: #98a0a9;
      padding: 20px;
      width: 80%;
      height: 90vh;
      border-radius: 10px;
      margin: 20px 0;
      font-size: 25px;
      font-weight: bold;
    }
    .main-content {
      padding: 20px;
    }
    .nav-link.hoverable:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .content-section {
      display: none;
    }
    .active-content {
      display: block;
    }
    .project-item {
      border: 1px solid #ccc;
      padding: 15px;
      margin-bottom: 15px;
    }
    .contact-icons i {
      margin: 10px;
      color: #007bff; 
      transition: color 0.3s ease-in-out;
    }

    .contact-icons i:hover {
      color: #0056b3; 
    }
    a {
      list-style: none;
      text-decoration: none;
    }
    a:hover {
      list-style: none;
      text-decoration: none;
    }
  </style>
</head>
<body>

<!-- Responsive Navbar for Mobile -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-lg-none">
  <!-- <a class="navbar-brand" href="#">Kawsar Ahmad</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
       "menu" = [
      </li>
      <li class="nav-item">
        <a class="nav-link hoverable active" href="javascript:void(0)" style="color: #000;" onclick="showContent('about')">About Me,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hoverable" href="javascript:void(0)" style="color: #000;" onclick="showContent('career')">Work Experience,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hoverable" href="javascript:void(0)" style="color: #000;" onclick="showContent('skills')">Skills,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hoverable" href="javascript:void(0)" style="color: #000;" onclick="showContent('projects')">Projects,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hoverable" href="javascript:void(0)" style="color: #000;" onclick="showContent('contact')">Contact</a>
      </li>
      <li class="nav-item">
        ]
       </li>
    </ul>
  </div>
</nav>

<!-- Main Content Container -->
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar (visible on larger screens) -->
    <div class="col-md-4 d-none d-lg-block">
      <div class="sidebar">
       
        <ul class="nav flex-column">
          <li class="nav-item">
            "menu" = [
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable active" href="javascript:void(0)" style="color: #fff;" onclick="showContent('about')">About Me,</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="javascript:void(0)" style="color: #fff;" onclick="showContent('career')">Work Experience,</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="javascript:void(0)" style="color: #fff;" onclick="showContent('skills')">Skills,</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="javascript:void(0)" style="color: #fff;" onclick="showContent('projects')">Projects,</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link hoverable" href="javascript:void(0)" style="color: #fff;" onclick="showContent('blogs')">Blogs</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link hoverable" href="javascript:void(0)" style="color: #fff;" onclick="showContent('contact')">Contact</a>
          </li>
          <li class="nav-item">
            ] ,
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-8">
      <div class="main-content">

        <div class="about content-section active-content" id="about-content">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-4 text-center">
              <img src="{{ asset('assets/profile.png') }}" alt="" style="border-radius: 50%; width: 100%;">
            </div>
            <div class="col-md-8">
              <h2>I'm <span>Kawsar Ahmad</span></h2>
              <br>
              <p>
                Experienced Software developer with a strong background in crafting innovative solutions. 
                Proven track record in delivering high-quality software for diverse projects. I Play With Laravel & Vue.js and Machine Learning
              </p>
              <br>
              <div>
                
                <a href="https://github.com/KawsarAhmad43" target="_blank">
                  <i class="fa fa-github"></i> GitHub
                </a> |
                <a href="https://www.linkedin.com/in/md-kawsar-ahmad-77800a105/" target="_blank">
                  <i class="fa fa-linkedin"></i> LinkedIn
                </a> |
                <a href="https://www.kaggle.com/kawsarahmad" target="_blank"> 
                  <i class="fa fa-kaggle"></i> Kaggle
                </a> |
                <a href="{{ asset('assets/cv.pdf') }}" target="_blank">
                  <i class="fa fa-download"></i> Download CV
                </a>
              </div>
            </div>
          </div>
        </div>
        
        

        <div class="career content-section" id="career-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-primary">Work Experience</h2>
              <br>
              <!-- Career 1 -->
              <div class="career-item">
                <h3>Junior Software Engineer</h3>
                <h5>Nogor Solution Ltd. | September 2022 - Present</h5>
                <p>
                  My Journey With Nogor Solution is really Wonderfull Where i have worked with 8 different types of Projects Including
                  Government and Confedential Projects. During this Journey, I've developed myself in the Path of Software Engineering.
                  This Office Provided me Professional Machine Learning Training.
                </p>
              </div>
        
              <!-- Career 2 -->
              <div class="career-item">
                <h3>Web Developer</h3>
                <h5>Onix Computers System | July 2021 - September 2022</h5>
                <p>
                  During My Journey With Onix Computers System I begun my Journey in the Pathway of Development. In my this Journey I worked on their 
                  Large Scale E-Commerce Web Application built in Laravel Framework.
                </p>
              </div>
        
            </div>
          </div>
        </div>
        

        <div class="skills content-section" id="skills-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-primary">Skills</h2>
                <p>
                  As a seasoned software developer, I bring a comprehensive skill set covering both backend and frontend development, along with expertise in API communication. My technical proficiency includes:
                </p>
                <div class="skills-list">
                  <div class="row">
                    <div class="col-md-6">
                      <ul>
                        <li><strong>Expertise:</strong> Laravel, Vue, Rest API, Livewire, Vite, Vuex</li><br>
                        <li><strong>Backend Development:</strong> PHP, Laravel</li><br>
                        <li><strong>Database:</strong> FireBase, MySQL</li><br>
                        <li><strong>Frontend Development:</strong> JavaScript, Vue.js, Livewire, Inertia, Vite</li><br>
                        <li><strong>Testing:</strong> PHPUnit</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul>
                        <li><strong>Operating Systems:</strong> CentOS, Windows</li><br>
                        <li><strong>Version Control:</strong> Git, GitHub</li><br>
                        <li><strong>Development Tools:</strong> VSCode, Postman, Git, GitHub, Docker, Composer, npm</li><br>
                        <li><strong>Additional Skills:</strong> Machine Learning, Java, Pixel Art Using Aesprite</li>
                        <li><strong>Software Design Pattern:</strong> MVC</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <p>
                  With a keen eye for detail and a commitment to staying updated with the latest industry trends, I leverage these skills to deliver high-quality and cutting-edge solutions for diverse projects.
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="projects content-section" id="projects-content" style="overflow-y: auto; height: 100vh;">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-primary">Projects</h2>
                <br>
                
                <!-- Project: MotoBuddy (Backend) -->
                <div class="project-item">
                  <h3>MotoBuddy (Backend)</h3>
                  <p><strong>Type:</strong> API Endpoint Development, Module Development, Code Testing and Quality Assurance</p>
                  <p><strong>Description:</strong> Spearheaded the design and implementation of crucial API endpoints, enabling smooth communication between the frontend and backend components.</p>
                  <a href="https://github.com/KawsarAhmad43/moto-buddy-backend" target="_blank">Source</a>
                </div>
          
                <!-- Project: Lips -->
                <div class="project-item">
                  <h3>Lips</h3>
                  <p><strong>Type:</strong> Web Development</p>
                  <p><strong>Description:</strong> Made of raw PHP, HTML, CSS, and JavaScript, developed for an American Organization.</p>
                  <a href="https://lips.group/" target="_blank">Source</a>
                </div>
          
                <!-- Project: MRProperty Bazar -->
                <div class="project-item">
                  <h3>MRProperty Bazar</h3>
                  <p><strong>Type:</strong> Real Estate Management System</p>
                  <p><strong>Description:</strong> Mr. property bazar is a Web Application made with Laravel, html, CSS, Bootstrap, Sass</p>
                  <a href="https://mrpropertybazar.com/" target="_blank">Source</a>
                </div>
          
                <!-- Project: Onix Computers System (Laravel Version) -->
                <div class="project-item">
                  <h3>Onix Computers System (Laravel Version)</h3>
                  <p><strong>Type:</strong> E-commerce</p>
                  <p><strong>Description:</strong> Onix Computers System is an E-commerce app made with Laravel, html, CSS, Bootstrap</p>
                  <a href="https://www.onixbd.com/" target="_blank">Source</a>
                </div>
          
                <!-- Project: Memory Maven -->
                <div class="project-item">
                  <h3>Memory Maven</h3>
                  <p><strong>Type:</strong> Game </p>
                  <p><strong>Description:</strong> Memory-Maven is a Game made with Vue.js and html, css, and bootstrap</p>
                  <a href="https://github.com/KawsarAhmad43/Memory-Maven" target="_blank">Source</a>
                </div>
          
              </div>
            </div>
          </div>
        </div>
        
        
        
        


      <div class="contact content-section" id="contact-content" style="padding: 20px; background-color: #f8f9fa;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-primary">Contact Me</h2>
              <br>
      
              <!-- Github Icon -->
              <a href="https://github.com/KawsarAhmad43" target="_blank" class="contact-icons">
                <i class="fa fa-github" style="font-size: 2em;"></i>
                <p>Github</p>
              </a>
      
              <!-- Google Icon -->
              <a href="mailto:ahmad43.bu@gmail.com" class="contact-icons">
                <i class="fa fa-google" style="font-size: 2em;"></i>
                <p>Email</p>
              </a>
      
              <!-- Linkedin Icon -->
              <a href="linkedin.com/in/md-kawsar-ahmad-77800a105/" target="_blank" class="contact-icons">
                <i class="fa fa-linkedin-square" style="font-size: 2em;"></i>
                <p>Linkedin</p>
              </a>
      
            </div>
          </div>
        </div>
      </div>
      
        
        

      

      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Show 'About Me' content by default
    showContent('about');
  });

  function showContent(contentType) {
    // Sample content for each menu item; replace with your actual content
    const contentMap = {
      'about': 'about-content',
      'career': 'career-content',
      'skills': 'skills-content',
      'projects': 'projects-content',
      'blogs': 'blogs-content',
      'contact': 'contact-content'
    };

    // Hide all content sections
    document.querySelectorAll('.content-section').forEach(section => {
      section.classList.remove('active-content');
    });

    // Show the selected content section
    document.getElementById(contentMap[contentType]).classList.add('active-content');

    // Remove 'active' class from all links and add it to the clicked link
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));
    document.querySelector(`.nav-link[href="javascript:void(0)"][onclick="showContent('${contentType}')"]`).classList.add('active');
  }
</script>

</body>
</html>