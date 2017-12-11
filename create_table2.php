<html>
   <body>
      
      <p> Criando Tabela </p>
      <?php
                echo "<p>Criando tabela no banco de dados... </p>";
				try {
					$conn = new PDO("mysql:host=localhost;dbname=tabelabd", "root", "");
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
					$sql =  "CREATE TABLE acesso(
     						id int UNSIGNED NOT NULL AUTO_INCREMENT,
							user varchar(20),
							senha varchar(20), 
                            PRIMARY KEY(id))";

					$conn->exec($sql);
					                                        
					echo "<p>Tabela criada com sucesso</p>";

					$conn = null;
				}
				catch(PDOException $e)
				{
					echo "Ocorreu um erro: " . $e->getMessage();
				}
	?>