<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="{{ asset('media/isagar.jpeg')}}" type="image/x-png">
    <title>Portfolio | iSagar</title>
</head>
<body oncontextmenu="return false">

<!-- pre loader -->
{{-- <div class="loader-container">
  <img draggable="false" src="{{ asset('frontend/assets/images/preloader.gif')}}" alt="">
</div> --}}

<!-- navbar starts -->
<header>
        <a href="/" class="logo"><i class="fab fa-node-js"></i> iSagar</a>

        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
</header>
<!-- navbar ends -->


<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <h2>Freelancer,<br/> I'm Ilius  <span >Sagar </span></h2>
    <h2 style="font-size: 30px;">(Professional Laravel Developer)</h2>
    {{-- <p>i am into <span class="typing-text"></span></p> --}}
    <a href="#about" class="btn"><span>About Me</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <div class="socials">
        <ul class="social-icons">

            <li><a class="linkedin" aria-label="Facebook" href="https://www.facebook.com/sagar.ilius" target="_blank"><i class="fab fa-facebook"></i></a></li> 

            <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/sagar018305/" target="_blank"><i class="fab fa-instagram" target="_blank"></i></a></li>

          <li><a class="linkedin" aria-label="LinkedIn" href="https://bd.linkedin.com/in/mohammad-ilius-sagar-725b46a6?trk=people-guest_people_search-card" target="_blank"><i class="fab fa-linkedin"></i></a></li> 

          <li><a class="github" aria-label="GitHub" href="https://github.com/IliusSagar" target="_blank"><i class="fab fa-github"></i></a></li>
   
          <li><a class="Youtube" aria-label="Youtube" href="https://www.youtube.com/@iliusSagar" target="_blank"><i class="fab fa-youtube" ></i></a></li>

          <li><a class="StackOverflow" aria-label="StackOverflow" href="https://stackoverflow.com/users/28303507/ilius-sagar" target="_blank"><i class="fab fa-stack-overflow" ></i></a></li>

          <li><a class="HackkerRank" aria-label="HackkerRank" href="https://www.hackerrank.com/profile/iliussagar" target="_blank"><i class="fab fa-hackerrank" ></i></a></li>

          
        </ul>
      </div>
    </div>
<div class="image">
    {{-- <img draggable="false" class="tilt" src="{{ asset('frontend/assets/images/hero.png')}}" alt=""> --}}

    <img draggable="false" class="tilt" src="{{ asset('media/isagar.jpeg')}}" alt="">
</div>
</section>
<!-- hero section ends -->


<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
    
    <div class="row">

    <div class="content">
        <h3>I'm Ilius Sagar</h3>
        <span class="tag">Full Professional Laravel Developer</span>
        
        <p>I am a Laravel developer based in Dhaka, Bangladesh. 
          I am very passionate about improving my coding skills & developing applications & Software.
          I build Applications and Software using Laravel, React Js, Vue Js, React Native & Flutter.
          Working for myself to improve my skills.
          Love to build Applications & Software. </p>
        
        <div class="box-container">
            <!-- <div class="box">
              <p><span> age: </span> 20</p>
              <p><span> phone : </span> +91 XXX-XXX-XXXX</p>
            </div> -->
            <div class="box">
              <p><span> email (1) : </span> me@isagar.xyz</p>
              <p><span> email (2) : </span> iliussagar@gmail.com</p>
              <p><span> Contact : </span> +880 1830596312</p>
              <p><span> place : </span> Uttara, Dhaka, Bangladesh.</p>
            </div>
        </div>
        
        <div class="resumebtn">
            <a href="{{ asset('media/iliussagar-cv.pdf')}}" target="_blank" class="btn" download><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
    </div>
</section>
<!-- about section ends -->

<!-- skills section starts -->
<section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
          <div class="row" id="skillsContainer">

           <div class="bar">
              <div class="info">
                <img src="{{ asset('media/html.png')}}" style="height: 40px;"/>
                <span>HTML</span>
              </div>
            </div>

            <div class="bar">
                <div class="info">
                    <img src="{{ asset('media/css.png')}}" style="height: 40px;"/>
                  <span>CSS</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                    <img src="{{ asset('media/bootstrap.png')}}" style="height: 40px;"/>
                  <span>BOOTSTRAP</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                    <img src="{{ asset('media/js.png')}}" style="height: 40px;"/>
                  <span>JAVASCRIPT</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                    <img src="{{ asset('media/php.png')}}" style="height: 40px;"/>
                  <span>PHP</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://static-00.iconduck.com/assets.00/laravel-icon-995x1024-dk77ahh4.png" style="height: 40px;"/>
                  <span>LARAVEL</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://upload.wikimedia.org/wikipedia/labs/8/8e/Mysql_logo.png" style="height: 40px;"/>
                  <span>MYSQL</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" style="height: 40px;"/>
                  <span>REACT JS</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://w7.pngwing.com/pngs/854/555/png-transparent-vue-js-hd-logo-thumbnail.png" style="height: 40px;"/>
                  <span>VUE JS</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" style="height: 40px;"/>
                  <span>REACT NATIVE</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://w7.pngwing.com/pngs/666/815/png-transparent-dart-google-chrome-web-application-flutter-darts-blue-angle-triangle-thumbnail.png" style="height: 40px;"/>
                  <span>DART</span>
                </div>
              </div>


              <div class="bar">
                <div class="info">
                  <img src="https://w7.pngwing.com/pngs/67/315/png-transparent-flutter-hd-logo-thumbnail.png" style="height: 40px;"/>
                  <span>FLUTTER</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://cdn4.iconfinder.com/data/icons/google-i-o-2016/512/google_firebase-2-512.png" style="height: 40px;"/>
                  <span>FIREBASE</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/CPanel_logo.svg/2560px-CPanel_logo.svg.png" style="height: 40px;"/>
                  <span>CPANEL</span>
                </div>
              </div>

             

              <div class="bar">
                <div class="info">
                  <img src="https://img.freepik.com/premium-vector/vps-hosting-virtual-private-server-web-hosting-services-infrastructure-technology-technology_476325-1986.jpg" style="height: 40px;"/>
                  <span>VPS SERVER</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://w7.pngwing.com/pngs/911/217/png-transparent-linux-tux-logo-linux-logo-windows-bird.png" style="height: 40px;"/>
                  <span>LINUX</span>
                </div>
              </div>

              <div class="bar">
                <div class="info">
                  <img src="https://w7.pngwing.com/pngs/503/133/png-transparent-ubuntu-plain-logo-icon-thumbnail.png" style="height: 40px;"/>
                  <span>UBUNTU</span>
                </div>
              </div>

      </div>
</div>
</section>
<!-- skills section ends -->


<!-- education section starts -->
<section class="education" id="education">

  <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

        <div class="box">
      
            <div class="content">
            <h3>MBA</h3>
            <p>Stamford University Bangladesh</p>
            <h4>2014-2016 | Completed</h4>
            </div>
        </div>

    <div class="box">
      
        <div class="content">
        <h3>Bachelor of Business Study</h3>
        <p>Kabi Nazrul Govt. College</p>
        <h4>2007-2011 | Completed</h4>
        </div>
    </div>

    <div class="box">
      
      <div class="content">
      <h3>HSC</h3>
      <p>Kabi Nazrul Govt. College</p>
      <h4>2005-2007 | Completed</h4>
      </div>
    </div>

</div>
</section>
<!-- education section ends -->


<!-- work project section starts -->
<section class="work" id="work">

  <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Portfolio</span></h2>

  <div class="box-container">

   <div class="box tilt">
      <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
      <div class="content">
        <div class="tag">
        <h3>To Do List (Laravel)</h3>
        </div>
        <div class="desc">
          <p>Corporate Work Add Your Daily Work Task Cross & Uncross After Completed!</p>
          <div class="btns">
            <a href="https://todolist.isagar.xyz/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
            <a href="https://github.com/IliusSagar/To-Do-List" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
          </div>
        </div>
      </div>
    </div> 

    <div class="box tilt">
        <img draggable="false" src="{{ asset('media/cvgenerator.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>CV Generator (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Generate Your CV Online Systems.</p>
            <div class="btns">
              <a href="https://cvgenerator.isagar.xyz/form" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/IliusSagar/cv-generator" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 


      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/portfolio.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Portfolio Application (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal Portfolio & Details For Personal Branding.</p>
            <div class="btns">
              <a href="https://isagar.xyz/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/IliusSagar/isagar" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 


      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/account.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Accounting(Laravel)</h3>
          </div>
          <div class="desc">
            <p>Manage Your Business Account.</p>
            <div class="btns">
              <a href="https://account.isagar.xyz/" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/IliusSagar/accounting-software" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Payment Gateway (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Inventory Management - 1 (PHP)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Inventory Management - 2 (PHP)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Ecommerce Single Vendor (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Micro Finance (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Advertising Platform (Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

      <div class="box tilt">
        <img draggable="false" src="{{ asset('media/todolist.png')}}" alt="" />
        <div class="content">
          <div class="tag">
          <h3>Accounting(Laravel)</h3>
          </div>
          <div class="desc">
            <p>Personal portfolio website. Don't need much info about it, just scroll down. You're here only!</p>
            <div class="btns">
              <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/jigar-sable/Portfolio-Website" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div> 

</div>

{{-- <div class="viewall">
  <a href="/projects" class="btn"><span>View All</span>
    <i class="fas fa-arrow-right"></i>
</a>
</div> --}}

</section>
<!-- work project section ends -->

<!-- experience section starts -->
<section class="experience" id="experience">

  <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

  <div class="timeline">

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Insaf Book (Ride Sharing Platform)</h2>
        </div>
        <div class="desc">
            <h3>Senior Laravel Api Developer With Customs Development</h3>
            <p>Oct 2024 - present</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>IT Poribar</h2>
        </div>
        <div class="desc">
            <h3>Senior Sofwtare Developer & Co-Founder</h3>
            <p>June 2023 - Sep 2024</p>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>Sherazi IT</h2>
        </div>
        <div class="desc">
            <h3>Senior Software Developer</h3>
            <p>Jun 2022 - APR 2023</p>
        </div>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Card Mard Ltd</h2>
        </div>
        <div class="desc">
            <h3>Company Application Developer</h3>
            <p>March 2022 - May 2022</p>
        </div>
      </div>
    </div>

    <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Sass Connect</h2>
          </div>
          <div class="desc">
              <h3>Sofwtare Develoeper & Founder</h3>
              <p>July 2021 - Feb 2022</p>
          </div>
        </div>
      </div>

    <div class="container left">
      <div class="content">
        <div class="tag">
          <h2>Walton Group</h2>
        </div>
        <div class="desc">
            <h3>Senior POS Developer</h3>
            <p>Feb 2018 - June 2021</p>
        </div>
      </div>
    </div>

    


  </div>

 

</div>

</section>
<!-- experience section ends -->

<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="{{ asset('frontend/assets/images/contact1.png')}}" alt="">
      </div>
    <form id="contact-form">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="text" name="phone" placeholder="Phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="message">
        <textarea placeholder="Message" name="message" required></textarea>
        <i class="fas fa-comment-dots"></i>
        </div>
        </div>
      <div class="button-area">
        <button type="submit">
          Submit <i class="fa fa-paper-plane"></i></button>
      </div>
    </form>
  </div>
  </div>
</section>
<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>iSagar Portfolio</h3>
          <p>Thank you for visiting my personal portfolio website. Connect with me over social media.</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
          <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
          <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
          <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+880 1830596312</p>
          <p> <i class="fas fa-envelope"></i>me@isagar.xyz</p>
          <p> <i class="fas fa-map-marked-alt"></i>Dhaka, Bangladesh.</p>
          <div class="share">

            <a href="https://www.facebook.com/sagar.ilius" class="fab fa-facebook" aria-label="Facebook" target="_blank"></a>

           
              <a href="https://bd.linkedin.com/in/mohammad-ilius-sagar-725b46a6?trk=people-guest_people_search-card" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>

              <a class="github" aria-label="GitHub" href="https://github.com/IliusSagar" target="_blank"><i class="fab fa-github"></i></a>


              <a class="Youtube" aria-label="Youtube" href="https://www.youtube.com/@iliusSagar" target="_blank"><i class="fab fa-youtube" ></i></a>
           
              <a class="StackOverflow" aria-label="StackOverflow" href="https://stackoverflow.com/users/28303507/ilius-sagar" target="_blank"><i class="fab fa-stack-overflow" ></i></a>

              <a class="HackkerRank" aria-label="HackkerRank" href="https://www.hackerrank.com/profile/iliussagar" target="_blank"><i class="fab fa-hackerrank" ></i></a>

          </div>
      </div>
  </div>

  <h1 class="credit">Developed By  <a href="https://www.isagar.xyz/"> iSagar</a></h1>

</section>
<!-- footer section ends -->


<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="{{ asset('frontend/assets/js/particles.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/app.js')}}"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="{{ asset('frontend/assets/js/script.js')}}"></script>

</body>
</html>
