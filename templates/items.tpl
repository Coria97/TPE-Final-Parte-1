{include 'header.tpl'}

<div class="row row-cols-3 g-6">
  {foreach from=$items item=$i}
    <div class="container my-3">
      <div class="card text-center" style="width: 18rem;">
        <div class="col">
          <img src="./images/wip.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{$i->name}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{$i->category_name}</h6>
            <p class="card-text">{$i->description}</p>
            <p class="card-text">{$i->price}</p>
            <div class="d-grid gap-2">
              <a href="item/{$i->id}" class="btn btn-primary">Show item</a>
              <!--
              {if !$logged}
                <a href="#" class="btn btn-primary">Add to cart</a>
              {else}
                <form method="POST" action="item/{$i->id}/editar">
                  <div class="d-grid gap-2">
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="nombre">
                    <input class="form-control" type="text" id="tipo" name="tipo" placeholder="tipo">
                    <input class="form-control" type="text" id="precio" name="precio" placeholder="precio">
                    <input class="form-control" type="text" id="foto" name="foto" placeholder="foto">
                    <button type="submit" class="btn btn-primary">Editar</button>
                  </div>
                </form>
                <a href="item/{$i->id}/borrar" class="btn btn-primary">Delete item</a>
              {/if}
              -->
            </div>
          </div>
        </div> 
      </div>
    </div>  
  {/foreach}
  
  <!--
  {if $logged}
    <div class="container my-3">
      <div class="card text-center" style="width: 18rem;">
        <div class="col-auto">
          <div class="card-body">
            <form method="POST" action="Item/agregar">
              <div class="d-grid gap-2">
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="nombre">
                <input class="form-control" type="text" id="tipo" name="tipo" placeholder="tipo">
                <input class="form-control" type="text" id="precio" name="precio" placeholder="precio">
                <input class="form-control" type="text" id="foto" name="foto" placeholder="foto">
                <input class="form-control" type="text" id="nombre_marca" name="nombre_marca" placeholder="nombre marca">
                <button type="submit" class="btn btn-primary">Add item</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  {/if}
  -->
</div>

{include 'footer.tpl'}
