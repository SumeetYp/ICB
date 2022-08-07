const containerOpportunities = document.querySelector('.opportunities');
const slides = document.querySelector('.slides');
const dots = document.querySelector('.dots');
let slideIndex = 1;

// const displayOpportunities = async ()=>{
//     const opportunities = await fetchOpportunites();
//     if(opportunities.totalResults!==0){
//         containerOpportunities.classList.remove('d-none');
//         containerOpportunities.classList.add('d-block');
//         for(let i=0; i<opportunities.totalResults; i++){
//             const opportunity = opportunities.opportunityList[i];
//             const linearGradient = await setLinearGradient(opportunity);

//             const newSlide = document.createElement('div');
//             newSlide.classList.add('mySlides');
//             newSlide.classList.add('slide');
//             newSlide.style.background = `${linearGradient}, url('${opportunity.imgSrc}') no-repeat center center / cover`;

//             const opportunityDetails = document.createElement('div');
//             opportunityDetails.classList.add('opportunityDetails');

//             const opportunityName = document.createElement('div');
//             opportunityName.classList.add('opportunityName');
//             opportunityName.innerText = opportunity.OpportunityName;
        

//             const opportunityInitiative = document.createElement('div');
//             opportunityInitiative.classList.add('opportunityInitiative');
//             opportunityInitiative.innerText = `Initiative: ${opportunity.Initiative}`;

//             const coreOpportunityDetails = document.createElement('div');
//             coreOpportunityDetails.classList.add('coreOpportunityDetails');

//             const opportunityDate = document.createElement('div');
//             opportunityDate.classList.add('opportunityDate');
//             opportunityDate.innerText = `Date: ${opportunity.Date}${dateSuffix(opportunity.Date)} ${setMonth(opportunity.Month)} ${opportunity.Year}`;

//             const opportunityVenue = document.createElement('div');
//             opportunityVenue.classList.add('opportunityVenue');
//             opportunityVenue.innerText = `Venue: ${opportunity.Venue}`;

//             const opportunityTime = document.createElement('div');
//             opportunityTime.classList.add('opportunityTime');
//             opportunityTime.innerText = `Time: ${opportunity.Time}`;

//             const opportunityRequirements = document.createElement('div');
//             opportunityRequirements.classList.add('opportunityRequirements');
//             opportunityRequirements.innerText = `Requirements: ${opportunity.Requirements}`;

//             const oppDate = new Date(`${opportunity.Month}/${opportunity.Date}/${opportunity.Year}`)
//             const today = new Date();
//             const timeLeft = Math.ceil((oppDate.getTime() - today.getTime())/(1000*3600*24));

//             const daysContainer = document.createElement('div');
//             daysContainer.classList.add('daysContainer');

//             const daysSlide = document.createElement('div');
//             daysSlide.classList.add('daysSlide');

//             const daysLeft = document.createElement('div');
//             daysLeft.classList.add('daysLeft');

//             const daysLeftSlide = document.createElement('input');
//             daysLeftSlide.classList.add('daysLeftSlide');
//             daysLeftSlide.min = 0;
//             daysLeftSlide.max = 20; //todo
//             daysLeftSlide.type = "range";
//             daysLeftSlide.step = 1;
//             daysLeftSlide.value = timeLeft;
//             daysLeftSlide.disabled = true;

//             const daysLeftNumber = document.createElement('div');
//             daysLeftNumber.classList.add('daysLeftNumber');
//             daysLeftNumber.style.left = `${timeLeft/20*100}%`;
//             daysLeftNumber.style.filter = `hue-rotate(${daysLeftSlide.value}deg)`

//             const days = document.createElement('span');
//             days.append(`-${timeLeft}D`)

//             daysLeftNumber.append(days);
//             daysLeft.append(daysLeftNumber);
//             daysLeft.append(daysLeftSlide);
//             daysSlide.append(daysLeft);
//             daysContainer.append(daysSlide);

//             const opportunityEnrollment = document.createElement('a');
//             opportunityEnrollment.classList.add('detailsBtn');
//             opportunityEnrollment.innerText = 'Details';
//             opportunityEnrollment.href = opportunity.enrolLink;

//             coreOpportunityDetails.append(opportunityDate);
//             coreOpportunityDetails.append(opportunityVenue);
//             coreOpportunityDetails.append(opportunityTime);
//             coreOpportunityDetails.append(opportunityRequirements);

//             opportunityDetails.append(opportunityName);
//             opportunityDetails.append(opportunityInitiative);
//             opportunityDetails.append(coreOpportunityDetails);
//             newSlide.append(opportunityDetails);
//             newSlide.append(opportunityEnrollment);
//             newSlide.append(daysContainer);

//             slides.append(newSlide);

//             const dot = document.createElement('span');
//             dot.classList.add('dot');
//             dot.addEventListener('click', ()=>{
//                 if(!dot.classList.contains('active')){
//                     currentSlide(i+1);
//                 }
//             })
//             dots.append(dot);
//         }
//     }
// }

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";
  slides[slideIndex-1].style.justifyContent = "center";
  dots[slideIndex-1].className += " active";
}
showSlides(slideIndex);

setInterval(()=>{
  showSlides(slideIndex += 1);
}, 5000)