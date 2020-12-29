<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Lifenet vCard</h1>
    <p class="lead">Changer le numero de vos contact automatiquement a partir de la vCard.</p>
  </div>

  <div class="row justify-content-center align-items-center text-center">
    <div class="col-7">
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h2 class="my-0 fw-normal">Charger votre vCard</h2>
      </div>
      <div class="card-body">
        <div class="progress m-3" style="height: 3px;">
          <div id="file-load" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div id="file-info" class="row m-3">
          <div class="col-4 text-truncate">
            <p id="name" class="text-success fw-lighter">Nom: </p>
          </div>
          <div class="col-4">
            <p id="taille" class="text-success fw-lighter">Taille: </p>
          </div>
          <div class="col-4">
            <p id="type" class="text-success fw-lighter">Type: </p>
          </div>
        </div>
        <form class="m-3" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <input name="vcf" type="file" accept="vcf" class="form-control form-control-lg" id="file">
            <label class="input-group-text" for="file">Upload</label>
          </div>
          <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Charger mes contacts</button>
        </form>
      </div>
    </div>
    </div>
  </div>