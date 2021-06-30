function applyColor(color){
    var grad="linear-gradient(90deg,#ffffff,rgb("+color[0]+","+color[1]+","+color[2]+"))";
    console.log(grad);
    jQuery(".headerBackground").css('background',grad);
}
function applyColorFromPalette(pal){
    var cols=[];
    for(color of pal){
        cols.push("rgb("+color.join()+")");
    }
    var grad="linear-gradient(60deg,#ffffff,"+cols.join()+")";
    console.log(grad);
    jQuery(".headerBackground").css('background',grad);
}
const colorThief = new ColorThief();
const img = document.querySelector('#mainImage');

// Make sure image is finished loading
if (img.complete) {
//  const col= colorThief.getColor(img);
 const pal= colorThief.getPalette(img,2,1);
 console.log(pal);
 applyColorFromPalette(pal);
//  applyColor(col);
} else {
  img.addEventListener('load', function() {
    // const col= colorThief.getColor(img);
    const pal= colorThief.getPalette(img,2,1);
    console.log(pal);
    applyColorFromPalette(pal);
    // applyColor(col);
  });
}