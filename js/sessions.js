var options = [];
function sessionLoad(){
    var data = sessionStorage.getItem('key');
    if(data == null){
        sessionStorage.clear();
        sessionStorage.setItem('key', 'name,email,number,complaint');
        data = sessionStorage.getItem('key');
    }
    //"Gif-Complaint", "Morse Code", "Text To Speech", "Emoji-Mayhem"
    var opts = data.split(",");
    for(v in opts){
        console.log(opts[v]);
        options.push(opts[v]);
    }

}
sessionLoad();