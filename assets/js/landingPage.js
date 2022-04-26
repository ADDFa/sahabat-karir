window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1) {
        document.querySelector('header').classList.add('header-shadow')
    } else {
        document.querySelector('header').classList.remove('header-shadow')
    }
})