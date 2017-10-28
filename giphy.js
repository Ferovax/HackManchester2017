function load(){
    //6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp
    var gifkey = "6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp";
    var xhr = $.get("http://api.giphy.com/v1/gifs/search?q=ryan+gosling&api_key="+gifkey+"&limit=5");
    xhr.done(function(data) { alert("success got data", data); });
}