<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'roots' ); ?>" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s">
    </label>
        
</form>

