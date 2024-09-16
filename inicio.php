<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculdade Formiga</title>
</head>
<body>
    <header>
        <img class="img1" src="bug-cartoon.png" alt="">
        <h1>FACULDADE FORMIGA</h1>
        <h2>Cursos</h2>
        <h2>Sobre Nós</h2>
        <h2><a href="tela.php">Acesso</a></h2>
        <div id="divBusca">
            <input type="text" class="txtBusca" placeholder="Buscar..."/>
          </div>
    </header>
    <h2 class="categ">Categorias</h2>
    <hr>
    <section class="temas">
        <h1>TECNOLOGIA</h1>
        <H1>EDUCAÇÃO</H1>
        <H1>SAÚDE</H1>
        <H1>FINANÇAS</H1>
        <H1>SOCIAL</H1>
    </section>
    <section class="cursos">
        <div>
            <img src="Dados.jpg" alt="">
            <h1>Segurança de Dados</h1>
            <button class="botao"><a href="index.php">Increva-se</a></button>
        </div>
        <div>
            <img src="software.png" alt="">
            <h1>Engenharia de Software</h1>
            <button class="botao"><a href="index.php">Increva-se</a></button>
        </div>
        <div>
            <img src="Ads.jpg" alt="">
            <h1>Análise e Desenvolvimento de Sistemas</h1>
            <button class="botao"><a href="index.php">Increva-se</a></button>
        </div>
        <div>
            <img src="basico.jpg" alt="">
            <h1>Informática Básica</h1>
            <button class="botao"><a href="index.php">Increva-se</a></button>
        </div>
    </section>
</body>
</html>
<style>
    body{
        background-color: #b2bbb2;
        color: white;
    }
    .img1{
        height: 80px;
        width: 50px;
    }
    header{
       margin: 50px;
        padding: 10px 50px;
        border-radius: 40px;
        justify-content: space-around;
        display: flex;
        background-color: rgb(7, 7, 100);
    }
    hr{
        border: 0;
	    margin: 0 50px 0 50px;
	    border-top: 2px solid #000000;
    }
    .categ{
        margin: 50px;
    }
    .temas{
        margin: 20px 50px;
        display: flex;
        justify-content: space-between;
    }
    .temas h1{
        border: 2px solid black;
        padding: 10px 10px;
        border-radius: 40px;
        
    }
    .cursos{
        display: flex;
        justify-content: space-between;
        margin: 30px 50px;
        text-align: center;
    }
    .cursos div{
        background-color: rgb(9, 9, 88);
        border: 2px solid black;
        border-radius: 20px;
        padding: 20px;
        width: 22%;
    }
    .cursos img{
        width: 100%;
        height: 250px;
    }
    .botao{
        background-color: rgb(135, 189, 54);
        border-radius: 5px;
        font-size: 20px;
        width: 40%;
        height: 40px;

    }
    .divBusca{
        background-color:#474e4e;
        border:solid 1px;
        border-radius:15px;
        width:300px;
    }
    .txtBusca{
        background-color: white;
        padding-left:5px;
        font-style:italic;
        font-size:18px;
        border:none;
        height:32px;
        width:260px;
    }
    a{
        text-decoration: none;
        color: white;
    }
</style>