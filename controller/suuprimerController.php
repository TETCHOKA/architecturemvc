<?php


$base = new PDO("mysql:dbname=breif3; host=localhost", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$req = "SELECT* FROM breif3.users ORDER BY id_user ASC";
    $result = $base->query($req); 
    if(!$result){
       $message ="un probleme est survenu, la recupération des données a rencontrée un probleme";
   }else{
       while($ligne = $result->fetch(PDO::FETCH_ASSOC)){
        $id_user = $ligne['id_user'];
           $nom = $ligne['username'];
           echo <<<html
           <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            $id_user
                          </td>
                          <td>
                            $nom
                          </td>
                          <td><a href = 'supprimer.php?supprimer=$id_user'>supprimer</a></td> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
       html;
       }
   } 

   if(isset($_GET['supprimer'])){
$id_supprimer = $_GET['supprimer'];
    $req2 = "DELETE FROM breif3.users WHERE id_user = $id_supprimer";
    $result2 = $base->query($req2);
    // if(!$result2){
    //     $message1 = " un probleme est survenue, l'utilsateur n'a pas été supprimer";

    // }else{
    //     $message1 = "utilisateur a bien été supprimer";

    // }
}
