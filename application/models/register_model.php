<?php 
 class register_model extends CI_Model{

     private $table = "user";
     
     public function getAll(){
        
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
    $sql = "INSERT INTO user (username, password, email, role) VALUES (?,md5(?),?,?)";
    $this->db->query($sql,$data);

    }
}
?>