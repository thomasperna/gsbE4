<html>
    <head>
        <title> Gestions des composants </title>
        <h1> Gestion des composants  <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
       
</head>
        <body>
            
                
                
            <?php echo form_open('Ctrl_Composant/modifierComposantMod');  ?>
            
            
            <h4><b>Veuillez saisir les informations du composant à modifier</b></h4>
            <br><label>Code: </label><input type="text" name="CMP_CODE" value="<?php echo $unComposant[0]->CMP_CODE; ?>" />
            <br><label>Libelle: </label><input type="text" name="CMP_LIBELLE" value="<?php echo $unComposant[0]->CMP_LIBELLE; ?>" />

            <input type="hidden" name ="hidden_id" value="<?php echo $unComposant[0]->CMP_CODE; ?>">          
            <br><input type="submit" name="subValider" value="Modifier le composant">      
            
<?php echo form_close();  ?>
     
    </body>
</html>