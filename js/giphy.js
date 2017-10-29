function load(){
    //6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp
    var gifkey = "6JaKOgr0sKU0I4VayPrscsq5oOpvOMwp";

    /*var xhr = $.get("http://api.giphy.com/v1/gifs/search?q="+q+"&api_key="+gifkey+"&limit=5");
    xhr.done(dataLoad);*/
    $('#myform').submit(function() {
        if($("#urls").val() == ""){
            var q = $("#searchBox").val();
            if(q == ""){
                alert("Please enter a gif to complain with");
            }else{
                var xhr = $.get("http://api.giphy.com/v1/gifs/search?q="+q+"&api_key="+gifkey+"&limit=5");
                xhr.done(function(data) {
                    dataLoad(data);
                    alert("Please select a gif to complain with");
                });
            }
            return false;
        }else{
            return true;
        }
    });

    $("#searchBox").keyup(function(){
        var q = $("#searchBox").val();
        if(q.indexOf(" ") == q.length-1){
            if(q.length == 1){
                $("#searchBox").val("");
            }else {
                //var fakeJson = $.getJSON("js/stuff.json", dataLoad);
                var xhr = $.get("http://api.giphy.com/v1/gifs/search?q="+q+"&api_key="+gifkey+"&limit=5");
                xhr.done(dataLoad);
            }
        }else if(q.indexOf(" ") > 0){
            submitImage($("img").attr("src"), $("#searchBox").val());
            $("#searchBox").val(q.substr(q.length-1,1));
            if($("#searchBox").val() == " "){
                $("#searchBox").val("");
            }
        }
   }) ;
}

function dataLoad(data) {
    console.log(data);
    $("#imageSelection").html("");
    $.each(data.data, function (i, item) {
        console.log(i);
        //console.log(item);
        console.log(item["images"]["original"]["url"]);
        var divtag = $("<div>").attr("class","col-md-2 thumbnail").appendTo("#imageSelection");
        var atag = $("<a>").attr("href", "javascript:submitImage('" + item["images"]["fixed_width_small_still"]["url"] + "')").appendTo(divtag);
        $("<img>").attr("src", item["images"]["fixed_width_small_still"]["url"]).attr("style","width:100%").appendTo(atag);
    });
}

function submitImage(uri, text){
    var divtag = $("<div>").attr("class","col-md-2 thumbnail").appendTo("#imageSubmission");
    $("<img>").attr("src", uri).appendTo(divtag);
    $("#urls").val($("#urls").val() + uri + ",");
    var text = $("#searchBox").val();
    var captag = $("<div>").attr("class","caption").appendTo(divtag);
    $("<p>").text(text.substring(0,text.length-2)).appendTo(captag);
    $("#imageSelection").html("");
    $("#searchBox").val("");
}