const searchBar = document.querySelector(".search-box input"),
searchIcon   = document.querySelector(".search-box button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.focus();
  if (searchBar.classList.contains("active")) {
    searchBar.value="";
    searchBar.classList.remove("active");
  }
}


searchBar.onkeyup=()=>{
  let searchTerm = searchBar.value;
  if (searchTerm != "") {
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "server/search.php", true)
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
      }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "server/users.php", true);
  xhr.onload = ()=>{
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("active")) {
          usersList.innerHTML = data;
        }
      }
    }
  }
  xhr.send();
}, 500);

// const switchButton = document.getElementById('switch');
// const workContainer = document.getElementById('work');
 
// switchButton.addEventListener('click', () => {
//     document.body.classList.toggle('dark'); //toggle the HTML body the class 'dark'
//     switchButton.classList.toggle('active');//toggle the HTML button with the id='switch' with the class 'active''
//     workContainer.classList.toggle('dark');
 
//     if(document.body.classList.contains('dark')){ //when the body has the class 'dark' currently
//         localStorage.setItem('darkMode', 'enabled'); //store this data if dark mode is on
//     }else{
//         localStorage.setItem('darkMode', 'disabled'); //store this data if dark mode is off
//     }
// });
 
// if(localStorage.getItem('darkMode') == 'enabled'){
//     document.body.classList.toggle('dark');
//     switchButton.classList.toggle('active');
//     workContainer.classList.toggle('dark');
// }




