// Disqus extension, https://github.com/GiovanniSalmeri/yellow-disqus

var disqus_config = function () {
    this.page.url = document.getElementById("disqus_thread").getAttribute("data-url");
    this.language = document.getElementById("disqus_thread").getAttribute("data-language");
};
var initDisqusFromDOM = function() {
    if (document.getElementById("disqus_thread")) {
        var shortname = document.getElementById("disqus_thread").getAttribute("data-shortname");
        var fjs = document.getElementsByTagName("script")[0];
        var js = document.createElement("script");
        js.src = "https://"+shortname+".disqus.com/embed.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
};

window.addEventListener("DOMContentLoaded", initDisqusFromDOM, false);
