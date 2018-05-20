<html>
    <head>
        <title>Gestion des presentations</title>
        <h1 style="text-align: center;">Gestion des presentations <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
    </head>
    <body>
            <?php echo form_open('Ctrl_Composant/form_presentation');  ?>
            <h3 style="text-align: center;">Veuillez saisir les informations de la présentation</h3>
            <br><label>Code: </label><input type="text" name="PRE_CODE" />
            <br><label>Libelle: </label><input type="text" name="PRE_LIBELLE" />

            <br><input type="submit"  name="subValider" value="Ajouter la presentation" >
                </td>
              
           <table>
               <tr>
                   <th>Code</th>
                   <th>Libelle</th>
               </tr>
                <?php     
                    foreach($lesPresentations as $pres){
                ?>
               <tr>
                   <td><?php echo $pres->PRE_CODE;?></td>
                   <td><?php echo $pres->PRE_LIBELLE;?></td>
 
               </tr>
          <?php   
            }
           ?>  
               
       </table>
        <?php echo form_close();  ?>
                    </thead>           
    </body>
</html> 