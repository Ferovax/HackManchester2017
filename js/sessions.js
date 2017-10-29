var options = [];
function sessionLoad(){
    var data = sessionStorage.getItem('key');
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

function sessionSave(){
    var opts = "";
    for(v in options) {
        console.log(options[v]);
        opts += options[v] + ",";
    }
    opts = opts.substr(0,opts.length-1);
    sessionStorage.setItem('key', opts);
    console.log()
}
sessionLoad();