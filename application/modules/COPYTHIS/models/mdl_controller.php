<?php
//Cette classe modele est un exemple d'un ensemble de requetes que nous puvons avoir'

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Samplemodelcode extends CI_Model {

    // Fonction constructeur, instanciant la classe
	function __construct()
    {
        parent::__construct();
    }
    
	/*------------ Requêtes de lecture ----------------*/
	
	//Recupère tous les résultats d'une table unique 
	function get_allresults($table)
	{
		$query = $this->db->get($table);
		return $query;
	}
	
	//Recupère des champs précis d'une table unique, $field=tableau de champs à recupérer
	function get_someresults($table, $field)
	{
		$this->db->select($field);
		$query = $this->db->get($table);
		return $query;
	}
	
	//Recupère tous les éléments bornés d'une table unique ($table=table, $limit=maxi, $offset=mini, $orderby=élt de classement, $set=desc|asc|random)
	function get_allbornedresults($table,$limit,$offset,$orderby,$set)
	{
		$this->db->limit($limit, $offset);
		$this->db->order_by($orderby,$set);
		$query = $this->db->get($table);
		return $query;
	}
	
	//Recupère des champs précis et bornésd'une table unique ($table=table, $field=tableau de champs à recupérer, $limit=maxi, $offset=mini, $orderby=élt de classement, $set=desc|asc|random)
	function get_somebornedresults($table, $field,$limit,$offset,$orderby,$set)
	{
		$this->db->select($field);
		$this->db->limit($limit, $offset);
		$this->db->order_by($orderby,$set);
		$query = $this->db->get($table);
		return $query;
	}
	
	//Recupère tous les élts d'une table avec une condition ($table=table, $where=tableau de donnés colonne condition)
	function get_allwhereresults($table,$where)
	{
		$this->db->where($where);
		$query=$this->db->get($table);
		return $query;
	}
	
	//Recupère des élts précis d'une table avec une condition ($table=table, $field=tableau de champs à recupérer, $where=tableau de donnés colonne condition)
	function get_somewhereresults($table,$field,$where)
	{
		$this->db->select($field);
		$this->db->where($where);
		$query=$this->db->get($table);
		return $query;
	}
	
	//Recupère tous les champs d'une table avec une condition égale ($table=table, $where=tableau de donnés colonne condition, $limit=maxi, $offset=mini, $orderby=élt de classement, $set=desc|asc|random)
	function get_allwherebornedresults($table,$where,$limit,$offset,$orderby,$set)
	{
		$this->db->limit($limit, $offset);
		$this->db->order_by($orderby,$set);
		$this->db->where($where);
		$query=$this->db->get($table);
		return $query;
	}
	
	//Recupère des champs d'une table avec une condition égale ($table=table, $field=tableau de champs à recupérer,$where=tableau de donnés colonne condition, $limit=maxi, $offset=mini, $orderby=élt de classement, $set=desc|asc|random)
	function get_somewherebornedresults($table,$field,$where,$limit,$offset,$orderby,$set)
	{
		$this->db->select($field);
		$this->db->limit($limit, $offset);
		$this->db->order_by($orderby,$set);
		$this->db->where($where);
		$query=$this->db->get($table);
		return $query;
	}
	
	/*------------ Requêtess d'écriture ----------------*/
	
	//Insère quelques éléments dans une table $table=table, $data= tableau associatif couplés colonnes-valeurs
	function insert_somedata($table,$data)
	{
		$query=$this->db->insert($table,$data);
		return $query;
	}
	
	/*-------------- Requêtess de mises à jour -----------*/
	//Met ࠪour les colonnes d'une table précise suivant une condition, $table=table, $where=tableau de conditions couplés colonnes-valeurs, $data= tableau associatif couplés colonnes-nouvelles valeurs
	function update_somedata($table,$where,$data)
	{
		$this->db->where($where);
        $query=$this->db->update($table, $data);
		return $query;
	}
		
	/*------------- Requêtess de suppression -------------*/
	
	//supprime des lignes dans une table précise suivant une condition
	function delete_somedata($column_condition,$value,$table)
	{
		$this->db->where($column_condition,$value);
		$query=$this->db->delete($table);
		return $query;
	}
}
?>