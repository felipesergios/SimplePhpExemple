 <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Produto</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    
<?php
$rs = $con->query('SELECT * FROM produtos');
while($row = $rs->fetch(PDO::FETCH_OBJ)){?>
<tr>
  <td><a href="delete.php?id=<?php echo $row->id ;?>"><?php echo $row->id ;?></td>
  <td><?php echo $row->produto;?></td>
<?php }?></tr>
                                   
                                </tbody>
                            </table>