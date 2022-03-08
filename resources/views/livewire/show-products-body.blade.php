<div class="bg-white">
    
    <div class="grid grid-cols-1 md:grid-cols 2 lg:grid-cols-3 gap-3 py-2" style="margin-top: 4%;">
        <div></div>
        <div>
            <h1 class="text-3xl text-center text-black col-span-2">NUESTROS PRODUCTOS.</h1>
        </div>
        <div></div>
    </div>

    <!-- información de los productos -->
    <div class="container" style="margin-top: 4%;">
        <div class="grid grid-cols-1 md:grid-cols-1">
            <div><p class="text-black">Medias Largas</p></div>
            <div class="js-show-on-scroll-left w-full rounded" style="height: 50vh;">
                <a href="#/" id="mostrarLargas">
                    <img  class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_1.jpg') }}" alt="">
                </a>
            </div>
            <div hidden id="showLargas" class="bg-black rounded px-2">
                <p class="text-white text-center" class="bg-black rounded px-2">AQUÍ VAN LOS COLORES</p>
            </div>

            <div style="margin-top: 2%;"><p class="text-black">Medias Sin Pie</p></div>
            <div class="js-show-on-scroll-left w-full rounded" style="height: 50vh;">
                <a href="#/" id="mostrarSinPie">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_2.jpg') }}" alt="">
                </a>
            </div>
            <div hidden id="showSinPie" class="bg-black rounded px-2">
                <p class="text-white text-center" class="bg-black rounded px-2">AQUÍ VAN LOS COLORES</p>
            </div>

            <div style="margin-top: 2%;"><p class="text-black">Vendas Coban</p></div>
            <div class="js-show-on-scroll-right w-full rounded" style="height: 50vh;">
                <a href="#/" id="mostrarVendasCoban">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_3.jpg') }}" alt="">
                </a>
            </div>
            <div hidden id="showVendasCoban" class="bg-black rounded px-2">
                <p class="text-white text-center">AQUÍ VAN LOS COLORES</p>
            </div>

            <div style="margin-top: 2%;"><p class="text-black">Pack Fútbolero</p></div>
            <div class="js-show-on-scroll-left w-full rounded" style="height: 50vh;">
                <a href="#/" id="mostrarPackFut">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/packFutbolero.jpeg') }}" alt="">
                </a>
            </div>
            <div hidden id="showPackFut" class="bg-black rounded px-2">
                <p class="text-white text-center">AQUÍ VAN LOS PACKS</p>
            </div>

            <div style="margin-top: 2%;"><p class="text-black">Medias Antideslizantes</p></div>
            <div class="js-show-on-scroll-right w-full rounded" style="height: 50vh;">
                <a href="#/" id="mostrarAntideslizantes">
                    <img class="object-fill w-full h-full rounded-md" src="{{ asset('images/productos/rc_4.jpg') }}" alt="">
                </a>
            </div>

            <!-- AQUI HACER OTRO GRID PARA LOS SUB PRODUCTOS -->
            <div id="showAntideslizantes" class="hidden">
                <div class="grid grid-cols-3 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 bg-black rounded mt-2" >
                    <div class="bg-black mx-2 rounded border-inherit" style="margin-top: 2%; margin-bottom: 2%; border-width: 1px;">
                        <p class="text-base text-slate-50 text-center italic mt-2">Medias Antideslizantes Diseño Flechas</p>
                        <a href="#/"  style="height: 20vh;">
                            <img class="object-fill w-full" src="{{ asset('images/productos/rc_antiFlecha.jpg') }}" alt="">
                        </a>
                        <p class="text-base text-slate-50 text-left italic mx-2">Descripción: aquí va la descripción del producto.</p>
                        <p class="text-base text-slate-50 text-left italic mx-2 mb-2">Valor: $5.000</p>
                    </div>
                    <div class="bg-black mx-2 rounded border-inherit" style="margin-top: 2%; margin-bottom: 2%; border-width: 1px;">
                        <p class="text-base text-slate-50 text-center italic mt-2">Medias Antideslizantes Diseño Fluorescente</p>
                        <a href="#/"  style="height: 20vh;">
                            <img class="object-fill w-full" src="{{ asset('images/productos/rc_antiFluor.jpg') }}" alt="">
                        </a>
                        <p class="text-base text-slate-50 text-left italic mx-2">Descripción: aquí va la descripción del producto.</p>
                        <p class="text-base text-slate-50 text-left italic mx-2 mb-2">Valor: $5.000</p>
                    </div>
                    <div class="bg-black mx-2 rounded border-inherit" style="margin-top: 2%; margin-bottom: 2%; border-width: 1px;">
                        <p class="text-base text-slate-50 text-center italic mt-2">Medias Antideslizantes Diseño Punto</p>
                        <a href="#/"  style="height: 20vh;">
                            <img class="object-fill w-full" src="{{ asset('images/productos/rc_antiPunto.jpg') }}" alt="">
                        </a>
                        <p class="text-base text-slate-50 text-center italic mx-2">Descripción: aquí va la descripción del producto.</p>
                        <p class="text-base text-slate-50 text-center italic mx-2 mb-2">Valor: $5.000</p>
                    </div>
                    <div class="bg-black mx-2 rounded border-inherit" style="margin-top: 2%; margin-bottom: 2%; border-width: 1px;">
                        <p class="text-base text-slate-50 text-center italic mt-2">Medias Antideslizantes Diseño Tape Desgin</p>
                        <a href="#/"  style="height: 20vh;">
                            <img class="object-fill w-full" src="{{ asset('images/productos/rc_antiDesign.jpg') }}" alt="">
                        </a>
                        <p class="text-base text-slate-50 text-center italic mx-2">Descripción: aquí va la descripción del producto.</p>
                        <p class="text-base text-slate-50 text-center italic mx-2 mb-2">Valor: $5.000</p>
                    </div>
                </div>
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
