<?php
class Blog_model extends CI_Model {
    var $baptism_id; 
    
    function __construct() {
        parent::__construct();
        $this->load->helper('date');
        $this->tableName = 'post_tb';
        $this->tableName_sermon = 'priest_sermon_tb';
        $this->primaryKey = 'comment_id';
    }

    function list_post_0() {
        $sql = "SELECT * FROM post_tb WHERE status_flag = '1' ORDER BY post_id DESC limit 1";

        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function list_post_1() {
        $sql = "SELECT * FROM post_tb WHERE status_flag = '1' ORDER BY post_id DESC limit 10";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function list_comments_other() {
        $sql = "SELECT * FROM post_tb ORDER BY post_id DESC limit 10";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function list_sermons() {
        $sql = "SELECT * FROM post_tb WHERE status_flag = '1' ORDER BY post_id DESC limit 1";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function form_insert($data = array()) {
        // $this->db->insert('blog_comments', $data);
        if(!array_key_exists("status_time",$data)){
            $data['status_time'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }

    public function insert($data = array()){
        if(!array_key_exists("status_time",$data)){
            $data['status_time'] = date("Y-m-d H:i:s");
        }
        // if(!array_key_exists("modified",$data)){
        //     $data['modified'] = date("Y-m-d H:i:s");
        // }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }

    public function insertcomments_article() {
        $this->load->helper('date');
        $name= $this->session->userdata('user_id');
        $article_id=$this->input->post('article_id');
        $comment=$this->input->post('comment');
        $datestring = "%Y-%m-%d - %h:%i %a";
        $time = time();
        $date= mdate($datestring, $time);
        $insertcomment=$this->db->insert('post_comments_tb',array(
            'name'=>$name,
            'comment'=>$comment,
            'time'=>$date,
            'cmt_article_id'=>$article_id));
        return
        $insertcomment;       
    }
    public function displayNUpdatenotification() {
        $status=$this->input->post('status');
        $updatecomment=$this->db->update('post_comments_tb',array('comment_status'=>$status));
        return
        $updatecomment;     
    }
    public function displayNUpdatenotification_1() {
        $status='0';
        $updatecomment=$this->db->update('user_notification_tb',array('n_status'=>$status));
        return
        $updatecomment;     
    }
    
    public function delete_p($data){
        extract($data);
        $this->db->where('post_id', $post_id);
        $this->db->update('post_tb', array('status_flag' => '0'));
        return true;
        
    }
    public function update_c($data){
        extract($data);
        $this->db->where('comment_id', $comment_id);
        $this->db->update('post_comments_tb', array('status_flag' => '0'));
        return true;
        
    }
    public function update_p($data){
        extract($data);
        $this->db->where('post_id', $post_id);
        $this->db->update('post_tb', array('status_title' => $status_title, 'status_body' => $status_body));
        return true;
        
    }
    public function update_n($data){
        extract($data);
        $this->db->where('comment_status', '1');
        $this->db->update('post_comments_tb', array('comment_status' => '0'));
        return true;
        
    }

    public function get_comments() {
        $article_id=$this->input->post('article_id');
        $this->db->select("*, CONCAT(user_info_tb.fname,' ',user_info_tb.mname,'. ',user_info_tb.lname) AS FULLNAME, user_info_tb.profile", FALSE);
        $this->db->from('post_comments_tb, user_info_tb');  
        $this->db->where('post_comments_tb.name = user_info_tb.user_id');
        $this->db->where("post_comments_tb.status_flag = 1");
        $this->db->where("post_comments_tb.cmt_article_id = '$article_id'");
        $this->db->order_by('comment_id', 'DESC');
        $this->db->limit('10');
        return $this->db->get();
    }

    // comment_status = update notification
    // status_flag = update comment

    public function get_comment_total($id) {
        $this->db->select()->from('post_comments_tb');  
        $this->db->where('cmt_article_id',$id);
        $this->db->where('status_flag','1');
        // $this->db->where('cmt_article_id!=',2);
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_notification_total() {
        $this->db->select()->from('post_comments_tb');  
        $this->db->where('comment_status','1');
        $this->db->where('status_flag','1');
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_notification_total_1() {
        $id = $this->session->userdata('user_id');
        $this->db->select()->from('user_notification_tb');  
        $this->db->where('n_status','1');
        $this->db->where('status_flag','1');
        $this->db->where('user_id_1', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }

     public function get_notify() {
        $article_id=$this->input->post('article_id');
        // $this->db->select("post_comments_tb.name, post_comments_tb.comment, CONCAT(user_info_tb.Fname,' ',user_info_tb.Mname,' ',user_info_tb.Lname) AS fullname"); 
        $this->db->select("*, CONCAT(user_info_tb.fname,' ',user_info_tb.mname,'. ',user_info_tb.lname) AS FULLNAME, user_info_tb.profile,post_tb.status_title", FALSE); 
        $this->db->from('post_comments_tb, user_info_tb, post_tb');  
        $this->db->where('post_comments_tb.name = user_info_tb.user_id');
        $this->db->where('post_comments_tb.cmt_article_id = post_tb.post_id');
        $this->db->order_by('comment_id', 'DESC');
        $this->db->limit('7');
        return $this->db->get();    
    }

    public function get_notify_1() {
        $article_id=$this->input->post('article_id');
        $userID = $this->session->userdata('user_id');
        // $this->db->select("post_comments_tb.name, post_comments_tb.comment, CONCAT(user_info_tb.Fname,' ',user_info_tb.Mname,' ',user_info_tb.Lname) AS fullname"); 
        $this->db->select("*, CONCAT(user_info_tb.fname,' ',user_info_tb.mname,'. ',user_info_tb.lname) AS FULLNAME, user_info_tb.profile", FALSE); 
        $this->db->from('user_notification_tb, user_info_tb');  
        $this->db->where('user_notification_tb.user_id_0 = user_info_tb.user_id');
        $this->db->where('user_id_1', $userID);
        $this->db->order_by('n_id', 'DESC');
        $this->db->limit('10');
        return $this->db->get();    
    }

    public function get_sermons() {

        $this->db->select("*");
        $this->db->from('priest_sermon_tb, user_info_tb');  
        $this->db->where('priest_sermon_tb.user_id = user_info_tb.user_id');
        $this->db->where("priest_sermon_tb.status_flag = 1");
        $this->db->order_by('sermon_id', 'DESC');
        $this->db->limit('5');
        // echo $this->db->queries[0];;
        return $this->db->get(); 

        //  $sql = "SELECT *, CONCAT(user_info_tb.fname,' ',user_info_tb.mname,' ',user_info_tb.lname) AS FULLNAME, user_info_tb.profile FROM priest_sermon_tb, user_info_tb WHERE priest_sermon_tb.user_id = user_info_tb.user_id AND priest_sermon_tb.status_flag = '1'";

        // $query = $this->db->query($sql);
        // echo ("$sql");die;
        // return $query->result_array();

        // $this->db->order_by('id_image','ASC');
        // $data = $this->db->get($this->sermon_info_tb);
        // return $data->result();
    }
    
    function list_sermon() {
        $user_id = $this->session->userdata('user_id');
        // $sql = "SELECT * FROM priest_sermon_tb WHERE user_id = '$user_id' ";
        $sql = "SELECT * FROM priest_sermon_tb";

        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function save_sermon($data = array()){
        if(!array_key_exists("user_id",$data)){
            $user['user_id'] = $this->session->userdata('user_id');
        }
        $insert = $this->db->insert($this->tableName_sermon,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
}
?>
