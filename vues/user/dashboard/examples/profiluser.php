<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$id_user = $_SESSION['id_user'];

$base = new PDO("mysql:dbname=breif3; host=localhost", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete = $base->prepare("SELECT * FROM breif3.users WHERE id_user = :id_user");
    $requete->bindParam(':id_user', $id_user);
    $requete->execute();
    $ligne = $requete->fetch(PDO::FETCH_ASSOC);
    $id_user = $ligne['id_user'];
           $nom = $ligne['username'];
           $email = $ligne['email'];
           $password = $ligne['password'];
           $role = $ligne['role_id'];
           $status = $ligne['status'];

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
                        <th>
                          Email
                        </th>
                        <th>
                          password
                        </th>
                        <th>
                          Staus
                        </th>
                        <th>
                          Role
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
                            $password
                          </td>
                          <td>
                            $status
                          </td>
                          <td class="text-primary">
                            $role
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
       html;

?>