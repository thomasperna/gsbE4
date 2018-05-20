<html>
    <head>
        <title>Gestion des composants des medicaments</title>
        <h1 style=" text-align: center; "> Gestion des composants d'un medicament <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <script type="text/javascript">
         $(
                  function(){
 
                      $('#idMeds').click(
                              function(){
                                 $('.bg-info').show();
                                      
                              });
                      $('#idMeds').show(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         $('#idMeds').change(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         
                         $('#selComp').show(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });
                         $('#selComp').change(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });
                         $('#InsererMedCom').click(
                         function(){
                           InsererMedocCom();
                            
                         });
                         
                      
   
             } );
        </script>
    </head>
        <body>
 <section>
    <div>
        <div id="MedComps">
        <h2 style="text-align: center;">Ajout de composants pour un medicament</h2>

        <hr>
            <h3>Choisissez un medicament</h3>
       
            <select id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option name='lstMedes' value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
             <input type="hidden" name="hidden " id="hidden_id_meds" >
            <input type="hidden" name="hidden " id="hidden_id_comps" >
       <div>
           <div>

                
            <br>
            <div id='idComps'>
                <h3>Choisissez un composant</h3>
                        <select id="selComp">
                        <?php 
                                foreach ($lesComposants as $comps){
                                    echo "<option value='".$comps->CMP_CODE."'>".$comps->CMP_LIBELLE."</option>";
                                }
                            ?>
                        </select><br>
            <h3>CST Quantité</h3><input  type="text" id="CST_QTE">
            </div>
            <input id="InsererMedCom"  type="button" value="Ajouter" style="margin-top: 20px;"><br>
        </div>
         
       </div>
            
   
        </div> 
    
    </div>
</section>
    </body>
</html>