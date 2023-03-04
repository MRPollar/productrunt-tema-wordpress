<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tema wordpress | Contato</title>
   <link rel="stylesheet" href="css/all.min.css">
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

   <section class="contatos">
      <div class="container">

         <div>
            <h2>A mais importante, primeira conversa.</h2>
            <p><strong>Telefone:</strong> +55 00 00000-0000</p>
            <p><strong>E-mail:</strong> contato@projectRunt.com.br</p>
            <p><strong>Endereço:</strong> 1600 Amphitheatre Pkwy,<br/>Mountain View, CA 94043, EUA</p>
            <img src="images/map.png" alt=""/>
         </div>
         <form>
            <input type="text" name="nome" placeholder="Nome*">
            <input type="text" name="email" placeholder="E-mail*">
            <input type="text" name="empresa" placeholder="Empresa">
            <textarea name="necessidade" placeholder="Fale mais sobre sua necessidade"></textarea>

            <button type="submit">enviar formulário</button>
         </form>
      </div>
   </section>

   <footer class="footer-links contato-footer">
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