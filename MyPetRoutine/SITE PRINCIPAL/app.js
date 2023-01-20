const header = document.querySelector("header");

const first_skill = document.querySelector(".skill:first-child");
const sk_counters = document.querySelectorAll(".counter span");
const progress_bars = document.querySelectorAll(".skill svg circle");

const links = document.querySelectorAll(".nav-link");

const toggle_btn = document.querySelector(".toggle-btn")


window.addEventListener("scroll", () =>{
    activeLink();
   if(!skillsPlayed) skillsCounter();
});


/*Navbar*/
function styckyNavbar(){
    header.classList.toggle("scrolled", window.pageYOffset > 0);
}
styckyNavbar();
window.addEventListener("scroll", styckyNavbar);


/*Reveal Animation*/
let sr = ScrollReveal({
    duration: 2500,
    distace: "60px",
});

sr.reveal(".showcase-info", {delay: 600});
sr.reveal(".showcase-image", {origin: "top", delay: 700});





/*Skills Animation*/
function hasReached(el){
    let topPosition = el.getBoundingClientRect().top;
    //console.log(topPosition);
    if(window.innerHeight >= topPosition + el.offsetHeight) return true;
    return false;
}

function updateCount(num, maxNum){
    let currentNum = +num.innerText;
    
     if(currentNum < maxNum){
        num.innerText = currentNum + 1;
        setTimeout(() => {
            updateCount(num, maxNum);
        }, 12);
     }
}

let skillsPlayed = false;

function skillsCounter(){
    
    if(!hasReached(first_skill)) return;

    skillsPlayed = true;

    sk_counters.forEach((counter, i) => {
        let target = +counter.dataset.target;
        //console.log(typeof target)     
        let strokeValue = 426 - 426 * (target / 100);

        //console.log(strokeValue);

        progress_bars[i].style.setProperty("--target", strokeValue);

       
        
        setTimeout(() => {
            updateCount(counter, target);
        }, 400)

    });

    progress_bars.forEach(
        (p) => (p.style.animation = "progress 2s ease-in-out forwards")
    ); 
    
}

/*Swipper*/
const swiper = new Swiper('.swiper', {
    loop: true,
    speed: 500,
    autoplay: true,
  
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });



  /* Links Scroll*/
function activeLink(){
    let sections = document.querySelectorAll("section[id]");
    //console.log(Array.from(sections));
    let passedSections = Array.from(sections).map((sct, i) => {
        return { 
            y: sct.getBoundingClientRect().top - header.offsetHeight,
            id: i,
        };
    }).filter(sct => sct.y <= 0)
    let currSectionID = passedSections.at(-1).id;
    //console.log(currSectionID);

    links.forEach((l) => l.classList.remove("active"));
    links[currSectionID].classList.add("active");
}


/*DARK MODE*/

let firstTheme = localStorage.getItem("dark");
changeTheme(+firstTheme);

function changeTheme(isDark){
    if(isDark){
        document.body.classList.add("dark");
        toggle_btn.classList.replace("fa-moon", "fa-sun");
        localStorage.setItem("dark", 1);
    }else{
        document.body.classList.remove("dark");
        toggle_btn.classList.replace("fa-sun", "fa-moon");
        localStorage.setItem("dark", 0);
    }
}

toggle_btn.addEventListener("click", () => {
    changeTheme(!document.body.classList.contains("dark"));
});