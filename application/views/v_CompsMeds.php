<table>
                <tr>
                    <th>
                        Libelle du composant 
                    </th>
                    <th>
                        CST Quantité 
                    </th>
                </tr>
     <?php
       foreach ($lesComposantDeMedicaments as $comps){
        ?>  
                 <tr>
                    <td>
                         <?php echo $comps->CMP_LIBELLE; ?>
                    </td>
                    <td>
                         <?php echo $comps->CST_QTE; ?>
                    </td>
                </tr>      
     <?php           
    }
    ?>
</table>