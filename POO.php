<?php
  class product{
  public   $nombre;
  public   $id;
  public   $nolote;
  public  $precio;
  public  $tipo;

     public function __construct($_nombre,$_id,$_tipo,$_nolote,$_precio){
       $this->nombre="$_nombre";
       $this->id="$_id";
       $this->nolote="$_nolote";
       $this->tipo="$_tipo";
       $this->precio=$_precio;
     }

  }
  $product1 = new product(_nombre: "Cuatro Asiendas", _id: 111,_tipo: "tequila", _nolote: 890,_precio: 700);
?>

<DOCUMENT!>
    <html lag="en">

    <head>
        <link rel="stylesheet" type="text/css" href="poo css.css">
        <title>POO del proyecto</title>
       <h1 class="strong">Registro del produto</h1>
    </head>

    <body>

    <div class="div"><em>El producto llamado: </em><span><?php  echo $product1->nombre;?></span>
        <p>
        <div class="div"><em>Con el codigo id: </em><span><?php echo $product1->id;?></span></span></div>  
        </p>
        <p>
          <div class="div"><em>El tipo de producto es: </em><span><?php echo $product1->tipo;?></span></span></div>  
          </p>
        <p>
          <div class="div"><em>Del numero de lote es: </em> <span><?php echo $product1->nolote;?></span> </div>  
          <p>
            <div class="div"><em>El precio del producto es: </em><span><?php echo $product1->precio;?></span> </div>  
          </p>
      </p>

        </p> 

        </div>


    </body>

    </html>