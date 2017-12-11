<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adicionar Task</title>
</head>

<body>
Adicionar Task<br />
<form name="adctask" method="post"><br />
<input type="text" value="Nome" name="nome" /><br /><br />
<textarea name="descricao">Descricao</textarea><br />
<br />
Anexar Arquivos 
<br /><br /><input type="file" value="Anexo" name="anexo" /><br />
<br /><br /><input type="file" value="Anexo" name="anexo" /><br />
<br /><br /><input type="file" value="Anexo" name="anexo" /><br />
<br /><input type="submit" name="cadastrar" value="Cadastrar" />
<input type="button" name="voltar" value="Voltar" onClick="location.href='dashboard.php'" />
</form>
</body>
</html>