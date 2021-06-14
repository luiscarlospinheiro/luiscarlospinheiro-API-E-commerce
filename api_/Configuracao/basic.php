<?php
class Basic{

 
    private $conn;

   
    public function __construct($db){
        $this->conn = $db;
    }

	function createDB(){
		$query = "CREATE DATABASE api_db;";

  
        $stmt = $this->conn->prepare($query);

        if($stmt->execute()){
            return true;
        }
		return false;
	}
   
    // banco e tabelas
    function createPedido(){
		 $query = "CREATE TABLE IF NOT EXISTS `Pedido` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  `value` decimal 10,2 NOT NULL,
		  `product` varchar (10) NOT NULL,
		  `total_value` decimal 10,2 NOT NULL,
      `status` varchar (50) NOT NULL,
      `Num_produto` int(11) not null,
      
		  PRIMARY KEY (`id`)
      FOREIGN KEY ('num_produto')
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;";

  
        $stmt = $this->conn->prepare($query);
     
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertPedido(){
		$query = "INSERT INTO `categories` (`id`,`created`, `value`, `product`, `name`, `address`, `total_value`, `status`) VALUES
			(1, '2021-05-19 16:30:07', '105,89', 'medicamentos', 'Carolina', 'Rua 1','105,89', 'payment-pending'  ),
			(1, '2021-05-19 16:28:07', '143,02', 'medicamentos', 'Luciana', 'Rua 1','143,02143,02', 'ready-for-handling'),
		

    
        $stmt = $this->conn->prepare($query);
      
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function createProdutos(){
		$query = "CREATE TABLE IF NOT EXISTS `produtos` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
      `stock` int(11) NOT NULL,
		  `price` decimal(10,0) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertProdutos(){
		$query = "INSERT INTO `produtos` (`id`, `stock`, `price`,  ) VALUES
			(1, 50, '50', 3),
			(2,  100,'12', 2),
			(3,  200, '0,35', 3),
		

       
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		
        return false;
    
    }
	
	function createCliente(){
		$query = "CREATE TABLE IF NOT EXISTS `cliente` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
      `stock` int(11) NOT NULL,
		  `name` varchar(50) NOT NULL,
                   `address` varchar (50) NOT NULL,
		  PRIMARY KEY (`name`)
                  
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertCliente(){
		$query = "INSERT INTO `cliente` (`name`, `address`, ) VALUES
			(Carolina, rua 1),
			(Luciana,  rua 2),
			(Maria,  rua 2),
		

       
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		
        return false;
        }
	
	function createLojista(){
		$query = "CREATE TABLE IF NOT EXISTS `lojista` (
		 `name` varchar(50) NOT NULL,
      `id` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
                  
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertLojista(){
		$query = "INSERT INTO `lojista` (`name`, `id`, ) VALUES
			(venancio, 98),
			(venancio,  98),
			(venancio,  98),
		

       
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		
        return false;
    
    }
	
	function createItempedido(){
		$query = "CREATE TABLE IF NOT EXISTS `Itempedido` (
		  `Num_produto` int(11) NOT NULL AUTO_INCREMENT,
                  `estoque` int (30),
                   `valor_produto decimal (10,0),
                 
		  PRIMARY KEY (`Num_produto`)
                  
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertItempedido(){
		$query = "INSERT INTO `Itempedido` (`Num_produto`, `estoque`, ) VALUES
			(1, 299),
			(2,  366),
			(3,  551),
		

       
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		
        return false;
        
        
    
    

    }
}
?>
