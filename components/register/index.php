<section id="register" class="w-100 d-flex justify-content-center">
  <div class="container h-auto w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <d class="" style="border-radius: 1rem;">
            <h3 class="display-6 mb-5 fw-bolder">Направи свој налог</h3>
            <form method="post" class="d-flex flex-column gap-3">
                <input type="text" name="name" class="inputs" placeholder="Име" required />
                <input type="text" name="lastname" class="inputs" placeholder="Презиме" required />
                <input type="text" name="username" class="inputs" placeholder="Корисничко име" required />
                <input type="email" name="email" class="inputs" placeholder="Имејл" required />
                <input type="text" name="phone" class="inputs" placeholder="Број телефона" required />
                <input type="password" name="password" class="inputs" placeholder="Шифра"  required />
                <input type="date" name="birthday" class="inputs" placeholder="Рођен"  required />
                <button class="btn btn-light btn-lg btn-block" type="submit" name="register">Пошаљи захтев</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
    #register{
        margin-top: -60px;
        border-top: 10px solid white;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom: 10px solid white;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>


