<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Meu Portfolio</title>
</head>

<body>



  <?php
  include("upload/arquivos/conexao.php");
  ?>





  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>S</span>érgio <span>F</span>ilho</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Estudos">Estudos</a></li>
            <li><a href="#projects" data-after="Projetos">Projetos</a></li>
            <li><a href="#about" data-after="Sobre">Sobre</a></li>
            <li><a href="#contact" data-after="Contatos">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Olá, <span></span></h1>
        <h1>Meu Nome É <span></span></h1>
        <h1>Sérgio <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Est<span>u</span>dos</h1>
        <p>Estudante da faculdade UNIFEV do curso de Engenharia da Computação, aluno do curso online B7WEB e aluno do professor Luiz Junior da IPROTEG Cursos Profissionalizantes.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>HTML & CSS</h2>
          <p>Conhecimento dos conceitos, tags e estilizações basicas das linguagens de marcação HTML e CSS, tendo 68% do curso de HTML & CSS da B7WEB concluído, porém sem finalização e certificado por não ter me apegado a linguagem.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>JavaScript</h2>
          <p>Conhecimento básico das tags e suas funções dentro da linguagem, estudo em progressão no curso B7WEB com 23% já concluido, meta de finalização do curso até o final de 2023.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>NodeJS</h2>
          <p>Estudando e conhecendo o framework de JavaScript, pelo curso ao vivo da IPROTEG, estudo apenas para o conhecimento e funcionalidades do framework, para posteriormente ter um estudo mais aprofundado e eficiente da ferramenta.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>React Native</h2>
          <p>Estudando e conhecendo o framework de JavaScript, pelo curso ao vivo da IPROTEG, estudo apenas para o conhecimento e funcionalidades do framework, para posteriormente ter um estudo mais aprofundado e eficiente da ferramenta.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Meus <span>Projetos</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Projeto 1</h1>
            <h2>Formulário de Registro </h2>
            <p>Formulário de Registro básico utilizando apenas as linguagens de marcação HTML e CSS</p>
          </div>
          <div class="project-img">
            <img src="./img/Screenshot_1.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projeto 2</h1>
            <h2>Página de Tributo</h2>
            <p>Página de homenagem sobre a vida do falecido artista Mc Kevin</p>
          </div>
          <div class="project-img">
            <img src="./img/Screenshot_2.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projeto 3</h1>
            <h2>Jogo do Mário</h2>
            <p>Jogo utilizando a estética do Mário, o jogo tem objetivo de pular os obstáculos no momento certo, sem ser atingido pelos mesmos, jogo criado utilizando HTML & CSS e JavaScript</p>
          </div>
          <div class="project-img">
            <img src="./img/Screenshot_3.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Projeto 4</h1>
            <h2>Jogo Cópia Flappy Bird</h2>
            <p>Jogo Cópia do Famoso jogo Flappy Bird, criado utilizando apenas HTML & CSS e JavaScript</p>
          </div>
          <div class="project-img">
            <img src="./img/Screenshot_4.png" alt="img">
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/eu perfil (1).png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sobre <span>mim</span></h1>
        <h2>Futuro Desenvolvedor Back-End</h2>
        <p>Estudante de Engenharia da Computação, aprendendo e me especializando em desenvolvimento Back-End, stack escolhida devido a sua dificuldade e necessidade de uma boa lógica de programação, trazendo assim diversos desafios para o  cotidiano, podendo me superar e me desenvolver todos os dias estudando ou trabalhando com esta stack. </p>
        
          <a target="_blank" href="upload/arquivos/Curriculo/Curriculo Att.pdf" class="cta">Curriculo</a>
          <a target="_blank" href="certificados.php" class="cta">Certificados</a>
        </form>





      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Informações de <span>Contato</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Telefone</h1>
            <h2>+55 (17)996470528</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>barbosasergiofilho18@gmail.com</h2>
            <h2>projectblackout150@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Endereço</h1>
            <h2>Votuporanga, São Paulo, Brasil</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->


  <script src="./app.js"></script>
</body>

</html>