<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content py-5  modal-custom">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 cust-search-title" id="searchModalLabel">I am looking for</h1>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3 modal-custom-input">
                        <input type="text" class="form-control" id="recipient-name" placeholder="Enter Search Term">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4.3,
        spaceBetween: 40,
        // centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            360: {
                slidesPerView: 1.3,
            },
            575: {
                slidesPerView: 2.5,
            },
            992: {
                slidesPerView: 2.5,
            },
            1200: {
                spaceBetween: 30,
                slidesPerView: 4.5,
            },
        },
    });
</script>
<script>
    var swiper = new Swiper(".partner1", {
        slidesPerView: 5,
        spaceBetween: 25,

        // centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            360: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            575: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4.5,
            },
        },
    });
</script>
<script>
    var swiper = new Swiper(".partner-2", {
        slidesPerView: 5,
        spaceBetween: 25,
        // centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>


<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        loop:true,
        center:true,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

    function changeImg(imagechanger){
        document.getElementById("map-image").src =imagechanger;
    }

</script>
