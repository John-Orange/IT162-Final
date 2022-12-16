
<!-- START Footer -->
<footer>

<div class="social-container">
    <div><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></div>
    <div><a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a></div>
    <div><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a></div>
    <div><a href="https://www.instagram.com/yana_nail_studio/" target="_blank" class="fa fa-instagram"></a></div>
</div>

      <p class="center"><small>&copy; 2020-<?=date("Y")?> by 
          <a href="contact.php">Yana</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
          <a id="css-checker" href="#" target="_blank">Check CSS</a></small>
     </p>
    </footer>
</section>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    



  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	} 
    
    //sticky
    window.onscroll = function() {myFunction()};
      
      var topnav = document.getElementsByClassName("topnav")[0];
      var sticky = topnav.offsetTop;
          
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          topnav.classList.add("sticky")
        } else {
          topnav.classList.remove("sticky");
        }
      }    



 </script>
</body>
</html>
