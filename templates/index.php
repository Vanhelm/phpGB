<div class="container ">
  <div class="row mx-auto">
    <div class="mx-auto">
      <?php foreach($files as $file) : ?>
        <a href="<?=$file?>" target="_blank"><img src="<?=$file?>" alt="Картинка" width=150px height=150px></a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
      <?php endforeach ?>  
    </div>

  </div>     
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Модальное окно</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php foreach($files as $file) : ?>
      <img src="<?=$file?>" alt="Картинка">
      <?php endforeach ?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>