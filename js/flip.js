const cards = document.querySelectorAll('.card');


let hasFlippedCards = false;
let firstCard,secondCard;
let lockBoard = false;

function flipCard(){
    if(lockBoard) return;
    console.log('i am clicked');
    console.log(this);
    this.classList.toggle('flip');
    
    if(hasFlippedCards == false){
        hasFlippedCards = true;
        firstCard = this;

        console.log(hasFlippedCards,firstCard);
        return;
    }

    //if the player has flipped the first card
    hasFlippedCards = false;
    secondCard = this;
    console.log(hasFlippedCards,secondCard);
    console.log(firstCard.dataset.name);
    console.log(secondCard.dataset.name);
    // console.log(hasFlippedCards,secondcard);

    checkForMatch();
    
}

function checkForMatch(){
    if(firstCard.dataset.name == secondCard.dataset.name){
        disableCards();
    }
    else{
        unFlipCards();
    }
}

function disableCards(){
    firstCard.removeEventListener('click',flipCard)
    secondCard.removeEventListener('click',flipCard)
    resetBoard();
}

function unFlipCards(){
    lockBoard = true;
    setTimeout(()=>{
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    },1000)
}

function resetBoard(){
    [hasFlippedCards,lockBoard] = [false,false];
    [firstCard,secondCard] = [null,null]
}

(function shuffle(){
    cards.forEach(card=>{
        let randomPos = Math.floor(Math.random()*12);

        //order is css property of flex
        card.style.order = randomPos;
    })
})();

cards.forEach(card=> card.addEventListener('click',flipCard));