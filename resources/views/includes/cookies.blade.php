<div class="wrapper">
    <img src="img/cookie.webp" alt="">
    <div class="content">
        <header>Consentiment de Cookies</header>
        <p>Aquest lloc web utilitza cookies per assegurar-vos que obteniu la millor experiència al nostre web.</p>
        <div class="buttons">
            <button class="item">Acceptar</button>
            <a href="{{URL::to('/politicadecookies')}}" class="item">Més informació</a>
        </div>
    </div>
</div>
<script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = () => {
        document.cookie = "CookieBy=2T; max-age=" + 60 * 60 * 24 * 30;
        if (document.cookie) {
            cookieBox.classList.add("hide");
        } else {
            alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
        }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=2T");
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
</script>
