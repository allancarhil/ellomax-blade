const btnNextSale2 = $(".step-sale-2")
const btnNextSale3 = $(".step-sale-3")
const btnBackSale1 = $(".step-sale-back-1")
const btnBackSale2 = $(".step-sale-back-2")

const salep1 = $('.salep1')
const salep2 = $('.salep2')
const salep3 = $('.salep3')

btnNextSale2.on('click',function(){
    salep1.hide()
    salep2.show()
})

btnNextSale3.on('click',function(){
    salep2.hide()
    salep3.show()
})

btnBackSale1.on('click',function(){
    salep2.hide()
    salep1.show()
})

btnBackSale2.on('click',function(){
    salep3.hide()
    salep2.show()
})

const price = document.querySelector('#price')
    price.addEventListener('keyup', (e) => {
        let { value } = e.target

        value = value.replace(/\D/g, "")
        value = value.replace(/(\d{1,2})$/, ",$1")
        value = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")

        e.target.value = 'R$ '+ value
    })