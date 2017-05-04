<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Register</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <header>
      <nav class="navbar navbar-inverse">
      		  <div class="container-fluid">
      		    <div class="navbar-header">
      		      <a class="navbar-brand" href="login.php">SIRIMA</a>
      		    </div>
      		  </div>
      		</nav>
      </header>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
      </script>
  </head>
  <body>
      <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2> Register </h2>
                        </div>
                        <div class="panel-body">
                            <form method="post" id="form-register">
                                <table class="table">
                                    <tbody>                                       
                                       <tr>
                                          <td> Username </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="Username"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Password </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="password" class="form-control" id="Password"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Ulangi Password </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="password" class="form-control" id="Password-confirm"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Nama Lengkap </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="NamaLengkap"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Nomor Identitas </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="NomorIdentitas"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Jenis Kelamin </td>
                                          <td>
                                              <div class="form-group">
                                                 <select name="myvalue" class="form-control">
                                                  <option value="Laki">Laki-Laki</option>
                                                  <option value="Perempuan">Perempuan</option>
                                                </select>
                                              </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Tanggal Lahir </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="datepicker" />
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Alamat </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="Alamat"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Alamat Email </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="AlamatEmail"/>
                                            </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td> Ulangi Alamat Email </td>
                                          <td>
                                            <div class="form-group">
                                             <input type="text" class="form-control" id="AlamatEmail-Konfirmasi"/>
                                            </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                </table>
                                <a href="login.php" type="button" class="btn btn-primary"> Create </a>     
                                <button type="reset" class="btn btn-danger"> Reset </button>          
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>