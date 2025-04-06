let slideIndex = 0;
        showSlides();
        function showSlides() {
          let t;
          let slides = document.getElementsByClassName("transition");
          let dots = document.getElementsByClassName("dot");
          for (t = 0; t < slides.length; t++) {
            slides[t].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (t = 0; t < dots.length; t++) {
            dots[t].className = dots[t].className.replace("active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 3000); 
}