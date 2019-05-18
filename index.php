<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/main.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>WeCare</title>
    </head>

    <body id="home" class="scrollspy">
      <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="green darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#wecare" class="brand-logo">WeCare</a>
            <a href="#" data-target="mobile-nav"
            class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a> 
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="#home">Home</a>
              </li>
               <li>
                <a href="#search">Search A Terapist</a>
              </li>
               <li>
                <a href="#popular">Our Terapists</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>   
              <li>
                <a href="login.php">Login</a>
              </li>            
              <li>
                <a href="register.php">Register</a>
              </li>
            </ul> 
         </div>
        </div>
      </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
              <li>
                <a href="#home">Home</a>
              </li>
               <li>
                <a href="#Search">Search A Terapist</a>
              </li>
               <li>
                <a href="#popularplaces">Testimonial</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
      </ul>
      <!-- Section: Slider -->
    <img style="width:100%; height: 2%" id="image" img src="img/doc.jpg" style=";" >

      <!-- Section: Search -->
      <section id="search" class="section section-search green darken-1 white-text center scrollspy">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h3>Search Terapist</h3>
              <div class="input-field">
                <input type="text" class="white grey-text autocomplete" id="autocomplete-input"
                placeholder="Dr joe,Dr  Zoe, etc...">
              </div>              
            </div>            
          </div>          
        </div>
      </section>

      <!-- Section: Icon Boxes -->
      <section class="section section-icons grey lighten-4 center">
        <div class="container">
          <div class="row">
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large">book</i>
                <h4>Book a Terapist</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?</p>
              </div>              
            </div>   
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large">house</i>
                <h4>Visit Us</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?</p>
              </div>              
            </div>
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large">people</i>
                <h4>Meet</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?</p>
              </div>              
            </div>         
          </div>          
        </div>        
      </section>

      <!-- Section: Popular Place-->
      <section id="popular" class="section section-popular scrollspy">
        <div class="container">
          <div class="row">
            <h4 class="center"><span class="green-text">Our</span> Terapists</h4>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/images.jpg" alt="">
                  <span class="card-title">Dr Smith</span>
                </div>
                <div class="crad-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?
                </div>          
              </div>
            </div>       
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/images.jpg" alt="">
                  <span class="card-title">Dr Smith
                  </span>
                </div>
                <div class="crad-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?
                </div>          
              </div>
            </div>        
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="img/images.jpg" alt="">
                  <span class="card-title">Dr Smith
                  </span>
                </div>
                <div class="crad-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?
                </div>          
              </div>
            </div>             
          </div>          
        </div>
      </section>

      
      <!-- Section: Galery -->
      <section id="gallery" class="section section-gallery scrollspy">
        <div class="container">
          <h4 class="center">
            <span class="green-text">Happy</span> Clients
          </h4>
          <div class="row">
            <div class="col s12 m3">
              <img src="img/downloa.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girl.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/download.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girls.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m3">
              <img src="img/downloa.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girl.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/download.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girls.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m3">
              <img src="img/downloa.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girl.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/download.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="img/girls.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Contact -->
      <section id="contact" class="section section-contact scrollspy">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <div class="card-panel green white-text center">
                <i class="material-icons">email</i>
                <h5>Contact Us For Booking</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore?</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Location</h4></li>
                <li class="collection-item">WeCare</li>
                <li class="collection-item">Lagos Hostel University Of Ilorin</li>
                <li class="collection-item">Ilorin,Kwara State</li>
              </ul>
          </div>
          <div class="col s12 m6">
                   <div class="row">
                   <div class="card-panel">
                    <h4 class="header2">Form with icon prefixes</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name3" type="text">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email3" type="email">
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password3" type="password">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">question_answer</i>
                            <textarea id="message3" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section>

      <!--Section: Follow -->
      <section class="section section-follow green darken-2 white-text center">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h4>Follow WeCare</h4>
              <p>Follow us on all our social media </p>
              <a href="" class="white-text">Facebook</a>
              <i class="fab fa-facebook fa-4x"></i>   
              <a href="" class="white-text">Twitter</a>
              <i class="fab fa-twitter fa-4x"></i> 
              <a href="" class="white-text">Instagram</a>
              <i class="fab fa-instagram fa-4x"></i> 
              <a href="" class="white-text">Linkedin</a>
              <i class="fab fa-linkedin fa-4x"></i>           
            </div>            
          </div>
        </div>
      </section>

      <!-- Footer -->
     
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        //sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});

        //Slider
        const slider = document.querySelector('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition 500,
          interval: 6000
        });

        //Autocomplete
        const ac = document.querySelector
        ('.autocomplete');
        M.Autocomplete.init(ac, {
          data: {
            "Dam": null,
            "Zoo": null,
            "Student Affairs": null,
            "SUB": null,
            "CIS": null,
            "Education": null,
            "Walkway": null,
            "CBT Center": null,
          }
        })

        //Matrerial Boxed
        const mb = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(mb, {});

        // Scrollspy
        const ss = document.querySelectorAll('.scrollspy');
        M.Scrollspy.init(ss, {});
      </script>

    </body>
  </html>
        