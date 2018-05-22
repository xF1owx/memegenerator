function meme(){
    var text = document.getElementById('saisie').value;
    text = text.toUpperCase();
    document.getElementById('paragraphe').innerHTML = text;
    smallLetter(text);
}

function smallLetter(text){
    var frame = document.getElementById('paragraphe').innerText;
    var measure = text.length;
    var letter = 30;
    if(measure > paragraphe.width-40){
        letter--;
    }
    else{
        if(letter < 30){
            letter++;
        }
    }
}