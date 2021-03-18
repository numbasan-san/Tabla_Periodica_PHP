<!DOCTYPE html>
<html>
    <head>
        <title>Tabla Periodica</title>
        <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
                font-size: 15px;
                background-color: aliceblue;
            }
            tr, td {
                border: 1px solid black;
                padding: 4px;
	            text-align: center;
            }
            .espacio, body {
                background-color: black;
            }
            .lantanidos {
                background-color: lime;
            }
            .actinidos {
                background-color: orangered;
            }
            .noMetal {
                background-color: red;
            }
            .alcalinos {
                background-color: blueviolet;
            }
            .alcalinoterreos {
                background-color: green ;
            }
            .gasNoble {
                background-color: yellow;
            }
            .metaloides {
                background-color: lightseagreen;
            }
            .metalesBloqueP {
                background-color: orange;
            }
            .metalesTranscion {
                background-color: purple;
            }
            .halogenos {
                background-color: brown;
            }
            p {
                padding: 2px;
            }
            h2, h3, h4, hr {
                color: orange;
            }
            .leyenda {
                background-color: black;
                margin-top: -1%;
                padding: 3px;
            }
            hr {
                margin-left: 30%;
                margin-right: 30%;
            }
        </style>
    </head>
    <body>
        <center>
            <h2>Tabla Periodica</h2> 
            <?php
                $elementos = array( "H", "He", "Li", "Be", "B", "C", "N", "O", "F", "Ne","Na", "Mg", "Al", "Si", "P", "S", "Cl", "Ar", "K", "Ca","Sc", "Ti", "V", "Cr", "Mn", "Fe", "Co", "Ni", "Cu", "Zn", "Ga", "Ge", "As", "Se", "Br", "Kr", "Rb", "Sr", "Y", "Zr", "Nb", "Mo", "Tc", "Ru", "Rh", "Pd", "Ag", "Cd", "In", "Sn", "Sb", "Te", "I", "Xe", "Cs", "Ba", "La", "Ce", "Pr", "Nd", "Pm", "Sm", "Eu", "Gd", "Tb", "Dy", "Ho", "Er", "Tm", "Yb", "Lu", "Hf", "Ta", "W", "Re", "Os", "Ir", "Pt", "Au", "Hg", "Ti", "Pb", "Bi", "Po", "At", "Rn", "Fr", "Ra", "Ac", "Th", "Pa", "U", "Np", "Pu", "Am", "Cm", "Bk", "Cf", "Es", "Fm", "Md", "No", "Lr", "Rf", "Db", "Sg", "Bh", "Hs", "Mt", "Ds", "Rg", "Cn", "Nh", "Fl", "Mc", "Lv", "Ts", "Og" );

                print "
                <table>
                    <tr>
                        <td class='espacio' colspan='1'></td>
                        <td>1º</td>
                        <td>2º</td>
                        <td>3º</td>
                        <td>4º</td>
                        <td>5º</td>
                        <td>6º</td>
                        <td>7º</td>
                        <td>8º</td>
                        <td>9º</td>
                        <td>10º</td>
                        <td>11º</td>
                        <td>12º</td>
                        <td>13º</td>
                        <td>14º</td>
                        <td>15º</td>
                        <td>16º</td>
                        <td>17º</td>
                        <td>18º</td>
                    </tr>
                ";
                for ( $i = 0; $i <= 10; $i++ ) {
                    if ( $i == 1 ) {
                        print "
                        <tr>        <!-- Primera fila -->
                            <td colspan='1'>1º</td>
                            <td class='noMetal'>$elementos[0]</td>       <!-- Primera columna -->
                            <td class='espacio' colspan='16'></td>
                            <td class='gasNoble'>$elementos[1]</td>
                        </tr>";
                    } elseif ( $i == 2 ) {
                        print "
                        <tr>        <!-- Segunda fila -->
                            <td>2º</td>
                            <td class='alcalinos'>$elementos[2]</td>       <!-- Segunda columna -->
                            <td class='alcalinoterreos'>$elementos[3]</td>
                            <td class='espacio' colspan='10'></td>
                            <td class='metaloides'>$elementos[4]</td>
                            <td class='noMetal'>$elementos[5]</td>
                            <td class='noMetal'>$elementos[6]</td>
                            <td class='noMetal'>$elementos[7]</td>
                            <td class='halogenos'>$elementos[8]</td>
                            <td class='gasNoble'>$elementos[9]</td>
                        </tr>";
                    } elseif ( $i == 3 ) {
                        print "
                        <tr>        <!-- Tercera fila -->
                            <td>3º</td>
                            <td class='alcalinos'>$elementos[10]</td>       <!-- Tercera columna -->
                            <td class='alcalinoterreos'>$elementos[11]</td>
                            <td class='espacio' colspan='10'></td>
                            <td class='metalesBloqueP'>$elementos[12]</td>
                            <td class='metaloides'>$elementos[13]</td>
                            <td class='noMetal'>$elementos[14]</td>
                            <td class='noMetal'>$elementos[15]</td>
                            <td class='halogenos'>$elementos[16]</td>
                            <td class='gasNoble'>$elementos[17]</td>
                        </tr>";
                    } elseif ( $i == 4 ) {
                        print "
                        <tr>        <!-- Cuarta fila -->
                            <td>4º</td>
                            <td class='alcalinos'>$elementos[18]</td>       <!-- Cuarta columna -->
                            <td class='alcalinoterreos'>$elementos[19]</td>
                            <td class='metalesTranscion'>$elementos[20]</td>
                            <td class='metalesTranscion'>$elementos[21]</td>
                            <td class='metalesTranscion'>$elementos[22]</td>
                            <td class='metalesTranscion'>$elementos[23]</td>
                            <td class='metalesTranscion'>$elementos[24]</td>
                            <td class='metalesTranscion'>$elementos[25]</td>
                            <td class='metalesTranscion'>$elementos[26]</td>
                            <td class='metalesTranscion'>$elementos[27]</td>
                            <td class='metalesTranscion'>$elementos[28]</td>
                            <td class='metalesTranscion'>$elementos[29]</td>
                            <td class='metalesBloqueP'>$elementos[30]</td>
                            <td class='metaloides'>$elementos[31]</td>
                            <td class='metaloides'>$elementos[32]</td>
                            <td class='noMetal'>$elementos[33]</td>
                            <td class='halogenos'>$elementos[34]</td>
                            <td class='gasNoble'>$elementos[35]</td>
                        </tr>";
                    } elseif ( $i == 5 ) {
                        print "
                        <tr>        <!-- Quinta fila -->
                            <td>5º</td>
                            <td class='alcalinos'>$elementos[36]</td>       <!-- Quinta columna -->
                            <td class='alcalinoterreos'>$elementos[37]</td>
                            <td class='metalesTranscion'>$elementos[38]</td>
                            <td class='metalesTranscion'>$elementos[39]</td>
                            <td class='metalesTranscion'>$elementos[40]</td>
                            <td class='metalesTranscion'>$elementos[41]</td>
                            <td class='metalesTranscion'>$elementos[42]</td>
                            <td class='metalesTranscion'>$elementos[43]</td>
                            <td class='metalesTranscion'>$elementos[44]</td>
                            <td class='metalesTranscion'>$elementos[45]</td>
                            <td class='metalesTranscion'>$elementos[46]</td>
                            <td class='metalesTranscion'>$elementos[47]</td>
                            <td class='metalesBloqueP'>$elementos[48]</td>
                            <td class='metalesBloqueP'>$elementos[49]</td>
                            <td class='metaloides'>$elementos[50]</td>
                            <td class='metaloides'>$elementos[51]</td>
                            <td class='halogenos'>$elementos[52]</td>
                            <td class='gasNoble'>$elementos[53]</td>
                        </tr>";
                    } elseif ( $i == 6 ) {
                        print "
                        <tr>        <!-- Sexta fila -->
                            <td>6º</td>
                            <td class='alcalinos'>$elementos[54]</td>        <!-- Sexta columna -->
                            <td class='alcalinoterreos'>$elementos[55]</td>
                            <td class='lantanidos'>La-Lu</td>
                            <td class='metalesTranscion'>$elementos[71]</td>
                            <td class='metalesTranscion'>$elementos[72]</td>
                            <td class='metalesTranscion'>$elementos[73]</td>
                            <td class='metalesTranscion'>$elementos[74]</td>
                            <td class='metalesTranscion'>$elementos[75]</td>
                            <td class='metalesTranscion'>$elementos[76]</td>
                            <td class='metalesTranscion'>$elementos[77]</td>
                            <td class='metalesTranscion'>$elementos[78]</td>
                            <td class='metalesTranscion'>$elementos[79]</td>
                            <td class='metalesBloqueP'>$elementos[80]</td>
                            <td class='metalesBloqueP'>$elementos[81]</td>
                            <td class='metalesBloqueP'>$elementos[82]</td>
                            <td class='metaloides'>$elementos[83]</td>
                            <td class='halogenos'>$elementos[84]</td>
                            <td class='gasNoble'>$elementos[85]</td>
                        </tr>";
                    } elseif ( $i == 7 ) {
                        print "
                        <tr>        <!-- Septima fila -->
                            <td>7º</td>
                            <td class='alcalinos'>$elementos[86]</td>        <!-- Sexta columna --> 
                            <td class='alcalinoterreos'>$elementos[87]</td>
                            <td class='actinidos'>Ac-Lr</td>
                            <td class='metalesTranscion'>$elementos[103]</td>
                            <td class='metalesTranscion'>$elementos[104]</td>
                            <td class='metalesTranscion'>$elementos[105]</td>
                            <td class='metalesTranscion'>$elementos[106]</td>
                            <td class='metalesTranscion'>$elementos[107]</td>
                            <td class='metalesTranscion'>$elementos[108]</td>
                            <td class='metalesTranscion'>$elementos[109]</td>
                            <td class='metalesTranscion'>$elementos[110]</td>
                            <td class='metalesTranscion'>$elementos[111]</td>
                            <td class='metalesBloqueP'>$elementos[112]</td>
                            <td class='metalesBloqueP'>$elementos[113]</td>
                            <td class='metalesBloqueP'>$elementos[114]</td>
                            <td class='metalesBloqueP'>$elementos[115]</td>
                            <td class='halogenos'>$elementos[116]</td>
                            <td class='gasNoble'>$elementos[117]</td>
                        </tr>";
                    } elseif ( $i == 8 ) {
                        print "
                        <tr> <!-- fila vacía -->
                            <td class='espacio' colspan='19'></td>
                        </tr>";
                    } elseif ( $i == 9 ) {
                        print "
                        <tr>        <!-- Octava fila -->
                            <td class='espacio' colspan='4'></td>
                            <td class='lantanidos'>$elementos[56]</td>       <!-- Quinta columna -->
                            <td class='lantanidos'>$elementos[57]</td>
                            <td class='lantanidos'>$elementos[58]</td>
                            <td class='lantanidos'>$elementos[59]</td>
                            <td class='lantanidos'>$elementos[60]</td>
                            <td class='lantanidos'>$elementos[61]</td>
                            <td class='lantanidos'>$elementos[62]</td>
                            <td class='lantanidos'>$elementos[63]</td>
                            <td class='lantanidos'>$elementos[64]</td>
                            <td class='lantanidos'>$elementos[65]</td>
                            <td class='lantanidos'>$elementos[66]</td>
                            <td class='lantanidos'>$elementos[67]</td>
                            <td class='lantanidos'>$elementos[68]</td>
                            <td class='lantanidos'>$elementos[69]</td>
                            <td class='lantanidos'>$elementos[70]</td>
                        </tr>";
                    } elseif ( $i == 10 ) {
                        print "
                        <tr>        <!-- Novena fila -->
                            <td class='espacio' colspan='4'></td>
                            <td class='actinidos'>$elementos[88]</td>       <!-- Quinta columna -->
                            <td class='actinidos'>$elementos[89]</td>
                            <td class='actinidos'>$elementos[90]</td>
                            <td class='actinidos'>$elementos[91]</td>
                            <td class='actinidos'>$elementos[92]</td>
                            <td class='actinidos'>$elementos[93]</td>
                            <td class='actinidos'>$elementos[94]</td>
                            <td class='actinidos'>$elementos[95]</td>
                            <td class='actinidos'>$elementos[96]</td>
                            <td class='actinidos'>$elementos[97]</td>
                            <td class='actinidos'>$elementos[98]</td>
                            <td class='actinidos'>$elementos[99]</td>
                            <td class='actinidos'>$elementos[100]</td>
                            <td class='actinidos'>$elementos[101]</td>
                            <td class='actinidos'>$elementos[102]</td>
                        </tr>";
                    }
                }
                print "</table>";
            ?>
            <h3>Leyenda</h3>
            <table class="leyenda">
                <h4><hr></h4>
                <tr>
                    <td>
                        <h4>Metales</h4>
                        <p class="alcalinos">Alcalinos.</p>
                        <p class="alcalinoterreos">Alcalinotérreos.</p>
                        <p class="metalesTranscion">Metales de Transión.</p>
                        <p class="lantanidos">Lantánidos.</p>
                        <p class="actinidos">Actínidos.</p>
                        <p class="metalesBloqueP">Metales del Bloque p.</p>
                    </td>
                    <td>
                        <p class="metaloides">Metaloides.</p>
                    </td>
                    <td>
                        <h4>No Metales</h4>
                        <p class="noMetal">Otros no metales.</p>
                        <p class="gasNoble">Gases nobles.</p>
                        <p class="halogenos">Halógenos.</p>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>