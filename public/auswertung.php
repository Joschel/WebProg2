<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      .tabelle{
        background-color: pink;
        border-spacing: 0px;
      }

      .tabelle td{
        border:1px solid #000;
        padding:20px;
        text-align: center;
      }

      .tabelle th{
        font-size:20px;
        padding:20px;
      }

      .adressfeld {
        background-color: grey;
      }
    </style>
  </head>

  <body>
    <table class="tabelle">


      <tr>
        <td>Vorname</td>
        <td>
<?php
if (!empty($_GET['vorname']))
    {
      echo 'Vorname'.$_GET['vorname'];
    }
?>

        </td>
      </tr>

      <tr>
        <td>Nachname</td>
        <td>
        <?php
        if (!empty($_GET['nachname']))
        {
        echo $_GET ['nachname'];
      }
        ?>
        </td>
      </tr>
    </table>

  </body>
</html>
