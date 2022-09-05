<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Books</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
  <script src="script.js" defer></script>
  
  <header>
    <aside>
      <form action="">
        <div class="form-group">
          <label for="txt_email">e-mail</label>
          <input type="email" name="txt-email"
            id="txt_email" class="form-control"> 
        </div>
        <div class="form-group">
          <label for="txt_senha">password</label>
          <input type="password" name="txt_senha"
            id="txt_senha" class="form-control"> 
        </div>
        <a href="#">I forgot the password</a>
        <div>
           <input type="submit" value="Login"
             class="btn btn-primary">
          <a href="#" class="btn btn-primary">Register</a>
        </div>
      </form>
    </aside>
    <h1>
      <?= "Books"; ?>
    </h1>
    <h2>
      <?php
          echo "The seven B: Books before boys because boys brings babys!";
      ?>
    </h2>
  </header>

  <main>
    <form action="ws/salvar-livro" 
      class="form-inline justify-content-center">
      <div class="form-group">
        <input type="text" name="txt_livro" 
          id="txt_livro" class="form-control">
        <input type="button" value="Save" 
          class="btn btn-primary"
          onclick="criarLivro()">
      </div>
    </form>

    <section id="sessaoDeLivros">
        <?php 
      require_once "model/Conexao.php";
      $sql = "SELECT * FROM book;";

      if(!Conexao::execWithReturn($sql)){
          echo Conexao::getErro();
          exit(1);
      }
      //print_r(Conexao::getData())
      foreach(Conexao::getData() as $livro): 
      ?>
      <article>
        <div>
          <img src="livro.jpg" alt="Imagem do livro">
        </div>
        
        <div class="livro-dados">
          <h3>Book: 
          <span> 
           <?=  $livro["nome"] ?>
          </span> </h3>
          
           <h3>Pages: 
             <span>
               <?=  $livro["paginas"] ?>
            </span> </h3>
          
           <h3>Writer: 
             <span>
               <?=  $livro["autor"] ?>
             </span> </h3>
        </div>
        
        <div>
          <div class="marcador">
            <span class="material-icons">book</span>
            <span class="Contador">12</span>
          </div>
          <div class="marcador">
            <span class="material-icons">favorite</span>
            <span class="Contador">12</span>
          </div>
        </div>
        
      </article>
      <?php endforeach; ?>
    </section>
  </main>
</body>

</html>