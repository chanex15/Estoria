<?php
/**
 * Footer template.
 *
 * @package Estoria
 */
?>
</main>

<footer class="site-footer">
	<div class="container-x footer-grid">
		<div>
			<div class="footer-brand">
				<?php estoria_logo( 'white' ); ?>
			</div>
			<p class="footer-desc"><?php esc_html_e( 'Income-producing apartments with professional hotel management. You own the asset — the operator does the work and your payout is fixed in the contract.', 'estoria' ); ?></p>
			<div class="social-row">
				<a href="#" aria-label="Facebook"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13 3h-2.2C8.9 3 7.6 4.3 7.6 6.2V8H6v2.5h1.6V17H10v-6.5h1.9l.3-2.5H10V6.4c0-.6.2-1 .9-1H13V3Z"/></svg></a>
				<a href="#" aria-label="LinkedIn"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M5.6 7.2h2.6V17H5.6V7.2ZM6.9 3.1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10.1 7.2h2.5v1.3h.1c.4-.7 1.3-1.4 2.6-1.4 2.8 0 3.3 1.8 3.3 4.2V17h-2.6v-4.2c0-1 0-2.3-1.4-2.3s-1.6 1.1-1.6 2.2V17H10V7.2Z"/></svg></a>
				<a href="#" aria-label="Instagram"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 7.3a3.7 3.7 0 1 0 0 7.4 3.7 3.7 0 0 0 0-7.4Zm0 6.1a2.4 2.4 0 1 1 0-4.8 2.4 2.4 0 0 1 0 4.8Zm4.7-6.3a.87.87 0 1 1-1.7 0 .87.87 0 0 1 1.7 0ZM8 4.5h8A3.5 3.5 0 0 1 19.5 8v8a3.5 3.5 0 0 1-3.5 3.5H8A3.5 3.5 0 0 1 4.5 16V8A3.5 3.5 0 0 1 8 4.5Zm0 1.4A2.1 2.1 0 0 0 5.9 8v8A2.1 2.1 0 0 0 8 18.1h8a2.1 2.1 0 0 0 2.1-2.1V8A2.1 2.1 0 0 0 16 5.9H8Z"/></svg></a>
				<a href="#" aria-label="X"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13.5 10.6 18.3 5h-1.4l-4 4.7L9.6 5H5.5l5 7.3L5.5 19h1.4l4.4-5.1 3.5 5.1h4.1l-5.4-8.4Zm-1.6 1.8-.5-.7-4-5.7h2.1l3.3 4.7.5.7 4.2 6h-2.1l-3.5-5Z"/></svg></a>
			</div>
		</div>
		<nav aria-label="<?php esc_attr_e( 'Explore', 'estoria' ); ?>">
			<h3 class="footer-heading"><?php esc_html_e( 'Explore', 'estoria' ); ?></h3>
			<ul class="footer-links">
				<li><a href="<?php echo esc_url( home_url( '/#apartments' ) ); ?>"><?php esc_html_e( 'Apartments', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#prices' ) ); ?>"><?php esc_html_e( 'Prices & yields', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About us', 'estoria' ); ?></a></li>
			</ul>
		</nav>
		<nav aria-label="<?php esc_attr_e( 'Investors', 'estoria' ); ?>">
			<h3 class="footer-heading"><?php esc_html_e( 'Investors', 'estoria' ); ?></h3>
			<ul class="footer-links">
				<li><a href="<?php echo esc_url( home_url( '/#how' ) ); ?>"><?php esc_html_e( 'How it works', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'Questions & answers', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Book a viewing', 'estoria' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Sell your unit', 'estoria' ); ?></a></li>
			</ul>
		</nav>
		<div>
			<h3 class="footer-heading"><?php esc_html_e( 'Sales office', 'estoria' ); ?></h3>
			<ul class="footer-links">
				<li><?php echo esc_html( estoria_address() ); ?></li>
				<li><a class="footer-phone" href="<?php echo esc_url( estoria_phone_href() ); ?>"><?php echo esc_html( estoria_phone() ); ?></a></li>
				<li><a href="mailto:<?php echo esc_attr( estoria_email() ); ?>"><?php echo esc_html( estoria_email() ); ?></a></li>
				<li class="muted"><?php echo esc_html( estoria_hours() ); ?></li>
			</ul>
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
			<button type="button" class="btn-primary btn-block" data-open-callback><?php esc_html_e( 'Request a call', 'estoria' ); ?></button>
		</div>
	</div>
	<div class="footer-legal-line">
		<div class="container-x">
			<?php esc_html_e( 'Estoria Investments LLC · Delaware registered developer #DE-2014-08812 · Licensed hotel operator · Member Delaware REIA & NAR. Figures shown are contracted net yields and are illustrative of the current release; property tax is paid separately. This is not an offer of securities.', 'estoria' ); ?>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container-x footer-bottom-inner">
			<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'estoria' ); ?></p>
			<p class="footer-legal"><a href="#"><?php esc_html_e( 'Privacy', 'estoria' ); ?></a><a href="#"><?php esc_html_e( 'Terms', 'estoria' ); ?></a><a href="#"><?php esc_html_e( 'Disclosures', 'estoria' ); ?></a></p>
		</div>
	</div>
</footer>

<div class="modal-root" id="callbackModal" aria-hidden="true">
	<div class="modal-scrim" data-close-modal></div>
	<div class="modal" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Request a callback', 'estoria' ); ?>">
		<button type="button" class="modal-close" data-close-modal aria-label="<?php esc_attr_e( 'Close', 'estoria' ); ?>">✕</button>
		<div class="modal-body" id="modalFormWrap">
			<p class="eyebrow"><?php esc_html_e( 'Callback', 'estoria' ); ?></p>
			<h3><?php esc_html_e( 'Get the yield breakdown for your budget', 'estoria' ); ?></h3>
			<p class="modal-sub"><?php esc_html_e( 'Leave your number — we will call back with available units, prices and the exact monthly payout.', 'estoria' ); ?></p>
			<form id="callbackForm" novalidate>
				<input type="text" name="cb-name" id="cbName" class="input-line" placeholder="<?php esc_attr_e( 'Your name (optional)', 'estoria' ); ?>" autocomplete="name">
				<input type="tel" name="cb-phone" id="cbPhone" class="input-line" placeholder="<?php esc_attr_e( 'Your phone number', 'estoria' ); ?>" autocomplete="tel" required>
				<p class="form-error" id="cbError" hidden><?php esc_html_e( 'Please enter a valid phone number.', 'estoria' ); ?></p>
				<button type="submit" class="btn-primary btn-block" id="cbSubmit"><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
				<p class="form-note"><?php esc_html_e( 'No spam. One advisor, one call, no obligation.', 'estoria' ); ?></p>
			</form>
		</div>
		<div class="modal-body modal-success" id="modalSuccessWrap" hidden>
			<div class="success-dot">✓</div>
			<h3><?php esc_html_e( 'We will call you back', 'estoria' ); ?></h3>
			<p class="modal-sub"><?php echo esc_html__( 'An investment advisor will contact you within 30 minutes during working hours.', 'estoria' ) . ' (' . esc_html( estoria_hours() ) . ')'; ?></p>
			<button type="button" class="btn-primary btn-block" data-close-modal><?php esc_html_e( 'Done', 'estoria' ); ?></button>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
