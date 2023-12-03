document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.aboutcentar, .textcentar').forEach(function (element) {
        element.classList.add('show');
    });
});

// JavaScript to detect Microsoft Edge
if (/Edg/.test(navigator.userAgent)) {
    document.documentElement.classList.add('edge');
}
 

 

  
  