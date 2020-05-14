<?php

	class Pokemon {
	
		public function connexionbdd(){

			try{
				$bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
				return($bdd);
			}
			catch(PDOException $e){
				print "Erreur : ".$e->getMessage();
				die(); 
			}

		}



		public function search($q){

        $q = trim(htmlspecialchars($q));
        $bdd = $this->connexionbdd();
        $query = $bdd->prepare("SELECT DISTINCT `id`,`nameenglish`,`namefrench`,`type0`,`type1` FROM `mytable` WHERE `nameenglish` LIKE '$q%' OR `namefrench` LIKE '$q%' OR `type0` LIKE '$q%' OR `type1` LIKE '$q%'");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $bdd = null;
        return($results);

    	}
	
	}








?>