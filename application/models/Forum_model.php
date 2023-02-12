<?php
class Forum_model extends CI_Model{
    protected $table = 'forum_topics';
	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	public function get_count() 
    {
        return $this->db->count_all($this->table);
    }
    public function get_authors($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $this->db->order_by('date_created', 'DESC');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
	public function fetchcategories()
    {
        $query = $this->db->get('forum_category');
        return $query->result_array(); 
    }
    public function fetchforumlist()
    {
        $query = $this->db->get('tbl_forum');
        return $query->result_array(); 
    }
    public function fetchforums()
    {
        $query = $this->db->get('tbl_forum');
        return $query->result_array(); 
    }
    public function addcategory()
    {
    	$data = array(
            'category' => $this->input->post('categoryadd'),
            'description' => $this->input->post('descriptionadd')
        );
         return $this->db->insert('forum_category', $data);
    }
    public function addforum()
    {
    	$data = array(
            'title' => $this->input->post('forum')
        );
         return $this->db->insert('tbl_forum', $data);
    }
    public function deletecategory($id)
    {
        $this->db->where('id', $id);
         return $this->db->delete('forum_category');
    }
    public function updatecategory($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('forum_category', $data);
    }
    public function updateforum($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tbl_forum', $data);
    }
    public function alltopics(){
        $this->db->order_by('date_created', 'ASC');
        $query = $this->db->get('forum_topics');
        return $query->result_array(); 
    }
    public function alltopics_user(){
        $query = $this->db->query("SELECT *, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id ORDER BY forum_topics.id DESC");
        return $query->result_array(); 
    }
    public function alltopics_user_report(){
        $query = $this->db->query("SELECT *, tbl_forum.title as ftitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on tbl_forum.id= forum_topics.forum_id  ORDER BY forum_topics.id DESC");
        return $query->result_array(); 
    }
    public function get_author($limit, $start) 
    {
        $this->db->select('*,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name');
        $this->db->from('forum_topics');
        $this->db->join('user', 'forum_topics.user_id = user.id');
        $this->db->join('forum_category', 'forum_topics.category_ids= forum_category.id');
        $this->db->join('tbl_forum', 'forum_topics.forum_id = tbl_forum.id');
        $this->db->order_by('forum_topics.id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function addtopic()
    {
    	$data = array(
            'title' => $this->input->post('topic'),
            'forum_id' => $this->input->post('forum'),
            'category_ids' => $this->input->post('category'),
            'content' => $this->input->post('description'),
            'user_id' =>$this->session->id,
            'date_created' => date('y,m,d h:i a')
        );
         return $this->db->insert('forum_topics', $data);
    }
    public function gettopicedit($id){
        $this->db->where('id', $id);
        $query = $this->db->get('forum_topics');
        return $query->row_array();
    }
    public function get_counttopics() {
        return $this->db->count_all('forum_comments');
    }
    public function get_countforums() {
        return $this->db->count_all('tbl_forum');
    }
    public function fetchtopic($id){
        $this->db->select(" *,forum_topics.id as fid, concat(user.first_name, user.last_name, user.mid_name) as name, forum_category.category");
        $this->db->from('forum_topics');
        $this->db->join('user', 'forum_topics.user_id = user.id');
        $this->db->join('forum_category', 'forum_topics.category_ids = forum_category.id');
        $this->db->where('forum_topics.id', $id);
        $query = $this->db->get();
        return $query->result_array(); 
    }
    public function fetchtopic_comment($id){
        $this->db->select(" c.*, concat(u.first_name, u.last_name, u.mid_name) as name, u.email");
        $this->db->from('forum_comments c');
        $this->db->join('user u', 'c.user_id = u.id');
        $this->db->where('c.topic_id', $id);
        $this->db->order_by('c.id', 'ASC');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    public function fetchtopic_comments(){
        $this->db->query("SELECT * FROM forum_comments join forum_topics on forum_topics.id = forum_comments.topic_id");
        $query = $this->db->get('forum_comments');
        return $query->result_array(); 
    }
    public function deletetopic($id){
        $this->db->where('id', $id);
         return $this->db->delete('forum_topics');
    }
    public function updatetopic($data, $id){
        $this->db->where('id', $id);
        return $this->db->update('forum_topics', $data);
    }
    public function save_comment($id)
    {
        $data = array(
            'topic_id' => $id,
            'user_id' => $this->session->id,
            'comment' => $this->input->post('message'),
            'date_created' => date('y,m,d h:i a')
        );
         return $this->db->insert('forum_comments', $data);
    }
    public function deletecomment($id){
        $this->db->where('id', $id);
         return $this->db->delete('forum_comments');
    }
    public function updatecomment($data, $id){
        $this->db->where('id', $id);
        return $this->db->update('forum_comments', $data);
    }
    public function fetchtopic_replies($id){
        $query = $this->db->query("SELECT r.*, concat(u.first_name, u.last_name, u.mid_name) as name , u.email FROM forum_replies r inner join user u on u.id = r.user_id where r.comment_id in (SELECT id FROM forum_comments where topic_id= ".$id.")");
        $this->db->order_by('c.date_created', 'ASC');
        return $query->result_array(); 
    }
    public function get_post_latest()
    {
        $this->db->order_by('date_created', 'ASC');
        //$this->db->where('calvingstart >=', date('Y-m-d_H-i'));
        $this->db->limit(5);
        $query = $this->db->get('forum_topics');
        return $query->result_array(); 
    }
    public function getpostuser_limit(){
        $query = $this->db->query("SELECT *, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id ORDER BY forum_topics.id DESC LIMIT 5");
        return $query->result_array(); 
    }
    public function get_categories(){
        $query = $this->db->query("SELECT  COUNT(forum_topics.category_ids) as count,forum_category.id as id, forum_category.category as category from forum_category join forum_topics on forum_category.id = forum_topics.category_ids GROUP BY forum_topics.category_ids");
        return $query->result_array(); 
    }
    public function filterbycat($param){
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id WHERE forum_topics.title LIKE '%$param%' ORDER BY forum_topics.id DESC");

        return $query->result_array(); 
    }
    public function filtercategory($param){
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id WHERE forum_category.id = '$param' ORDER BY forum_topics.id DESC");

        return $query->result_array(); 
    }
    public function filterforum($param){
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id WHERE tbl_forum.id = '$param' ORDER BY forum_topics.id DESC");

        return $query->result_array(); 
    }
    public function filter($id){
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id  ORDER BY $id DESC");

        return $query->result_array(); 
    }
    public function get_data(){
        $query=$this->db->query("SELECT st.*
                                 FROM forum_topics st 
                                 ORDER BY st.id ASC");
        return $query->result_array();
    }
    public function addview($id)
    {
        
        $userid= $this->session->id;
        $chkuser = $this->db->query("SELECT * FROM `forum_topics_views` WHERE `user_id` = '$userid' AND `topic_id` = '$id'");
        if($chkuser->num_rows() == 0){
            $data = array(
                'user_id' => $userid,
                'topic_id' => $id
            );
            $this->db->insert('forum_topics_views', $data);
            $this->db->query("UPDATE forum_topics SET views=views+1 WHERE id = $id");
        }
        
    }
    public function upvote($id)
    {
        $userid= $this->session->id;
        $id = $_GET['id'];
        $chkvote = $this->db->query("SELECT * FROM `forum_votes` WHERE `user_id` = '$userid' AND `storyid` = '$id'");
        if($chkvote->num_rows() == 0){
            $data = array(
                'user_id' => $userid,
                'storyid' => $id
            );
            $this->db->insert('forum_votes', $data);
            $this->db->query("UPDATE forum_topics SET likes=likes+1 WHERE id = $id");
        }
        
    }
    public function downvote($id)
    {
        $userid= $this->session->id;
        $chkvote = $this->db->query("SELECT * FROM `forum_votes` WHERE `user_id` = '$userid' AND `storyid` = '$id'");
        if($chkvote->num_rows() != 0){
            $this->db->query("UPDATE forum_topics SET likes=likes-1 WHERE id = $id");
            $this->db->query("DELETE FROM forum_votes WHERE `user_id` = '$userid' AND `storyid` = '$id'");
        }
        
        
    }
    public function getuserquestions()
    {
        $userid = $this->session->id;
        $this->db->order_by('id', 'DESC');
        $this->db->where('user_id', $userid);
        $query = $this->db->get('forum_topics');
        return $query->result_array();
    }
    public function userquestionfetch()
    {
        $userid = $this->session->id;
        $query = $this->db->query("SELECT forum_topics.*, tbl_forum.id as fid, tbl_forum.title as ft, forum_category.id as fcid, forum_category.category as fcc FROM forum_topics JOIN tbl_forum ON forum_topics.forum_id = tbl_forum.id JOIN forum_category ON forum_category.id= forum_topics.category_ids  WHERE user_id= $userid ORDER BY id DESC");
        return $query->result_array();
    }
    public function filterdiscussionnew()
    {
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id  ORDER BY forum_topics.id DESC");

        return $query->result_array(); 
    }
    public function filterdiscussionvotes()
    {
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id  ORDER BY forum_topics.likes DESC");

        return $query->result_array(); 
    }
    public function filterdiscussionviews()
    {
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id  ORDER BY forum_topics.views DESC");

        return $query->result_array(); 
    }
    public function filterdiscussionnocomment()
    {
        $query = $this->db->query("SELECT *,tbl_forum.title as forumtitle, forum_category.category,forum_topics.user_id,forum_topics.category_ids as catids, forum_topics.id, forum_topics.title, forum_topics.content,forum_topics.date_created, user.first_name, user.last_name, user.mid_name FROM forum_topics JOIN user ON forum_topics.user_id = user.id JOIN forum_category on forum_topics.category_ids= forum_category.id JOIN tbl_forum on forum_topics.forum_id=tbl_forum.id JOIN forum_comments on forum_topics.forum_id=forum_comments.topic_id ORDER BY forum_comments.topic_id DESC");

        return $query->result_array(); 
    }
    public function qdelete()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->delete('forum_topics');
    }
    public function qupdate()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $data = array(
            'forum_id' => $this->input->post('forum'),
            'category_ids' => $this->input->post('category'),
            'title' => $this->input->post('question'),
            'content' => $this->input->post('description')
        );
        return $this->db->update('forum_topics', $data);
    }
    public function cdelete()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->delete('forum_comments');
    }
    public function cupdate()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $data = array(
            'comment' => $this->input->post('comment')
        );
        return $this->db->update('forum_comments', $data);
    }
}