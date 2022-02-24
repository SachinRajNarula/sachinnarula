<?php include "header.php";?>
<?php 
if(isset($_POST['submit'])){
    $to = "jerryraj40@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $full_name ." wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $result = mail($to,$subject,$message,$headers);
    if($result)
    {
        $success = "Success"
    }
    else{
      $failed= "failed"
    }
    }
?>
  <!--Beginning of the wrapper -->
  <div class="outerWrapper"> 
    <div class="innerWrapper">
      <!-- Header -->
      <header>
        <div class="heroImageContainer">
          <img src="images/Sachin.jfif" alt="A picture of Sachin Narula.">
        </div>
        <div class="heroDescription">
          <p class="greeting">HI THERE! I'M</p>
          <h1><span>SACHIN</span> NARULA</h1>
          <p class="smallBio">A <span>Full-Stack Web Developer</span> passionate about creating interactive applications and experiences on the web.</p>
          <div class="socialsResume">
            <a class="resumeLink" href="docuents/SachinResume.pdf" alt="Sachin Narula's resumé" target="_blank" rel="noopener noreferrer">Resumé</a>
            <ul class="socialsList">
              <li>
                <a href="https://www.linkedin.com/in/sachinnarula09/" target="_blank" rel="noopener noreferrer"><i class="lni lni-linkedin-original" aria-label="Link to Sachin's LinkedIn page."></i></a>
              </li>
              <li>
                <a href="https://github.com/Sachin-Raj-Narula" target="_blank" rel="noopener noreferrer"><i class="lni lni-github-original" aria-label="Link to Sachin's GitHub page."></i></a>
              </li>
              <li>
                <a href="https://youtube.com/sachinrajnarula" target="_blank" rel="noopener noreferrer"><i class="lni lni-youtube" aria-label="Link to Sachin's GitHub page."></i></a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <!-- Beginning of Main -->
      <main>
        <!-- About Section -->
        <section class="aboutSection" id="about">
          <div class="sectionHead">
            <span>SOME INFO</span>
            <h2>ABOUT ME</h2>
          </div>
          
          <article class="aboutContainer sectionContainer">
            <p>I'm a full-stack web developer with a 7+ years background in Computer Science which has given me a strong foundation for web development and building complex solutions. Recently, I graduated from the <span>Lambton College of Applied Arts & Technology</span> with 3.68 GPA. I am passionate about coding and solving problems through code, and I am excited to work alongside other amazing programmers and learn so much more!</p>
          </article>
        </section>

        <!-- Skills Section -->
        <section class="skillsSection" id="skills">
          <div class="sectionHead">
            <span>CHECK OUT MY</span>
            <h2>SKILLS</h2>
          </div>
        
          <div class="skillsContainer sectionContainer">
            <ul class="skillsGrid">
              <li>
                <div class="itemContainer">
                  <img src="images/html.svg">
                  <p>HTML</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/css.svg">
                  <p>CSS</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/less.svg">
                  <p>LESS</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/javascript.svg">
                  <p>Javascript</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/node.svg">
                  <p>Node</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/react.svg">
                  <p>React</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/wordpress.svg">
                  <p>WordPress</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/drupal.svg">
                  <p>Drupal</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/webflow.svg">
                  <p>Webflow</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/sails.svg">
                  <p>Sails</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/git.svg">
                  <p>Git</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/postgres.svg">
                  <p>PostgreSQL</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/vscode.svg">
                  <p>VS Code</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/microsoftWindows.svg">
                  <p>Windows</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/microsoft.svg">
                  <p>M365</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/dns.svg">
                  <p>DNS</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/w3c.svg">
                  <p>W3C</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/illustrator.svg">
                  <p>Adobe Illustrator</p>
                </div>
              </li>
              <li>
                <div class="itemContainer">
                  <img src="images/adaptability.png">
                  <p>Adaptabilty</p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- Works Section -->
        <section class="worksSection" id="works">
          <div class="sectionHead">
            <span>TAKE A LOOK AT MY</span>
            <h2>EXPERIENCE</h2>
          </div>

          <div class="worksContainer sectionContainer">
            <article class="workBox">
              <div class="workImageContainer">
                <img src="images/Revelree-Logol.svg" alt="Revelree Logo">
              </div>
              <div class="workDescribeContainer">
                <h3>Lead Web Developer</h3><p class="dates">September 2021 - Present</p>
                <a href="https://revelree.ca" class="company">Revelree Entertainment Inc</a>
                <h4>Technologies Used: <span class="techStack">React.js, Node.js, Sails.js</span>, <span class="techStack">JavaScript, TypeScript</span>,<span class="techStack">PostgreSQL</span></h4>
                <ul>
                  <li>Increased customer acquisition by 50% by adding user-friendly features using Sails.js framework, JavaScript, SQL (PostgreSQL), React.js, Express.js, LESS, Handlebars</li>
                  <li>Increased bug-ﬁxes, reduced internal server errors by 40% using Heroku CLI by adding several validations which improved user-interaction</li>
                  <li>Escalated user-interface by adding responsive webpages using CSS3, HTML5 in an MVC framework.</li>
                  <li>Solely responsible for maintenance of projects until the delivery to client</li>
                </ul>
              </div>
            </article>

            <article class="workBox">
              <div class="workImageContainer">
                <img src="images/gage-Logo.svg" alt="Gage Communications Logo">
              </div>
              <div class="workDescribeContainer">
                <h3>Web Developer</h3><p class="dates">May 2021 - August 2021</p>
                <a href="https://gagecommunications.ca" class="company">Gage Communications</a>
                <h4>Technologies Used: <span class="techStack">WordPress, Drupal</span>, <span class="techStack">PHP</span>, <span class="techStack">Webflow</span>, <span class="techStack">third-party integrations</span></h4>
                <ul>
                  <li>Updated themes and plugins in Drupal & WordPress websites for better user- experience</li>
                  <li>Executed version controlling of 3 websites using git & MS Visual Studio</li>
                  <li>Migrated websites using FTP clients like FileZilla, CyberDuck to reduce the server cost by 40%</li>
                  <li>Increased pace of error solving by 80% by creating technical documentation of the web-app and knowledge base of the errors</li>
                </ul>
              </div>
            </article>

            <article class="workBox">
              <div class="workImageContainer">
                <img src="images/Lambton-logo.svg" alt="Lambton College Logo" style="height: 12em;">
              </div>
              <div class="workDescribeContainer">
                <h3>Post-Graduate Diploma</h3><p class="dates">January 2020 - August 2021</p>
                <a href="https://lambtoncollege.ca" class="company">Lambton College of Applied Arts & Technology</a>
                <h4>Program Capabilities: <a href="documents/Program Capabilities.pdf" class="techStack">Technologies learnt</a>, <a href="documents/Transcript.pdf" class="techStack">Transcript</a></h4>
                <ul>
                  <li>GPA- 3.68/4.0</li>
                  <li>Dean's Honor List in Semester-1, Semester-2, Semester-3</li>
                </ul>
              </div>
            </article>

            <article class="workBox">
              <div class="workImageContainer">
                <img src="images/freelancer.svg" alt="Game Scope landing page.">
              </div>
              <div class="workDescribeContainer">
                <h3>Freelancing</h3><p class="dates">January 2019 - January 2020</p>
                <a href="" class="company">Self-Employed</a>
                <h4>Technologies Used: <span class="techStack">PHP</span>, <span class="techStack">JavaScript</span>, <span class="techStack">HTML5/CSS3</span>, <span class="techStack">Webflow/Wix</span></h4>
                <ul>
                  <li>Built single-page and dynamic websites using PHP, HTML, CSS, JavaScript</li>
                  <li>Updated the designs as per the clients' needs</li>
                  <li>Managed 10-12 clients in a year with diﬀerent requirements</li>
                  <li>Solved PostgreSQL problems using psql(SQL shell) which cannot be solved directly in pgAdmin4</li>
                  <li>Used various website builders like Webnode, Wix which increased the development speed signiﬁcantly by 70%</li>
                </ul>
              </div>
            </article>

            <article class="workBox">
              <div class="workImageContainer">
                <img src="images/panjab-university.svg" alt="Twitter Slang Generator page with results diplsayed.">
              </div>
              <div class="workDescribeContainer">
                <h3>Bachelor of Science</h3><p class="dates">August 2016 - May 2019</p>
                <a href="https://puchd.ac.in/" class="company">Panjab University</a>
                <h4>Courses: <span class="techStack">Computer Science</span>, <span class="techStack">Mathematics</span>, <span class="techStack">Physics</span></h4>
                <ul>
                  <li>Ranked 2 in Computer Science in class of 40</li>
                </ul>
              </div>
            </article>
          </div>
        </section>

        <!-- Contact Section -->
        <section class="contactSection" id="contact">
          <div class="sectionHead">
            <span>SAY HELLO</span>
            <h2>CONTACT</h2>
          </div>

          <div class="contactContainer sectionContainer">
            <h3>Get in Touch</h3>
            <div class="contactTypes">
              <div class="flexContainer">
                <div class="typeBox">
                  <i class="lni lni-envelope"></i>
                  <a href="mailto:sachinnarula09@gmail.com">sachinnarula09@gmail.com</a>
                  <p>Email Me</p>
                </div>
              </div>
              <div class="flexContainer">
                <div class="typeBox">
                  <i class="lni lni-phone"></i>
                  <a href="tel:5199818039" target="_blank" rel="noopener noreferrer">(519)981-8039</a>
                  <p>Call Me</p>
                </div>
              </div>
            </div>
            <div class="contactFormContainer">
              <h3>Contact Form</h3>

              <!-- <form id="contactForm" action="https://formspree.io/f/mwkyojlz" method="POST"> -->
                <form id="contactForm" action="" method="POST">
                  <label for="nameInput" class="srOnly"></label>
                  <input type="text" id="nameInput" name="full_name" class="nameInput" required placeholder="Your Name*"/>
                  <label for="emailInput" class="srOnly"></label>
                  <input type="email" id="emailInput" name="email" class="emailInput" required placeholder="Your Email*" />
                  <label for="subjectInput" class="srOnly"></label>
                  <input type="text" id="subjectInput" name="subject" class="subjectInput" required placeholder="Subject*"/>
                  <!-- <label for="subjectInput" class="srOnly"></label>
                  <input type="file" id="fileInput" name="filetInput" class="subjectInput" required placeholder="File"/> -->
                  <label for="messageInput" class="srOnly"></label>
                  <textarea class="messageInput" name="message" id="messageInput" required placeholder="Your Message*"></textarea>
               </form>
                <div>
                  <p class="success"> <?php echo $success; ?></p>
                  <p class="failed"> <?php echo $failed; ?></p>
              <button type="submit" name="submit" class="formSend" target="_blank" form="contactForm" rel="noopener noreferrer">SEND</button>
            </div>
          </div> 

        </section>
      </main> <!-- End of Main -->
    </div>
    <!-- Footer -->
    <footer>
      <p>&copy; Sachin Narula 2022</p>
    </footer>
    <!-- Icons provided by https://lineicons.com/ -->
  </div> <!-- End of the wrapper -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="" crossorigin="anonymous"></script>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>