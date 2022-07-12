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

const setLinearGradient = opportunity => {
    if(opportunity.Initiative === 'Animal Safety')return 'linear-gradient(90deg, #E01518 0%, rgba(70, 70, 70, 0) 100%)';
    if(opportunity.Initiative === 'Mental Health')return 'linear-gradient(90deg, #CB8FBD 0%, rgba(70, 70, 70, 0) 100%)';
    if(opportunity.Initiative === 'Mission Shiksha')return 'linear-gradient(90deg, #2EC5B6 0%, rgba(70, 70, 70, 0) 100%)';
    if(opportunity.Initiative === 'Environment')return 'linear-gradient(90deg, #41D950 0%, rgba(70, 70, 70, 0) 100%)';
    if(opportunity.Initiative === 'Sex Education')return 'linear-gradient(90deg, #FFBE00 0%, rgba(70, 70, 70, 0) 100%)';
}

const displayOpportunities = async ()=>{
    const opportunities = await fetchOpportunites();
    if(opportunities.totalResults!==0){
        containerOpportunities.classList.remove('d-none');
        containerOpportunities.classList.add('d-block');
        for(let i=0; i<opportunities.totalResults; i++){
            const opportunity = opportunities.opportunityList[i];
            const linearGradient = await setLinearGradient(opportunity);

            const newSlide = document.createElement('div');
            newSlide.classList.add('mySlides');
            newSlide.classList.add('fade');
            newSlide.style.background = `${linearGradient}, url('${opportunity.imgSrc}') no-repeat center center / cover`;

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

const renderOpportunities = async ()=>{
    await displayOpportunities();
    showSlides(slideIndex);
}

renderOpportunities();


//Feeds Section

const Feeds = document.querySelector('.Feeds');

const fetchPosts = async ()=>{
    const posts = await fetch('./database/feeds.json');
    const parsedPosts = await posts.json();
    return parsedPosts;
}

const displayPosts = async ()=>{
    const posts = await fetchPosts();
    if(posts.totalResults!==0){
        Feeds.classList.remove('d-none');
        Array.from(posts.feeds).forEach(post => {

            const newPost = document.createElement('div');
            newPost.classList.add('post');

            const postUser = document.createElement('div');
            postUser.classList.add('postUser');
            postUser.innerText = post.userName;

            const profilePicture = document.createElement('div');
            profilePicture.classList.add('profilePicture');
            profilePicture.classList.add('FeedProfilePicture');

            const userProfile = document.createElement('img');
            userProfile.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAcQBipWyY0qIXJvbIEOnGmkvcXJBKA-3Yg&usqp=CAU";

            const check = document.createElement('img');
            check.classList.add('check');
            check.src = "./images/check 1admin.png";

            profilePicture.append(userProfile);
            profilePicture.append(check);

            postUser.append(profilePicture);

            const newPostImage = document.createElement('div');
            newPostImage.classList.add('postImage');

            const coreImage = document.createElement('img');
            coreImage.src=`${post.postImage}`;

            newPostImage.append(coreImage);

            const postFooter = document.createElement('div');
            postFooter.classList.add('postFooter');

            const likeAndShare = document.createElement('div');
            likeAndShare.classList.add('LikeAndShare');

            const Like = document.createElement('img');
            Like.src = './images/heart.png';

            const Share = document.createElement('img');
            Share.src = './images/paper-plane.png';

            likeAndShare.append(Like);
            likeAndShare.append(Share);

            const postDescription = document.createElement('div');
            postDescription.classList.add('description');
            postDescription.innerText = post.description.slice(0, 100)+'...';

            postFooter.append(likeAndShare);
            postFooter.append(postDescription);

            newPost.append(postUser);
            newPost.append(newPostImage);
            newPost.append(postFooter);

            Feeds.append(newPost);
        })
    }
}

displayPosts();