<?php
/**
 * Feature Name:    Helpers for Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Helper Function to print the Icons in Theme-Templates
 *
 * @since   0.1
 * @param   String $icon
 *
 * @return  String
 */
function cora_get_icon( $icon ){
	// old one
	// $markup = '<i class="icon icon%1%s" aria-hidden="true"></i>';

	$icon       = esc_attr( $icon );
	$output = '<svg class="icon icon-' . $icon . '">';
	$output .= '<use xlink:href="#icon-'. $icon . '"></use>';
	$output .= '</svg>';

	return apply_filters( 'cora_get_icon', $output, $icon );
}


/**
 * Adding our svg-icons to wp_head
 *
 * @wp-hook wp_head
 * @return  Void
 */
function cora_the_svg_icons() {
	?>
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="675" height="80" viewBox="0 0 675 80">
		<symbol id="icon-berufliche-projekte" viewBox="0 0 32 32">
			<path class="path1" d="M14.592 16.768v3.2h-14.592q0.256-7.232 0.32-9.344 0.128-3.456 3.2-3.456h5.12q0.512-0.832 1.184-2.144t0.736-1.44q0.448-0.832 0.736-1.024t1.184-0.192h7.104q0.832 0 1.152 0.224t0.704 0.992q0.576 1.024 1.92 3.584h5.12q3.072 0 3.2 3.456l0.32 9.344h-14.528v-3.2h-2.88zM12.224 5.44l-0.896 1.728h9.344l-0.896-1.728q-0.448-0.832-1.344-0.832h-4.864q-0.896 0-1.344 0.832zM17.472 24.768v-3.2h13.76q-0.192 2.816-0.32 5.312-0.192 2.688-2.88 2.688h-24q-2.88 0-2.88-2.688l-0.32-5.312h13.76v3.2h2.88z"></path>
		</symbol>
		<symbol id="icon-ueber-mich" viewBox="0 0 32 32">
			<path class="path1" d="M0.032 10.176q0.224-3.552 2.4-5.856 3.008-2.56 6.784-2.24t6.080 3.136q1.216-1.568 2.944-2.528 3.616-1.376 6.944-0.096t4.8 4.48q0.96 3.392 0.32 6.368t-2.496 5.568q-2.176 3.008-5.568 5.888-1.696 1.568-3.968 3.296t-2.976 1.824q-0.416-0.064-0.896-0.384t-1.12-0.8-0.768-0.64q-8.448-6.368-11.136-11.424-1.568-3.072-1.344-6.592z"></path>
		</symbol>
		<symbol id="icon-private-projekte" viewBox="0 0 32 32">
			<path class="path1" d="M16.672 0.992q10.304 8.928 16 13.728 0.64 0.512 0.64 1.28 0 0.672-0.48 1.184t-1.152 0.48h-3.36v11.648q0 0.672-0.48 1.184t-1.152 0.512h-4.992q-0.704 0-1.184-0.512t-0.512-1.184v-6.656h-6.688v6.656q0 0.672-0.48 1.184t-1.152 0.512h-4.992q-0.672 0-1.184-0.512t-0.512-1.184v-11.648h-3.296q-0.704 0-1.184-0.48t-0.512-1.184 0.608-1.28z"></path>
		</symbol>
		<symbol id="icon-nature" viewBox="0 0 32 32">
			<path class="path1" d="M7.552 6.528q5.824-3.392 16.192-2.112 5.376 0.704 6.272 1.6 0.128 0.192-0.064 0.32-2.432 1.28-4.16 3.488t-2.496 4.224-2.080 4.224-2.976 3.36q-4.416 3.072-12.224 0.128-2.112 2.432-3.648 5.632-0.384 0.768-1.504 0.224t-0.8-1.248q1.408-3.2 4.128-6.176t5.632-4.896 5.632-3.392 4.512-2.176l1.728-0.64q-0.448 0-1.312 0.032t-3.328 0.448-4.736 1.216-5.184 2.688-5.152 4.512q-0.704-7.744 5.568-11.456z"></path>
		</symbol>
		<symbol id="icon-camera" viewBox="0 0 32 32">
			<path class="path1" d="M16 12.8q2.048 0 3.424 1.408t1.376 3.392-1.408 3.392-3.392 1.408-3.392-1.408-1.408-3.392 1.408-3.392 3.392-1.408zM28.8 8q1.344 0 2.272 0.928t0.928 2.272v14.4q0 1.28-0.928 2.24t-2.272 0.96h-25.6q-1.28 0-2.24-0.96t-0.96-2.24v-14.4q0-1.344 0.96-2.272t2.24-0.928h3.84q0.896 0 1.28-0.96l0.96-2.944q0.32-0.896 1.28-0.896h10.88q0.96 0 1.28 0.896l0.96 2.944q0.384 0.96 1.28 0.96h3.84zM16 25.6q3.328 0 5.664-2.336t2.336-5.664-2.336-5.664-5.664-2.336-5.664 2.336-2.336 5.664 2.336 5.664 5.664 2.336zM27.712 13.44q0.448 0 0.768-0.352t0.32-0.8-0.32-0.768-0.768-0.32q-1.152 0-1.152 1.088 0 0.512 0.352 0.832t0.8 0.32z"></path>
		</symbol>
		<symbol id="icon-bicycle" viewBox="0 0 32 32">
			<path class="path1" d="M20 4.8l-0.8 1.6 3.2 1.184v3.616h-11.2v-1.6h1.6v-0.8c0-0.384-0.416-0.8-0.8-0.8h-4c-0.8 0-0.8 0.8-0.8 0.8v0.8h2.4v1.6l-1.696 3.392c-0.48-0.096-0.992-0.192-1.504-0.192-3.52 0-6.4 2.848-6.4 6.4s2.88 6.4 6.4 6.4 6.4-2.88 6.4-6.4c0 0 1.6 0 2.4 0s0.8-0.8 0.8-0.8c0.16-2.368 1.376-4.192 2.944-5.408 1.088-0.832 2.272-1.344 3.456-1.6v1.664c-2.752 0.704-4.8 3.168-4.8 6.144 0 3.52 2.88 6.4 6.4 6.4s6.4-2.88 6.4-6.4c0-2.912-1.984-5.344-4.64-6.112l-1.76-3.488v-4c0-0.48-0.384-0.992-0.8-1.152zM11.2 12.8h7.2c-1.6 0.8-4 4.8-4 6.4h-1.856c-0.384-1.568-1.312-2.88-2.656-3.744zM6.4 16.8c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zM24 16.8c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4z"></path>
		</symbol>
		<symbol id="icon-palette" viewBox="0 0 32 32">
			<path class="path1" d="M27.424 7.296q2.304 1.536 3.232 3.52t0.64 3.328-1.12 1.536q-0.512 0.128-1.728-0.32t-2.56-0.32-2.56 1.472q-0.96 1.472-0.672 2.4t1.088 2.080 0.736 1.6q-0.064 0.832-1.152 2.016t-4.032 2.368-6.912 1.184q-5.952 0-9.312-3.232t-3.040-7.84q0.256-3.776 3.328-7.52t6.912-4.832q9.28-2.688 17.152 2.56zM17.248 22.208q0.96 0 1.664-0.704t0.704-1.728-0.704-1.696-1.664-0.672q-1.024 0-1.728 0.672t-0.704 1.696 0.704 1.728 1.728 0.704z"></path>
		</symbol>
		<symbol id="icon-book" viewBox="0 0 32 32">
			<path class="path1" d="M0 22.496v-17.376q0-0.992 0.448-1.696 0.928-1.44 3.264-2.464t3.712-0.288l15.072 7.744v18.88l-2.752 1.504v-18.88l-13.44-7.168q-0.928-0.32-2.080 0.288t-1.856 1.504l15.008 8.64v16.928l-2.752 1.504z"></path>
		</symbol>
		<symbol id="icon-android" viewBox="0 0 32 32">
			<path class="path1" d="M0 21.408v-7.68q0-0.736 0.544-1.28t1.312-0.544q0.736 0 1.28 0.544t0.512 1.28v7.68q0 0.768-0.512 1.312t-1.28 0.544-1.312-0.544-0.544-1.312zM4.32 11.616q0-2.112 1.12-3.872t3.072-2.72l-1.248-2.336q-0.128-0.256 0.064-0.352 0.256-0.128 0.384 0.096l1.28 2.368q1.696-0.768 3.584-0.768t3.584 0.768l1.28-2.368q0.128-0.224 0.352-0.096 0.224 0.096 0.096 0.352l-1.248 2.336q1.888 0.992 3.040 2.72t1.152 3.872h-16.512zM4.384 24.128v-11.872h16.384v11.872q0 0.832-0.576 1.408t-1.376 0.576h-1.344v4.064q0 0.768-0.512 1.28t-1.312 0.544-1.312-0.544-0.544-1.28v-4.064h-2.464v4.064q0 0.768-0.512 1.28t-1.312 0.544q-0.768 0-1.28-0.544t-0.544-1.28l-0.032-4.064h-1.312q-0.832 0-1.376-0.576t-0.576-1.408zM8.128 7.936q0 0.288 0.192 0.48t0.48 0.224 0.48-0.224 0.224-0.48-0.224-0.512-0.48-0.192-0.48 0.192-0.192 0.512zM15.648 7.936q0 0.288 0.192 0.48t0.512 0.224 0.48-0.224 0.192-0.48-0.192-0.512-0.48-0.192-0.512 0.192-0.192 0.512zM21.472 21.408v-7.68q0-0.768 0.544-1.28t1.28-0.544q0.768 0 1.312 0.544t0.544 1.28v7.68q0 0.768-0.544 1.312t-1.312 0.544q-0.736 0-1.28-0.544t-0.544-1.312z"></path>
		</symbol>
		<symbol id="icon-play" viewBox="0 0 35 32">
			<path class="path1" d="M0 18.272q0-3.776 2.688-6.464t6.464-2.656h16q3.776 0 6.464 2.656t2.656 6.464-2.656 6.464-6.464 2.688q-3.424 0-6.048-2.272h-3.936q-2.592 2.272-6.016 2.272-3.808 0-6.464-2.688t-2.688-6.464zM3.424 19.424q0 0.256 0.16 0.416t0.416 0.16h3.424v3.424q0 0.256 0.16 0.416t0.416 0.16h2.272q0.256 0 0.416-0.16t0.16-0.416v-3.424h3.424q0.256 0 0.416-0.16t0.16-0.416v-2.272q0-0.256-0.16-0.416t-0.416-0.16h-3.424v-3.424q0-0.256-0.16-0.416t-0.416-0.16h-2.272q-0.256 0-0.416 0.16t-0.16 0.416v3.424h-3.424q-0.256 0-0.416 0.16t-0.16 0.416v2.272zM20.576 20.576q0 0.928 0.672 1.6t1.6 0.672 1.632-0.672 0.672-1.6-0.672-1.632-1.632-0.672-1.6 0.672-0.672 1.632zM25.152 16q0 0.96 0.672 1.6t1.6 0.672 1.632-0.672 0.672-1.6-0.672-1.632-1.632-0.64-1.6 0.64-0.672 1.632z"></path>
		</symbol>
		<symbol id="icon-window" viewBox="0 0 32 32">
			<path class="path1" d="M28.8 3.2q1.344 0 2.272 0.96t0.928 2.24v19.2q0 1.344-0.928 2.272t-2.272 0.928h-25.6q-1.28 0-2.24-0.928t-0.96-2.272v-19.2q0-1.28 0.96-2.24t2.24-0.96h25.6zM7.36 6.208q-0.512 0-0.864 0.352t-0.352 0.8q0 0.512 0.352 0.864t0.864 0.352q1.216 0 1.216-1.216 0-0.512-0.352-0.832t-0.864-0.32zM2.944 7.36q0 0.512 0.352 0.864t0.864 0.352q1.216 0 1.216-1.216 0-0.512-0.352-0.832t-0.864-0.32-0.864 0.352-0.352 0.8zM28.864 25.6v-14.72h-25.664v14.72h25.664zM28.864 8.32v-1.92h-19.264v1.92h19.264z"></path>
		</symbol>
		<symbol id="icon-gplus-squared" viewBox="0 0 32 32">
			<path class="path1" d="M0 24.576v-17.152q0-2.112 1.504-3.616t3.648-1.536h17.12q2.144 0 3.648 1.536t1.504 3.616v17.152q0 2.112-1.504 3.616t-3.648 1.536h-17.12q-2.144 0-3.648-1.536t-1.504-3.616zM4.928 21.92q0 0.768 0.32 1.376t0.864 0.992 1.248 0.672 1.376 0.384 1.376 0.096q1.056 0 2.144-0.256t2.016-0.832 1.536-1.472 0.608-2.080q0-0.896-0.352-1.6t-0.896-1.216-1.024-0.832-0.864-0.8-0.384-0.768 0.288-0.768 0.672-0.704 0.8-0.768 0.672-1.056 0.256-1.472q0-1.056-0.384-1.76t-1.312-1.632h1.472l1.6-1.152h-4.736q-1.536 0-2.88 0.576t-2.272 1.76-0.928 2.72q0 1.664 1.152 2.784t2.816 1.088q0.416 0 0.768-0.064-0.224 0.512-0.224 0.96 0 0.8 0.704 1.696-3.104 0.192-4.576 1.12-0.832 0.512-1.344 1.312t-0.512 1.696zM7.040 21.376q0-0.8 0.448-1.408t1.184-0.928 1.472-0.448 1.504-0.128q0.352 0 0.544 0.032 0.032 0.032 0.416 0.288t0.48 0.352 0.384 0.32 0.448 0.384 0.352 0.416 0.288 0.448 0.16 0.48 0.096 0.576q0 1.344-1.056 1.984t-2.496 0.672q-0.736 0-1.44-0.192t-1.344-0.48-1.024-0.96-0.416-1.408zM8.256 10.112q0-1.088 0.576-1.856t1.632-0.768q0.96 0 1.664 0.8t1.056 1.824 0.288 1.92q0 1.056-0.576 1.76t-1.632 0.704q-0.96 0-1.664-0.768t-1.024-1.696-0.32-1.92zM17.152 15.424h2.272v2.848h1.152v-2.848h2.272v-1.152h-2.272v-2.272h-1.152v2.272h-2.272v1.152z"></path>
		</symbol>
		<symbol id="icon-tag" viewBox="0 0 32 32">
			<path class="path1" d="M0 11.744v-9.184q0.064-0.992 0.768-1.728t1.664-0.704h9.184q2.816 0.192 4.256 1.76l13.632 15.104q0.608 0.896 0.608 1.856t-0.608 1.664l-10.688 10.688q-0.8 0.672-1.824 0.672t-1.664-0.672l-13.568-15.2q-1.76-2.048-1.76-4.256zM4 6.496q0.064 0.992 0.736 1.664t1.632 0.64q1.024 0 1.664-0.704t0.672-1.6q0-1.056-0.736-1.728t-1.6-0.64q-1.056 0.064-1.696 0.736t-0.672 1.632z"></path>
		</symbol>
		<symbol id="icon-lt" viewBox="0 0 32 32">
			<path class="path1" d="M14.464 27.84q0.832 0.832 0 1.536-0.832 0.832-1.536 0l-12.544-12.608q-0.768-0.768 0-1.6l12.544-12.608q0.704-0.832 1.536 0 0.832 0.704 0 1.536l-11.456 11.904z"></path>
		</symbol>
		<symbol id="icon-gt" viewBox="0 0 32 32">
			<path class="path1" d="M0.416 27.84l11.456-11.84-11.456-11.904q-0.832-0.832 0-1.536 0.832-0.832 1.536 0l12.544 12.608q0.768 0.832 0 1.6l-12.544 12.608q-0.704 0.832-1.536 0-0.832-0.704 0-1.536z"></path>
		</symbol>
		<symbol id="icon-right-open-mini" viewBox="0 0 32 32">
			<path class="path1" d="M0.416 21.44l5.056-5.44-5.056-5.504q-0.832-0.832 0-1.536 0.832-0.832 1.536 0l6.144 6.208q0.768 0.832 0 1.6l-6.144 6.208q-0.704 0.832-1.536 0-0.832-0.704 0-1.536z"></path>
		</symbol>
		<g fill="#000000">
			<use xlink:href="#icon-berufliche-projekte" transform="translate(0 0)"></use>
			<use xlink:href="#icon-ueber-mich" transform="translate(48 0)"></use>
			<use xlink:href="#icon-private-projekte" transform="translate(95 0)"></use>
			<use xlink:href="#icon-nature" transform="translate(144 0)"></use>
			<use xlink:href="#icon-camera" transform="translate(190 0)"></use>
			<use xlink:href="#icon-bicycle" transform="translate(238 0)"></use>
			<use xlink:href="#icon-palette" transform="translate(284 0)"></use>
			<use xlink:href="#icon-book" transform="translate(331 0)"></use>
			<use xlink:href="#icon-android" transform="translate(370 0)"></use>
			<use xlink:href="#icon-play" transform="translate(411 0)"></use>
			<use xlink:href="#icon-window" transform="translate(461 0)"></use>
			<use xlink:href="#icon-gplus-squared" transform="translate(509 0)"></use>
			<use xlink:href="#icon-tag" transform="translate(552 0)"></use>
			<use xlink:href="#icon-lt" transform="translate(629 0)"></use>
			<use xlink:href="#icon-gt" transform="translate(660 0)"></use>
		</g>
	</svg>
	<?php
}