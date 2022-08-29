/*** Div Imagem***/
function criarLivro(){
  
  let divImagem = document.createElement("div");
  let img = document.createElement("img");
  img.setAttribute("src", "livro.jpg");
  img.setAttribute("alt", "Imagem do livro");

  divImagem.appendChild(img);
/*** Fim da div Imagem ***/
  
/*** Div Dados ***/
  let divDados = document.createElement("div");
  divDados.setAttribute("class", "livro-dados");

  let hTitulo = document.createElement("h3");
  let hPaginas = document.createElement("h3");
  let hAutores = document.createElement("h3");

  let spanTitulo = document.createElement("span");
  let spanPaginas = document.createElement("span");
  let spanAutores = document.createElement("span");

  hTitulo.innerHTML = "Livro: ";
  hPaginas.innerHTML = "Páginas: ";
  hAutores.innerHTML = "Autor(a): ";

  let nomeLivro = document.querySelector("#txt_livro").value;

  spanTitulo.innerHTML = nomeLivro;
  spanPaginas.innerHTML = "???";
  spanAutores.innerHTML = "???";

  hTitulo.appendChild(spanTitulo);
  hPaginas.appendChild(spanPaginas);
  hAutores.appendChild(spanAutores);

  divDados.appendChild(hTitulo);
  divDados.appendChild(hPaginas);
  divDados.appendChild(hAutores);
  /*** Fim da div dados ***/
  
  /*** Div Marcadores ***/
  let divMarcadores = document.createElement("div");

  divMarcadores.appendChild(criarMarcadores("book", 0));
  divMarcadores.appendChild(criarMarcadores("favorite", 0));
  /*** Fim da div marcadores ***/
  
  let article = document.createElement("article");
  article.appendChild(divImagem);
  article.appendChild(divDados);
  article.appendChild(divMarcadores);

  document.querySelector("#sessaoDeLivros")
    .appendChild(article);
  
  
}

function criarMarcadores(icon, numero){
  let div = document.createElement("div");
  div.setAttribute("class", "marcador");

  let spanIcon = document.createElement("span");
  spanIcon.setAttribute("class", "material-icons");
  spanIcon.innerHTML = icon;

  let spanNumero = document.createElement("span");
  spanNumero.setAttribute("class", "contador");
  spanNumero.innerHTML = numero;

  div.appendChild(spanIcon);
  div.appendChild(spanNumero);

  return div;
}
  