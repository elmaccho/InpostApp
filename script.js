const addReceiveBtn = document.querySelector('.addReceiveBtn')
const addPackagePage = document.querySelector('.add-package-page')
const closeReceiveMenu = document.querySelector('.closeReceiveMenu')

const packageNumber = document.querySelector('.packageNumber')
const packageName = document.querySelector('.packageName')
const counters = document.querySelectorAll('.counter')
const addOrderBtn = document.getElementById('addOrderBtn')



const toggleAddMenu = () => {
    addPackagePage.classList.toggle('menuToggle')
}

const packageNumberCounter = () => {
    for(let counter of counters){
        counter = packageNumber.value.length
        packageNumber.nextElementSibling.firstChild.textContent = counter
        packageNumberValidation()
    }
}

const packageNameCounter = () => {
    const counter = packageName.value.length
    packageName.nextElementSibling.firstChild.textContent = counter
}

const packageNumberValidation = () => {
    if(packageNumber.value.length == 24){
        addOrderBtn.disabled = false
    } else {
        addOrderBtn.disabled = true
    }

}

addReceiveBtn.addEventListener('click', toggleAddMenu)
closeReceiveMenu.addEventListener('click', toggleAddMenu)
packageNumber.addEventListener('input', packageNumberCounter)
packageName.addEventListener('input', packageNameCounter)