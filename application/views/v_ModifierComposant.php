<html>
    <head>
        <title> Gestions des composants </title>
        <h1 style="text-align: center;"> Gestion des composants  <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
       </head>
        <body>
           <h3 style="text-align: center;">Choisissez un composant à modifier</h3>
           <table>
               <tr>
                   <th>Code</th>
                   <th>Libelle</th>
               </tr>
                <?php     
                    foreach($lesComposants as $com){
                ?>
               <tr>
                   <td><?php echo $com->CMP_CODE;?></td>
                   <td><?php echo $com->CMP_LIBELLE;?></td>
                   <td><input type="button" name="subValider" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/modComposant/<?php echo $com->CMP_CODE; ?>'"/>              

               </tr>
          <?php   
            }
           ?>  
       </table>
<?php echo form_close();  ?>
                    </thead>            
    </body>
</html>