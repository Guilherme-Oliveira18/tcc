<x-app-layout title="Historia">
    <div class=align-items-center>

    <ol class="items-center sm:flex">
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>
        <li class="relative mb-6 sm:mb-0">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
            </div>
            <div class="mt-3 sm:pe-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements.</p>
            </div>
        </li>
    </ol>

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
</x-app-layout>


