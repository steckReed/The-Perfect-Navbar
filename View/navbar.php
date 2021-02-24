<nav>
    <div id="logo">
        <img id='logo-img' src='<?= $globalImagesArr['companyLogo'] ?>'
          onmousedown='return false' >
    </div>

    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

    <!-- Tabs/Page Links -->
      <ul class="nav-links">
          <li><a href="">Home</a></li>
          <li><a href="">Solutions</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Contact Us</a></li>
          <li><button class="login-button" href="">Login</button></li>
          <li><button class="join-button" href="">Join</button></li>
      </ul>
    <!-- Tabs/Page Links -->

</nav>

<script>
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const links = document.querySelectorAll(".nav-links li");

  hamburger.addEventListener('click', ()=>{
    //Animate Links
      navLinks.classList.toggle("open");
      links.forEach(link => {
          link.classList.toggle("fade");
      });

      //Hamburger Animation
      hamburger.classList.toggle("toggle");
  });
</script>