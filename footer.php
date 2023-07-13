<footer>
<div class="social-media">
    <a href="https://www.facebook.com/PinkEyeOfficial"><img src="icons/FB.png" alt="FB"></a>
    <a href="https://twitter.com/PinkEyePictures"><img src="icons/Twit.png" alt="Twit"></a>
    <a href="https://www.instagram.com/pink_eye_pictures/"><img src="icons/Inst.png" alt="Inst"></a>
    <a href="https://www.youtube.com/@pink-eyepictures"><img src="icons/YT.png" alt="YT"></a>
</div>
<div class="footer">
    <p>&copy; 2023 Pink-Eye Pictures. All rights reserved.</p>
    <!-- Add additional footer information and links here -->
</div>
</footer>
<!-- Add scripts and other resources here -->

<script>
window.onload = function() {
  var footer = document.querySelector("footer");
  var body = document.querySelector("body");
  var bodyHeight = body.offsetHeight;
  var windowHeight = window.innerHeight;
  
  if (bodyHeight < windowHeight) {
    footer.style.position = "absolute";
    footer.style.bottom = "0";
  } else {
    footer.style.position = "static";
  }
}


window.onresize = function() {
  var footer = document.querySelector("footer");
  var body = document.querySelector("body");
  var bodyHeight = body.offsetHeight;
  var windowHeight = window.innerHeight;
  
  if (bodyHeight < windowHeight) {
    footer.style.position = "absolute";
    footer.style.bottom = "0";
  } else {
    footer.style.position = "static";
  }
}
</script>
</body>