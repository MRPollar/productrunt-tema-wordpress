<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tema wordpress | Sobre</title>
   <link rel="stylesheet" href="css/all.min.css"/>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <section class="topo">
      <div class="container">

         <header>

            <div class="logo">
               <img src="images/logo.png" alt="logo"/>
            </div><!--logo-->
            <ul class="menu-desktop">
               <li><a href="index.php">Home</a></li>
               <li class="selected"><a href="sobre.php">Sobre</a></li>
               <li><a href="contato.php">Contatos</a></li>
            </ul><!--menu-desktop-->
            <i style="color:white;" class="btn-toggle fa-solid fa-bars"></i>
            <div class="menu-mobile">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li class="selected"><a href="sobre.php">Sobre</a></li>
                  <li><a href="contato.php">Contatos</a></li>
               </ul>
            </div>

         </header>
      </div><!--container-->
   </section><!--topo-->

   <section class="equipe">
      <div class="container">
         <h2>Uma equipe estratégica para um trabalho incrivel.</h2>

         <div class="container-equipe">
            <p>
               Com foco permanente na geração de resultado para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativa,
               consistentes e adequadas às necessidades e características de cada companhia. Para isso trabalhamos sempre em parceria e colaboração com interfaces e executivos das
               organizações, mantendo completo envolvimento com os negócios de cada cliente.
            </p>
            <img src="images/foto-equipe-01.png" alt=""/>
         </div>

      </div>
   </section>


   <section class="depoimentos">
      <div class="container">

         <div class="fotos-equipe">
            <img src="images/foto-1.png" alt=""/>
            <img src="images/foto-2.png" alt=""/>
            <img src="images/foto-3.png" alt=""/>
            <img src="images/foto-4.png" alt=""/>
         </div>
         
         <div class="metodologia">
            <h2>Conheça nossa metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br/>Entre em contato por email ou telefone</p>
            <a href="">Entrar em contato</a>
         </div>
      </div><!--container-->
   </section><!--depoimentos-->

   <footer class="footer-links">
      <div class="container">

         <div class="container-lista">
            <ul>
               <li>SUPORTE</li>
               <li><a href="">Blog</a></li>
               <li><a href="">FAQ's</a></li>
            </ul>
            <ul>
               <li>CONSULTORIA</li>
               <li><a href="">Metodologia</a></li>
               <li><a href="">Cases</a></li>
            </ul>
            <ul>
               <li>EMPRESA</li>
               <li><a href="">Sobre</a></li>
               <li><a href="">Política de privacidade</a></li>
            </ul>
         </div>
         <img src="images/logo-footer.png" alt=""/>
      </div>
   </footer>




   <script>
      const btnMenu = document.querySelector(".btn-toggle");

      btnMenu.addEventListener("click", () => {
         const lista = document.querySelector(".menu-mobile");
         lista.classList.toggle("active");
      })
   </script>
</body>
</html>