const btnNextrent2 = $(".step-rent-2")
const btnNextrent3 = $(".step-rent-3")
const btnNextBackrent1 = $(".step-rent-back-1")
const btnNextBackrent2 = $(".step-rent-back-2")

const rentp1 = $('.rentp1')
const rentp2 = $('.rentp2')
const rentp3 = $('.rentp3')

btnNextrent2.on('click',function(){
    rentp1.hide()
    rentp2.show()
})

btnNextrent3.on('click',function(){
    rentp2.hide()
    rentp3.show()
})

btnNextBackrent1.on('click',function(){
    rentp2.hide()
    rentp1.show()
})

btnNextBackrent2.on('click',function(){
    rentp3.hide()
    rentp2.show()
})