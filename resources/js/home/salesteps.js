const btnNextSale2 = $(".step-sale-2")
const btnNextSale3 = $(".step-sale-3")
const btnNextBackSale1 = $(".step-sale-back-1")
const btnNextBackSale2 = $(".step-sale-back-2")

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

btnNextBackSale1.on('click',function(){
    salep2.hide()
    salep1.show()
})

btnNextBackSale2.on('click',function(){
    salep3.hide()
    salep2.show()
})