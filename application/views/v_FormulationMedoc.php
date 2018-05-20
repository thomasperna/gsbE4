<html>
    <head>
        <title>Gestion des formulations</title>
    <h1 style="text-align: center;">Gestion des presentations <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <script type="text/javascript">
         $(
                  function(){
                         $('#btnValidComF').click(
                         function(){
                             AjoutFormulationMedoc();        
                         });
                 
 
             } );
        </script>
    </head>
    <body>
        <div>
            <div id="AJ">
            <h2 style="text-align: center;">Ajouter une presentation à un medicament</h2>
                <hr>
                <div>
                    <div>
                        <h3 >Choisissez un medicament : </h3>
                        <select id='idMeds'>
                            <?php 
                                foreach ($lesMedicaments as $meds){
                                    echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                                }
                            ?>
                         </select>
                    </div>
                    <div>
                      <h3>Choisissez une presentation : </h3> 
                         <select id='idPres'>
                            <?php 
                                foreach ($lesPresentations as $pres){
                                    echo "<option value='".$pres->PRE_CODE."'>".$pres->PRE_LIBELLE."</option>";
                                }
                            ?>
                         </select>
                    </div>
                </div>
                <input id="btnValidComF" type="button"  value="Valider" style="margin-top: 20px;"><br>   
                <div id="divAffichPres"></div>
           
            </div>
        </div>
    </body>
</html>