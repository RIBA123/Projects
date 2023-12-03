<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../newprojectgit29072023/Design/Logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <title>Project1</title>
</head>

<body>
  
  <!-- Section1 logo&navbar -->
  <nav class="navbar">
    <a href="index.php" class="logo-link">
        <div class="logo">
        <img src="https://i.postimg.cc/34RVJxpZ/image.jpg" alt="Clickable Image">

        </div>
    </a>
    <div class="menu-toggle" id="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <ul class="navbar-links" id="navbar-links">
        <li><a href="https://brainster.co/marketing/" >Академија за маркетинг</a></li>
        <li><a href="https://brainster.co/full-stack/" >Академија за програмирање</a></li>
        <li><a href="https://brainster.co/data-science/" >Академија за data science</a></li>
        <li><a href="https://brainster.co/graphic-design/" >Академија за дизајн</a></li>
        <li class="button-li"><a href="вработинашстудент.php" target="_blank">Вработи наш студент</a></li>

    </ul>
</nav>
<script src="script.js"></script>


 <div class="image-overlay image-container1">
  <img src="https://i.postimg.cc/XNHT6ZvK/tech-neoncircuitboard-857021704-medium-lc5h05.jpg">

    <h2 class="middle-text">Brainster Labs</h2>
  </div>
  <div class="elementor">
    <div class="elementor1 clickable" onclick="toggleCards('marketing')">
        <p class="project-title1">Проекти на студенти по академијата за маркетинг</p>
        <i id="marketing-icon" class="fas fa-check-circle fa-2x custom-icon" style="display: none;"></i>
    </div>
    <hr class="vertical-line">
    <div class="elementor2 clickable" onclick="toggleCards('programming')">
        <p class="project-title">Проекти на студенти по академијата за програмирање</p>
        <i id="programming-icon" class="fas fa-code fa-2x custom-icon" style="display: none;"></i>
        <p class="project-subtitle"></p>
    </div>
    <hr class="vertical-line">
    <div class="elementor2 clickable" onclick="toggleCards('design')">
        <p class="project-title">Проекти на студенти по академијата за дизајн</p>
        <i id="design-icon" class="fas fa-paint-brush fa-2x custom-icon" style="display: none;"></i>
        <p class="project-subtitle"></p>
    </div>
</div>
</div>
</div>
<!-- Section3 cards -->
<h1 class="projects">Проекти</h1>
   <section class="articles">
      <article class="article" data-category="marketing">
  <div class="article-wrapper">
      <figure>
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis">
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
  <a href="https://brainster.co/marketing/" class="read-more">
          Прочитај повеќе<span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
</article>
  <article class="zoom" >
    <section>
    <div class="article-wrapper">
      <figure>
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis">
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
        <a href="https://brainster.co/marketing/" class="read-more">
          Прочитај повеќе <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article class="zoom" >

    <div class="article-wrapper">
      <figure>
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis">
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
        <a href="https://brainster.co/marketing/" class="read-more">
          Прочитај повеќе <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article >
</section>
<section class="articles">
  <article class="article" data-category="programming">
<div class="article-wrapper">
    <div class="article-wrapper">
      <figure>
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis">
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
        <a href="https://brainster.co/marketing/" class="read-more">
          Прочитај повеќе <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article >
  <article class="zoom" >
    
    <div class="article-wrapper">
      <figure>
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis" >
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
        <a href="https://brainster.co/marketing/" class="read-more">
          Прочитај повеќе <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
  <article class="zoom" >

    <div class="article-wrapper">
      <figure>
        
      <img src="https://i.postimg.cc/dVdHhpYL/digitalmarketing.jpg" alt="">
      </figure>
      
    
      <div class="article-body ">
        <h2 class="academy">Академија за маркетинг</h2>
        <h2 class="nameproject">Име на проектот стои овде во две линии</h2>
        <p class="opis" >
          Краток опис во кој студентите ќе можат да опишат за што се работи во проектот
        </p>
        <h6>Април-Октомври 2019</h6>
        <a href="https://brainster.co/marketing/" class="read-more">
           Прочитај повеќе <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div >
    <article>
  </article >
</section>
<!-- Section 4 footer -->
<footer>
   <h2 onclick="showMessage()">Изработено од Пане Рибарски</h2>
  <div class="social-icons">
    
    <a href="https://www.facebook.com/brainster.co/" target="_blank">
      <i class="fab fa-facebook"></i>
    </a>
    <a href="https://www.instagram.com/brainsterco/" target="_blank">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://mk.linkedin.com/school/brainster-co/" target="_blank">
      <i class="fab fa-linkedin"></i>
    </a>
  </div>
</footer>





    
      

      
</body>
</html>