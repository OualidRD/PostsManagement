@extends('layout')

@section('content')
<div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper" style="padding-top: 50px margin: 80px margin-bottom: 120px ;margin-bottom:-171px" >
            <div class="swiper-slide" style=" position: relative">
                <img class="object-cover w-full h-96" src="/images/MRC-170622-ResearchTeam-GettyImages-1330966683.jpg" alt="Gestion des étudiants" style="height: 81vh;opacity:.7">
                <div class="container p-4 bg-white shadow-md rounded-lg" style="background-color: transparent; position: absolute; bottom: 20px; left: 20px;font-weight:bold">
                    <h1 style="color: #000000; font-size: 5rem;font-family: system-ui;;padding-bottom:9%">
                        Chaque grand rêve commence par une grande décision
                    </h1>
                </div>
            </div>

            <div class="swiper-slide" style="position: relative">
                <img class="object-cover w-full h-full" src="/images/Research__1_.jpg" alt="Gestion des étudiants" style="height: 81vh;opacity:.7">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white" style="padding-bottom:9%">
                        <h1 style="color: #000000; font-size: 5rem;font-family: system-ui;; font-weight:bold;width:46%;margin-bottom:-2%;padding-right:210px">
                            Faites de chaque jour une étape vers 
                        </h1>
                        <h1 <h1 style="color: #000000; font-size: 5rem;font-family: system-ui;;font-weight:400;font-style:italic"> la réalisation de vos aspirations</h1> 
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide relative">
                <img class="object-cover w-full h-96" src="/images/9XD.jpg" alt="Gestion des étudiants"style="height: 81vh;opacity:.7">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white">
                        <h1 style="color: #000000; font-size: 5rem;font-family: system-ui;; font-weight:bold"">
                            Programming powers posts turning challenges into 
                        </h1>
                        <h1 style="color: #000000; font-size: 5rem; font-family:revert; font-weight:bold;font-weight:400;font-style:italic">solutions</h1>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="flex bg-green-500 h-45vh">
    <div class="w-2/3">
        <h1 class="text-white pl-36 mb-3 ml-36" style="padding-left: 0vh;font-family: sans-serif">APERÇU</h1>
        <hr class="w-388 ml-36">
        <h1 class="text-white text-5xl ml-36 pb-14" style="font-family: sans-serif">Our expertise</h1>
        <p class="ml-48 text-white w-550" style="margin-top:-2%; width:83%; margin-bottom: 54px;font-size: large; font-family: sans-serif;">
            Design and manage workstation management solutions to meet the diverse needs of businesses of all sizes. Develop and integrate varied skills to master the entire workstation management process, 
            from planning to execution. Be a pioneer in adopting new technologies to optimize efficiency and satisfaction for the businesses we support.
    </div>
    <div class="w-1/3 flex justify-center items-center">
        <img src="/images/humanity.png" style="height: 50%">
    </div>
</div>


@endsection
@section('scripts')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
</script>
