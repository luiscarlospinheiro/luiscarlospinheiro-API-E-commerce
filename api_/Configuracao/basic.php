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
		  `NumPedido` int(11) NOT NULL AUTO_INCREMENT,
		  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  `valor` decimal 10,2 NOT NULL,
		  `produtos` varchar (10) NOT NULL,
		  `nome` varchar (10) NOT NULL,
		  `endereço` varchar (10) NOT NULL,
		  `valor_total` decimal 10,2 NOT NULL,
                  `status` varchar (50) NOT NULL,
                  `Num_produto` int(11) NOT NULL ,
      
		  PRIMARY KEY (`id`),
                  FOREIGN KEY ('Num_produto')
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;";

  
        $stmt = $this->conn->prepare($query);
     
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertPedido(){
		$query = "INSERT INTO `Pedido` (`NumPedido`,`criacao`, `valor`, `produtos`, `nome`, `endereço`, `total_value`, `status`) VALUES
			(1, '2021-05-19 16:30:07', '105,89', 'medicamentos', 'Carolina', 'Rua 1','105,89', 'payment-pending'  ),
			(2, '2021-05-19 16:28:07', '143,02', 'medicamentos', 'Luciana', 'Rua 1','143,02', 'ready-for-handling'),
		

    
        $stmt = $this->conn->prepare($query);
      
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function createProdutos(){
		$query = "CREATE TABLE IF NOT EXISTS `Produtos` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `estoque` int(11) NOT NULL,
		  `preco` decimal(10,0) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertProdutos(){
		$query = "INSERT INTO `Produtos` (`id`, `estoque`, `preco`,  ) VALUES
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
		$query = "CREATE TABLE IF NOT EXISTS `Cliente` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
      `stock` int(11) NOT NULL,
		  `nome` varchar(50) NOT NULL,
                   `endereco` varchar (50) NOT NULL,
		  PRIMARY KEY (`name`)
                  
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;";

        
        $stmt = $this->conn->prepare($query);
        
        if($stmt->execute()){
            return true;
        }
		return false;
	}
	
	function insertCliente(){
		$query = "INSERT INTO `Cliente` (`nome`, `endereco`, ) VALUES
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
		$query = "CREATE TABLE IF NOT EXISTS `Lojista` (
		 `nome` varchar(50) NOT NULL,
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
		$query = "INSERT INTO `Lojista` (`nome`, `id`, ) VALUES
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
		$query = "CREATE TABLE IF NOT EXISTS `Item_Pedido` (
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
		$query = "INSERT INTO `Item_Pedido` (`Num_produto`, `estoque`, ) VALUES
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
