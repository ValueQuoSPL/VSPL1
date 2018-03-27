<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setting_model
 *
 * @author isaq
 */
class Setting_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// <-------Category Start------->
// public function savecategory($data) {
// $this->db->trans_start();
// $data = array(
// 'parent_id' => $this->input->post('parent_id'),
// 'cat_name' => $this->input->post('cat_name'),
// 'create_date' => date('Y-m-d h:i:s'),
// 'status' => $this->input->post('status'),
// 'created_by' => $this->session->userdata('user_id')
// );
// $this->db->insert('category', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function delete_category($id) {
// $this->db->where('id', $id);
// return $this->db->delete('category');
// }
//
// public function getcategory($id) {
// $this->db->select('*');
// $this->db->from('category');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getcategory_add() {
// $this->db->select('*');
// $this->db->from('category');
//// $this->db->where('parent_id', '0');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function update_save_category() {
// $this->db->trans_start();
// $data = array(
// 'cat_name' => $this->input->post('cat_name'),
// 'parent_id' => $this->input->post('parent_id'),
// 'status' => $this->input->post('status'),
// 'modify_date' => date('Y-m-d h:i:s'),
// );
// $id = $this->input->post('id');
// $this->db->where('id', $id);
// $this->db->update('category', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------Category Finish------->
// <-------Supplier Start------->
//------rajkumar code start--------------
    /**
     * @Auther:-Rajkumar Kale
     * This function used for get category on supplier form
     * @return type
     */
// public function getsupcategory() {
// $this->db->select('*');
// $this->db->from('category');
// $this->db->where('parent_id!=', 0);
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function savegender($data) {
// $this->db->trans_start();
// $data['create_date'] = date('Y-m-d h:i:s', now());
// $data['created_by'] = $this->session->userdata('user_id');
// $data['status'] = 'Active';
// $this->db->insert('gender', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function deletegender($id) {
// $this->db->where('id', $id);
// return $this->db->delete('gender');
// }
//
// public function getgender($id) {
// $this->db->select('*');
// $this->db->from('gender');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function updategender($data) {
// $this->db->trans_start();
// $data['modify_date'] = date('Y-m-d h:i:s', now());
// $this->db->where('id', $data['id']);
// $this->db->update('gender', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
//// <-------country Start------->
// public function savecountry($data) {
// $this->db->trans_start();
// $data['create_date'] = date('Y-m-d h:i:s', now());
// $data['created_by'] = $this->session->userdata('user_id');
// $this->db->insert('country', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getcountry($id) {
// $this->db->select('*');
// $this->db->from('country');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function deletecountry($id) {
// $this->db->where('id', $id);
// return $this->db->delete('country');
// }
//
// public function updatecountry($data) {
// $this->db->trans_start();
// $data['create_date'] = date('Y-m-d h:i:s', now());
// $data['created_by'] = $this->session->userdata('user_id');
// $this->db->where('id', $data['id']);
// $this->db->update('country', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
//// <-------country End------->
//// <-------States Start------->
// public function savestate($data) {
// $this->db->trans_start();
// $data['create_date'] = date('Y-m-d h:i:s', now());
// $data['created_by'] = $this->session->userdata('user_id');
// $this->db->insert('state', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getstate($id) {
// $this->db->select('*');
// $this->db->from('state');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getcountryState() {
// $this->db->select('id,name');
// $this->db->from('country');
// $query = $this->db->get();
// return $query->result();
// }
//
// public function deletestate($id) {
// $this->db->where('id', $id);
// return $this->db->delete('state');
// }
//
// public function updatestate($data) {
// $this->db->trans_start();
// $data['create_date'] = date('Y-m-d h:i:s', now());
// $data['created_by'] = $this->session->userdata('user_id');
// $this->db->where('id', $data['id']);
// $this->db->update('state', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------States End------->
// <-------City Start------->
// public function getStateByCountry($id) {
// $this->db->select('id,name');
// $this->db->from('state');
// $this->db->where('country_id', $id);
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function savecity() {
// $this->db->trans_start();
// $data = array(
// 'state_id' => $this->input->post('state_id'),
// 'name' => $this->input->post('name'),
// 'description' => $this->input->post('description'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'created_by' => $this->session->userdata('user_id')
// );
// $this->db->insert('city', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getcity($id) {
// $this->db->select('*');
// $this->db->from('city');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getCityByState($state_id) {
// $this->db->select('*');
// $this->db->from('city');
// $this->db->where('state_id', $state_id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getcities() {
// $this->db->select('id,name');
// $this->db->from('city');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function getStateCity() {
// $this->db->select('id,name');
// $this->db->from('state');
//// $this->db->where('id', $id);
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function getcountrycity() {
// $this->db->select('id,name');
// $this->db->from('country');
// $query = $this->db->get();
// return $query->result();
// }
//
// public function deletecity($id) {
// $this->db->where('id', $id);
// return $this->db->delete('city');
// }
//
// public function updatecity($data) {
// $this->db->trans_start();
// $data = array(
// 'id' => $this->input->post('id'),
// 'state_id' => $this->input->post('state_id'),
// 'name' => $this->input->post('name'),
// 'description' => $this->input->post('description'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'created_by' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $data['id']);
// $this->db->update('city', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------States End------->
    public function get_UserGroup() {
        $res = $this->db->get_where('admin_user', array('id' => $this->session->userdata('user_id')))->row();
        return $res;
    }

//
// public function getcitycust() {
// $this->db->select('id, name');
// $this->db->from('city');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function view($id, $table) {
// $this->db->select('*');
// $this->db->from($table);
// $this->db->where($id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getsubtype($id) {
// $this->db->select('*');
// $this->db->from('subtype');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getsporttype() {
// $this->db->select('*');
// $this->db->from('type');
// $this->db->where('status', 'Active');
// $query = $this->db->get();
// return $query->result();
// }
//
// public function savesubtype() {
// $this->db->trans_start();
// $data = array(
// 'type_id' => $this->input->post('type_id'),
// 'subtype_name' => $this->input->post('subtype_name'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('subtype', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function updatesubtype($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'subtype_name' => $this->input->post('subtype_name'),
// 'type_id' => $this->input->post('type_id'),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('subtype', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function deletesubtype($id) {
// $this->db->where('id', $id);
// return $this->db->delete('subtype');
// }
//
//// < -------team Start------->
// function saveteam() {
// $this->db->trans_start();
// $i = 0;
// foreach ($_POST['team_players'] as $team_players) {
// $players[$i] = $team_players;
// $i++;
// }
// $players = json_encode($players);
// $data = array(
// 'team_name' => $this->input->post('team_name'),
// 'team_players' => $players,
// 'team_ranking' => $this->input->post('team_ranking'),
// 'country_id' => $this->input->post('country_id'),
// 'state_id' => $this->input->post('state_id'),
// 'team_no' => $this->input->post('team_no'),
// 'logo' => $this->input->post('logo'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('team', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getteam($id) {
// $this->db->select('*');
// $this->db->from('team');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getteams() {
// $this->db->select('id,team_name,team_players,team_ranking,country_id,state_id,team_no');
// $this->db->from('team');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deleteteam($id) {
// $this->db->where('id', $id);
// return $this->db->delete('team');
// }
//
// function updateteam($data) {
// $team_players = json_encode($data['team_players']);
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'team_name' => $this->input->post('team_name'),
// 'team_players' => $team_players,
// 'team_ranking' => $this->input->post('team_ranking'),
// 'country_id' => $this->input->post('country_id'),
// 'state_id' => $this->input->post('state_id'),
// 'team_no' => $this->input->post('team_no'),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $logo = $this->input->post('logo');
// if (isset($logo)) {
// $data['logo'] = $this->input->post('logo');
// }
// $this->db->where('id', $id);
// $this->db->update('team', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------team End------->
// < -------type Start------->
// function savetype() {
// $this->db->trans_start();
// $data = array(
// 'type_name' => $this->input->post('type_name'),
// 'sport_id' => $this->input->post('sport_id'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('type', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function gettype($id) {
// $this->db->select('*');
// $this->db->from('type');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function gettypes() {
// $this->db->select('id,type_name,sport_id,create_date,modify_date, userby,status');
// $this->db->from('type');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deletetype($id) {
// $this->db->where('id', $id);
// return $this->db->delete('type');
// }
//
// function updatetype($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'type_name' => $this->input->post('type_name'),
// 'sport_id' => $this->input->post('sport_id'),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('type', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function get_sport() {
// $this->db->select('id,sport_name');
// $this->db->from('sports');
// $query = $this->db->get();
// return $query->result();
// }
// <-------type End------->
// < -------sport Start------->
// function savesport() {
// $this->db->trans_start();
// $data = array(
// 'sport_name' => $this->input->post('sport_name'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('sports', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getsport($id) {
// $this->db->select('*');
// $this->db->from('sports');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getsports() {
// $this->db->select('id,sport_name,create_date,userby,modify_date,status');
// $this->db->from('sports');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deletesport($id) {
// $this->db->where('id', $id);
// return $this->db->delete('sports');
// }
//
// function updatesport($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'sport_name' => $this->input->post('sport_name'),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('sports', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------sport End------->
// < -------userquery Start------->
// function saveuserquery() {
// $this->db->trans_start();
// $data = array(
// 'user_id' => $this->input->post('user_id'),
// 'ques' => $this->input->post('ques'),
// 'desc' => $this->input->post('desc'),
// 'ans' => $this->input->post('ans'),
//// 'created_date' => $this->input->post('created_date'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('help', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getuserquery($id) {
// $this->db->select('*');
// $this->db->from('help');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getuserquerys() {
// $this->db->select('id,user_id,ques,desc,ans,created_date,modify_date,status');
// $this->db->from('help');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deleteuserquery($id) {
// $this->db->where('id', $id);
// return $this->db->delete('help');
// }
//
// function updateuserquery($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
//// 'user_id' => $this->input->post('user_id'),
// 'ques' => $this->input->post('ques'),
// 'desc' => $this->input->post('desc'),
// 'ans' => $this->input->post('ans'),
//// 'created_date' => $this->input->post('created_date'),
//// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('help', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
//// <-------userquery End------->
//// < -------withdraw Start------->
// function savewithdraw() {
// $this->db->trans_start();
// $data = array(
// 'user_id' => $this->input->post('user_id'),
// 'amount' => $this->input->post('amount'),
// 'withdraw_status' => $this->input->post('withdraw_status'),
//// 'created_date' => $this->input->post('created_date'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('transactions', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getwithdraw($id) {
// $this->db->select('*');
// $this->db->from('transactions');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getwithdraws() {
// $this->db->select('id,user_id,amount,withdraw_status,created_date,modify_date,status');
// $this->db->from('transactions');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deletewithdraw($id) {
// $this->db->where('id', $id);
// return $this->db->delete('transactions');
// }
//
// function updatewithdraw($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'withdraw_status' => $this->input->post('withdraw_status'),
// 'modify_date' => date('Y-m-d h:i:s', now()),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('transactions', $data);
// if ($_POST['withdraw_status'] == 'Approve') {
// $this->db->where('id', $_POST['user_id']);
// $this->db->set('amount', 'amount -' . (float) $_POST['amount'], FALSE);
// $this->db->update('register');
// }
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------withdraw End------->
// < -------percent Start------->
// function savepercent() {
// $this->db->trans_start();
// $data = array(
// 'level' => $this->input->post('level'),
// 'percent' => $this->input->post('percent'),
// 'create_date' => date('Y-m-d h:i:s', now()),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id')
// );
// $this->db->insert('affiliate_per', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
//
// public function getpercent($id) {
// $this->db->select('*');
// $this->db->from('affiliate_per');
// $this->db->where('id', $id);
// $query = $this->db->get()->row();
// return $query;
// }
//
// public function getpercents() {
// $this->db->select('id,level,percent,status');
// $this->db->from('affiliate_per');
// $query = $this->db->get()->result();
// return $query;
// }
//
// public function deletepercent($id) {
// $this->db->where('id', $id);
// return $this->db->delete('affiliate_per');
// }
//
// function updatepercent($data) {
// $this->db->trans_start();
// $id = $data['id'];
// $data = array(
// 'level' => $this->input->post('level'),
// 'percent' => $this->input->post('percent'),
// 'status' => $this->input->post('status'),
// 'userby' => $this->session->userdata('user_id'),
// );
// $this->db->where('id', $id);
// $this->db->update('affiliate_per', $data);
// if ($this->db->trans_status() === FALSE) {
// $this->db->trans_rollback();
// return FALSE;
// } else {
// $this->db->trans_commit();
// return TRUE;
// }
// }
// <-------percent End------->
// < -------City Start------->
    function saveCity() {
        $this->db->trans_start();
        $data = array(
            'city_name' => $this->input->post('city_name'),
            'state_id' => $this->input->post('state_id'),
            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('city', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getCity($id) {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getCitys() {
        $this->db->select('id,city_name,state_name,status');
        $this->db->from('city');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deleteCity($id) {
        $this->db->where('id', $id);
        return $this->db->delete('city');
    }

    function updateCity($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'city_name' => $this->input->post('city_name'),
            'state_id' => $this->input->post('state_id'),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('city', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

// <-------City End------->
// < -------Faq Start------->

    function saveFaq() {
        $this->db->trans_start();
        $data = array(
            'faq_question' => $this->input->post('faq_question'),
            'faq_ans' => $this->input->post('faq_ans'),
            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('faq', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getFaq($id) {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getFaqs() {
        $this->db->select('id,faq_question,faq_ans,status');
        $this->db->from('faq');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deleteFaq($id) {
        $this->db->where('id', $id);
        return $this->db->delete('faq');
    }

    function updateFaq($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'faq_question' => $this->input->post('faq_question'),
            'faq_ans' => $this->input->post('faq_ans'),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('faq', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------Faq End------->
}
