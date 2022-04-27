/* ----------------------------------------------------------------------------------------------
 * Header
 * ----------------------------------------------------------------------------------------------
 */
// ? Header
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1) {
        document.querySelector('header').classList.add('header-shadow')
    } else {
        document.querySelector('header').classList.remove('header-shadow')
    }

    // ? Navigasi Hamburger
    if (document.querySelector('.navigasi-halaman-landing').classList.contains('lihat-navigasi')) document.querySelector('.navigasi-halaman-landing').classList.remove('lihat-navigasi')
})

// ? Icon Cari
document.querySelector('.icon-cari').addEventListener('click', () => {
    document.querySelector('.header__cari').click()
})

// ? Navigasi Hamburger
const hamburgerNavigasi = document.querySelector('.hamburger-navigasi')
hamburgerNavigasi.addEventListener('click', () => {
    document.querySelector('.navigasi-halaman-landing').classList.toggle('lihat-navigasi')
})

document.addEventListener('click', e => {
    if (!hamburgerNavigasi.contains(e.target)) {
        document.querySelector('.navigasi-halaman-landing').classList.remove('lihat-navigasi')
    }
})

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

    const arrowSlick = [...document.querySelectorAll('.jumbotron-slider .slick-arrow')]
    arrowSlick.map(e => {
        e.style.display = 'none'
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
})