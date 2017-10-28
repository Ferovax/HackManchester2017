function load(){
    //6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp
    var gifkey = "6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp";

    /*var xhr = $.get("http://api.giphy.com/v1/gifs/search?q="+q+"&api_key="+gifkey+"&limit=5");
    xhr.done(dataLoad);*/

    $("#searchBox").keyup(function(){
        var q = $("#searchBox").val();
        if(q.indexOf(" ") != -1){
            var fakeJson = $.getJSON("stuff.json", dataLoad);
            $("#searchBox").val("");
            $("#imageSelection").html("");
        }
   }) ;
}

function dataLoad(data) {
    console.log(data);
    $.each(data.data, function (i, item) {
        console.log(i);
        //console.log(item);
        console.log(item["images"]["original"]["url"]);
        var atag = $("<a>").attr("href", "javascript:submitImage('" + item["images"]["fixed_width_small_still"]["url"] + "')").appendTo("#imageSelection");
        $("<img>").attr("src", item["images"]["fixed_width_small_still"]["url"]).appendTo(atag);
    });
}

function submitImage(uri){
    $("<img>").attr("src", uri).appendTo("#imageSubmission");
    $("#imageSelection").html("");
}