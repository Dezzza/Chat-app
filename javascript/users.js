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

function getusers(params) {

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
}
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




