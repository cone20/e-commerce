<section id="login" class="w-100 d-flex justify-content-center">
  <div class="container py-4 h-auto w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <d class="" style="border-radius: 1rem;">
            <h3 class="display-6 mb-5 fw-bolder">Пријави се</h3>
            <form method="post" class="d-flex flex-column gap-3">
                <input type="email" name="email" class="inputs" placeholder="Унесите ваш имејл" required />
                <input type="password" name="password" class="inputs" placeholder="Шифра"  required />
                <button class="btn btn-light btn-lg btn-block" type="submit" name="login">Пошаљи захтев</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
    #login{
        margin-top: -60px;
        border-top: 10px solid white;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom: 10px solid white;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
</style>