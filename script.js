const menuToggle = document.getElementById("menu-toggle");
const navbarLinks = document.getElementById("navbar-links");

menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    navbarLinks.classList.toggle("show");
});

document.addEventListener("DOMContentLoaded", function () {
    
    const middleText = document.querySelector(".middle-text");
    
    
    middleText.style.opacity = "0";
    
   
    function fadeIn() {
        let opacity = 0;
        const intervalId = setInterval(function () {
            if (opacity < 1) {
                opacity += 0.05; 
                middleText.style.opacity = opacity;
            } else {
                clearInterval(intervalId); 
            }
        }, 100); 
    }
    
    
    fadeIn();
});


function toggleCards(category) {
   
    const cards = document.querySelectorAll('.article');

    
    cards.forEach(card => {
        card.style.display = 'none';
    });


    if (category === 'marketing') {
        const marketingCards = document.querySelectorAll('.article[data-category="marketing"]');
        marketingCards.forEach(card => {
            card.style.display = 'block';
        });
    } else if (category === 'programming') {
        const programmingCards = document.querySelectorAll('.article[data-category="programming"]');
        programmingCards.forEach(card => {
            card.style.display = 'block';
        });
    } else if (category === 'design') {
        const designCards = document.querySelectorAll('.article[data-category="design"]');
        designCards.forEach(card => {
            card.style.display = 'block';
        });
    }
}
function toggleCards(category) {
    const cards = document.querySelectorAll('.article');
  
    if (category === 'marketing') {
      cards.forEach(card => {
        card.style.display = 'block';
      });
    } else {
      cards.forEach(card => {
        card.style.display = 'none';
      });
  
      const filteredCards = document.querySelectorAll(`.article[data-category="${category}"]`);
      filteredCards.forEach(card => {
        card.style.display = 'block';
      });
    }
  }
  

