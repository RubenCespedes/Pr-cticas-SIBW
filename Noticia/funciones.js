var prohibidas = ["puta", "capullo", "tonto", "gilipollas", "mierda"];
var i;
var k;
var txt = "";
var new_value;
var encontrada = -1;

function myFunction() {
    "use strict";
    var x = document.getElementById("fname").value;
    
    for (i = 0; i < prohibidas.length && encontrada === -1; i = i + 1) {
        encontrada = x.indexOf(prohibidas[i]);
    }
    
    if (encontrada !== -1) {
        for (k = 0; k < prohibidas[i - 1].length; k = k + 1) {
            txt += "*";
        }
        new_value = x.replace(prohibidas[i - 1], txt);
        
        document.getElementById("fname").value = new_value;
    }
    
    encontrada = -1;
    txt = "";
}

/* Set the width of the side navigation to 250px */
function openNav() {
    "use strict";
    document.getElementById("bloque_comentarios").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    "use strict";
    document.getElementById("bloque_comentarios").style.width = "0";
    document.body.style.backgroundColor = "white";
}

function aniadir_comentario() {
    "use strict";
        
    var nombre, d, fecha, hora, comentario;
    nombre = document.getElementById("name").value;
    d = new Date();
    fecha = d.getDate();
    fecha += "/";
    fecha += d.getMonth();
    fecha += "/";
    fecha += d.getFullYear();
    hora = d.getHours();
    hora += ":";
    hora += d.getMinutes();
    comentario = document.getElementById("fname").value;
    
    document.getElementById("contenedor_comentarios").innerHTML += "<div class='comentario'><span>" + nombre + "</span><br><span class='fecha_comentario'>" + fecha + "</span><span class='hora_comentario'> " + hora + "</span><div class='texto_comentario'>" + comentario + "</div></div>";
}