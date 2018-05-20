<html>
    <head>
        <title>Medicament</title>
        <h1 style=" text-align: center; "> Gestion des composants d'un medicament <a href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
           <meta charset="UTF-8">
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <script type="text/javascript">
         $(
                  function(){
                      $('#idMeds').change(
                         function(){
                             AfficherComposantMeds($(this).val());
                         });
                         $('#idMeds').show(
                         function(){
                             AfficherComposantMeds($(this).val());
                         });
                     
 
             } );
        </script>
    </head>
        <body>

        <header>
            <div>
              <h2>Liste des composants d'un medicament</h2>
            </div>
        </header>
    <div>
            <h3>Choisissez un medicament</h3>
        
            <select  id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
            <br>
            <div id="divComps"></div>
    </div>

    </body>
</html>