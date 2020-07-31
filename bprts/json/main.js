    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            let data = JSON.parse(xhttp.responseText)
            let usuarios = "";
            data.forEach(element => {
                usuarios += `<li>${element.nombre}</li>`                
            });
            document.querySelector(".resultados").innerHTML = usuarios
        }
    };
    xhttp.open("GET", "user.json", true);
    xhttp.send();
