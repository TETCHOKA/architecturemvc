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
                          <td><a href = 'modifier.php?modifier=$id_user'>modifier</a></td> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
       html;
       }
   } 

   if(isset($_GET['modifier'])){
    $id_modifier = $_GET['modifier'];
         $requete3 = $base->prepare("UPDATE breif3.users SET username = :nom WHERE id_user = :id_user ");
        $requete3->bindValue(":nom", $_POST['nom_modifier']);
        $requete3->bindValue(":id_user", $id_modifier);
        $result3 = $requete3->execute();
if(!$result3){
    $message3 ="un probleme est survenu, l'utilisateur n'a pas été modifier";
}else{
    $message3 = "l'utilisateur a bien été modifier";
}
}
   
