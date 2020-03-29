<?php
class Company_model extends CI_Model {
	var $company_id; 
	
    function __construct() {
		parent::__construct();
		$this->company_id = $this->session->userdata('company_id');

		$this->load->helper('date');
    }

	function list_companies() {
		$sql = "SELECT company_id, company_name, status_flag, date_created, date_updated " .
			"FROM company_info_tb ORDER BY company_name ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_company($company_name='') {
		$sql = "INSERT INTO company_info_tb(company_name, date_created) " . 
			"VALUES(".$this->db->escape($company_name).", NOW()) ";

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	
	function check_company($company_name='') {
		$sql = "SELECT company_id, company_name, status_flag, date_created, date_updated ".
        	"FROM company_info_tb WHERE md5(lcase(company_name)) = md5(lcase('$company_name')) ".
		    "AND status_flag IN (1,2)";
		    
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function update_company($company_id=0, $company_name='') { 
    	$sql = "UPDATE company_info_tb SET company_name=".$this->db->escape($company_name)." WHERE company_id='$company_id'";
		
		$query = $this->db->query($sql);
        return 1;
	}

	function remove_company($company_id=0) {
		$sql = "DELETE FROM company_info_tb WHERE company_id='$company_id'";

		$query = $this->db->query($sql);
		return 1;
	}

}
?>
