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
           $email = $ligne['email'];
           $password = $ligne['password'];
           $role = $ligne['role_id'];
           $status = $ligne['status'];
           $create = $ligne['created_at'];

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
                         Connexion_at
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
                          <td class="text-primary">
                            $status
                          </td>
                          <td class="text-primary">
                            $create
                          </td>
                          
                          
                        </tr>
                      </tbody>
                    </table>
       html;
       }
   } 