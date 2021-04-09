<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="../Controlador/coninventario.php?a=edit" method="post">
      <h1>INVENTARIO</h1>
      <p>ID: <input type="number" name="id" value="<?=$rol[0]?>"/></p>
      <p>NOMBRE DEL PRODUCTO: <input type="text" name="nproducto" /></p>
      <p>REFERENCIA: <input type="text" name="referncia" /></p>
      <p>PRECIO: <input type="number" name="precio" /></p>
      <p>PESO: <input type="number" name="peso" /></p>
      <p>CATEGORIA: <input type="text" name="categoria" /></p>
      <p>STOCK: <input type="number" name="stock" /></p>
      <p>FECHA DE CREACION: <input type="date" name="fcreacion" /></p>
      <p>FECHA DE ULTIMA VENTA: <input type="datetime" name="fultimaventa" /></p>
      <p><input type="submit" value="Editar"/></p>
    </form>
  </body>
</html>
