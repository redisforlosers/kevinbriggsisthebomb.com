<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home | KBitb.com</title>
    <link rel="stylesheet" type="text/css" href="../css/app.css" />
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/png" href="favicon.png" />
  </head>

  <body>
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
      <div class="preloader">
        <img src="img/preloader.gif" alt="" />
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Scroll Up Button -->

    <form action="#home">
      <button id="toTop" title="Go to top">
        <i class="fas fa-angle-up"></i>
      </button>
    </form>
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
      <!-- Begin Hero -->
      <section class="hero is-large">
        <!-- Begin Mobile Nav -->
        <nav class="navbar is-transparent is-hidden-desktop">
          <!-- Begin Burger Menu -->
          <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="mobile-nav">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- End Burger Menu -->
          <div id="mobile-nav" class="navbar-menu">
            <div class="navbar-end">
              <div class="navbar-item">
                <a class="navbar-item" href="#home">
                  Home
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#about-me">
                  About Me
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#services">
                  Services
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#skills">
                  Skills
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#my-work">
                  My Work
                </a>
              </div>
              <div class="navbar-item">
                <a class="navbar-item" href="#contact">
                  Contact
                </a>
              </div>
            </div>
          </div>
        </nav>
        <!-- End Mobile Nav -->
        <!-- Begin Hero Content-->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="subtitle">Hey there, I'm</h1>
            <h2 class="title">Ashley</h2>
            <h1 class="subtitle profession">A UI/UX Designer</h1>
          </div>
        </div>
        <!-- End Hero Content-->
        <!-- Begin Hero Menu -->
        <div class="hero-foot ">
          <div class="hero-foot--wrapper">
            <div class="columns">
              <div class="column is-12 hero-menu-desktop has-text-centered">
                <ul>
                  <li class="is-active">
                    <a href="#home">Home</a>
                  </li>
                  <li>
                    <a href="#about-me">About Me</a>
                  </li>
                  <li>
                    <a href="#services">Services</a>
                  </li>
                  <li>
                    <a href="#skills">Skills</a>
                  </li>
                  <li>
                    <a href="#my-work">My Work</a>
                  </li>
                  <li>
                    <a href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Menu -->
      </section>
      <!-- End Hero -->
    </div>
    <!-- End Header -->

    <!-- Begin Main Content -->
    <div class="main-content">
      <!-- Begin About Me Section -->
      <div class="section-light about-me" id="about-me">
        <div class="container">
          <div class="column is-12 about-me">
            <h1 class="title has-text-centered section-title">About Me</h1>
          </div>
          <div class="columns is-multiline">
            <div
              class="column is-6 has-vertically-aligned-content"
              data-aos="fade-right"
            >
              <p class="is-larger">
                &emsp;&emsp;<strong
                  >Showcase is a modern, beautiful personal website template to
                  showcase who you are, as well as projects you've worked on in
                  the past.</strong
                >
              </p>
              <br />
              <p>
                Showcase was built from the ground up with Bulma to be fast and
                responsive out of the box with all source files well documented
                for easy to customization. The Showcase template gives you a
                personal space to share what you are all about as a creative
                designer, developer, photographer, and more!
              </p>
              <br />
              <div class="is-divider"></div>
              <div class="columns about-links">
                <div class="column">
                  <p class="heading">
                    <strong>Give me a ring</strong>
                  </p>
                  <p class="subheading">
                    123-456-7890
                  </p>
                </div>
                <div class="column">
                  <p class="heading">
                    <strong>Email Me</strong>
                  </p>
                  <p class="subheading">
                    hello@example.com
                  </p>
                </div>
                <div class="column">
                  <p class="heading">
                    <strong>View my portfolio</strong>
                  </p>
                  <p class="subheading">
                    example.com
                  </p>
                </div>
              </div>
            </div>
            <div class="column is-6 right-image " data-aos="fade-left">
              <img
                class="is-rounded"
                src="https://picsum.photos/id/366/600/375"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <!-- End About Me Content -->
      <div class="section-dark resume">
        <div class="container">
          <div
            class="columns is-multiline"
            data-aos="fade-in"
            data-aos-easing="linear"
          >
            <div class="column is-12 about-me">
              <h1 class="title has-text-centered section-title">
                View My Resume
              </h1>
            </div>
            <div class="column is-10 has-text-centered is-offset-1">
              <h2 class="subtitle">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et doloremagna aliqua
              </h2>
              <form action="example.docs">
                <button class="button">
                  Download Resume&emsp;<i class="fad fa-download fa-lg"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Begin Services Content -->
      <div class="section-color services" id="services">
        <div class="container">
          <div class="columns is-multiline">
            <div
              class="column is-12 about-me"
              data-aos="fade-in"
              data-aos-easing="linear"
            >
              <h1 class="title has-text-centered section-title">Services</h1>

              <h2 class="subtitle">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua
              </h2>
              <br />
            </div>
            <div class="columns is-12">
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fad fa-meteor fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fas fa-paint-brush fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fas fa-rocket fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
            </div>
            <hr />
            <div class="columns is-12">
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fas fa-upload fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fas fa-bus fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
              <div
                class="column is-4 has-text-centered"
                data-aos="fade-in"
                data-aos-easing="linear"
              >
                <i class="fas fa-code fa-3x"></i>
                <hr />
                <h2>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Services Content -->
      <!-- Begin Skills Content -->
      <div class="section-light skills" id="skills">
        <div class="container">
          <div class="columns is-multiline">
            <div class="column is-12 about-me">
              <h1 class="title has-text-centered section-title">Skills</h1>
            </div>
            <div
              class="column is-6"
              data-aos="fade-in"
              data-aos-easing="linear"
            >
              <h1>Adobe Experience Design</h1>
              <progress class="progress" value="70" max="100">30%</progress>
              <h1>Adobe After Effects</h1>
              <progress class="progress" value="65" max="100">30%</progress>
              <h1>Visual Studio Code</h1>
              <progress class="progress" value="58" max="100">45%</progress>
              <h1>Sketch</h1>
              <progress class="progress" value="90" max="100">60%</progress>
            </div>
            <div
              class="column is-6"
              data-aos="fade-in"
              data-aos-easing="linear"
            >
              <h1>HTML</h1>
              <progress class="progress" value="85" max="100">30%</progress>
              <h1>CSS</h1>
              <progress class="progress" value="95" max="100">30%</progress>
              <h1>VueJS</h1>
              <progress class="progress" value="70" max="100">45%</progress>
              <h1>React</h1>
              <progress class="progress" value="60" max="100">60%</progress>
            </div>
          </div>
        </div>
      </div>
      <!-- End Skills Content -->
      <!-- Begin Work Content -->
      <div class="section-dark my-work" id="my-work">
        <div class="container">
          <div
            class="columns is-multiline"
            data-aos="fade-in"
            data-aos-easing="linear"
          >
            <div class="column is-12">
              <h1 class="title has-text-centered section-title">My Work</h1>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=0');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=10');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=20');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=30');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=40');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=50');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=60');"
                ></figure>
              </a>
            </div>
            <div class="column is-3">
              <a href="#">
                <figure
                  class="image is-2by1 work-item"
                  style="background-image: url('https://picsum.photos/320/180?image=70');"
                ></figure>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Work Content -->
      <!-- Begin Contact Content -->
      <div class="section-light contact" id="contact">
        <div class="container">
          <div
            class="columns is-multiline"
            data-aos="fade-in-up"
            data-aos-easing="linear"
          >
            <div class="column is-12 about-me">
              <h1 class="title has-text-centered section-title">
                Get in touch
              </h1>
            </div>
            <div class="column is-8 is-offset-2">
              <form
                action="https://formspree.io/email@example.com"
                method="POST"
              >
                <div class="field">
                  <label class="label">Name</label>
                  <div class="control has-icons-left">
                    <input
                      class="input"
                      type="text"
                      placeholder="Ex. Jane Smith"
                      name="Name"
                    />
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left">
                    <input
                      class="input"
                      type="email"
                      placeholder="Ex. hello@arctheme.com"
                      name="Email"
                    />
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea
                      class="textarea"
                      placeholder="Textarea"
                      name="Message"
                    ></textarea>
                  </div>
                </div>
                <div class="field">
                  <div class="control ">
                    <button class="button submit-button">
                      Submit&nbsp;&nbsp;
                      <i class="fas fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Content -->
    </div>
    <!-- End Main Content -->

    <!-- Begin Footer -->
    <div class="footer">
      <p>
        <strong class="white">KBitb.com</strong> by <a href="http://kevinbriggsisthebomb.com">Kevin Briggs</a>.
      </p>
      <p>
        <strong class="white">&copy;</strong> @php echo date('Y') @endphp.
      </p>
    </div>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/app.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: "ease-out",
        duration: 800,
      });
    </script>
  </body>
</html>
