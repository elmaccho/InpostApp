const receiveBtn = document.querySelector('.receiveBtn')
const sendBtn = document.querySelector('.sendBtn')


const addReceiveBtn = document.querySelector('.addReceiveBtn')
const addPackagePage = document.querySelector('.add-package-page')
const closeReceiveMenu = document.querySelector('.closeReceiveMenu')
const packageBoxes = document.querySelectorAll('.packageBox')

const packageNumber = document.querySelector('.packageNumber')
const packageName = document.querySelector('.packageName')
const counters = document.querySelectorAll('.counter')
const addOrderBtn = document.getElementById('addOrderBtn')

const packageInfo = document.querySelector('.packageInfo')
const packageInfoBox = document.querySelector('.packageBox .packageInfo')
const closeInfoPage = document.querySelector('.closeInfoPage')

const trackingNumberInfo = document.querySelector('.trackingNumberInfo')
const statusInfo = document.querySelector('.statusInfo')
const senderInfo = document.querySelector('.senderInfo')
const nameInfo = document.querySelector('.nameInfo')

const menuBtn = document.querySelector('.menuBtn')
const mainContainer = document.querySelector('.mainContainer')
const sideMenu = document.querySelector('.sideMenu')
const mainBar = document.querySelector('.mainBar')
const footBar = document.querySelector('.footBar')
const switchBar = document.querySelector('.switchBar')

const exit = document.querySelector('.exit')




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

for(let packageBox of packageBoxes){
    packageBox.addEventListener('click', e => {
        packageInfo.classList.toggle('packageInfoToggle')

        const closestTrackingNumber = e.target.closest('.packageBox').querySelector('.trackingNumberBox').innerText
        const closestStatus = e.target.closest('.packageBox').querySelector('.statusBox').innerText
        const closestSender = e.target.closest('.packageBox').querySelector('.senderBox').innerText


        trackingNumberInfo.textContent = closestTrackingNumber
        statusInfo.textContent = closestStatus
        senderInfo.textContent = closestSender
    })
}

const TogglecloseInfoPage = () => {
    packageInfo.classList.toggle('packageInfoToggle')
}


const menuToggle = () => {
        mainContainer.classList.toggle('mainToggle')
        sideMenu.classList.toggle('sideMenuToggle')
        exit.classList.toggle('exitToggle')
}

addReceiveBtn.addEventListener('click', toggleAddMenu)
closeReceiveMenu.addEventListener('click', toggleAddMenu)

closeInfoPage.addEventListener('click', TogglecloseInfoPage)


packageNumber.addEventListener('input', packageNumberCounter)
packageNumber.addEventListener('focus', packageNumberFocus)
packageNumber.addEventListener('focusout', packageNumberFocusOut)
packageName.addEventListener('input', packageNameCounter)

menuBtn.addEventListener('click', menuToggle)

exit.addEventListener('click', () => {
    mainContainer.classList.toggle('mainToggle')
    sideMenu.classList.toggle('sideMenuToggle')
    exit.classList.toggle('exitToggle')
})