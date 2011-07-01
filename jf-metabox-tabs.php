<?php
/*
Plugin Name: Metabox Tabs Sample Plugin
*/

class JF_Metabox_Tabs {
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
	}

	public function add_meta_box() {
		add_meta_box( 'jf_sample_metabox', 'Metabox with Tabs', array( $this, 'sample_meta_box' ), 'post' );
		wp_enqueue_style(  'jf-metabox-tabs', plugins_url( 'metabox-tabs.css', __FILE__ ) );
		wp_enqueue_script( 'jf-metabox-tabs', plugins_url( 'metabox-tabs.js', __FILE__ ), array( 'jquery' ) );
	}

	public function sample_meta_box() {
		?>
		<div id="test">
			<ul class="wp-tab-bar">
				<li><a href="#tabs-1">Tab 1</a></li>
				<li><a href="#tabs-2">Tab 2</a></li>
				<li><a href="#tabs-3">Tab 3</a></li>
			</ul>
			<div class="wp-tab-panel" id="tabs-1">
				<h4 class="wp-panel-heading">Tab 1</h4>
				<p>Tab 1 content</p>
			</div>
			<div class="wp-tab-panel" id="tabs-2">
				<h4 class="wp-panel-heading">Tab 2</h4>
				<p>Tab 2 content</p>
			</div>
			<div class="wp-tab-panel" id="tabs-3">
				<h4 class="wp-panel-heading">Tab 3</h4>
				<p>Tab 3 content</p>
			</div>
		</div>
		<?php
	}
}
new JF_Metabox_Tabs;
?>