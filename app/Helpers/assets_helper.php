<?php

if (!function_exists('assets')){
	function assets($nom){
	    if (TRUE){
			return '/assets/'.$nom;
		} 
    }
}

if ( ! function_exists('css_url')) {
    function css_url($nom) {
        return assets('css/' . $nom . '.css');
    }
}

if ( ! function_exists('scss_url')) {
    function scss_url($nom) {
        return assets('scss/' . $nom . '.scss');
    }
}

if ( ! function_exists('img_url')) {
    function img_url($nom) {
        return assets( 'img/' . $nom);
        
    }
}

if ( ! function_exists('js_url')) {
    function js_url($nom) {
        return assets('js/' . $nom . '.js');
    }
}

if ( ! function_exists('lib_url')) {
    function lib_url($nom) {
        return assets('lib/' . $nom);
    }
}

if ( ! function_exists('vendor_url')) {
    function vendor_url($nom) {
        return assets('vendor/' . $nom);
    }
}

if ( ! function_exists('breadcrumb')) {
	function breadcrumb($data)
	{
		?>
		<ul class="breadcrumb">

			<?php

			$i = 0;
			foreach ($data as $label => $url) {
				if ($i < count($data) - 1) {
					?>
					<li class="breadcrumb-item"><a href="<?php echo $url ?>"><?php echo $label ?></a></li>
					<?php
				} else {
					?>
					<li class="breadcrumb-item active"><?php echo $label ?></li>
					<?php
				}
				$i++;
			}
			?>
		</ul>
		<?php
	}
}
