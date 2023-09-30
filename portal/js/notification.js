const notification = document.getElementsByClassName("notification")[0];
notification.addEventListener('change', () => {
    const notification = document.getElementsByClassName("notification")[0];
    notification.style.display = "block";
    console.log(notification);
    setTimeout((notification)=> {
        console.log(notification);
        notification.style.display = "none";
    }, 3000);
})