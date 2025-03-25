<?php



//  require_once __DIR__ (me place sur le dossier ou je me trouve)(../) sor
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
           $email = $ligne['email'];
           $password = $ligne['password'];
           $role = $ligne['role_id'];
           $status = $ligne['status'];

           echo <<<html
           
           <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Staus
                        </th>
                        <th>
                          Role
                        </th>
                        <th>
                          Action
                        </th>
                        <th>
                          Action
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
                          <td>
                            $email
                          </td>
                          <td>
                            $status
                          </td>
                          <td class="text-primary">
                            $role
                          </td>
                          <td class="text-primary">
                          <a href = 'tables.php?supprimer=$id_user'>supprimer</a>
                          </td>
                          <td class="text-primary">
                          <a href = 'tables.php?desactiver=$id_user' onclick="return confirm('Voulez-vous vraiment désactiver cet utilisateur ?')">
                                Désactiver</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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

    if(isset($_GET['desactiver'])){
      $new_status = 'desactiver';
      $id_desactiver = $_GET['desactiver'];
      
      // Utilisation d'une requête préparée
      $req3 = "UPDATE breif3.users SET status = :status WHERE id_user = :id";
      $result3 = $base->prepare($req3);
      $result3->bindValue(':status', $new_status);
      $result3->bindValue(':id', $id_desactiver);
      $result3->execute();
      }
   
   ?>