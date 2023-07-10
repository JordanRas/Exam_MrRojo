<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model
    {
        public function insertUser($nom,$mail,$pwd,$genre)
        {
            echo("insert user");
            $sql = "insert into utilisateur(nom,email,motdepasse,genre) values('%s','%s','%s','%s')";
            $sql = sprintf($sql,$nom,$mail,$pwd,$genre);
            echo($sql);
            $this->db->query($sql);
        }

        public function selectUserById($id)
        {
            $sql = 'select * from utilisateur where idutilisateur='.$id;
            $query = $this->db->query($sql);

            $ans = $query->row_array();
            return $ans;
        }

        public function selectAllUsers()
        {
            $result = array();
            $query = $this->db->query('select * from utilisateur');
            
            foreach ($query->result_array() as $row) {
                $result['idutilisateur'][] = $row['idutilisateur'];
                $result['nom'][] = $row['nom'];
                $result['email'][] = $row['email'];
                $result['motdepasse'][] = $row['motdepasse'];
                $result['genre'][] = $row['genre'];          
            }
            return $result;
        }

        public function selectuserlogin($email, $password){
            $sql = "select * from utilisateur where email='".$email."' and motdepasse='".$password."'";
            $query = $this->db->query($sql);
            $ans = $query->row_array();
            return $ans;
        }
    }
    


?>