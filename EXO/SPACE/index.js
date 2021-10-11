const btn = document.querySelector('#btn');
const img = document.getElementById('img');

btn.addEventListener('click',()=> {
    img.classList.toggle('show');
    //add vs remove
    // alert('ça marche');


})

//********************************************
const mouseEvents = document.querySelector('.mouseEvents'); 
const horizontal = document.querySelector('.horizontal');
const vertical = document.querySelector('.vertical');


mouseEvents.addEventListener('mousemove',(event)=> { 
    console.log(event);
    horizontal.innerHTML= event.x;
    vertical.innerHTML=event.y;
    mouseEvents.style.left = event.x/ window.innerWidth*100+ '%';
    // mouseEvents.style.color= blue;
    if(event.x>500) {
        document.body.style.filter= 'blur(3px)';
    } else{
        document.body.style.filter= 'none';
    }
    })
    //*****************************************************

    const input = document.getElementById('input');
    input.addEventListener('input', (event) => {
        vertical.innerHTML=event.target.value;
    })

    //******************************************
    const theme= document.querySelectorAll('.theme');
  

    theme.forEach((item)=>{
        item.addEventListener('click',(event) =>{
            console.log(event.target.id)
            document.body.classList.remove("darktheme", "salamontheme","turquoisetheme");
            switch(event.target.id){
                case"dark":
                document.body.classList.add("darktheme");
                break;
                case"salamon":
                document.body.classList.add("salamontheme");
                break;
                case"turquoise":
                document.body.classList.add("turquoisetheme");
                break;
                default:
                    null;
            }
        })
    })




