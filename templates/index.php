<div class="container ">
  <div class="row mx-auto">
    <div class="mx-auto">
      <?php foreach($files as $file) : ?>
        <a href="/show.php?id=<?=$file['id']?>"><img src="<?=$file['path']?>" alt="Картинка" class="rounded float-left" width=150px height=150px></a>
      <?php endforeach ?>  
    </div>

  </div>     
</div>
