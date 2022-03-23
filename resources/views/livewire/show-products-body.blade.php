<div class="bg-white">
    
    <div class="grid grid-cols-1 md:grid-cols 2 lg:grid-cols-3 gap-3 py-2" style="margin-top: 4%;">
        <div></div>
        <div>
            <h1 class="text-3xl text-center text-black col-span-2">NUESTROS PRODUCTOS</h1>
        </div>
        <div></div>
    </div>

    <!-- información de los productos -->
    <div class="container" style="margin-top: 4%;">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-4">
            <div class="js-show-on-scroll-left relative  rounded overflow-hidden" style="height: 50vh;">
                <a href="#/" id="mostrarLargas">
                    <img  class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_1.jpg') }}" alt="">
                    <div class="grid place-items-center">
                        <div class="absolute mb-4 py-2.5 px-2.5 rounded-sm bottom-0 bg-gray-200 text-black font-bold uppercase text-md text-center leading-4">
                            <p>MEDIAS LARGAS</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="js-show-on-scroll-left relative  rounded overflow-hidden" style="height: 50vh;">
                <a href="#/" id="mostrarSinPie">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_2.jpg') }}" alt="">
                    <div class="grid place-items-center">
                        <div class="absolute mb-4 py-2.5 px-2.5 rounded-sm bottom-0 bg-gray-200 text-black uppercase font-bold text-md text-center leading-4">
                            <p>Medias Sin Pie</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="js-show-on-scroll-right relative  rounded overflow-hidden" style="height: 50vh;">
                <a href="#/" id="mostrarVendasCoban">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_3.jpg') }}" alt="">
                    <div class="grid place-items-center">
                        <div class="absolute mb-4 py-2.5 px-2.5 rounded-sm bottom-0 bg-gray-200 text-black text-md uppercase font-bold text-center leading-4">
                            <p>Vendas Cobán</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="js-show-on-scroll-left relative  rounded overflow-hidden" style="height: 50vh;">
                <a href="#/" id="mostrarPackFut">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/packFutbolero.jpeg') }}" alt="">
                    <div class="grid place-items-center">
                        <div class="absolute mb-4 py-2.5 px-2.5 rounded-sm bottom-0 bg-gray-200 text-black text-md font-bold text-center leading-4">
                            <p>Pack Fútbolero</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="js-show-on-scroll-right relative  rounded overflow-hidden" style="height: 50vh;">
                <a href="#/" id="mostrarAntideslizantes">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_4.jpg') }}" alt="">
                    <div class=" grid place-items-center">
                        <div class="absolute mb-4 py-2.5 px-2.5 rounded-sm bottom-0 bg-gray-200 text-black text-md leading-4 text-center uppercase font-bold">
                            <p>Medias Antideslizantes</p>
                        </div>
                    </div>
                </a>
            </div>

            
        </div>
    </div>

    <script type="text/javascript">
        const callback = function(entries) {
            entries.forEach((entry) => {
                console.log(entry);

                if(entry.isIntersecting){
                    entry.target.classList.add("animate-fade-in-left");
                }else{
                    entry.target.classList.remove("animate-fade-in-left");
                }
            });
        };

        const observer = new IntersectionObserver(callback);

        const targets = document.querySelectorAll(".js-show-on-scroll-left");
        targets.forEach(function(target){
            target.classList.add("opacity-1");
            observer.observe(target);
        });
    </script>
    <script type="text/javascript">
        const callback2 = function(entries) {
            entries.forEach((entry) => {
                console.log(entry);

                if(entry.isIntersecting){
                    entry.target.classList.add("animate-fade-in-right");
                }else{
                    entry.target.classList.remove("animate-fade-in-right");
                }
            });
        };

        const observer2 = new IntersectionObserver(callback2);

        const targets2 = document.querySelectorAll(".js-show-on-scroll-right");
        targets2.forEach(function(target){
            target.classList.add("opacity-1");
            observer2.observe(target);
        });
    </script>

    <script type="text/javascript">
        document.getElementById("mostrarLargas").onclick = function() {
            if(document.getElementById("showLargas").style.display === 'block'){
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
            }else{
                document.getElementById("showLargas").style.display = "block";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
            }
        }

        document.getElementById("mostrarSinPie").onclick = function() {
            if(document.getElementById("showSinPie").style.display === 'block'){
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showSinPie").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
            }else{
                document.getElementById("showSinPie").style.display = "block";
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
            }
        }

        document.getElementById("mostrarVendasCoban").onclick = function() {
            if(document.getElementById("showVendasCoban").style.display === 'block'){
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }else{
                document.getElementById("showVendasCoban").style.display = "block";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showSinPie").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }
        }

        document.getElementById("mostrarPackFut").onclick = function() {
            if(document.getElementById("showPackFut").style.display === 'block'){
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }else{
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "block";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }
        }

        document.getElementById("mostrarAntideslizantes").onclick = function() {
            if(document.getElementById("showAntideslizantes").style.display === 'block'){
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }else{
                document.getElementById("showVendasCoban").style.display = "none";
                document.getElementById("showPackFut").style.display = "none";
                document.getElementById("showAntideslizantes").style.display = "block";
                document.getElementById("showLargas").style.display = "none";
                document.getElementById("showLargas").style.display = "none";
            }
        }
    </script>

</div>
