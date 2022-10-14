<form method="get" action="<?php echo home_url('/') ?>" class="form">
    <div class="form-group group-with-button">
        <input type="text" class="form-control" placeholder="eg.latte
        mocca capushino" name="s" value="<?php echo get_search_query(); ?>" />
        <button type="submit" class="btn btn-primary">Search</button>
     </div>
</form>