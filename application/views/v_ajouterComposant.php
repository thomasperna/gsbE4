<html>
    <head>
        <title> Gestions des composants </title>
        <h1 style="text-align: center;"> Gestion des composants  <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        </head>
        <body>
            
                
                
            <?php echo form_open('Ctrl_Composant/form_composant');  ?>
            
            
            <h3 style="text-align: center;">Veuillez saisir les informations du composant</h3>
            <br><label>Code: </label><input type="text" name="CMP_CODE" />
            <br><label>Libelle: </label><input type="text" name="CMP_LIBELLE" />

            <br><input type="submit" name="subValider" value="Ajouter le composant" >
                </td>
              
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
 
               </tr>
          <?php   
            }
           ?>  
          
            
       </table>
<?php echo form_close();  ?>
                    </thead>
            
    </body>
</html>
