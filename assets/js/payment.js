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

// TODO: Total
const pSubTotal = [...document.querySelectorAll('p.sub-total')]
const pTotalTagihan = document.querySelector('p.total-tagihan')
const harga = [...document.querySelectorAll('span.harga')]
let biayaAdmin = document.querySelector('span.biaya-admin').innerText
biayaAdmin = parseInt(biayaAdmin.split('.').join(''))

const total = harga.map((e) => {
    let harga = (e.innerText).split('.')
    harga = harga.join('')
    harga = parseInt(harga)

    return harga
}).reduce((accu, curr) => accu + curr)

const totalTagihan = total + biayaAdmin

// TODO: Masukkan Total kedalam element pTotal
pSubTotal.map(e => e.innerText = `Rp. ${Rp(total)}`)

// TODO: Masukkan Total Tagihan kedalam element pTotalTagihan
pTotalTagihan.innerText = `Rp. ${Rp(totalTagihan)}`

document.querySelector('input').addEventListener('input', e => {
    if (e.target.checked == true) {
        console.log('sip')
    } else {
        console.log('pis')
    }
})