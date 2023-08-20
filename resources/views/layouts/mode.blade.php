<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>

:root{
  --bs-dark: #212529;
}

.theme-container {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.5s;
}

.theme-container:hover {
  opacity: 0.8;
}

.shadow-dark {
  background: linear-gradient(145deg, #0a0a0a, #030303);
  box-shadow: 17px 17px 23px #1a1d20,
    -17px -17px 23px #282d32, inset 5px 5px 4px #1e2226,
    inset -5px -5px 4px #24282c;
}

.shadow-light {
  box-shadow: 7px 7px 15px -10px #7c929e, -4px -4px 13px #aa9393,
    inset 7px 7px 3px rgba(166, 185, 216, 0.35),
    inset -11px -11px 3px rgba(224, 194, 194, 0.3)
}

@keyframes change {
  0% {
    transform: scale(1);
  }

  100% {
    transform: scale(1.4);
  }
}

.change {
  animation-name: change;
  animation-duration: 1s;
  animation-direction: alternate;
}


</style>
</head>

<body>

    <div class="theme-container shadow-dark">
        <img id="theme-icon"    src="https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg" alt="ERR">
      </div>

      <script>
        document.body.style="background-color: var(--bs-dark);transition: 0.5s;"
const sun = "https://www.uplooder.net/img/image/55/7aa9993fc291bc170abea048589896cf/sun.svg";
const moon = "https://www.uplooder.net/img/image/2/addf703a24a12d030968858e0879b11e/moon.svg"

var theme = "dark";
  const root = document.querySelector(":root");
  const container = document.getElementsByClassName("theme-container")[0];
  const themeIcon = document.getElementById("theme-icon");
  container.addEventListener("click", setTheme);
  function setTheme() {
    switch (theme) {
      case "dark":
        setLight();
        theme = "light";
        break;
      case "light":
        setDark();
        theme = "dark";
        break;
    }
  }
  function setLight() {
    root.style.setProperty(
      "--bs-dark",
      "linear-gradient(318.32deg, ##c3d1e4 0%, #dde7f3 55%, #d4e0ed 100%)"
    );
    container.classList.remove("shadow-dark");
    setTimeout(() => {
      container.classList.add("shadow-light");
      themeIcon.classList.remove("change");
    }, 300);
    themeIcon.classList.add("change");
    themeIcon.src = sun;
  }
  function setDark() {
    root.style.setProperty("--bs-dark", "#212529");
    container.classList.remove("shadow-light");
    setTimeout(() => {
      container.classList.add("shadow-dark");
      themeIcon.classList.remove("change");
    }, 300);
    themeIcon.classList.add("change");
    themeIcon.src = moon;
  }
      </script>
</body>
</html>
