<?php
class Post extends CI_Model{

  function get_posts(){
    $this->db->select()->from('posts');
    $query = $this->db->get();
    return $query->result();
  }
}
