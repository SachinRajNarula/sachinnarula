<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachin Narula - Full-Stack Web Developer</title>
    <link rel="icon" type="image/x-icon" href="images/SRN-S.png">
    <meta name="description" content="A Full-Stack Web Developer passionate about creating interactive applications and experiences on the web." />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <!-- Mobile menu button -->
  <div id="home" class="visuallyHidden"></div>
  <div class="menuButton" id="menuButton" tabindex=0>
    <div class="linesContainer">
      <span></span>
    </div>
  </div>
  <!-- Side menu -->
  <aside class="sideMenu sideMenuShow" id="sideMenu"> 
    <img src="images/SRN-Sachin-full.svg" class="logo">

    <nav>
      <ul class="navBar">
        <li class="homeNav">
          <a href="#home" class="navItem">
            <i class="lni lni-home"></i>
            <span class="navItemName">HOME</span>
          </a>
        </li>
        <li class="aboutNav">
          <a href="#about" class="navItem">
            <i class="lni lni-user"></i>
            <span class="navItemName">ABOUT</span>
          </a>
        </li>
        <li class="skillsNav">
          <a href="#skills" class="navItem">
            <i class="lni lni-code-alt"></i>
            <span class="navItemName">SKILLS</span>
          </a>
        </li>
        <li class="worksNav">
          <a href="#works" class="navItem">
            <i class="lni lni-briefcase"></i>
            <span class="navItemName">WORKS</span>
          </a>
        </li>
        <li class="contactNav">
          <a href="#contact" class="navItem">
            <i class="lni lni-phone"></i>
            <span class="navItemName">CONTACT</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="scrollDown" id="scrollDown">
      <i class="lni lni-arrow-down"></i>
      <span class="navItemName scrollDownText">Scroll Down</span>
    </div>
  </aside>