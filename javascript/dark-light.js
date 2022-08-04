let localStorage = {darkMode: "disabled"}

function userPreferenceDarkMode() {
  return localStorage.darkMode === "enabled";
}

function setThemePreference(value) {
  localStorage.darkMode = value || "disabled";
}

const enableDarkMode = () => {
  document.body.classList.add("dark");
};

const disableDarkMode = () => {
  document.body.classList.remove("dark");
};

function setTheme() {
  if (userPreferenceDarkMode()) {
    enableDarkMode();
  }else{
    disableDarkMode();
  }
}

function bootstrap() {
  const darkModeToggleButton = document.querySelector('#mode');
  darkModeToggleButton.addEventListener("click", () => {
    if (userPreferenceDarkMode()){
      setThemePreference("disabled");
      disableDarkMode();
    }else{
      setThemePreference("enabled");
      enableDarkMode();
    }
    const appDiv = document.getElementById("app");
    appDiv.innerHTML = `${userPreferenceDarkMode()}`;
  });
  setTheme();
}

document.addEventListener("DOMContentLoaded", function(event){
  bootstrap();
});