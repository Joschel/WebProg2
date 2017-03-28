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
        <th>i</th>
        <th>i²</th>
      </tr>

      <tr>
        <td>1</td>
        <td>1</td>
      </tr>

      <tr>
        <td>2</td>
        <td>4</td>
      </tr>

      <tr>
        <td>3</td>
        <td>9</td>
      </tr>

      <tr>
        <td>4</td>
        <td>16</td>
      </tr>
    </table>

<div class="adressfeld">
    <form>
  First name:
  <input type="text" name="firstname">
  Last name:
  <input type="text" name="lastname">
  <br>
  Geburtsdatum
  <input type="text" name="geburtsdatum">
  <br>
 Wohnort
  <input type="text" name="wohnort">
</form>
</div>

  </body>
</html>

<?php
if ( empty ($_GET['vorname']) == TRUE )
{
    echo '
    <form action="auswertung.php" method="get">

    <p>Vorname:
    <input type="text" name="vorname" size="50" />
    Nachname:
    <input type="text" name="nachname" size="50" />
    </p>

    <p>Absendebutton:
    <input type="submit" value="absenden" />
    </p>

    </form>
    ';
}
?>
