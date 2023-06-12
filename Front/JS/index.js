
//section recherche home

let btnBedrooms = document.querySelectorAll('.btn-bedrooms')
let slideTwo = document.querySelector('.container-slide2')

let btnArea = document.querySelectorAll('.btn-area')
let slidethree = document.querySelector('.container-slide3')

let btnPrice = document.querySelectorAll('.btn-price')
let slideFour=  document.querySelector('.container-slide4')

let btnApproximate = document.querySelectorAll('.btn-arr')
let slideFive = document.querySelector('.container-slide5')

let btnRetry = document.querySelector('.btn-slide-retry')
console.log(btnRetry);

for (let i = 0; i < btnBedrooms.length; i++) {
   btnBedrooms[i].addEventListener('click', () =>{
      slideTwo.style.width="100%"
      slideTwo.style.transition="all 0.7s"
   })  
}

for (let j = 0; j < btnArea.length; j++) {
   btnArea[j].addEventListener('click', () =>{
      slidethree.style.width="100%"
      slideTwo.style.transition="all 0.7s"
   })  
}

for (let h = 0; h < btnPrice.length; h++) {
   btnPrice[h].addEventListener('click', () =>{
      slideFour.style.width="100%"
      slideTwo.style.transition="all 0.7s"
   })  
}

for (let l = 0; l < btnApproximate.length; l++) {
   btnApproximate[l].addEventListener('click', () =>{
      slideFive.style.width="100%"
      slideTwo.style.transition="all 0.7s"
   })  
}

btnRetry.addEventListener('click', ()=>{
   slideTwo.style.width="0"
   slideTwo.style.transition="all 0.2s"
   slidethree.style.width="0"
   slidethree.style.transition="all 0.5s"
   slideFour.style.width="0" 
   slideFour.style.transition="all 0.7s"
   slideFive.style.width="0"
   slideFive.style.transition="all 0.9s"
   console.log("tesdt");
})

const mysql = require('mysql');

const connection = mysql.createConnection({
  host: '34.163.91.117',
  port: '3306',
  user: 'dwain',
  password: 'mdp',
  database: 'reshome-db'
});

connection.connect((err) => {
  if (err) {
    console.error('Erreur de connexion :', err);
    return;
  }
  console.log('Connecté à la base de données MySQL');
});
