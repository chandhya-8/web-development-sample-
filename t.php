<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ToyJoy – Smart & Fun Toys</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;800&display=swap" rel="stylesheet">

<!-- ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ================= GLOBAL ================= */
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Baloo 2', cursive;
  background:linear-gradient(180deg,#e0f2fe,#ffffff,#fef3c7);
  color:#1f2937;
}
section{padding:80px 20px}
h1,h2,h3{font-weight:800}
img{max-width:100%}
button{font-family:'Baloo 2', cursive;cursor:pointer}

/* ================= NAVBAR ================= */
nav{
  position:sticky;top:0;z-index:100;
  background:#ffffff;
  box-shadow:0 6px 18px rgba(0,0,0,0.1)
}
.nav{
  max-width:1200px;margin:auto;
  display:flex;align-items:center;justify-content:space-between;
  padding:15px 20px
}
.logo{
  font-size:2.2rem;color:#2563eb;
  animation:wiggle 2s infinite
}
@keyframes wiggle{50%{transform:rotate(3deg)}}
.nav a{
  margin-left:18px;text-decoration:none;
  color:#374151;font-size:1.1rem
}
.nav a:hover{color:#2563eb}

/* ================= HERO ================= */
.hero{
  text-align:center;
  background:linear-gradient(135deg,#dbeafe,#fef3c7);
}
.hero-icons{font-size:3rem;animation:float 3s infinite}
@keyframes float{50%{transform:translateY(-15px)}}
.hero h1{font-size:3.5rem;color:#1d4ed8}
.hero p{font-size:1.4rem;margin:15px 0}
.hero button{
  padding:16px 36px;border:none;border-radius:18px;
  background:#2563eb;color:white;font-size:1.1rem
}
.hero button:hover{background:#1e40af}

/* ================= PRODUCTS ================= */
.products{background:#f0f9ff}
.product-grid{
  max-width:1200px;margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:25px
}
.card{
  background:white;border-radius:22px;
  padding:18px;text-align:center;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
  transition:0.3s
}
.card:hover{transform:translateY(-10px) scale(1.03)}
.card img{
  height:200px;object-fit:cover;border-radius:16px
}
.price{font-size:1.6rem;color:#2563eb}
.old{color:#9ca3af;text-decoration:line-through}
.buy{
  margin-top:10px;padding:12px 28px;
  background:#22c55e;color:white;
  border:none;border-radius:16px;font-size:1.1rem
}
.buy:hover{background:#16a34a}

/* ================= TRUST ================= */
.trust{
  background:#f8fafc;text-align:center
}
.trust-grid{
  max-width:1100px;margin:auto;
  display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px
}
.trust-box{
  background:white;padding:30px;border-radius:20px;
  box-shadow:0 8px 20px rgba(0,0,0,0.12)
}
.trust-box i{font-size:3rem;margin-bottom:10px}

/* ================= GAME ================= */
.games{
  background:#fef9c3;text-align:center;position:relative
}
.board{
  display:grid;
  grid-template-columns:repeat(3,90px);
  gap:12px;
  justify-content:center;margin:20px auto
}
.cell{
  width:90px;height:90px;
  background:white;border-radius:18px;
  display:flex;align-items:center;justify-content:center;
  font-size:2.5rem;cursor:pointer;
  box-shadow:0 6px 15px rgba(0,0,0,0.2)
}
.status{font-size:1.4rem;margin:10px}
.points{font-size:1.3rem;color:#2563eb}

/* CHEER */
.cheer{
  position:absolute;top:50%;
  font-size:2.5rem;display:none;
  animation:cheerMove 1.5s infinite alternate
}
.left{left:5%}
.right{right:5%}
@keyframes cheerMove{
  from{transform:translateY(-20px) rotate(-10deg)}
  to{transform:translateY(20px) rotate(10deg)}
}

/* ================= CONTACT ================= */
.contact{background:#ecfeff}
.form{
  max-width:420px;margin:auto;
  background:white;padding:30px;border-radius:24px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15)
}
.form input,.form textarea{
  width:100%;padding:14px;margin-bottom:14px;
  border-radius:12px;border:2px solid #93c5fd
}

/* ================= FOOTER ================= */
footer{
  background:#0f172a;color:white;padding:50px 20px
}
.footer-grid{
  max-width:1200px;margin:auto;
  display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px
}
footer a{color:#c7d2fe;text-decoration:none;display:block;margin:6px 0}
</style>
</head>

<body>

<!-- NAV -->
<nav>
  <div class="nav">
    <div class="logo">🎀 ToyJoy</div>
    <div>
      <a href="#home">Home</a>
      <a href="#products">Toys</a>
      <a href="#games">Games</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-icons">🤖 🧸 🚗 🎮</div>
  <h1>Where Fun Meets Learning</h1>
  <p>Smart • Safe • Colorful Toys Loved by Kids & Trusted by Parents</p>
  <button onclick="document.getElementById('products').scrollIntoView()">Shop Toys</button>
</section>

<!-- PRODUCTS -->
<section class="products" id="products">
  <h2 style="text-align:center;font-size:3rem">🧸 Popular Toys</h2><br>

  <div class="product-grid">

    <!-- Product 1 -->
    <div class="card">
      <img src="bot.jpeg" alt="Smart Robot Toy">
      <h3>Smart Build Robot</h3>
      <p>Age: 10+</p>
      <p>
        <span class="price">$49.99</span>
        <span class="old">$74.99</span>
      </p>
      <button class="buy">Add to Cart</button>
    </div>

    <!-- Product 2 -->
    <div class="card">
      <img src="car.jpeg" alt="Racing Toy Car">
      <h3>Speed Racer Car</h3>
      <p>Age: 7+</p>
      <p>
        <span class="price">$54.99</span>
        <span class="old">$79.99</span>
      </p>
      <button class="buy">Add to Cart</button>
    </div>

    <!-- Product 3 -->
    <div class="card">
      <img src="block.jpeg" alt="Educational Blocks">
      <h3>Creative Blocks Set</h3>
      <p>Age: 6+</p>
      <p>
        <span class="price">$39.99</span>
        <span class="old">$59.99</span>
      </p>
      <button class="buy">Add to Cart</button>
    </div>

    <!-- Product 4 -->
    <div class="card">
      <img src="house.jpeg" alt="Doll Toy">
      <h3>Magic Doll House</h3>
      <p>Age: 5+</p>
      <p>
        <span class="price">$44.99</span>
        <span class="old">$69.99</span>
      </p>
      <button class="buy">Add to Cart</button>
    </div>

  </div>
</section>


<!-- TRUST -->
<section class="trust">
<h2 style="font-size:2.8rem">Why Parents Trust Us</h2><br>
<div class="trust-grid">
  <div class="trust-box">
    <i class="fa-solid fa-lock text-primary"></i>
    <h3>Secure Payments</h3>
    <p>SSL encrypted & safe checkout</p>
  </div>
  <div class="trust-box">
    <i class="fa-solid fa-check-circle" style="color:#22c55e"></i>
    <h3>Parent Approved</h3>
    <p>Tested & trusted worldwide</p>
  </div>
  <div class="trust-box">
    <i class="fa-solid fa-star" style="color:#f59e0b"></i>
    <h3>Quality Assured</h3>
    <p>Educational & safe materials</p>
  </div>
</div>
</section>

<!-- GAME -->
<section class="games" id="games">
<h2>🎮 Colourful XO Game</h2>
<p class="points">Coins: <span id="points">0</span> 🪙</p>
<div class="status" id="status">Player ❌ turn</div>

<div class="board">
  <div class="cell" onclick="play(this,0)"></div>
  <div class="cell" onclick="play(this,1)"></div>
  <div class="cell" onclick="play(this,2)"></div>
  <div class="cell" onclick="play(this,3)"></div>
  <div class="cell" onclick="play(this,4)"></div>
  <div class="cell" onclick="play(this,5)"></div>
  <div class="cell" onclick="play(this,6)"></div>
  <div class="cell" onclick="play(this,7)"></div>
  <div class="cell" onclick="play(this,8)"></div>
</div>

<div class="cheer left" id="cheerL">🎉✨🎈</div>
<div class="cheer right" id="cheerR">🎊🥳⭐</div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
<form class="form">
<h2>📩 Contact Us</h2><br>
<input placeholder="Your Name" required>
<input placeholder="Email" required>
<textarea placeholder="Message"></textarea>
<button class="buy">Send Message</button>
</form>
</section>

<!-- FOOTER -->
<footer>
<div class="footer-grid">
  <div>
    <h3>ToyJoy</h3>
    <p>Making childhood joyful & educational.</p>
  </div>
  <div>
    <h3>Support</h3>
    <a href="#">Help Center</a>
    <a href="#">Corporate Orders</a>
    <a href="#">Returns</a>
  </div>
  <div>
    <h3>Legal</h3>
    <a href="#">Privacy</a>
    <a href="#">Terms</a>
  </div>
</div>
<p style="text-align:center;margin-top:30px">© 2026 ToyJoy. All rights reserved.</p>
</footer>

<script>
let current="❌";
let board=["","","","","","","","",""];
let points=0;
const wins=[[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]];

function play(cell,i){
  if(board[i]) return;
  board[i]=current;
  cell.innerText=current;

  if(wins.some(w=>w.every(j=>board[j]===current))){
    document.getElementById("status").innerText=current+" Wins! 🎉";
    document.getElementById("cheerL").style.display="block";
    document.getElementById("cheerR").style.display="block";
    points+=10;
    document.getElementById("points").innerText=points;
    setTimeout(reset,2000);
    return;
  }

  if(board.every(v=>v)){
    document.getElementById("status").innerText="Draw 😄";
    setTimeout(reset,1500);
    return;
  }

  current=current==="❌"?"⭕":"❌";
  document.getElementById("status").innerText="Player "+current+" turn";
}

function reset(){
  board.fill("");
  document.querySelectorAll(".cell").forEach(c=>c.innerText="");
  current="❌";
  document.getElementById("status").innerText="Player ❌ turn";
  document.getElementById("cheerL").style.display="none";
  document.getElementById("cheerR").style.display="none";
}
</script>

</body>
</html>
