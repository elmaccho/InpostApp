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
        packageNumber.style.border = "2px solid rgba(207, 205, 205, 0.479)"
    } else {
        packageNumber.style.border = "2px solid red"
        addOrderBtn.disabled = true
    }

}

const packageNumberFocus = () =>{
    packageNumber.style.border = "2px solid rgb(255, 217, 25)"
}

const packageNumberFocusOut = () =>{
    packageNumber.style.border = "2px solid rgba(207, 205, 205, 0.479)"
    packageNumberValidation()
}

addReceiveBtn.addEventListener('click', toggleAddMenu)
closeReceiveMenu.addEventListener('click', toggleAddMenu)
packageNumber.addEventListener('input', packageNumberCounter)
packageNumber.addEventListener('focus', packageNumberFocus)
packageNumber.addEventListener('focusout', packageNumberFocusOut)
packageName.addEventListener('input', packageNameCounter)
