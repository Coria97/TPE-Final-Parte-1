{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">
  {if !$logged}
    <form method="POST" action="validate_user">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Log in</button>
    </form>
  {else}
      <p> ya se encuentra logueado </p>
      <a href="logout" class="btn btn-primary mt-3">Log out</a>
  {/if}
</div>

{include 'footer.tpl'}
