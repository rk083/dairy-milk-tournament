//Form inputs

const solo = document.getElementById('solo')
const duo = document.getElementById('duo')
const squad = document.getElementById('squad')
const form = document.querySelector('form')
const soloClass = document.querySelector('.solo')
const duoClass = document.querySelector('.duo')
const squadClass = document.querySelector('.squad')
const formGroupTwo = document.querySelector('.form-controlls-group-two')
const leader = document.getElementById('leader')
const playerTwo = document.getElementById('player-two')
const playerThree = document.getElementById('player-three')
const playerFour = document.getElementById('player-four')
const playerFive = document.getElementById('player-five')



//For Solo
solo.addEventListener('click', (e) => {
    
if(solo.checked == true) {
    console.log('yes');
    solo.style.marginRight = '15em'
    duo.style.display = 'none'
    duoClass.style.display = 'none'
    squad.style.display = 'none'
    squadClass.style.display = 'none'
    formGroupTwo.style.display = 'none'


}

else {
    console.log('no');
    solo.style.marginRight = '0'
    duo.style.display = 'block'
    duoClass.style.display = 'block'
    squad.style.display = 'block'
    squadClass.style.display = 'block'
    formGroupTwo.style.display = 'block'
}
})


//for duo
duo.addEventListener('click', (e) => {
    
    if(duo.checked == true) {
        console.log('yes');
        duo.style.marginRight = '15em'
        solo.style.display = 'none'
        soloClass.style.display = 'none'
        squad.style.display = 'none'
        squadClass.style.display = 'none'
       playerThree.style.display = 'none'
       playerFour.style.display = 'none'
       playerFive.style.display = 'none'
    
    }
    
    else {
        console.log('no');
       duo.style.marginRight = '0'
        solo.style.display = 'block'
        soloClass.style.display = 'block'
        squad.style.display = 'block'
        squadClass.style.display = 'block'
        playerThree.style.display = 'block'
        playerFour.style.display = 'block'
        playerFive.style.display = 'block'
     
    }
    })

    // for squad

    squad.addEventListener('click', (e) => {
    
        if(squad.checked == true) {
            console.log('yes');
          squad.style.marginRight = '13em'
            solo.style.display = 'none'
            soloClass.style.display = 'none'
            duo.style.display = 'none'
            duoClass.style.display = 'none'
        
        
        }
        
        else {
            console.log('no');
          squad.style.marginRight = '0'
            solo.style.display = 'block'
            soloClass.style.display = 'block'
            duo.style.display = 'block'
            duoClass.style.display = 'block'
        }
        })
    