<nav class="navbar navbar-expand-lg fixed-top">
    <div class="wrapper">
        <img src="cookie.webp" alt="">
        <div class="content">
            <header>Consentiment de Cookies</header>
            <p>Aquest lloc web utilitza cookies per assegurar-vos que obteniu la millor experiència al nostre web.</p>
            <div class="buttons">
                <button class="item">Acceptar</button>
                <a href="#" class="item">Més informació</a>
            </div>
        </div>
    </div>
    <script>
        const cookieBox = document.querySelector(".wrapper"),
        acceptBtn = cookieBox.querySelector("button");
        acceptBtn.onclick = ()=>{
            //setting cookie for 1 month, after one month it'll be expired automatically
            document.cookie = "CookieBy= 2T; max-age="+60*60*24*30;
            if(document.cookie){ //if cookie is set
                cookieBox.classList.add("hide"); //hide cookie box
            }
            else{ //if cookie not set then alert an error
                alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
            }
        }
      let checkCookie = document.cookie.indexOf("CookieBy=2T"); //checking our cookie
      //if cookie is set then hide the cookie box else show it
      checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
    </script>
</nav>		