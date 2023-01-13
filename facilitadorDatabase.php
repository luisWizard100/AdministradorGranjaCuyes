
    <?php
    function  enviardatos($listas){
        if ( count( $listas)==2){
        $datm = array(
            'dato' => 'ok',
            'dato1' => $listas[0], 
            'dato2' => $listas[1], 
            'dato3' => "14"
            );}
        else if (count($listas)==3){
            $datm = array(
                'dato' => 'ok',
                'dato1' => $listas[0], 
                'dato2' => $listas[1], 
                'dato3' => $listas[2]
                );} 
        
        

        
        
            header('Content-Type: application/json');
        
        
        
        echo json_encode($datm,JSON_FORCE_OBJECT);

    }
function sexoMacho(){
    
    $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
    $poza="M";
    $holi=$conexion->prepare("select nomcuy from cuyes where sexo=?");
    $holi -> bindParam(1,$poza,PDO :: PARAM_STR);
    $holi -> execute();
    $respuesta=$holi -> fetchAll();
    

    
    foreach($respuesta as $key => $resultado){
        
    
        
        $holi2=$conexion->prepare("select foto from cuyes where nomcuy=?");
        $holi2 -> bindParam(1,$resultado['nomcuy'],PDO :: PARAM_STR);
        
        $holi2 -> execute();
        $imagen2=$holi2-> fetch();


        
    
     echo "MACHO:" . $resultado['nomcuy']."<br>";
     echo '<img src="data:image/jpeg;base64,'.base64_encode($imagen2['foto']) .' "  class = "imagenbase" style="max-height:400px; ;max-width :400px;"/> <br>';
    
    }




}

function menu($npoza){
    $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
    
    $poza=$npoza;
    $holi=$conexion->prepare("select nomcuy from cuyes where poza=?");
    $holi -> bindParam(1,$poza,PDO :: PARAM_INT);
    
    $holi -> execute();
    $respuesta=$holi -> fetchAll();
    $count=1;



    
    foreach($respuesta as $key => $resultado){
        
    
        
        $holi2=$conexion->prepare("select foto from cuyes where nomcuy=?");
        $holi2 -> bindParam(1,$resultado['nomcuy'],PDO :: PARAM_STR);
        
        $holi2 -> execute();
        $imagen2=$holi2-> fetch();


        
    //como hacer para que cuando le de click en el enlace sea la informacion del cuy se recargue
     echo "<button    onclick='consulta('roja')'>" .$count. $resultado['nomcuy']. " </button> <br>" ;
     echo '<img src="data:image/jpeg;base64,'.base64_encode($imagen2['foto']) .' "  class = "imagenbase" style="max-height:400px; ;max-width :400px;"/> <br>';
     $count =$count+1;
    }

}

    if (isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
        try{
            $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
            $statement=$conexion->prepare("select nomcuy from cuyes");
            $statement->execute();
            $resultado=$statement->fetchAll(PDO:: FETCH_ASSOC);
            
            foreach($resultado as $name){
                //coprueba uno por uno los nombres si existe devuelve y rompe el bucle

                
            if($nombre==$name['nomcuy']){
                
                        //conexion para imagen 
        $statement=$conexion->prepare("select foto from cuyes where nomcuy="."'".$_POST["nombre"]."'");
        $statement->execute();
        $imagen=$statement->fetch();

        echo '<img src="data:image/jpeg;base64,'.base64_encode($imagen['foto']) .' "  class = "imagenbase" style="max-height:400px; ;max-width :400px;"/>';
        echo "<h1 class='textencima'>Si se encuentra registrada  <h1>";

            break;}
            elseif($nombre!=$name['nomcuy'] and $name==end($resultado )){echo "No se encuentra registrada";}
            
            
        }


        
            
        
        }
        catch(Exception $e)
        {echo"El erro esta en la linea" .$e->getMessage();}
    }
    elseif(isset($_POST['sintoma'])){
        ob_start();
        $command=escapeshellcmd('diagnosticoEnfermedad.py');
        $sintoma1=$_POST['sintoma'];
        $sintoma2=$_POST['sintoma2'];
        //Conectamos a python mediante este script

        $ruso=shell_exec($command." ".$sintoma1." ".$sintoma2);
        echo $ruso;
        //Este objeto captura las salidas del sistema
        $resu=ob_get_contents();
        ob_end_clean();
        $mina=$resu."procesamos";
        echo $mina;

        //Conexion a  base datos para imagenes
        /*
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
        $statement=$conexion->prepare("select foto from cuyes where nomcuy='crespa'");
        $statement->execute();
        $imagen=$statement->fetch();
        
        
        
        echo '<img src="data:image/jpeg;base64,'.base64_encode($imagen['foto']) .' "  style="max-height:200px; ;max-width :200px;"/>';
        */
        
        
    }
    
    elseif(isset($_POST['datos'])){
        
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
       
        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE sexo='H'");
        $statement->execute();
        $cantidad1=$statement->fetch();

        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE sexo='M'");
        $statement->execute();
        $cantidad2=$statement->fetch();
        $listaresultado=[$cantidad2["COUNT(*)"],$cantidad1["COUNT(*)"]];
        

        enviardatos($listaresultado);


        
        
        
       

        
    }
    elseif(isset($_POST['datos1'])){
        
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
       
        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE edadcuy >1");
        $statement->execute();
        $cantidad1=$statement->fetch();

        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE edacuy < 1");
        $statement->execute();
        $cantidad2=$statement->fetch();
        $listaresultado=[$cantidad2["COUNT(*)"],$cantidad1["COUNT(*)"]];

        enviardatos($listaresultado);

        
        
        
       

        
    }
    elseif(isset($_POST['datos2'])){
        
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
        
        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE pescuy <1");
        $statement->execute();
        $cantidad1=$statement->fetch();

        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE pescuy > 1 and pescuy < 1.5");
        $statement->execute();
        $cantidad2=$statement->fetch();

        $statement=$conexion->prepare("SELECT COUNT(*) FROM cuyes WHERE pescuy > 1.5");
        $statement->execute();
        $cantidad3=$statement->fetch();

        $listaresultado=[$cantidad2["COUNT(*)"],$cantidad1["COUNT(*)"],$cantidad3["COUNT(*)"]];

        enviardatos($listaresultado);


        
        
        
       
    
        
    }
    elseif(isset($_POST['individual'])){
        //Vamos a intentar hacer un caso de cuyes donde vamos a poder retornar un json con la iformacion que 
        //VAn a solicitar nuestros clientes
        
       $nombrecuy=$_POST["nombrecuy"];
        
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
        $statement=$conexion->prepare("select nomcuy from cuyes where nomcuy="."'".$nombrecuy."'");
        $statement->execute();
        $cantidad1=$statement->fetch();

        $statement=$conexion->prepare("select pesocuy from cuyes where nomcuy="."'".$nombrecuy."'");
        $statement->execute();
        $cantidad2=$statement->fetch();

        $statement=$conexion->prepare("select sexo from cuyes where nomcuy="."'".$nombrecuy."'");
        $statement->execute();
        $cantidad3=$statement->fetch();

        $statement=$conexion->prepare("select edadcuy from cuyes where nomcuy="."'".$nombrecuy."'");
        $statement->execute();
        $cantidad4=$statement->fetch();

        $statement=$conexion->prepare("select poza from cuyes where nomcuy="."'".$nombrecuy."'");
        $statement->execute();
        $cantidad5=$statement->fetch();

        


        
        
        
       
        $datm = array(
            'estado' => 'ok',
            'nombre' => $cantidad1["nomcuy"], 
            'peso' => $cantidad2["pesocuy"], 
            'edad' => $cantidad3["sexo"],
            'poza' => $cantidad4["edadcuy"],
            'sexo' => $cantidad5["poza"]
            );
        

        
        
            header('Content-Type: application/json');
        
        
        
        echo json_encode($datm,JSON_FORCE_OBJECT);
        
    }

    elseif(isset($_POST['practicar'])){
        /*
    
        $cuyes=array('nombre' => "rojo","raza" => "crespa","sexo" => "crespita","cuy2" => "noure");

        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
        
        //ahora lo que vamos a ser es que vamos a consultar enen las basse de datos los elemntos del array

        foreach($cuyes as $key => $dato){
            echo "Inciamos el ciclo";
            echo "valor es :".$dato."la clave es" .$key; 
            $statement=$conexion->prepare("select pesocuy from cuyes where nomcuy=?");
            $statement -> bindParam(1,$dato,PDO :: PARAM_STR);
            $statement -> execute();
            $respuesta=$statement -> fetch();
            if ($respuesta["pesocuy"]==""){
                echo "No existe esa informacion en la base de datos";
            }
            else{

            echo $respuesta['pesocuy']." :: Es ll que hay <br>";
            }
        }
        */

        //La estrategia aca consiste en usar un mismo ajax  y la misma funcion php para no ir aumentando el tamaño del mismo de manera innncesaria

        if ($_POST['practicar']=="sexomacho"){
            sexoMacho();
        }
        else{
        $valor=intval($_POST['practicar']);
       


        menu($valor);

        }

   

    }



    ?>
