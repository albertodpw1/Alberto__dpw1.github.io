


     //funcion onmouseover  para cargar la funcion para a descripcion del primer producto
     function onmouseover1(){    
        alert('Bolso de chaquira')
    }
         //funcion onmouseover para cargar la funcion para a descripcion del segundo producto

    function onmouseover2(){    
        alert('Pulsera para dama')

    }
         //funcion onmouseover  para cargar la funcion para a descripcion del tercer producto
 function onmouseover3(){    
        alert('LLavero de tortuga hecho a mano')
    } 
         //funcion onmouseover  para cargar la funcion para a descripcion del cuarto producto
function onmouseover4(){    
        alert('Anillo para caballero')
    } 
         //funcion onmouseover  para cargar la funcion para a descripcion del quinto producto
function onmouseover5(){    
        alert('Aretes para dama coloridos')
    }

    //funcion onload para cargar la animación de la galería de imágenes de manera automática
    function on_load(){
alert ("Se ha cargado el contenido de visualización de imágenes automáticas")
    }
    var num=1;
// funciones onclick para interactuar con la galeria mediante los botones
    function adelante(){
        num++;
        if(num>5){
        num=1;            
        var foto=document.getElementById("assets_imagenes/pro");
        foto.src="assets_imagenes/pro"+num+".jpg";
        }
    }
    function atras(){
        num--;
        if(num<1){
            num=5;
var foto=document.getElementById("assets_imagenes/pro");
foto.src="assets_imagenes/pro"+num+".jpg";
        }
    }

   

 