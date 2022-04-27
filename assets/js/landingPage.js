/* ----------------------------------------------------------------------------------------------
 * Konten
 * ----------------------------------------------------------------------------------------------
 */
// ? Slick
$(document).ready(function () {
    $('.jumbotron-slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
    })

    const jumbotronArrowBack = document.querySelector('.jumbotron-slider__arrow.go-back')
    const jumbotronArrowNext = document.querySelector('.jumbotron-slider__arrow.go-next')
    const jumbotronArrow = [...document.querySelectorAll('.jumbotron-slider__arrow')]
    jumbotronArrow.map(e => {
        e.addEventListener('click', el => {
            if (jumbotronArrowBack.contains(el.target)) {
                document.querySelector('.jumbotron .slick-prev').click()
            } else if (jumbotronArrowNext.contains(el.target)) {
                document.querySelector('.jumbotron .slick-next').click()
            }
        })
    })



    // ? Gabung Bersama Kami Slider
    $('.pembungkus-konten__gabung-bersama-kami').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })


    // ! Menghilangkan tombol prev dan next slick
    const arrowSlick = [...document.querySelectorAll('.slick-arrow')]
    arrowSlick.map(e => {
        e.style.display = 'none'
    })
})