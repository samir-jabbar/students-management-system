<?php

class model
{
	private $db;

	public function __construct()
	{
		define('USER','root');
		define('PASS','');
		$this->db= new PDO('mysql:host=localhost;dbname=pweb',USER,PASS);
	}
	public function verif($LOGIN){
        $query=$this->db->prepare('select count(*) from users_Al_Khawarizmi where E_mail=? and mdp=?');
        $query->execute($LOGIN);
        return $query->fetch();
	}
	public function ClassAdd($class_info)
	{
		$query=$this->db->prepare('insert into classe(id_cls,nom_classe,semestre_actuel,nb_etud,delegue) values(null,?,?,?,?)');
		$query->execute($class_info);
	}
	public function infos($email){
        $query=$this->db->prepare("select * from users_Al_Khawarizmi where E_mail='$email'");
        $query->execute();
        return $query->fetch();
	}
	public function droits($email){
        $query=$this->db->prepare("select * from droits where id_user='$email'");
        $query->execute();
        return $query->fetch();
	}
	public function classe($nom_cls){
        $query=$this->db->prepare("select id_cls from classe  where nom_classe='$nom_cls'");
        $query->execute();
        return $query->fetch();
	}
	public function classes(){
        $query=$this->db->prepare("select id_cls,nom_classe,delegue,semestre_actuel,nb_etud from classe");
        $query->execute();
        return $query->fetchall();
	}
	public function one_classe($id_cls){
        $query=$this->db->prepare("select nom_classe,delegue,semestre_actuel,nb_etud from classe where id_cls=$id_cls");
        $query->execute();
        return $query->fetch();
    }
    public function classe_update($info,$AC){
        if($AC==0 or $AC=='0'){
            $query=$this->db->prepare("update classe set semestre_actuel='$info[1]',nb_etud=$info[2],delegue='$info[3]' where id_cls=$info[4]");
            $query->execute();
            if (!$query) {
                echo "\nPDO::errorInfo():\n";
                print_r($this->db->errorInfo());
            }
        }
        else{
            $query=$this->db->prepare("update classe set nom_classe=?,semestre_actuel=?,nb_etud=?,delegue=? where id_cls=?");
            $query->execute($info);
            if (!$query) {
                echo "\nPDO::errorInfo():\n";
                print_r($this->db->errorInfo());
            } 
        }
    }


    public function classe_del($id_cls){
        $query=$this->db->prepare("delete from classe where id_cls=$id_cls");
        $query->execute();
	}
	public function AddEdt($info){
        $query=$this->db->prepare('delete from edt where 1=1');
		$query->execute();
        $query=$this->db->prepare('insert into edt(id_cls,chemin,upload_date) values(?,?,?)');
		$query->execute($info);
	}
	public function EdtInfo($id_cls){
        $query=$this->db->prepare("select chemin,upload_date from edt where id_cls=?");
        $query->execute($id_cls);
        return $query->fetch();
	}
	public function etudAdd($etud_info)
	{
		$query=$this->db->prepare('insert into users_Al_Khawarizmi(fonction,prenom,nom,Genre,id_cls,E_mail,num,adr,photo_personnel) values("Etudiant",?,?,?,?,?,?,?,?)');
		$query->execute($etud_info);
	}

	public function className($id_cls){
        $query=$this->db->prepare("select nom_classe from classe  where id_cls='$id_cls'");
        $query->execute();
        return $query->fetch();
	}
	public function one_user($id_user){
        $query=$this->db->prepare("select * from users_Al_Khawarizmi where id_usr=$id_user");
        $query->execute();
        return $query->fetch();
    }


	public function staffAdd($staff_info)
	{
		$query=$this->db->prepare('insert into users_Al_Khawarizmi(fonction,prenom,nom,Genre,id_cls,E_mail,num,adr,photo_personnel) values(?,?,?,?,2,?,?,?,?)');
		$query->execute($staff_info);
		print_r($staff_info);
	}	
	public function droitAdd($droit_info)
	{
		$query=$this->db->prepare('insert into droits(creer_classe,creer_compte,annonce,edt,module,notes,id_user,id_cls) values(?,?,?,?,?,?,?,2)');
		$query->execute($droit_info);
	}
	public function id_user($email){
        $query=$this->db->prepare('select id_usr from users_Al_Khawarizmi where E_mail="'.$email.'"');
        $query->execute();
        $a=$query->fetch();
        //$query->execute();
        //print_r($query->fetch());
        return $a;
	}
	public function ancAdd($anc_info)
	{
		$query=$this->db->prepare('insert into annonce(objet,id_cls,annonce,photo) values(?,?,?,?)');
		$query->execute($anc_info);
	}
	public function annonces(){
        $query=$this->db->prepare("select * from annonce");
        $query->execute();
        return $query->fetchall();
	}



    public function AllStaff()
    {
        $query=$this->db->prepare("select * from users_Al_Khawarizmi where fonction='prof' or fonction='Responsable'");
        $query->execute();
        return $query->fetchall();
    }
    public function AllStudents()
    {
        $query=$this->db->prepare("select * from users_Al_Khawarizmi where fonction='Etudiant'");
        $query->execute();
        return $query->fetchall();
    }
    public function user_update($info,$v,$id){
        if($v==1 or $v=='1'){
$query1="UPDATE users_al_khawarizmi SET E_mail=\"$info[4]\",nom=\"$info[1]\",prenom=\"$info[0]\",Genre=\"$info[2]\",num=$info[5],adr=\"$info[6]\"" ;
        $image=",photo_personnel=\"$info[7]\"";$classe=",id_cls=$info[3]";$where=" where id_usr=$id";
            if($info[7]!=0){$query1.=$image;}
            if($info[3]!=0){$query1.=$classe;}
            $query1.=$where;
            print_r($query1);
            $query=$this->db->prepare($query1);
            $query->execute();}

        if($v==2 or $v=='2'){
        print_r($info[3]);

$query1="UPDATE users_al_khawarizmi SET E_mail=\"$info[4]\",nom=\"$info[1]\", prenom=\"$info[0]\", Genre = \"$info[2]\", num=$info[5],adr=\"$info[6]\"";
            $image=",photo_personnel=\"$info[7]\"";$fonction=",fonction=\"$info[3]\"";$where=" where id_usr=$id";
            print_r($fonction);
            #$query1.=$fonction;
            if($info[7]!=0){$query1.=$image;}
            if($info[3]==0){$query1.=$fonction;}      
            $query1.=$where;
            print_r($query1);

            $query=$this->db->prepare($query1);
            $query->execute();
        }
}
    public function UserDelete($id){
        $query=$this->db->prepare("delete from users_Al_Khawarizmi where id_usr=$id");
        $query->execute();
    }
    public function Addnote($info){
        $query=$this->db->prepare('insert into notes(id_cls,chemin) values(?,?)');
        $query->execute($info);
    }
    public function noteInfo($id_cls){
        $query=$this->db->prepare("select chemin from edt where id_cls=?");
        $query->execute($id_cls);
        return $query->fetch();
    }
    public function moduleduprof($id){
        $query=$this->db->prepare("select * from module where id_usr=?");
        $query->execute($id);
        return $query->fetchall();
    }
}

?>
