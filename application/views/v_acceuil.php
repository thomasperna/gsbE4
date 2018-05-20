<html>
    <head>
        <title>GSB</title>
        <meta charset="UTF-8">
         <script type="text/javascript" src="js/functions.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
</script>
    <head>
        <h1 style="text-align: center;"> GSB </h1>
    </head>
    <body>
          <h3>Gestion des composants</h3>
          <input id="btnListerComposant"  type="button" value="Liste des composants" onClick="location.href='../../index.php/Ctrl_Composant/afficherComposant'"/>
          <input id="btnAjouterComposant"  type="button" value="Ajouter un composant" onclick="location.href='../../index.php/Ctrl_Composant/ajouterComposant'"/>
          <input id="btnModifierComposant"  type="button" value="Modifier un composant" onclick="location.href='../../index.php/Ctrl_Composant/modifierComposant'"/>
          <h3>Gestion des composants d'un médicament</h3>
          <input id="btnListeComposantDunMedoc"  type="button" value="Liste des composants d'un médicament" onclick="location.href='../../index.php/Ctrl_Composant/afficherMedicaments'"/>
          <input id="btnAjoutCompoMedoc"  type="button" value="Ajouter des composants à un médicament" onclick="location.href='../../index.php/Ctrl_Composant/ajouterComposantMeds'"/>
          <input id="btnModifierComposantDunMedoc"  type="button" value="Modifier les composants des medicaments" onclick="location.href='./../index.php/Ctrl_Composant/modifierComposantMedoc'"/>
          <h3>Gestion des présentations</h3>
          <input id="btnAjoutPresDunMedoc"  type="button" value="Ajouter une présentation à un medicament" onclick="location.href='../../index.php/Ctrl_Composant/formulationMed'"/>
          <input id="btnAjoutPres"  type="button" value="Ajouter une présentation" onclick="location.href='../../index.php/Ctrl_Composant/ajouterPresentation'"/>
          <h3>Statistiques</h3>
          <input id="btnStats"  type="button" value="Voir les statistiques" onclick="location.href='../../index.php/Ctrl_Composant/statistique'"/>
    </body>
</html>