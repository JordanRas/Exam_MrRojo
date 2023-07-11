<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Model {
    private $data = array();

    private $id_utilisateur;
    private $nom;
    private $email;
    private $mot_de_passe;
    private $id_genre;

    public function get_id_utilisateur(){
        return $this->id_utilisateur;
    }

    public function get_nom(){
        return $this->nom;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_id_genre(){
        return $this->id_genre;
    }

    public function set_id_genre($id_genre){
        $this->id_genre = $id_genre;
    }

    public function get_mot_de_passe(){
        return $this->mot_de_passe;
    }

    public function set_mot_de_passe($mot_de_passe){
        $this->mot_de_passe = $mot_de_passe;
    }

    public function set_id_utilisateur($id_utilisateur){
        $this->id_utilisateur = $id_utilisateur;
    }

    public function set_nom($nom){
        $this->nom = $nom;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function get_genre(){
        $this->load->model('Genre');
        return $this->Genre->select_by_id($this->get_id_genre());
    }

    public function select(){
        $tab_retour = [];
        $this->db->select('*');
        $this->db->from("utilisateur");
        $query = $this->db->get();

        $results = $query->result_array();
        foreach ($results as $result) {
            $utilisateur = new Utilisateur();
            $utilisateur->set_id_utilisateur($result["idutilisateur"]);
            $utilisateur->set_nom($result["nom"]);
            $utilisateur->set_email($result["email"]);
            $utilisateur->set_mot_de_passe($result["motdepasse"]);
            $utilisateur->set_id_genre($result["genre"]);
            $tab_retour[] = $utilisateur;
        }
        return $tab_retour;
    }

    public function select_by_id($id) {
        $this->db->select('*');
        $this->db->where("idutilisateur", $id);
        $this->db->from("utilisateur");
        $query = $this->db->get();
        $query = $query->row();
        $utilisateur = new Utilisateur();
            $utilisateur->set_id_utilisateur($query["idutilisateur"]);
            $utilisateur->set_nom($query["nom"]);
            $utilisateur->set_email($query["email"]);
            $utilisateur->set_mot_de_passe($query["motdepasse"]);
            $utilisateur->set_id_genre($query["genre"]);
        return $utilisateur;
    }

    
    }