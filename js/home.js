// Announcement Section

const containerAnnouncements = document.querySelector('.announcements');
const announces = document.querySelector('.announces');

const fetchAnnouncements = async ()=>{
    const announcements = await fetch('./database/Announcements.json');
    const parsedAnnouncements = await announcements.json();
    return parsedAnnouncements;
}

const displayAnnouncements = async ()=>{
    const announcements = await fetchAnnouncements();
    if(announcements.totalResults!==0){
        containerAnnouncements.classList.remove('d-none');
        containerAnnouncements.classList.add('d-block');
        Array.from(announcements.announcementList).forEach(announcingThat => {
            const a = document.createElement('li');
            a.append(announcingThat);
            announces.append(a);
        })
    }
}

displayAnnouncements();


// Opportunity Section

const containerOpportunities = document.querySelector('.opportunities');
const slides = document.querySelector('.slides');
const dots = document.querySelector('.dots');
let slideIndex = 1;

const fetchOpportunites = async ()=>{
    const opportunites = await fetch('./database/Opportunity.json');
    const parsedOpportunities = await opportunites.json();
    return parsedOpportunities;
}

const displayOpportunities = async ()=>{
    const opportunities = await fetchOpportunites();
    if(opportunities.totalResults!==0){
        containerOpportunities.classList.remove('d-none');
        containerOpportunities.classList.add('d-block');
        for(let i=0; i<opportunities.totalResults; i++){
            const opportunity = opportunities.opportunityList[i];

            const newSlide = document.createElement('div');
            newSlide.classList.add('mySlides');
            newSlide.classList.add('fade');

            const newSlideImg = document.createElement('img');
            newSlideImg.classList.add('mySlideImg');
            newSlideImg.src = opportunity.imgSrc;
            newSlide.append(newSlideImg);

            const opportunityDetails = document.createElement('div');
            opportunityDetails.classList.add('opportunityDetails');

            const opportunityName = document.createElement('div');
            opportunityName.classList.add('opportunityName');
            opportunityName.innerText = opportunity.OpportunityName;
        

            const opportunityInitiative = document.createElement('div');
            opportunityInitiative.classList.add('opportunityInitiative');
            opportunityInitiative.innerText = `Initiative: ${opportunity.Initiative}`;

            const coreOpportunityDetails = document.createElement('div');
            coreOpportunityDetails.classList.add('coreOpportunityDetails');

            const opportunityDate = document.createElement('div');
            opportunityDate.classList.add('opportunityDate');
            opportunityDate.innerText = `Date: ${opportunity.Date}`;

            const opportunityVenue = document.createElement('div');
            opportunityVenue.classList.add('opportunityVenue');
            opportunityVenue.innerText = `Venue: ${opportunity.Venue}`;

            const opportunityTime = document.createElement('div');
            opportunityTime.classList.add('opportunityTime');
            opportunityTime.innerText = `Time: ${opportunity.Time}`;

            const opportunityRequirements = document.createElement('div');
            opportunityRequirements.classList.add('opportunityRequirements');
            opportunityRequirements.innerText = `Requirements: ${opportunity.Requirements}`;

            coreOpportunityDetails.append(opportunityDate);
            coreOpportunityDetails.append(opportunityVenue);
            coreOpportunityDetails.append(opportunityTime);
            coreOpportunityDetails.append(opportunityRequirements);

            opportunityDetails.append(opportunityName);
            opportunityDetails.append(opportunityInitiative);
            opportunityDetails.append(coreOpportunityDetails);
            newSlide.append(opportunityDetails);

            slides.append(newSlide);

            const dot = document.createElement('span');
            dot.classList.add('dot');
            dot.addEventListener('click', ()=>{
                if(!dot.classList.contains('active')){
                    currentSlide(i+1);
                }
            })
            dots.append(dot);
        }
    }
}

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
  let slideImg = document.getElementsByClassName("mySlideImg");
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
  slideImg[slideIndex-1].style.borderRadius = "2.5rem";
  dots[slideIndex-1].className += " active";
}

const renderOpportunities = async ()=>{
    await displayOpportunities();
    showSlides(slideIndex);
}

renderOpportunities();