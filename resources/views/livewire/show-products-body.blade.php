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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="bg-black  rounded-lg js-show-on-scroll-left">
                <img class="rounded-lg mx-auto" src="{{ asset('images/flecha.jpg') }}" alt="">
            </div>
            <div class="bg-black rounded-lg js-show-on-scroll-right">
                <img class="rounded-lg mx-auto my-auto" src="{{ asset('images/otro.jpg') }}" alt="">
            </div>
            <div class="bg-black rounded-lg js-show-on-scroll-left">
                <img class="rounded-lg mx-auto my-auto" src="{{ asset('images/puntos.jpg') }}" alt="">
            </div>
            <div class="bg-black rounded-lg js-show-on-scroll-right">
                <img class="rounded-lg mx-auto my-auto" src="{{ asset('images/tape-design.jpg') }}" alt="">
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

</div>
