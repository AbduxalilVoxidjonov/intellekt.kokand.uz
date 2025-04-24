<?php

/** @var yii\web\View $this */

$this->title = 'Intellekt Kokand';
$this->registerCss("


.container {
  max-width: auto;
  margin: auto;
}

.hero-section {
  background: #f9f9f9;
  border-radius: 20px;
}

.hero-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  
  border-radius: 20px;
  justify-content: space-between;
  gap: 40px;
}

.hero-text {
  flex: 1;
}

.hero-text h1 {
  font-size: 2.8rem;
  margin-bottom: 20px;
}

.hero-text p {
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 30px;
}

.hero-buttons .btn {
  display: inline-block;
  margin-right: 15px;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn.primary {
  background-color: #00aa84;
  color: white;
}

.btn.primary:hover {
  background-color: #008e6d;
}

.btn.link {
  color: #00aa84;
}

.hero-image {
  flex: 1;
  text-align: center;
}

.hero-image img {
  max-width: 100%;
  height: auto;
}

.features-section {
  padding: 30px 20px;
  border-radius: 20px;
    margin-bottom: 20px;
    margin: 0 auto 20px auto;
    width: 75%;
  text-align: center;
}

.features-section h2 {
  font-size: 2rem;
  margin-bottom: 40px;
}

.features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 30px;
  
  margin-bottom: 20px;
  margin-top: 30px;
}

.feature-card {
  border-radius: 12px;
  padding: 25px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: 0.3s ease;
}

.feature-card:hover {
  box-shadow: 0 12px 30px rgba(204, 204, 255, 1);
  transform: translateY(-5px);
}

.feature-card .icon {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.mt-30 {
  margin-top: 30px;
}/* ✅ RESPONSIVE STYLES */
@media (max-width: 768px) {
  .hero-content {
    flex-direction: column;
    text-align: center;
  }

  .hero-text h1 {
    font-size: 2rem;
  }

  .hero-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .hero-buttons .btn {
    width: 100%;
    text-align: center;
  }

  .features {
    grid-template-columns: 1fr;
  }
 }
 .feature-card .feature-image {
    max-width: 100px;
    height: auto;
    margin: 0 auto 15px auto;
    display: block;
}
@media (max-width: 768px) {
  .features-section {
    width: 100%;
    border-radius: 0;
    box-shadow: none;
  }
}

.about-section {
  padding: 30px 20px;
  font-family: 'Segoe UI', sans-serif;
    border-radius: 20px;
    margin: 0 auto 20px auto;
}

.about-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
  margin: 0 auto;
  border-radius: 20px;
  padding: 50px;
}

.about-text {
  flex: 1 1 560px;
}

.about-title {
  font-size: 2.8rem;
  font-weight: 800;
  color: black;
  margin-bottom: 10px;
}

.about-name {
  font-size: 1.8rem;
  font-weight: 600;
  margin-top: 20px;
  color: black;
}

.about-role {
   display: inline-block;
  padding: 12px 32px;
  font-size: 16px;
  margin-top: 20px;margin-right: 20px;
  font-weight: 600;
  color: white;
  background: linear-gradient(90deg, #00e17e, #00c269);
  border: none;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 8px 20px rgba(0, 200, 120, 0.3);
  transition: all 0.3s ease;
}
.about-role:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 25px rgba(0, 200, 120, 0.45);
}

.about-description {
  font-size: 1rem;
  line-height: 1.7;
  color: #444;
  margin-top: 20px;
  margin-bottom: 25px;
}

.about-buttons {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}



.about-image {
  flex: 1 1 500px;
  text-align: center;
}

.about-image img {
  max-width: 100%;
}
@media (max-width: 992px) {
  .about-container {
    flex-direction: column;
    text-align: center;
    padding: 30px;
  }

  .about-text {
    flex: 1 1 100%;
  }

  .about-buttons {
    justify-content: center;
  }

  .about-title,
  .about-name {
    text-align: center;
  }
}

@media (max-width: 576px) {
  .about-section {
    padding: 20px 10px;
  }

  .about-container {
    padding: 20px;
    gap: 20px;
  }

  .about-title {
    font-size: 2rem;
  }

  .about-name {
    font-size: 1.5rem;
  }

  .about-role {
    font-size: 14px;
    margin-top: 10px;
    padding: 10px 24px;
  }

  .about-description {
    font-size: 0.95rem;
    line-height: 1.5;
  }

  .about-buttons {
    flex-direction: column;
    gap: 12px;
    margin-top: 20px;
    align-items: center;
  }
}

/* Price Section */
#price-school {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;  /* To'liq ekran bo'yicha markazlash */
    background-color: #f7f7f7;
    flex-wrap: wrap;  /* Responsivlik uchun */
}

/* Title Section */
.header-container {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
}

.header-container h1 {
    font-size: 2.8rem;
    font-weight: 600;
    color: #333;
}

/* Container for price cards */
.container-price {
    width: 460px;
    padding: 40px;
    background: #ffffff;
    text-align: center;
    border-radius: 12px;
    overflow: hidden;
    margin: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    position: relative;
    transition: transform 0.3s ease;
}

.container-price:hover {
    transform: scale(1.05);  /* Hover effekti */
}

.container-price .title {
    font-size: 2rem;
    color: #333;
    font-weight: 600;
}

.container-price .price {
    color: #FF6B6B;
    font-weight: 700;
    font-size: 2.2rem;
    margin: 15px 0;
}

.container-price span {
    font-size: 1.2rem;
}

.container-price .description {
    color: #3b3b3b;
    font-size: 1.1rem;
    margin: 20px 0;
}

.container-price .offer {
    display: block;
    color: #555;
    font-size: 1rem;
    margin-top: 15px;
}

.subscribe-button {
    display: inline-block;
    padding: 15px 0;
    background-color: #FF6B6B;
    color: #fff;
    text-decoration: none;
    border-radius: 30px;
    font-size: 1.2rem;
    margin-top: 40px;
    width: 100%;
    font-weight: 500;
    transition: 0.3s ease;
}

.subscribe-button:hover {
    background: #ff4d4d;
}

.ribbon-wrap {
    width: 150px;
    height: 150px;
    position: absolute;
    top: -10px;
    left: -10px;
    pointer-events: none;
}

.ribbon {
    width: 230px;
    font-size: 0.918rem;
    text-align: center;
    padding: 8px 0;
    background: #FF6B6B;
    color: #fff;
    position: absolute;
    transform: rotate(-45deg);
    right: -17px;
    top: 29%;
}


");

$this->registerJs("


");
?>
<div class="site-index">

    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Farzandingiz kelajagini biz bilan quring!</h1>
                    <p>
                        Tools, tutorials, design and innovation experts, all in one place!
                        The most intuitive way to imagine your next user experience.
                    </p>
                    <div class="hero-buttons">
                        <a href="#" class="btn primary">Ro'yxatdan o'tish</a>
                        <a href="#" class="btn link">▶ Maktab haqida video ko'rish</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="/assets/img/imgs.png" alt="Hero Illustration"/>
                </div>
            </div>
        </div>
    </section>

    <section   class="features-section">
        <div class="container text-center" id="why_us">
            <h1>Nima uchun bizning maktab?</h1>

            <div class="features">
                <div class="features">
                    <div class="feature-card">
                        <img src="/assets/img/teacher.png" alt="Tajribali ustozlar" class="feature-image">
                        <h3>Tajribali ustozlar</h3>
                        <p>Har bir o‘quvchiga individual yondashuv asosida sifatli ta’lim beriladi.</p>
                    </div>
                    <div class="feature-card">
                        <img src="/assets/img/innovate.png" alt="Innovatsion ta’lim" class="feature-image">
                        <h3>Innovatsion ta’lim</h3>
                        <p>Zamonaviy texnologiyalar, IT va STEAM yo‘nalishlari asosida o‘qitish.</p>
                    </div>
                    <div class="feature-card">
                        <img src="/assets/img/result.png" alt="Natijaga yo‘naltirilgan" class="feature-image">
                        <h3>Natijaga yo‘naltirilgan</h3>
                        <p>O‘quvchilarimiz olimpiada va tanlovlarda faol qatnashib, yutuqlarga erishmoqda.</p>
                    </div>
                    <div class="feature-card">
                        <img src="/assets/img/parent.png" alt="Ota-onalar bilan hamkorlik" class="feature-image">
                        <h3>Ota-onalar bilan hamkorlik</h3>
                        <p>O‘quvchilarning rivoji bo‘yicha doimiy aloqa va hisobotlar taqdim etiladi.</p>
                    </div>
                    <div class="feature-card">
                        <img src="/assets/img/rivoj.png" alt="Shaxsiy rivojlanish" class="feature-image">
                        <h3>Shaxsiy rivojlanish</h3>
                        <p>Yetakchilik, axloq, va o‘zini boshqarish kabi ko‘nikmalar rivojlantiriladi.</p>
                    </div>
                    <div class="feature-card">
                        <img src="/assets/img/activity.png" alt="Qo‘shimcha to‘garaklar" class="feature-image">
                        <h3>Qo‘shimcha to‘garaklar</h3>
                        <p>Sport, san’at, robototexnika va boshqa ko‘plab qiziqarli to‘garaklar faoliyat yuritadi.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="about_school" class="about-section">
        <div class="about-container">
            <div class="about-text">
                <h1 class="about-title">Maktab haqida</h1>
                <p class="about-description">
                    Here, you'll find a curated collection of my work that reflects my passion for visual storytelling and creative expression. With a strong belief in the power of design to communicate ideas and evoke emotions, I strive to create impactful visuals that resonate with audiences.
                </p>
                <h2 class="about-name">Chuqur o'rgatiladigan fanlar</h2>
                <div class="about-role">Ingliz tili</div>
                <div class="about-role">Matematika</div>
                <div class="about-role">Fizika</div>
                <h2 class="about-name">Mavjud sinflar</h2>
                <div class="about-role">9-11 sinflar</div>
            </div>
            <div class="about-image">
                <img src="/assets/img/modern.png" alt="Portfolio Image">
            </div>
        </div>
    </section>

    <div class="header-container">
        <h1>Maktabimiz narxlari</h1>
    </div>
    <section id="price-school" class="price-section">
        <div class="container-price">
            <h2 class="title">Bir oylik<br>to'lov</h2>
            <h3 class="price">2.000.000 so'm<span>/oy</span></h3>
            <p class="description">Bu yerda maktabda nima uchun bunchalik ko'p to'lov bo'lishi haqida</p>
            <b class="offer">To'lovlar har oyning 10 sanasigacha</b>
            <a class="subscribe-button" href="#">Ma'lumot olish</a>
        </div>

        <div class="container-price">
            <h2 class="title">Uch oylik<br>to'lov</h2>
            <h3 class="price">5.200.000 so'm<span>/3oy</span></h3>
            <p class="description">Bu yerda maktabda nima uchun bunchalik ko'p to'lov bo'lishi haqida</p>
            <b class="offer">To'lovlar har oyning 10 sanasigacha</b>
            <a class="subscribe-button" href="#">Ma'lumot olish</a>
            <div class="ribbon-wrap">
                <div class="ribbon">Maxsus taklif!</div>
            </div>
        </div>
    </section>

</div>




</div>
