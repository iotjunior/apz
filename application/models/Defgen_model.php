<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Defgen_model extends CI_Model {
  private $table = "defgen";

  public function all()
  {
    $query = $this->db->get_where($this->table);
    $result = $query->result();
    if ( $result )
    {
      return $result;
    }
    else
    {
      return FALSE;
    }
  }

  public function filter($board_id)
  {
    $query = $this->db->get_where($this->table, array('board_id' => $board_id));
    $result = $query->result();
    if ( $result )
    {
      return $result;
    }
    else
    {
      return FALSE;
    }
  }

  // public function get($board_id)
  // {
  //   $this->db->select('*');
  //   $this->db->from($this->table);
  //   $this->db->where('id', $board_id);
  //   $result = $this->db->get();

  //   if ( $result )
  //   {
  //     return $result->row();
  //   }
  //   else
  //   {
  //     return FALSE;
  //   }
  // }
}