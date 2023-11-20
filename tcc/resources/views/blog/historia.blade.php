<x-app-layout title="Historia">
    <div class=align-items-center>

<<<<<<< HEAD
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
            <style>
                h1 {

                    color: #333;
                    font-weight: 700;
                    margin-top: 125px;
                    text-align: center;
                    text-transform: uppercase;
                    letter-spacing: 4px;
                    line-height: 23px;
                }

                /* --- Start progress bar --- */

                .process-wrapper {
                    margin: auto;
                    max-width: 1080px;
                }

                #progress-bar-container {
                    position: relative;
                    width: 90%;
                    margin: auto;
                    height: 100px;
                    margin-top: 65px;
                }

                #progress-bar-container ul {
                    padding: 0;
                    margin: 0;
                    padding-top: 15px;
                    z-index: 9999;
                    position: absolute;
                    width: 100%;
                    margin-top: -40px
                }

                #progress-bar-container li:before {
                    content: " ";
                    display: block;
                    margin: auto;
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    border: solid 2px #aaa;
                    transition: all ease 0.3s;

                }

                #progress-bar-container li.active:before,
                #progress-bar-container li:hover:before {
                    border: solid 2px #fff;

                    background: linear-gradient(to right, #E91E63 0%, #fff 100%);
                }

                #progress-bar-container li {
                    list-style: none;
                    float: left;
                    width: 20%;
                    text-align: center;
                    color: #aaa;
                    text-transform: uppercase;
                    font-size: 11px;
                    cursor: pointer;
                    font-weight: 700;
                    transition: all ease 0.2s;
                    vertical-align: bottom;
                    height: 60px;
                    position: relative;
                }

                #progress-bar-container li .step-inner {
                    position: absolute;
                    width: 100%;
                    bottom: 0;
                    font-size: 14px;
                }

                #progress-bar-container li.active,
                #progress-bar-container li:hover {
                    color: #444;
                }

                #progress-bar-container li:after {
                    content: " ";
                    display: block;
                    width: 6px;
                    height: 6px;
                    background: #777;
                    margin: auto;
                    border: solid 7px #fff;
                    border-radius: 50%;
                    margin-top: 40px;
                    box-shadow: 0 2px 13px -1px rgba(0, 0, 0, 0.3);
                    transition: all ease 0.2s;

                }

                #progress-bar-container li:hover:after {
                    background: #555;
                }

                #progress-bar-container li.active:after {
                    background: #207893;
                }

                #progress-bar-container #line {
                    width: 80%;
                    margin: auto;
                    background: #eee;
                    height: 6px;
                    position: absolute;
                    left: 10%;
                    top: 57px;
                    z-index: 1;
                    border-radius: 50px;
                    transition: all ease 0.9s;
                }

                #progress-bar-container #line-progress {
                    content: " ";
                    width: 3%;
                    height: 100%;
                    background: #207893;
                    background: linear-gradient(to right, #207893 0%, #2ea3b7 100%);
                    position: absolute;
                    z-index: 2;
                    border-radius: 50px;
                    transition: all ease 0.9s;
                }

                #progress-content-section {
                    width: 90%;
                    margin: auto;
                    background: #f3f3f3;
                    border-radius: 4px;
                }

                #progress-content-section .section-content {
                    padding: 30px 40px;
                    text-align: center;
                }

                #progress-content-section .section-content h2 {
                    font-size: 17px;
                    text-transform: uppercase;
                    color: #333;
                    letter-spacing: 1px;
                }

                #progress-content-section .section-content p {
                    font-size: 16px;
                    line-height: 1.8em;
                    color: #777;
                }

                #progress-content-section .section-content {
                    display: none;
                    animation: FadeInUp 700ms ease 1;
                    animation-fill-mode: forwards;
                    transform: translateY(15px);
                    opacity: 0;
                }

                #progress-content-section .section-content.active {
                    display: block;
                }

                @keyframes FadeInUp {
                    0% {
                        transform: translateY(15px);
                        opacity: 0;
                    }

                    100% {
                        transform: translateY(0px);
                        opacity: 1;
                    }
                }
            </style>
        </head>

        <body>

            <div class="w-full flex flex-row text-center justify-center items-center">
                <h1
                    class="text-3xl sm:text-5xl font-bold bg-clip-text text-transparent pb-4 md:pb-6 bg-gradient-to-r from-yellow-600 to-red-600 dark:from-blue-400">
                    Linha do Tempo</h1>
            </div>
            <br>
            <div class="process-wrapper">
                <div id="progress-bar-container">
                    <ul>
                        <li class="step step01 active">
                            <div class="step-inner">FUNDAÇÃO</div>
                        </li>
                        <li class="step step02">
                            <div class="step-inner">LOCALIZAÇÃO</div>
                        </li>
                        <li class="step step03">
                            <div class="step-inner">NOME</div>
                        </li>
                        <li class="step step04">
                            <div class="step-inner">CURSOS</div>
                        </li>
                        <li class="step step05">
                            <div class="step-inner">DIAS ATUAIS</div>
                        </li>
                    </ul>

                    <div id="line">
                        <div id="line-progress"></div>
                    </div>
                </div>

                <div id="progress-content-section">
                    <div class="section-content discovery active">
                        <h2>O INÍCIO</h2>
                        <p>A “Fernando Prestes” foi criada pela Lei 1860, de 30.12.1921 e instalada em 09 de junho de
                            1929, com a denominação de “Escola Profissional Secundária Mista de Sorocaba”, atualmente
                            Escola Técnica Estadual “Fernando Prestes”. Teve como primeiros cursos implantados os de
                            artes domésticas, corte e confecção, bordado flores e chapéus, tornearia, entalhe em
                            madeira, marcenaria, fundição, serralheria e em regime de cooperação com a Estrada de Ferro
                            Sorocabana o curso ferroviário (Oliveira, 1995: 13 – 16).</p>
                    </div>

                    <div class="section-content strategy">
                        <h2>BEM-VINDO A CASA</h2>
                        <p>Em 1931 passa a ser denominada Escola Profissional Mista Cel. Fernando Prestes. Ao longo dos
                            anos muitas reformulações aconteceram em função das legislações e de mudanças de prédios. “E
                            em 1948 era feita a mudança para o amplo prédio agora próprio, e bem conhecido em nossos
                            dias, à Av. Pereira Inácio” (Oliveira, 1995: 35) atualmente onde está localizada a Escola
                            Técnica Estadual “Rubens de Faria e Souza”, oriunda de reformulações, tendo como origem a
                            Escola “Fernando Prestes”. <br>

                            No final da década de sessenta é desalojada de seu prédio próprio para dar lugar ao Colégio
                            Técnico Industrial Prof. Rubens de Faria e Souza, com cursos técnicos de 2º grau e passa a
                            funcionar como Ginásio Industrial “Fernando Prestes” no atual campus Seminário da
                            Universidade de Sorocaba – UNISO. <br>

                            Novas mudanças aconteceriam, passando a ser a partir de 1982, em novo prédio, o atual, à Rua
                            Natal, 340, Jardim Paulistano, o Centro Estadual Interescolar “Fernando Prestes”. Uma
                            experiência que não deu certo, pelo menos em Sorocaba. O Centro Interescolar era uma escola
                            de pré-profissionalização que oferecia cursos para os alunos da rede pública e privada que
                            cursavam o ensino de 1º e 2º graus e vinham ali em horário diferentes dos seus cursos
                            regulares para ter uma iniciação para o trabalho. No caso do “Fernando Prestes” também
                            funcionavam os cursos de 1º grau e os cursos técnicos de 2º grau. <br>

                            Outra importante mudança que ocorre em 1982, o Centro Estadual de Educação Tecnológica
                            “Paula Souza” assume os cursos de técnicos de 2º grau da escola, deixando o 1º grau
                            subordinado à secretaria de Educação e a escola passa a ser denominar Escola Técnica
                            Estadual “Fernando Prestes”.
                        </p>
                    </div>

                    <div class="section-content creative">
                        <h2>OFICIALIZANDO SEU NOME</h2>
                        <p>“No decorrer de sua ‘vida', a ETE ‘Fernando Prestes' ofereceu aos seus alunos cursos
                            industriais, ferroviários, os conveniados com o MEC, o ginásio industrial e o técnico de 2º
                            grau” (Cruzeiro do Sul, 1989: 32).<br>

                            A partir de 2006 o Centro Paula Souza altera a sigla de todas as escolas técnicas para
                            “ETec” e assim a escola passa-se a chamar ETec Fernando Prestes.

                        </p>
                    </div>

                    <div class="section-content production">
                        <h2>ESPECIALIZAÇÕES</h2>
                        <p>Atualmente mantém as habilitações profissionais de Técnico em Administração, Técnico em
                            Desenvolvimento de Sistemas, Técnico em Informática para Internet, Técnico em Secretariado,
                            Técnico em Design de Interiores, Técnico em Segurança do Trabalho, Técnico em Contabilidade,
                            Técnico em Logística, Técnico em Agenciamento de Viagem, Técnico em Finanças, Técnico em
                            Edificações e Técnico em Eventos Integrado ao Ensino Médio, Técnico em Desenvolvimento de
                            Sistemas e Informática para Internet Integrado ao Ensino Médio, Técnico em Edificações
                            Integrado ao Ensino Médio. A escola também mantém classes descentralizadas que funcionam em
                            parceria com escola da rede estadual (Joaquim Izidoro Marins) onde funcionam o curso Técnico
                            em Logística, Técnico em Informática e Administração, e na cidade de Araçoiaba da Serra (na
                            Escola Prof. Osmar Giacomelli), onde funciona o Curso Técnico em Administração, todas elas
                            atendendo a LDB 9394/96, ao Decreto 5154/04.<br>

                            Oferece ainda, desde 1998, o Ensino Médio regular independente do Ensino Técnico, para os
                            alunos oriundo do Ensino Fundamental (antigo 1° grau).
                        </p>
                    </div>

                    <div class="section-content analysis">
                        <h2>A DIMENSÃO DO FERNANDO PRESTES</h2>
                        <p>Contando com aproximadamente 2800 alunos matriculados no primeiro semestre de 2015, o ensino
                            técnico da “Fernando Prestes”, atende a uma clientela heterogênea, composta por
                            adolescentes, jovens e adultos, egressos do ensino médio (antigo 2º grau), cursando a
                            segunda ou terceira série do mesmo, ou ainda, oriundos do terceiro grau que desejam sua
                            reconversão profissional.<br>
                            Distribuídos nos diversos cursos, nos períodos matutino, vespertino e noturno, a escola
                            atende a um público oriundo de escolas pública em sua grande maioria 84%, e o restante de
                            escolas particulares, sendo que 49% dos alunos matriculados nos cursos técnicos na escola já
                            estão inseridos no mercado de trabalho e vêm em busca de uma formação técnica .<br><br>

                            A escola tem uma área de abrangência que se estende por diversos bairros da cidade, servindo
                            também municípios circunvizinhos como São Roque, Piedade, Ibiúna, Itu, Salto de Pirapora,
                            Araçoiaba, Alumínio, Porto Feliz, Pilar do Sul, Boituva, Mairinque, Salto, Votorantim e
                            Iperó.
                        </p>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script>
                $(".step").click(function() {
                    $(this).addClass("active").prevAll().addClass("active");
                    $(this).nextAll().removeClass("active");
                });

                $(".step01").click(function() {
                    $("#line-progress").css("width", "3%");
                    $(".discovery").addClass("active").siblings().removeClass("active");
                });

                $(".step02").click(function() {
                    $("#line-progress").css("width", "25%");
                    $(".strategy").addClass("active").siblings().removeClass("active");
                });

                $(".step03").click(function() {
                    $("#line-progress").css("width", "50%");
                    $(".creative").addClass("active").siblings().removeClass("active");
                });

                $(".step04").click(function() {
                    $("#line-progress").css("width", "75%");
                    $(".production").addClass("active").siblings().removeClass("active");
                });

                $(".step05").click(function() {
                    $("#line-progress").css("width", "100%");
                    $(".analysis").addClass("active").siblings().removeClass("active");
                });
            </script>
        </body>

        </html>
    </div>
=======


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>

h1 {

	color:#333;
	font-weight:700;
	margin-top:125px;
	text-align:center;
	text-transform:uppercase;
	letter-spacing:4px;
	line-height:23px;
}

/* --- Start progress bar --- */

.process-wrapper {
	margin:auto;
	max-width:1080px;
}

#progress-bar-container {
	position:relative;
	width:90%;
	margin:auto;
	height:100px;
	margin-top:65px;
}

#progress-bar-container ul {
	padding:0;
	margin:0;
	padding-top:15px;
	z-index:9999;
	position:absolute;
	width:100%;
	margin-top:-40px
}

#progress-bar-container li:before {
	content:" ";
	display:block;
	margin:auto;
	width:30px;
	height:30px;
	border-radius:50%;
	border:solid 2px #aaa;
	transition:all ease 0.3s;

}

#progress-bar-container li.active:before, #progress-bar-container li:hover:before {
	border:solid 2px #fff;

	background: linear-gradient(to right, #E91E63 0%,#fff 100%);
}

#progress-bar-container li {
	list-style:none;
	float:left;
	width:20%;
	text-align:center;
	color:#aaa;
	text-transform:uppercase;
	font-size:11px;
	cursor:pointer;
	font-weight:700;
	transition:all ease 0.2s;
	vertical-align:bottom;
	height:60px;
	position:relative;
}

#progress-bar-container li .step-inner {
	position:absolute;
	width:100%;
	bottom:0;
    font-size: 14px;
}

#progress-bar-container li.active, #progress-bar-container li:hover {
	color:#444;
}

#progress-bar-container li:after {
	content:" ";
	display:block;
	width:6px;
	height:6px;
	background:#777;
	margin:auto;
	border:solid 7px #fff;
	border-radius:50%;
	margin-top:40px;
	box-shadow:0 2px 13px -1px rgba(0,0,0,0.3);
	transition:all ease 0.2s;

}

#progress-bar-container li:hover:after {
	background:#555;
}

#progress-bar-container li.active:after {
	background:#207893;
}

#progress-bar-container #line {
	width:80%;
	margin:auto;
	background: #eee;
	height:6px;
	position:absolute;
	left:10%;
	top:57px;
	z-index:1;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-bar-container #line-progress {
	content:" ";
	width:3%;
	height:100%;
	background: #207893;
	background: linear-gradient(to right, #207893 0%,#2ea3b7 100%);
	position:absolute;
	z-index:2;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-content-section {
	width:90%;
	margin: auto;
	background: #f3f3f3;
	border-radius: 4px;
}

#progress-content-section .section-content {
	padding:30px 40px;
	text-align:center;
}

#progress-content-section .section-content h2 {
	font-size:17px;
	text-transform:uppercase;
	color:#333;
	letter-spacing:1px;
}

#progress-content-section .section-content p {
	font-size:16px;
	line-height:1.8em;
	color:#777;
}

#progress-content-section .section-content {
	display:none;
	animation: FadeInUp 700ms ease 1;
	animation-fill-mode:forwards;
	transform:translateY(15px);
	opacity:0;
}

#progress-content-section .section-content.active {
	display:block;
}

@keyframes FadeInUp {
	0% {
		transform:translateY(15px);
		opacity:0;
	}

	100% {
		transform:translateY(0px);
		opacity:1;
	}
}


    </style>
</head>
<body>


<h1>Linha do tempo</h1>
<br>
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">HOME WORK</div></li>
		<li class="step step02"><div class="step-inner">RESPONSIVE PART</div></li>
		<li class="step step03"><div class="step-inner">Creative cREATIONS</div></li>
		<li class="step step04"><div class="step-inner">TESTIMONIALS PART</div></li>
		<li class="step step05"><div class="step-inner">OUR LOCATIONS</div></li>
	</ul>

	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
	<div class="section-content discovery active">
		<h2>HOME SECTION</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>

	<div class="section-content strategy">
		<h2>GALLERY SECTION</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>

	<div class="section-content creative">
		<h2>Creative CREATIONS</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>

	<div class="section-content production">
		<h2>TESTIMONIALS NOW</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>

	<div class="section-content analysis">
		<h2>OUR LOCATIONS</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>

    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$(".analysis").addClass("active").siblings().removeClass("active");
});


    </script>
</body>
</html>
</div>
>>>>>>> 5682699e7505d6ea11b7d4b1842fbd370321c05a
</x-app-layout>
