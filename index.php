<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><!--climas --></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>
        
            <!-- Tags Gerais --> 
        <meta NAME="DESCRIPTION" CONTENT="Site de clima de Brusque feito por Luis Felipe"/>
        <meta NAME="ABSTRACT" CONTENT="Climas de Brusque"/>
        <meta name="keywords" content="Clima ,Temperatura ,Brusque ,temperatura em Brsuque ,tempo para Brusque , vento, Previsão de Brusque ,Tempo ,sc ,santa catarina tempo ,santa catarina Clima ,Termometro ,Havan Brusque ,Climax "/>
        <meta NAME="title" CONTENT="Informaçoes climaticas" />
        <meta NAME="identifier-url" content="https://luis-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Luis Felipe Santos" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="luis_Fs_Santos@estudante.sc.senai.br"/>
        
        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://luis-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informaçoes climaticas" />
        <meta property="og:title" content="Informaçoes climaticas" />
        <meta property="og:description" content="Site de clima de Brusque feito por Luis Felipe" />
        <meta property="og:image" content="https://luis-clima-senai.herokuapp.com/img/icones/umidade.gif" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de clima de Brusque feito por Luis Felipe" />
        <meta name="twitter:title" content="Informaçoes climaticas" />
        
    </head>
    
    <body>
        
        <div class="row">
            
            <div class="col-md-12">
                <div class="jumbotron"style="background-color: appworkspace">
                    
                    <div class="row mx-lg-n5 bg-primary text-white">
                        <center><div class="col py-3 px-lg-5 "><img src="img/icones/clima.gif" width="390px"/></div></center>
                        <div class="col py-3 px-lg-5 "><h1 style="font-size: 55px">Climas de Brusque</h1></div>
                        <center><div class="col py-3 px-lg-5 "><img src="img/icones/clima2.gif "width="390px"/></div></center>
                    </div>
                </div>
                <div class="jumbotron" style="background-color: aqua">
                    <h1>Tempo para Brusque-SC | </h1>
                    <p>
                        </br>
                    <center>
                        <span id="temperatura" style="font-size: 60px" ></span>
                        <img src="img/icones/clima1.gif"width="155px"/>
                        
                    </p>
                    </center>
                </div>
                
                <div class="jumbotron"style="background-color: turquoise">
                    <center>
                    <h1>Umidade do ar Brusque-SC  </h1>
                    
                    <p>
                    
                    <h3><span id="umidade" style="font-size: 60px"></span> <img src="img/icones/umidade.gif" width="190px"/></h3>
                        
                        
                    </p>
                    </center>
                </div>
                
                <div class="jumbotron" style="background-color: aquamarine">
                    <center>
                    <h1>Pressão do ar em Brusque-SC  </h1>
                    <p>
                    
                    <h3><span id="pressao" style="font-size: 50px"></span> <img src="img/icones/pressao.png" width="100px"/> </h3>
                        
                        
                    </p>
                    </center>
                </div>
                <div class="jumbotron" style="background-color: yellowgreen">
                    <center>
                    <h1>Temperaturas</h1>
                    </center>
                    </br>
                    <div class="row mx-lg-n5">
                        
                    <div class="col py-3 px-lg-5 border bg-light">
                        <h2>Temperatura Máxima </h2>
                    <p>
                    
                    <h3><span id="tempMax"style="font-size: 70px"></span><img src="img/icones/cima.png" width="150px"/> </h3>   
                        
                    </p>
                    </div>
                        
                    <div class="col py-3 px-lg-5 border bg-light">
                        <h1>Temperatura Minima </h1>
                            <p>
                        
                              <h3><img src="img/icones/baixo.png" width="150px"/><span id="tempMin" style="font-size: 70px"></span></h3> 
                        
                            </p>
                        </div>
                    
                    </div>
                    
                </div>
                 <div class="jumbotron" style="background-color: springgreen">
                    <center>
                        <h1>Velocidade do Vento </h1>
                    
                    
                    <h3><img src="img/icones/vento.gif" width="200px"/> <span id="velocidade" style="font-size: 70px"></span></h3>
                       
                    
                    </center>
            </div>
                
                <div class="jumbotron" style="background-color:forestgreen ">
                    <center>
                    <h1>SOL</h1>
                    </center>
                    </br>
                    <div class="row mx-lg-n5">
                        
                    <div class="col py-3 px-lg-5 border bg-info">
                        <h2>Nascer do Sol </h2>
                    <p>
                    
                    <h3><span id="nascer" style="font-size: 70px" ></span><img src="img/icones/nascer.gif" width="250px"/> </h3>
                        
                    </p>
                    </div>
                        
                    <div class="col py-3 px-lg-5 border bg-info">
                        <h1>Por do Sol </h1>
                            <p>
                        
                              <h3><span id="por" style="font-size: 70px" ></span> <img src="img/icones/por.gif" width="100px"/></h3> 
                        
                            </p>
                        </div>
                    
                    </div>
                    
                </div>
        </div>
    
    </body>
</html>
