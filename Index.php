<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
   
   
   <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo\estilo.css">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        
   <?php 
     $elementos = ["e0" =>"H","e1" =>"He", 
     "e2" =>"Li","e3" =>"Be","e4" =>"B","e5" =>"C","e6" =>"N","e7" =>"O","e8" =>"F", "e9" =>"Ne",
     "e10" =>"Na","e11" =>"Mg","e12" =>"Al","e13" =>"Si","e14" =>"P","e15" =>"S","e16" =>"Cl","e17" =>"Ar",
     "e18" =>"K","e19" =>"Ca","e20" =>"Sc","e21" =>"Ti","e22" =>"V","e23" =>"Cr","e24" =>"Mn","e25" =>"Fe","e26" =>"Co","e27" =>"Ni","e28" =>"Cu","e29" =>"Zn","e30" =>"Ga", "e31"=>"Ge","e32"=>"As","e33"=>"Se","e34"=>"Br","e35"=>"Kr",
     "e36"=>"Rb","e37"=>"Sr","e38"=>"Y","e39"=>"Zr","e40"=>"Nb","e41"=>"Mo","e42"=>"Tc","e43"=>"Ru","e44"=>"Rh","e45"=>"Pd","e46"=>"Ag","e47"=>"Cd","e48"=>"In","e49"=>"Sn","e50"=>"Sb","e51"=>"Te","e52"=>"I","e53"=>"Xe",
     "e54"=>"Cs","e55"=>"Ba","e56"=>"La-Lu","e57"=>"Hf","e58"=>"Ta","e59"=>"W","e60"=>"Re","e61"=>"Os","e62"=>"Ir","e63"=>"Pt","e64"=>"Au","e65"=>"Hg","e66"=>"Tl","e67"=>"Pb","e68"=>"Bi","e69"=>"Po","e70"=>"At","e71"=>"Rn",
     "e72"=>"Fr","e73"=>"Ra","e74"=>"Ac-Lr","e75"=>"Rf","e76"=>"Db","e77"=>"Sg","e78"=>"Bh","e79"=>"Hs","e80"=>"Mt","e81"=>"Ds","e82"=>"Rg","e83"=>"Cn","e84"=>"Nh","e85"=>"Fl","e86"=>"Mc","e87"=>"Lv","e88"=>"Ts","e89"=>"Og",
     "e90"=>"La","e91"=>"Ce","e92"=>"Pr","e93"=>"Nd","e94"=>"Pm","e95"=>"Sm","e96"=>"Eu","e97"=>"Gd","e98"=>"Tb","e99"=>"Dy","e100"=>"Ho","e101"=>"Er","e102"=>"Tm","e103"=>"Yb","e104"=>"Lu",
     "e105"=>"Ac","e106"=>"Th","e107"=>"Pa","e108"=>"U","e109"=>"Np","e110"=>"Pu","e111"=>"Am","e112"=>"Cm","e113"=>"Bk","e114"=>"Cf","e115"=>"Es","e116"=>"Fm","e117"=>"Md","e118"=>"No","e119"=>"Lr"
     ];

     $elementosBloqueados = ["Pu","Am","Re","H"];

    function color($ele)
    {

        switch($ele){
            case"Li":
            case"Na":
            case"K":
            case"Rb":
            case"Cs":
            case"Fr":
                    return "alcalino";
            break;
            case"Be":
            case"Mg":
            case"Ca":
            case"Sr":
            case"Ba":
            case"Ra":
                return "alcalinoterreos";
            break;
            case"Sc":
            case"Ti":
            case"V":
            case"Cr":
            case"Mn":
            case"Fe":
            case"Co":
            case"Ni":
            case"Cu":
            case"Zn":
            case"Y":
            case"Zr":
            case"Nb":
            case"Mo":
            case"Tc":
            case"Ru":
            case"Rh":
            case"Pd":
            case"Ag":
            case"Cd":
            case"W":
            case"Hf":
            case"Ta":
            case"Re":
            case"Os":
            case"Ir":
            case"Pt":
            case"Au":
            case"Hg":
            case"Rf":
            case"Db":
            case"Sg":
            case"Bh":
            case"Hs":
            case"Mt":
            case"Ds":
            case"Rg":
            case"Cn":
                return "transicion";
            break;

            case"La-Lu":
            case"La":
            case"Ce":
            case"Pr":
            case"Nd":
            case"Pm":
            case"Sm":
            case"Eu":
            case"Gd":
            case"Tb":
            case"Dy":
            case"Ho":
            case"Er":
            case"Tm":
            case"Yb":
            case"Lu":
                return "lantanido";
            break;

            case"Ac-Lr":
            case"AC":
            case"Th":
            case"Pa":
            case"U":
            case"Np":
            case"Pu":
            case"Am":
            case"Cm":
            case"Bk":
            case"Cf":
            case"Es":
            case"Fm":
            case"Md":
            case"No":
            case"Lr":
            case"Ac":
                return "actinido";
            break;

            case"Al":
            case"Ga":
            case"In":
            case"Sn":
            case"Tl":
            case"Pb":
            case"Bi":
            case"Nh":
            case"Fl":
            case"Mc":
            case"Lv":
                return"otro";
            break;

            case"C":
            case"N":
            case"O":
            case"P":
            case"S":
            case"Se":
            case"H":
                return"otrono";
            break;

            case"B":
            case"Si":
            case"Ge":
            case"As":
            case"Sb":
            case"Te":
            case"Po":
                return"metaloide";
            break;

            case"F":
            case"Cl":
            case"Br":
            case"I":
            case"At":
            case"Ts":
                return"halogeno";
            break;

            case"He":
            case"Ne":
            case"Ar":
            case"Kr":
            case"Xe":
            case"Rn":
            case"Og":
                return"gas";
            break;
        }
    }


   ?>

</head>
<body>
    

<div class="container-fluid pl-5 pt-5 pb-5">

    <?php $contador =0;?>

    <div class= "row">

        <div class="col-xl-12" id="fila1">
            <?php while($contador != 2):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>
   

    <div class= "row">

        <div class="col-xl-12" id="fila2">
            <?php while($contador != 10):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila3">
            <?php while($contador != 18):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila4">
            <?php while($contador != 36):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila5">
            <?php while($contador != 54):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila6">
            <?php while($contador != 72):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila7">
            <?php while($contador != 90):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila8">
            <?php while($contador != 105):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>


    <div class= "row">

        <div class="col-xl-12" id="fila9">
            <?php while($contador != 120 ):?>

                <?php if(!array_key_exists("e" . $contador ,$elementos )): ?>
                    <span class="cuadro bloque" id="<?php echo "e".$contador ?>" ><?php echo "&nbsp;"; $contador++; ?></span> 
                <?php else:?>
                    <span class="cuadro <?php echo color($elementos["e". $contador])?> " id="<?php echo "e".$contador ?>" ><?php echo $elementos["e" . $contador]; $contador++; ?></span>
                <?php endif;?>

            <?php endwhile;?>
        </div>

    </div>
   

    <div class="row mt-4">

        <div class="col-xl-5 la ">

                    <table>
                        <tr>
                            <span class="d-block text-center" id="meta">Metales</span> 
                        </tr>
                        <tr>
                           <td> <span class="alcalino pu mb-2" id="" >Alcalinos</span>  </td>
                           
                           <td>
                                <span class="alcalinoterreos pu" id="">Alcalinoterreos</span>
                           </td>

                           <td>  <span class="transicion pu" id="">Metales de Transicion / Bloque D</span> </td>

                        </tr>

                        <tr>

                            <td><span class="lantanido pu ">Lantanidos</span> </td>
                            <td><span class="actinido pu" id="">Actinidos</span></td>
                            <td><span class="otro pu">Otros Metales</span></td>
                        </tr>
                    </table>

            
            <span class="">
                
                
                
                
                
                
            </span>
        </div>
        
        <div class="col-xl-2 metaloide text-center pt-3" id="medio">
            <span class="">Metaloides</span>
        </div>

        <div class="col-xl-4">
            <span class="nometa meta d-block text-center" >No Metales</span>
            <span class="otrono" >Otros No Metales</span>
            <span class="halogeno">Halogenos</span>
            <span class="gas">Gases Nobles</span>

        </div>
    
                
    </div>
   
   




</div>
</body>
</html>