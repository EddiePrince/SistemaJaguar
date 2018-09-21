<?php
	include 'conexao.inc.php';

	//Pegar id unidade pelo metodo get
  // $idUnidade = $_GET['idUnidade'];
	//
  // $sql = "SELECT * FROM unidades WHERE idUnidade=" . $idUnidade;
  // $result = mysqli_query($conexao, $sql);
	//
  // if($result->num_rows > 0){
  //   while($row = $result->fetch_assoc()){
  //     echo "<td>" . $row['nome'] . "</td>";
  //     echo "<td>" . $row['tipoUnidade'] . "</td>";
  //     $idTelefone = $row['idTelefone']; // Pegar id telefone
  //     $idCnpj = $row['idCnpj']; // Pegar id cnpj
  //     $idEndereco = $row['idEndereco']; // Pegar id endereco
  //   }
  // }
	//
  // //Exibir telefone
  // if ($idTelefone != NULL) {
  // $sql2 = "SELECT * FROM telefones WHERE idTelefone=" . $idTelefone;
  // $result2 = mysqli_query($conexao, $sql2);
	//
  //   if($result->num_rows > 0){
  //     while($row = $result2->fetch_assoc()){
  //       echo "<td>" . $row['numero'] . "</td>";
  //     }
  //   }
  // } else if ($idTelefone == NULL) {
  //  echo "<td>Telefone não informado</td>";
  // }
	//
  // //Exibir Cnpj
  // if ($idCnpj != NULL) {
  // $sql3 = "SELECT * FROM cnpj WHERE idCnpj=" . $idCnpj;
  // $result3 = mysqli_query($conexao, $sql3);
	//
  //   if($result->num_rows > 0){
  //     while($row = $result3->fetch_assoc()){
  //       echo "<td>" . $row['cnpj'] . "</td>";
  //     }
  //   }
  // } else if ($idCnpj == NULL) {
  //  echo "<td>CNPJ não informado</td>";
  // }
	//
  // //Exibir endereço
  // if ($idEndereco != NULL) {
  // $sql4 = "SELECT * FROM enderecos WHERE idEndereco=" . $idEndereco;
  // $result4 = mysqli_query($conexao, $sql4);
	//
  //     if($result->num_rows > 0){
  //       while($row = $result4->fetch_assoc()){
  //         $uf = $row['uf'];
  //         $municipio = $row['municipio'];
  //         $cep = $row['cep'];
  //         $bairro = $row['bairro'];
  //         $lote = $row['lote'];
  //         $complemento = $row['complemento'];
	//
  //         if ($uf != NULL) {
  //           echo "<td>" . $row['uf'] . "</td>";
  //         } else if ($uf == NULL) {
  //           echo "<td>Uf não informada</td>";
  //         }
	//
  //         if ($municipio != NULL) {
  //           echo "<td>" . $row['municipio'] . "</td>";
  //         } else if ($municipio == NULL) {
  //           echo "<td>Município não informado</td>";
  //         }
	//
  //         if ($cep != NULL) {
  //           echo "<td>" . $row['cep'] . "</td>";
  //         } else if ($cep == NULL) {
  //           echo "<td>Cep não informado</td>";
  //         }
	//
  //         if ($bairro != NULL) {
  //           echo "<td>" . $row['bairro'] . "</td>";
  //         } else if ($bairro == NULL) {
  //           echo "<td>Bairro não informado</td>";
  //         }
	//
  //         if ($lote != NULL) {
  //           echo "<td>" . $row['lote'] . "</td>";
  //         } else if ($lote == NULL) {
  //           echo "<td>Lote não informado</td>";
  //         }
	//
  //         if ($complemento != NULL) {
  //           echo "<td>" . $row['complemento'] . "</td>";
  //         } else if ($complemento == NULL) {
  //           echo "<td>Complemento não informado</td>";
	//
  //         }
	//
  //       } // while
  //     }
	//
  // }


?>
