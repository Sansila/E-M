<?php
class modsite extends CI_Model {


  function getevent($limit=8)
  {
    $this->db->where('gallery_type', 2);
    $this->db->order_by('gallery_id', 'DESC');
    if($limit != 'all') {
      $this->db->limit($limit);
    }
    return $this->db->get("tblgallery")->result(); 
  }
  function getinf(){
    return $this->db->query("SELECT * FROM tblarticle WHERE location_id='9'  and is_active='1' limit 3")->result(); 
  }

  function getsld(){
    return $this->db->query("SELECT * FROM tblarticle WHERE location_id='10'  and is_active='1' limit 3")->result(); 
  }
  function getcategory(){
    $sql = "SELECT * from tblmenus as men
    inner join tbllocation as lo on men.menu_type=lo.location_id
    where lo.location_type like 'category' and men.menu_type=15 or men.menu_type=9 or men.menu_type=6  or men.menu_type=11  and men.is_active=1";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupevent(){
    $location_id = 3;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url 
    FROM tblarticle 
    LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id
    LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id
    WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 AND tblmenus.is_active=1
    GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 4";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getoutproduct(){
    $location_id = 13;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 1";
    $data['result'] = $this->db->query($sql)->row();

    return $this->db->query($sql)->row();
  }
  function getproductdescription(){
    $location_id = 14;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 1";
    $data['result'] = $this->db->query($sql)->row();

    return $this->db->query($sql)->row();
  }
   function getupcustomer(){
    $location_id = 10;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 15";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
   function getprofile(){

    $sql = "SELECT * FROM site_profile";
    $data['result'] = $this->db->query($sql)->row();

    return $this->db->query($sql)->row();
  }
  function getuptemplate($offset, $limit){
    $location_id = 11;

   $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT $limit, $offset";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupcustomerall($offset, $limit){
    $location_id = 10;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT $limit, $offset";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
    function getcategory_id($lid){
    $location_id = $lid;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT $limit, $offset";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
    function getupservice(){
    $location_id = 9;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 12";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupserviceall($offset, $limit){
    $location_id = 9;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT $limit, $offset";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupproduct(){
    $location_id = 6;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1
     GROUP BY tblarticle.article_id 
    ORDER BY tblarticle.article_id DESC
    LIMIT 12";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupproject(){
    $location_id = 15;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1
     GROUP BY tblarticle.article_id 
    ORDER BY tblarticle.article_id DESC
    LIMIT 12";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
   function getuptemplate_home(){
    $location_id = 11;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1
     GROUP BY tblarticle.article_id 
    ORDER BY tblarticle.article_id DESC
    LIMIT 12";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupproductall($offset, $limit){
    $location_id = 6;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
     GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT $limit, $offset";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function getupaboutus(){
    $location_id = 7;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 
    GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 1";
    $data['result'] = $this->db->query($sql)->row();

    return $this->db->query($sql)->row();
  }
  function getupeventmarquee(){
    $location_id = 3;

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url 
    FROM tblarticle 
    LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id
    LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id
    WHERE tblarticle.location_id=$location_id AND tblarticle.is_active=1 AND tblarticle.is_marguee=1 AND tblmenus.is_active=1
    GROUP BY tblarticle.article_id
    ORDER BY tblarticle.article_id DESC
    LIMIT 10";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  } 
  function getcouse(){
    return $this->db->query("SELECT * FROM tblarticle WHERE location_id='4' and is_active='1' limit 4")->result();
  }
  function getteacher(){
    return $this->db->query("SELECT * FROM tblarticle WHERE location_id='6' and is_active='1' limit 4")->result();
  }
  function getservice(){
    return $this->db->query("SELECT * FROM tblarticle WHERE location_id='7' and is_active='1' limit 3")->result();
  }
  function getdefualtimg($article_id){
    return $this->db->query("SELECT * FROM tblgallery WHERE article_id='$article_id' ORDER BY gallery_id ASC LIMIT 1")->row();
  }
  function gethome(){
    return $this->db->query("SELECT * FROM tblarticle WHERE article_id='1' and is_active='1' limit 1")->row();
  }
  function getinfor(){
    return $this->db->query("SELECT * FROM tblarticle WHERE article_id='2' and is_active='1' limit 1")->row();

  }
  function getvdo(){
    return $this->db->query("SELECT * FROM tblgallery WHERE gallery_type='1' order by gallery_id desc limit 10");

  }
  function getcustomer(){
    return $this->db->query("SELECT * FROM `tblarticle` WHERE location_id=10  limit 10");

  }
  function getcustomerall(){
    return $this->db->query("SELECT * FROM `tblarticle` WHERE location_id=10  limit 100");

  }
  function getgallery(){
    return $this->db->query("SELECT * FROM tblgallery WHERE gallery_type='2' ORDER BY gallery_id DESC")->result();

  }

  function get_videos($location_id=null, $limit=5) {
    $where = "";
    if($location_id != NULL) {
      $where .= "AND location_id='$location_id' ";
    }
    return $this->db->query("SELECT * FROM tblgallery WHERE gallery_type=1 AND gallery_type=1 {$where} ORDER BY `order` ASC, gallery_id DESC LIMIT $limit");
  }
  function get_videos_all($location_id=null, $limit=100) {
    $where = "";
    if($location_id != NULL) {
      $where .= "AND location_id='$location_id' ";
    }
    return $this->db->query("SELECT * FROM tblgallery WHERE gallery_type=1 AND gallery_type=1 {$where} ORDER BY `order` ASC, gallery_id DESC LIMIT $limit");
  }

  function get_banner($location_id=null, $limit=3) {
    $where = "";
    if($location_id != NULL) {
      $where .= "AND tblbanner.location_id='$location_id' ";
    }

    $sql_limit = "LIMIT $limit";
    if($limit == 'all') {
      $sql_limit = '';
    }

    $sql = "SELECT * 
    FROM tblbanner 
    INNER JOIN tbllocation ON tblbanner.location_id=tbllocation.location_id
    WHERE tblbanner.is_active=1 {$where} 
    ORDER BY tblbanner.`orders` ASC, tblbanner.banner_id DESC $sql_limit";
    return $this->db->query($sql);
  }
  function get_customer_all($menu_type=null, $limit=100) {
    $where = "";
    if($menu_type != NULL) {
      $where .= "location_id='$menu_type' ";
    }
    return $this->db->query("SELECT * FROM `tblarticle` WHERE  {$where}  LIMIT $limit");
  }
   function getupproductdetail($article_id=null){
    $where = "";
    if($article_id != NULL) {
      $where .= "tblarticle.article_id='$article_id' ";
    }

    $sql = "SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE {$where}  AND tblarticle.is_active=1 
    LIMIT 1";
    $data['result'] = $this->db->query($sql)->result();

    return $this->db->query($sql)->result();
  }
  function loadbanner()
  {
    $query = $this->db->query("SELECT * FROM tblbanner where location_id = 1 ")->result();
    return $query;
  }

  function loaditem()
  {
    $query = $this->db->query("SELECT * FROM tblarticle as a 
                        inner join tblgallery as g on a.article_id = g.article_id
                        WHERE a.location_id = 9 AND a.is_active = 1 ")->result();
    return $query;
  }
  function load_detail($article_id=''){
    $query = $this->db->query("SELECT tblarticle.*, tblmenus.menu_id, tblgallery.url FROM tblarticle LEFT JOIN tblgallery ON tblarticle.article_id=tblgallery.article_id LEFT JOIN tblmenus ON tblmenus.menu_type=tblarticle.location_id WHERE tblarticle.article_id='$article_id'  AND tblarticle.is_active=1");
    return $query;
  }
  function healtcare(){
    $query = $this->db->query("SELECT * FROM tblarticle as a 
                        inner join tblgallery as g on a.article_id = g.article_id
                        WHERE a.location_id = 15 AND a.is_active = 1 ")->result();
    return $query;
  }

}
