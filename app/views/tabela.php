

  <div id="wrapper">

        <!-- Navigation -->
      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Produto</th>
                                        <th>Valor</th>
                                        <th>Descrição</th>                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                       									
<?php
$rs = $con->query('SELECT * FROM produtos');
while($row = $rs->fetch(PDO::FETCH_OBJ)){?>
<tr class="odd gradeX">
  <td><?php echo $row->id ;?></td>
  <td><?php echo $row->produto;?></td>
  <td><?php echo $row->valor ;?>R$</td>
  <td class="center" ><?php echo $row->descricao ;?></td>
<?php }?></tr>
                                   
                                </tbody>
                            </table>
