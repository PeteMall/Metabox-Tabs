<?php
/*
Plugin Name: Metabox Tabs Sample Plugin
*/

class JF_Metabox_Tabs {
	public function __construct() {
		add_action( 'add_meta_boxes',                  array( $this, 'add_meta_box' ) );
		add_action( 'admin_print_styles-post-new.php', array( $this, 'enqueue'      ) );
		add_action( 'admin_print_styles-post.php',     array( $this, 'enqueue'      ) );
	}

	public function add_meta_box() {
		add_meta_box( 'jf_sample_metabox', 'Metabox with Tabs', array( $this, 'sample_meta_box' ), 'post' );
	}

	public function sample_meta_box() {
		?>
		<div class="metabox-tabs-div">
			<ul class="metabox-tabs" id="metabox-tabs">
				<li class="active tab1"><a class="active" href="javascript:void(null);">Tab 1</a></li>
				<li class="tab2"><a href="javascript:void(null);">Tab 2</a></li>
				<li class="tab3"><a href="javascript:void(null);">Tab 3</a></li>
			</ul>
			<div class="tab1">
				<h4 class="heading">Tab 1</h4>
				<table class="form-table">
					<tr>
						<th scope="row"><label for="jf_input1">Input 1</label></th>
						<td><input type="text" id= "jf_input1" name="jf_input1"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="jf_input2">Input 2</label></th>
						<td><input type="text" id= "jf_input2" name="jf_input2"/></td>
					</tr>
				</table>
			</div>
			<div class="tab2">
				<h4 class="heading">Tab 2</h4>
				<table class="form-table">
					<tr>
						<th scope="row"><label for="jf_input3">Input 3</label></th>
						<td><input type="text" id= "jf_input3" name="jf_input3"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="jf_input4">Input 4</label></th>
						<td><input type="text" id= "jf_input4" name="jf_input4"/></td>
					</tr>
				</table>
			</div>
			<div class="tab3">
				<h4 class="heading">Tab 3</h4>
				<table class="form-table">
					<tr>
						<th scope="row"><label for="jf_input5">Input 5</label></th>
						<td><input type="text" id= "jf_input5" name="jf_input5"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="jf_input6">Input 6</label></th>
						<td><input type="text" id= "jf_input6" name="jf_input6"/></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
	}

	public function enqueue() {
		$color = get_user_meta( get_current_user_id(), 'admin_color', true );

		wp_enqueue_style(  'jf-metabox-tabs', plugins_url( 'metabox-tabs.css',   __FILE__ )                    );
		wp_enqueue_style(  "jf-$color",       plugins_url( "metabox-$color.css", __FILE__ )                    );
		wp_enqueue_script( 'jf-metabox-tabs', plugins_url( 'metabox-tabs.js',    __FILE__ ), array( 'jquery' ) );
	}
}
new JF_Metabox_Tabs;
?>