// TODO: Fungsi Untuk Merubah Rupiah
function Rp(nilai) {
    let number_string = nilai.toString(),
        sisa = number_string.length % 3,
        rupiah = number_string.substring(0, sisa),
        ribuan = number_string.substring(sisa).match(/\d{3}/g)

    if (ribuan) {
        separator = sisa ? '.' : ''
        rupiah += separator + ribuan.join('.')
    }

    return rupiah
}

// TODO: Header
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1) {
        document.querySelector('header').classList.add('header-shadow')
    } else {
        document.querySelector('header').classList.remove('header-shadow')
    }
})

// TODO: Total
window.addEventListener('load', () => {
    const pHarga = [...document.querySelectorAll('.harga')]
    const pTotal = [...document.querySelectorAll('p.total')]

    const total = pHarga.map((e) => {
        let harga = (e.innerText).split('.')
        harga = harga.join('')
        harga = parseInt(harga)

        return harga
    })

    let i = 0,
        subTotal = 0

    while (i < total.length) {
        subTotal += total[i]

        i++
    }

    pTotal.map(e => {
        e.innerText = Rp(subTotal)
    })
})

document.querySelector('input').addEventListener('input', e => {
    if (e.target.checked == true) {
        console.log('sip')
    } else {
        console.log('pis')
    }
})