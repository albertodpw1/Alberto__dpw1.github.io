
  /* En esta funciion se toman los datos de la fecha actual y se muestran en las páginas solicitadas
 */
  function mostrarFecha(){
    momentoActual= new Date();
    dia = momentoActual.getDate();
    mes = momentoActual.getMonth()+1;
    agnio= momentoActual.getFullYear();
    fechaImp = dia + ":"+ mes + ":"+ agnio;
    $fecha=document.getElementById('mostrarFecha').innerHTML = fechaImp;
}