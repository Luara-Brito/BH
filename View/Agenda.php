  <?php include_once "View\layouts\Heder.php" ?>

  <head>
      <title>Agenda</title>
      <style>
          input[type=submit] {

              background-color: #F8A428;
              border: none;
              cursor: pointer;
              width: 200px;
              height: 40px;
              font-family: 'Alex Brush';
              border-radius: 70px;
          }
      </style>
  </head>
  <div class="container-fluid" style="margin-top: 3.5rem; background-color: #FFFF;">
      <center>
          <h5 style="color:#F8A428" ;>
              <?php
                if (isset($exibirMensagem)) {
                    echo ($exibirMensagem);
                } ?>
          </h5>
      </center>
      <?php if (isset($_SESSION["loggedin"]) && $_SESSION["role"] == "role_admin") { ?>
          <div class="row">
              <div class="table-responsive" style="height: 100vh; ">
                  <table class="table table-dark table-sm">
                      <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Data</th>
                              <th scope="col">Hora de Início</th>
                              <th scope="col">Hora de Fim</th>
                              <th scope="col">servico</th>
                              <th scope="col">Ações</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($agendamentos as $agendamento) {
                                $id = $agendamento['id'];
                                $data = $agendamento['data'];
                                $hora_inicio = $agendamento['hora_inicio'];
                                $hora_fim = $agendamento['hora_fim'];
                                $servico = $agendamento['servico'];

                                echo "
                                                        <tr>
                                                            <td>$id</td>
                                                            <td>$data</td>
                                                            <td>$hora_inicio</td>
                                                            <td>$hora_fim</td>
                                                            <td>$servico</td>
                                                            <td>
                                                                <a href='/pedido/visualizar/$id'>Visualizar</a>
                                                                <a href='/pedido/editar/$id'>Editar</a>
                                                                <a href='/pedido/excluir/$id'>Excluir</a>
                                                            </td>
                                                        </tr>";
                            } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      <?php } else { ?>
          <center>
              <a href="<?PHP $_SERVER['HTTP_HOST'] ?>/agendar">
                  <input type="submit" class="m-2" value="Agende Um Horario">
              </a>
          </center>

          <div class="row">
              <div class="table-responsive" style="height: 100vh; ">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Data</th>
                              <th scope="col">Hora de Início</th>
                              <th scope="col">Hora de Fim</th>
                              <th scope="col">servico</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($agendamentos as $agendamento) {
                                $id = $agendamento['id'];
                                $data = $agendamento['data'];
                                $hora_inicio = $agendamento['hora_inicio'];
                                $hora_fim = $agendamento['hora_fim'];
                                $servico = $agendamento['servico'];

                                echo "
                                                       <tr>
                                                           <td>$id</td>
                                                           <td>$data</td>
                                                           <td>$hora_inicio</td>
                                                           <td>$hora_fim</td>
                                                           <td>$servico</td>
                                                       </tr>";
                            } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      <?PHP } ?>
  </div>
  <?php include_once "View\layouts\Footer.php" ?>