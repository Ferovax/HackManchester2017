function storeData(){
    var data = sessionStorage.getItem('key');
    if(data == ""){
        sessionStorage.clear();
        window.location.replace("/")
    }
    if(data == null){
        sessionStorage.clear();
        sessionStorage.setItem('key', 'Name,Email,Phone Number,Complaint');
        data = sessionStorage.getItem('key');
    }
    //"Gif-Complaint", "Morse Code", "Text To Speech", "Emoji-Mayhem"
    var opts = data.split(",");

    for(v in opts){
        console.log(opts[v]);
        options.push(opts[v]);
    }

}