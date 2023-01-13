<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
   
    <link rel="stylesheet" type="text/css" href="styleEstadistica.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</head>
<body>
    <h1>Bienvenido a  la pagina de estadistica</h1>


    <div class="hola" >
        <label for="">Diagnosticar cuyes</label>
        <label for="">Sintomas de los cuyes</label>
        <input type="text" id="sintoma">
        <label for="">Diagnostico presuntivo</label>
        <input type="button" value="diagnosticar" onclick="diagnosticar()">
        <label for="" id="diagnostico"  >Respuesta</label>
        
    </div>

    <div id="agregar" >
        <h1>Agregar cuy a la base de datos</h1>
        <label for="">Nombre</label>
        <input type="text" id="nomcuy">

        <label for="">Sexo</label>
        <select name="sexo" id="sex" >
            <option value="hembra">Hembra</option>
            <option value="macho">Macho</option>
        </select>
        

        <label for=""><br>Edad</label>
        <input type="text" id="edcuy">

        <label for="">Foto</label>
        <input type="file" id="fotcuy">

        <label for="">Peso</label>
        <input type="text" id="pescuy">
        <input type="button"  id ="btnagregar"value="agregar" onclick="imprimir()" >

    </div>
    <!--Boton para obtener graficos con libreria estadistica de java script-chartjs-->
<div id="graficasC">
    <div class="input-group mb-3">
  <button type="button" class="btn btn-outline-secondary">Action</button>
  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Estadisticas Generales</span>
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item"  onclick="graficapeso1()">Estadisticas de Peso</button></li>
    <li><button class="dropdown-item" onclick="graficasexo1()" >Estadisticas de sexo</button></li>
    <li><button class="dropdown-item" onclick="graficaedad1()" >Estadisticas por edad</button></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
</div>

<div class="input-group">
  <input type="text" id="cuy" class="form-control" aria-label="Text input with segmented dropdown button">
  <button type="button" class="btn btn-outline-secondary" onclick="graficasexo()" >Action</button>
  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Buscar informacion por cuy individual</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item"  onclick="infoindiv()">Buscar informacion general</button></li>
    <li><button class="dropdown-item" onclick="cambiar()" >Registro de comida</button></li>
    <li><button class="dropdown-item"  onclick="cambiar()">Buscar arbol genealogico(pozas de cuyes)</button></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
<div class="input-group mb-3">
  <button type="button" class="btn btn-outline-secondary">Action</button>
  <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Buscar por grupos</span>
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item"  onclick="abstraccionPoza()">Buscar por poza</button></li>
    <li><button class="dropdown-item" onclick="abstraccionSexo()" >Estadisticas de sexo</button></li>
    <li><button class="dropdown-item" onclick="graficaedad1()" >Estadisticas por edad</button></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
  <input type="text"  id ="filtro" class="form-control" aria-label="Text input with segmented dropdown button">
</div>
<div id="resultado">
    <div id="resultado1"></div>
    <div id ="resultado2"> </div>


</div>
<canvas id="grafica"></canvas>
</div>
<div>
    <a href="paginaprincipal.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAARVBMVEUDAQT///8AAAAwMDDCwsLo6OiGhoalpaXw8PArKivr6+sODA7t7e0lJCUoJyggHyAcGx0XFhghISKysrKsrKxmZmZGRUb1wFMQAAAE2ElEQVR4nO3bC3abMBAFUEpC6w+pHSfp/pdaqIttZEmM5ofIeW8BpfcYeZ4ySfPDN/2f3vmJje/jut/t7873kb7Cw75t2v3B9Zmuwt172zRN+77zfKinsDuPwIF49nxRHYXd/gociHtHop+wf5uAA/HN7xvVTdgf78CBeHQjegm7t0fg+Cl6vahOwvsZvBG9zqKPcHcOgeM3qs/QcBEejs/A8Sy6jH4P4VDVIsCB6FLgHIR9AjgSHb5R7YW76Cs6vaj2Z9Fc2J3SwIF4Mn9RrYXPYyIgmg8NY+HukgcOxIvxi2or7DNn8H4Wbb9uTIVhVUsQbQucpfCwcAbvZ9Fy9BsKrzd6EtHy1m8nPJCBI9HuUzQTLo2J8EU1O4tWwnRVSxDNCpyRMFfVEkSrAmcj7BYHfYR4sXlRTYRlZ/BGtDmLFsJdtmxniCeLF9VASKlqCaJFgdMXpm70JKLBrV9dSK1qCaJ+gdMW0qtagqhe4JSFh8iPDQuJZ+VPUVfIGxMBUXloqAp70n1wkai7ttEU8sdEQFQdGopC2o2eRNS89esJNc7gjah4FtWEseWLgKi3ttESxpcvAqLa2kZJKKlqCaJWgdMRHtSBI1HnU1QRlt/oSUSdW7+GML98ERBV1jYKQs0xERA1hoZc2DN+JkMmXuTtRizUqmoJorzASYV6VS1BFBc4oVB2oycRpbd+mVC3qiWIwgInEpYsXwRE2dpGIrQbEwFRNDQEwtLli4AoWdvwhTZVLUEUFDi20KqqJYj8AscVep3BG5F9FplC7vJFQOSubXhC26qWIDILHEuof6MnEXm3fo7QvqoliKwCxxBKly8CImdtUy6UL18ERMbapljoPSYCYvnQKBXqLF8ExOK1TaFwjTEREEuHRpmQ83sy6sTC37spEq57BqcUnsUSoX9Vi6eswBUItZcv/BStbejCdapaPCUFjiy0WL7wU7C2oQo9b/SU0G/9RGG3YlWLh/zn0jRhHWNiHurQIAnXrmrxEAscRbh+VYuHVuAIQuvlCz+ktc2ycK0bPSWUW/+i0GP5wg9hbbMk9Fm+8LO8tlkQ1jgm5lkcGnmh3/KFn6W1TVZYW1WLZ6HA5YS+yxd+8mubjLD+MzglexbTwuU/Uq4nuT+XTgprrWrxZApcSljTjZ6S9K0/Iay5qsWTLHBx4XrLF35Sa5uosPaqFk+iwMWE2xkT88SHRkRY542ekuit/1m4jaoWT6zAPQlrWL7wE1nbhMKtnsEpz2cxENayfOHnaW0zF26rqsUTFriZcGtVLZ6gwD0K61q+8DMvcA/CLY+JeWZD4y6sb/nCz+Pa5ibc+piY52FoTMLtVrV47gWu+T5jYp7b0LgK612+8DOtbZrvdwan/D+Lo7Du5Qs/17VNs9UbPSX/bv3NN31Frxlf1KY7tums/T8kJiM4ds3Hr2Q+N3KVak+facRHdvf0shHhSw4B4RYCIYT1B0II6w+EENYfCCGsPxBCWH8ghLD+QAhh/YEQQs4judmKsP36ycsX83n+wtfcP5rJK4QQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYRT/gIUP3t4WLJAZQAAAABJRU5ErkJggg==" alt=""> <br> Volver a la pagina Principal</a>
</div>


    

    <script>
        function limpiar(){
            var limpio=document.getElementById("resultado2");
           
            while(limpio.childNodes.length>=1){
                        limpio.removeChild(limpio.firstChild);
                    }

        }
        function imprimir(){
            console.log(document.getElementById("sex").value);
            console.log(document.getElementById("edcuy").value);
            
            console.log(document.getElementById("nomcuy").value);
            console.log(document.getElementById("pescuy").value);
        }
        function buscar(){
            var pre=document.getElementById("cuy");
            if (pre.value===""){
                var mel=document.getElementById("resultado2");
            mel.innerHTML="Por favor introduzca un nombre";

            }
            else{   var mel=document.getElementById("resultado2");
                var etiqim=document.createElement("h1");
                etiqim.innerHTML=pre.value;
                
                var focusim=document.createElement("img");
                mel.appendChild(focusim);
                
                var ruta ="nombre="+pre.value;
                $.ajax(
                    {url:"facilitadorDatabase.php",
                        type:"POST",
                        data: ruta,
                        
                    }
                ).done(function(res){$("#resultado2").html(res);
                console.log("Ejecutamos la orden");})
                .fail(function(){console.log("bazinze reiste");})
                .always(function(){console.log("complete");})}
            }
        function diagnosticar(){
            var ensu=document.getElementById("sintoma");
            var ensu2=toString(ensu.value).substring(ensu.value.indexOf(" "),20);
            

            
            if (ensu.value===""){
                var diagno=document.getElementById("diagnostico");
                diagno.innerHTML="No hay diagnostico porque no ha introducido datos";

            }
            else{   var diagno=document.getElementById("diagnostico");
                diagno.innerHTML=ensu.value;
                
                var ruta ="sintoma="+ ensu.value+"&sintoma2="+ensu2;
                $.ajax(
                    {url:"facilitadorDatabase.php",
                        type:"POST",
                        data: ruta,
                        error: function(){
                            alert("error petición ajax");}
                                          }
                        
                ).done(function(res){$('#diagnostico').html(res);})
                .fail(function(){console.log("bazinze reiste");})
                .always(function(){console.log("complete");})}
            }
        var nomopcion=document.getElementById("sex");
        function validacion(){
            var nombre =document.getElementById("nomcuy").value;
            var peso=document.getElementById("pescuy").value;
            var sexo  =document.getElementById("sexcuy").value;
            var foto =document.getElementById("fotcuy").value;
            
            function sexcuy(){
                if (sexo=="hembra"){return "H"; } 
                else if(sexo=="macho"){return "M";}
                else{return "O";} }
            function Vpeso(string23){
                try{valor= floatval( string23);}
                catch{valor=0;}
                finally{
                return valor;}}
                

            if (nombre.length>4 && sexcuy()!="O"  )
            {console.log("ESta bien el dni");
                console.log("Enseguida enviaremos el metodo ajax");}
            else{console.log("los datos estan mal");
                if (nombre.length >=4){console.log("El nombre es muy corto");}
                if (Vpeso(peso)==0){console.log("Introduzca  un peso valido");}
                if (sexcuy()=="O"){console.log("Seleccione un campo por favor");}
                else{console.log("No podimos encontrar falla loe sugerimos recargar la pagina");}
                }
            


            console.log("hemos validado todo vamos a enviar a el backend mediante solicitud ajax");

        }

            //poner las condiocines de validacion para pasar informacino al backend 
        
    //
 async function grafica(etiquetasp,titulografica,codigografico,nsolicitud){
            
            var entradaslistas=[];
            var solicitud=["datos","datos1","datos2"];
            var dit=solicitud[nsolicitud];
            let nentradas=etiquetasp.length;
            let graficos=["bar","pie","radar","polarArea","doughnut","bubble"];

            var ruta ="datos="+ dit;
            await $.ajax(
                    {url:"facilitadorDatabase.php",
                        type:"POST",
                        
                        
                        
                        
                        data: ruta
                        
                       
                                          }
                        
                ).done(function(respuesta){
                    console.log(" funciona ");
                    console.log(JSON.stringify(respuesta));
                    var listarpta=[respuesta.dato1,respuesta.dato2,respuesta.dato3];
                    

                    for(i=0;i<nentradas;i++){

                    entradaslistas[i]=parseInt(listarpta[i]);}
                    console.log("La cantidad de machos es"  + respuesta.dato1 + "La cantidad de hembras es ");
                    
		
			

			

			//$(".respuesta").html("Servidor:<br><pre>"+JSON.stringify(respuesta, null, 2)+"</pre>");
		
	        }).fail(function(){console.log("Es una mierda de programa");})

            
            
            
            const $grafica = document.querySelector("#grafica");
            const etiquetas = etiquetasp;
            const datosVentas2020 = {
                    label: titulografica,
                    data: entradaslistas, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                    backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'], // Color de fondo
                    borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'],// Color del borde
                    borderWidth: 1,// Ancho del borde
                };
            

        
        new Chart($grafica, {
            type: graficos[codigografico],// Tipo de gráfica
            data: {
                labels: etiquetas,
                datasets: [
                    datosVentas2020,
                    // Aquí más datos...
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },
            }
        });
    }
    function graficasexo1(){
        let etiq=["macho","hembra"];
        let tit="Grafica de cuyes por sexo";
        let cod=0;
        let nentr=2;
        let nsoli=0;

        grafica(etiq,tit,cod,nsoli);
    }
    function graficaedad1(){7
        let etiq=["menor","mayor"];
        let tit="Clasificiacion cuyes por edades";
        let cod=1;
        let nentr=2;
        let nsoli=1;
        grafica(etiq,tit,cod,nsoli);
    }
    function graficapeso1(){7
        let etiq=["Peso ligero", "Peso estandar","Peso pesado"];
        let tit="Clasificacion cuyes por peso";
        let cod=1;
        let nentr=3;
        let nsoli=2;
        grafica(etiq,tit,cod,nsoli);
    }
      

     function infoindiv(){
        var nome=document.getElementById("cuy").value;
        consulta(nome);

    }

    
    async function consulta(nombre){

        
            
            let dit="individual";

            var ruta ="individual="+ dit+"&& nombrecuy="+ nombre;
            await $.ajax(
                    {url:"facilitadorDatabase.php",
                        type:"POST",
                        
                        
                        
                        
                        data: ruta
                        
                       
                                          }
                        
                ).done(function(respuesta){
                    //Tenemos que eliminar los elementos hiojs anteriores si hubiera
                    console.log(" funciona ");
                    console.log(JSON.stringify(respuesta));
                    var re=document.getElementById("resultado1");
                    while(re.childNodes.length>=1){
                        re.removeChild(re.firstChild);
                    }
                    var elemento=document.createElement("ul");
                    let etiq=["Nombre","Peso","Edad","Poza","Sexo"];
                    var listadata=[respuesta.nombre,respuesta.peso,respuesta.edad,respuesta.poza,respuesta.sexo];
                    for(i=0;i<listadata.length;i++){
                        var dato=listadata[i];
                        var li=document.createElement("li");
                        li.innerHTML=etiq[i]+":"+dato;
                        elemento.appendChild(li);


                    }
                    
                    re.appendChild(elemento);
                    elemento.classList.add('cuadro');
                    
                    

                    
                    
		
			

			

			//$(".respuesta").html("Servidor:<br><pre>"+JSON.stringify(respuesta, null, 2)+"</pre>");
		
	        }).fail(function(){console.log("Es una mierda de programa");});
           buscar(); 
            
        }


       async  function probar(poza,codigo){
        //Debemos interactuar con elemntos html para que los elmentos que enviamos tenganun formato especificado

        var ruta =codigo+"="+ poza.toString();
        console.log("La ruta es la :"+ ruta );
        
                await $.ajax(
                    {url:"facilitadorDatabase.php",
                        type:"POST",
                        data: ruta,
                        
                    }
                ).done(function(res){
                    var leia=document.createElement("h1");
                    leia.innerHTML=res;

                    
                    document.getElementById("resultado2").appendChild(leia);
                   
                    
                console.log("Ejecutamos la orden");})
                .fail(function(){console.log("bazinze reiste");})
                .always(function(){console.log("complete");})
            }
    function cambiar(){
        console.log("Cambairemos el mundo");
        console.log(leia.innerHTML);
    }
    
   //Necesitamos definir funciones imprtantes para que se tenga que tener una lista de iagenes y nombres 
// en una galeria en el menu para que el explorador se pueda unir 
function abstraccionPoza(){
    var entero= document.getElementById("filtro").value;
    //Es improtantes saber que aca no debe pasar ningun valor que podria quebrar las otras funciones

    if(entero.length ==0 ||  isNaN(entero) ){
        alert("NO ha escrito ningun codigo de poza");
    }
    else{

    limpiar();
   
   console.log("Estamos enviando el lelemento:"+ entero);
    probar(entero,"practicar");
    }
}

function abstraccionSexo(){
    //aca deberiamos tener solamente dos opciones  en forma de checkbox 
    console.log("Iniciaresmoa abstrayendo el sexo del cuy");
    var entero= document.getElementById("filtro").value;
    limpiar();
    probar("sexomacho","practicar");

}
        
    </script>
    

    
</body>
</html>