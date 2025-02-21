<?php

/*
  Template Name: Página Home
*/

//get_header();

//if (have_posts()) : while (have_posts()) : the_post();
include("header.php");
?>
<main role="main">
  <section id="login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 login_left">
          <div class="login__left-wrap row d-flex justify-content-center pt-3 pt-md-0 pr-3 pl-3 pr-md-0 pl-md-0">
            <div class="col-md-11 col-lg-10 col-xl-7 items-end flex-column">
              <div class="row login_left_row intro mb-5">
                <div class="col-12 pt-3">
                  <img class="logo" src="assets/img/logo.png" alt="">
                  <h2>Área Privada EuroBic Grupo ABANCA Net</h2>
                  <p>
                    Esta é uma área exclusivamente reservada a clientes particulares e empresariais que permite o acesso a um vasto leque de consultas e operações que podem ser feitas on-line.
                  </p>
                </div>
              </div>
              <div class="big-links row pt-5 pt-md-0 pb-3">
                <div class="col-6 col-lg-5 col-xl-5">
                  <img class="img-call" src="assets/img/call.png" alt="">
                </div>
                <div class="col-6 col-lg-7 col-xl-7 col-xl-7-1 ">
                  <div class="row">
                    <p class="link-uteis">
                      LINKS ÚTEIS
                    </p>
                    <ul class="big-links__utils">
                      <li>
                        <a href="">Privacidade</a>
                      </li>
                      <li>
                        <a href="">Aviso legal</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 login_right">
          <div class="row login_right_row d-flex justify-content-center pr-3 pl-3 pr-md-0 pl-md-0">
            <div class="col-md-11 col-lg-8 intro">
              <form action="">
                <input type="hidden">
                <label class="login_login pt-3 pt-0 pb-5" for="">Login
                  <a class="login_register" href=""> | Registo</a>
                </label>
                <div class="form-group pb-4">
                  <span>Nº de utilizador</span>
                  <input type="text" autocomplete="off" autofocus class="form-control login_input">
                </div>
                <div class="form-group pt-3 pt-md-0">
                  <div class="pb-2 pb-md-0">
                    <span>Password</span>
                    <input type="password" class="form-control login_input">
                  </div>
                  <label class="pt-3 line_17 label-acesso" for="">Esqueci-me dos meus códigos de acesso.
                    <br>
                    <a class="resend" href="">Reenviar.</a>
                  </label>
                </div>
                <div class="row">
                  <div class="col-12 col-md-12 pt-4 pt-md-4 d-flex justify-content-end">
                    <button class="btnLogin btnLogin_cancel" type="button">Voltar</button>
                    <button type="submit" class="btnLogin">Confirmar</button>
                  </div>
                </div>
              </form>
              <div class="row justify-content-center d-none d-md-flex">
                <div class="col-12">
                  <div class="row pt-3 pt-md-0 pb-3 ">
                    <div class="col-12 col-md-4 col-lg-3 align-self-sm-end">
                      <a href="">
                        <img class="seguranca pb-3" src="assets/img/seguranca.png" alt="">
                      </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-9 pt-3 pt-md-0 d-flex align-items-end copyright_label">
                      <p>© 2025 Banco BIC Português, S.A. Todos os direitos Reservados.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
include("footer.php");
//endwhile; 
//endif; 
//get_footer();
?>