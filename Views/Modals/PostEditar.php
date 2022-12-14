    <!--Modal-->
    <div class="modal modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Publicacion</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="d-flex justify-content-center col-12" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/placeholder.jpg');width: 100%; height:250px;">
                    <div class="">
                        <label class="form-label text-white m-1" for="customFile1">Cambiar portada</label>
                        <input type="file" class="form-control d-none" id="customFile1" accept="image/*" />
                    </div>
                </div>
                <div class="text-1">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Titulo</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?=$data['data']['PoTitulo']?>">
                      </div>
                      <div class="col-4">
                          <label for="recipient-name" class="col-form-label">Categoria</label>
                          <select class="form-select" aria-label="Default select example">
                            <?php foreach($data['Categoria'] as $key => $value):?>
                              <option <?= $value['CaId'] == $data['data']['CaId'] ? 'selected' : '' ?> value="<?=$value['CaId']?>"><?=$value['CaNombre']?></option>
                            <?php endforeach;?>
                            </select> 
                        </div>
                </div>
                <div class="mb-12">
                  <label for="message-text" class="col-form-label">Contenido:</label>
                  <textarea class="form-control" id="message-text"><?=$data['data']['PotText']?></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
        </div>
      </div>