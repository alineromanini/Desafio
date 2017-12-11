<html>
   <body>
      
      <p> Criando Tabela </p>
      <?php
                echo "<p>Criando tabela no banco de dados... </p>";
				try {
					$conn = new PDO("mysql:host=localhost;dbname=tabelabd", "root", "");
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
					$sql =  "CREATE TABLE task(
     						id int UNSIGNED NOT NULL AUTO_INCREMENT,
							nome varchar(50) NOT NULL,
     						descricao text, 
							priori int, 
							submetido varchar(30), 
                            PRIMARY KEY(id)) default charset = utf8";

					$conn->exec($sql);
					                                        
					echo "<p>Tabela criada com sucesso</p>";

					$conn = null;
				}
				catch(PDOException $e)
				{
					echo "Ocorreu um erro: " . $e->getMessage();
				}
	?>