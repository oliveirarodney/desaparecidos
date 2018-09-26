expandMenu = () => {
    let x = document.getElementById("menu")
    //console.log("x " + x.className)
    if (x.className === "menu") {
        console.log("entrou")
        x.className += " responsive";
    } else {
        console.log("saiu")
        x.className = "menu";
    }
}