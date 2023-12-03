<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вработи наш студент</title>
    <link rel="icon" href="../newprojectgit29072023/Design/Logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>



<body>
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
            <li><a href="https://brainster.co/marketing/">Академија за маркетинг</a></li>
            <li><a href="https://brainster.co/full-stack/">Академија за програмирање</a></li>
            <li><a href="https://brainster.co/data-science/">Академија за data science</a></li>
            <li><a href="https://brainster.co/graphic-design/">Академија за дизајн</a></li>
            <li class="button-li"><a href="вработинашстудент.php" target="_blank">Вработи наш студент</a></li>
    
        </ul>
    </nav>
    <div class="con1">
        <div class="wood-f">
            <h1 class="work">Вработи студенти</h1>
            <form action="process.php" method="POST">
                <input type="text" name="firstname" placeholder="Вашето име и презиме" required>
                <input type="text" name="lastname" placeholder="Име на вашата компанија" required>
                <input type="text" name="email" placeholder="Контакт имејл на вашата компанија">
                <input type="text" name="Number" placeholder="Контакт телефон" required>

                <div class="dropdown">
                    <select id="studentTypeInput" name="studentTypeInput">
                        <option value="marketing">Студенти од маркетинг</option>
                        <option value="full-stack">Студенти од програмирање</option>
                        <option value="data-science">Студенти од data science</option>
                        <option value="graphic-design">Студенти од дизајн</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Испрати" id="openTableButton" class="button" onclick="openNewTab()">

            </form>
        </div>
    </div>
    
<!-- Section 4 footer -->
<footer class="footerforstudent">
    <h2>Изработено од Пане Рибарски</h2>
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
 <script src="script.js"></script>
    
 
    
      
</body>
</html>