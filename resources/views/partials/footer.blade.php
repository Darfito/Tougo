<footer class="footer-distributed">
  <div class="footer-left">
    <p class="footer-links">
      <a class="link-1" href="#">Home</a>
      <a href="#">Destinations</a>
      <a href="#">Stories</a>
      <a href="#">About Us</a>
    </p>
    <hr></hr>
    <p>TOUGO &copy; 2023</p>
  </div>

</footer>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');

:root {
    --bs-body-font-family: 'Poppins';
}


.footer .footer-distributed {
  background-color: #202734;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font-size: 16px;
  padding: 30px 20px;
  margin-top: 16px;
}
.footer .footer-distributed .footer-left {
  color: #8f9296;
  font-size: 14px;
  margin-top: 10px;
}
.footer .footer-distributed p.footer-links {
  font-size: 18px;
  font-weight: bold;
  color: #ffffff;
  margin: 0 0 10px;
  padding: 0;
  transition: ease 0.25s;
}
.footer .footer-distributed p.footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
  transition: ease 0.25s;
}
.footer .footer-distributed p.footer-links a:before {
  content: "·";
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}
.footer .footer-distributed p.footer-links a:hover {
  text-decoration: underline;
}
.footer .footer-distributed .footer-links .link-1:before {
  content: none;
}

@media (max-width: 600px) {
  .footer-distributed .footer-left, .footer-distributed {
    text-align: center;
  }
  .footer-distributed .footer-left p.footer-links {
    line-height: 1.8;
  }
}

</style>