<html>
    <head>
        <title> Gestions des medicaments </title>
        <h1 style="text-align: center;"> Gestion des composants  <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        </head>
        <body>

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