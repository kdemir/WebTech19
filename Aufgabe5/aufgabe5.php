<!DOCTYPE html>
<html>
  <head>

      <style>
          table{
              border-collapse: collapse;
          }
          table, th, td {
              border: 1px solid black;
              /*border-collapse: collapse;*/
          }
          th, td {
              padding: 15px;
              text-align: left;
          }
      </style>

    <?php
    function zufzahl($max, $anzahl, $stellen)
    {
        echo "<th> Zufallszahl </th>";

        for($j=1; $j<=$stellen; $j++)
        {
            echo "<th>".($j).". Stelle</th>";
        }

        for($i=1; $i<=$anzahl; $i++)
        {
            $zzahl = rand(1,$max);
            echo"<tr>";
            echo "<td>$zzahl</td>";
            //$gerundet2 = abschneiden($zzahl,2);
            //$gerundet3 = abschneiden($zzahl,3);
            for($k=1; $k<=$stellen; $k++)
                {
                echo "<td>" .abschneiden($zzahl, $k) . "</td>";
                }
                echo "</tr>";
        }
    }

     function abschneiden($zahl,$k)
        {
            $base = pow(10,$k);
            return $zahl - ($zahl % $base);
        }

            //in echo werden die Zufallszahlen angezeigt. durch html table werden die Zahlen in eine Tabelle geschrieben
           // echo "<table style=\"width:100%\">
             //       <tr>
               //         <td> $zzahl</td>
                 //       <td>$gerundet2</td>
                   //     <td>$gerundet3</td>
                    //</tr>
                //  </table>"; //</br>


    ?>


  </head>
  <body>
  <div class="container">
    <h1>Zufallszahlen</h1>
    <div class="row">
        <div class="three column">
            <table class="u-full-width">
                <thead> In einer Tabelle runden an der ...</thead>
                <tbody>
                    <?php zufzahl(20000, 20, 4); ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  </body>
</html>