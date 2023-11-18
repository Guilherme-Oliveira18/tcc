<title> Sobre nós </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" <x-app-layout
    title="Sobre">
<div>
    <div class="w-full text-center pt-32 pb-10">
        <h2 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl">Sobre Nós</h2>
        <h2 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-sky-500 pt-3">&lt;New Wave&gt;</h2>
    </div>
    <div class="w-full flex items-center flex-wrap justify-center py-4 px-20 text-lg text-justify">
        <img class="h-80 mb-5t rounded-lg align-items-center" src="{{ asset('storage/logo/' . 'New Wave.png') }}"
            alt="Logo">

        <p>Formado por cinco integrantes, a empresa New Wave tem como objetivo a proposta de um site que ajudará a Etec
            Fernando Prestes a divulgar suas tradições e histórias, juntamente a isso, ajudar os alunos a conhecerem seu
            local de estudo e a se adaptar as suas origens, sendo isso em um site de fácil acesso e uso.

            Nossos clientes são estudantes de uma escola técnica com tradições e gincanas, por isso, buscam uma forma de
            aumentar o acesso ao histórico, tradições e à gincana da Etec, buscam uma forma de melhor se conectar e
            entrosar.

            Desenvolveremos um site com todo conteúdo visual de entretenimento e didático da escola, com intuito de
            compartilhar as notícias e todos os eventos ocorridos dentro deste colégio.
        </p>
    </div>
    <hr class="w-f h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

    {{-- Conheça nossa equipe --}}
    <h2 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl">Conheça nossa equipe</h2>
    <section class="container mx-auto py-36 px-8">

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="shadow-lg rounded-lg relative overflow-hidden group h-3/4">
                <img class="rounded-lg"
                    src="{{ asset('storage/profile-photos/' . 'GiWAgXD11BJTTy2G2ECtK6GFwPxuuLHwDzEzLyQh.jpg') }}"
                    alt="Team Section">
                <div
                    class=" absolute bg-black bg-opacity-75  group-hover:translate-x-0 -translate-x-full rounded-lg top-0 left-0 w-full h-full flex items-center
                    justify-center duration-300">
                    <div class="text-center">
                        <h3 class="text-white textf-2xl font-bold mb-2">Victor Freitas</h3>
                        <h4 class="text-white text-lg font-normal mb-2">CEO</h4>
                        <ul>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="https://www.instagram.com/trunhan/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--SEGUNDO-->
            <div class="group shadow-lg rounded-lg relative overflow-hidden h-3/4">
                <img class="rounded-lg"
                    src="{{ asset('storage/profile-photos/' . '5DHHRIMiDFCL4WvgvR5UhpCKXZaSiomZgXtMUtSQ.jpg') }}"
                    alt="Team Section">
                <div
                    class=" absolute bg-black bg-opacity-75  group-hover:translate-x-0 -translate-x-full rounded-lg top-0 left-0 w-full h-full flex items-center
                    justify-center duration-300">
                    <div class="text-center">
                        <h3 class="text-white textf-2xl font-bold mb-2">Leandro Fonseca</h3>
                        <h4 class="text-white text-lg font-normal mb-2">CEO</h4>
                        <ul>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--TERCEIRO-->
            <div class="shadow-lg rounded-lg relative overflow-hidden group h-3/4">
                <img class="rounded-lg"
                    src="{{ asset('storage/profile-photos/' . 'LEWD0JjI0l9maCc56PY0EzzuPOp73MXB4Odlqbf1.jpg') }}"
                    alt="Team Section">
                <div
                    class=" absolute bg-black bg-opacity-75  group-hover:translate-x-0 -translate-x-full rounded-lg top-0 left-0 w-full h-full flex items-center
                    justify-center duration-300">
                    <div class="text-center">
                        <h3 class="text-white textf-2xl font-bold mb-2">Gabriel Lupateli</h3>
                        <h4 class="text-white text-lg font-normal mb-2">CEO</h4>
                        <ul>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--QUARTO-->
            <div class="shadow-lg rounded-lg relative overflow-hidden group h-3/4">
                <img class="rounded-lg" src="{{ asset('storage/profile-photos/' . 'guizinho.jpeg') }}" alt="Team Section">
                <div
                    class=" absolute bg-black bg-opacity-75  group-hover:translate-x-0 -translate-x-full rounded-lg top-0 left-0 w-full h-full flex items-center
                    justify-center duration-300">
                    <div class="text-center">
                        <h3 class="text-white textf-2xl font-bold mb-2">Guilherme Rodrigues</h3>
                        <h4 class="text-white text-lg font-normal mb-2">CEO</h4>
                        <ul>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--QUINTO-->
            <div class="shadow-lg rounded-lg relative overflow-hidden group h-3/4">
                <img class="rounded-lg" src="{{ asset('storage/profile-photos/' . 'zoio.jpeg') }}" alt="Team Section">
                <div
                    class=" absolute bg-black bg-opacity-75  group-hover:translate-x-0 -translate-x-full rounded-lg top-0 left-0 w-full h-full flex items-center
                    justify-center duration-300">
                    <div class="text-center">
                        <h3 class="text-white textf-2xl font-bold mb-2">Nicolas Celestino</h3>
                        <h4 class="text-white text-lg font-normal mb-2">CEO</h4>
                        <ul>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="inline-block mx-3"><a class="text-white hover:text-red-500 duration-300"
                                    href="#"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

    </section>
</div>
</x-app-layout>
